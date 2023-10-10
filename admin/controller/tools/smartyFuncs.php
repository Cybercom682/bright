<?php

namespace tools;

use Parsedown;

class smartyFuncs {
    private $smarty;

    public function __construct($smarty) {
        $this->smarty = $smarty;
        $this->registerSmartyFunctions();
    }

    private function registerSmartyFunctions() {
        $this->smarty->registerPlugin('function', 'alert', array($this, 'smartyBootstrapAlert'))
            ->registerPlugin('block', 'card', array($this, 'smartyBootstrapCard'))
            ->registerPlugin('function', 'markdown', array($this, 'smartyMarkdownParser'));
    }

    public function smartyBootstrapAlert($params, $smarty) {
        $type = isset($params['type']) ? $params['type'] : 'info';
        $allowedTypes = ['success', 'info', 'warning', 'danger'];
        if (!in_array($type, $allowedTypes)) {
            $type = 'info'; // Standardwert auf 'info' setzen, wenn der Typ ungültig ist
        }

        $message = isset($params['message']) ? $params['message'] : '';

        $output = '<div class="alert alert-' . $type . '">' . $message . '</div>';

        return $output;
    }

    public function smartyBootstrapCard($params, $content, $smarty, &$repeat)
    {
        if ($repeat) {
            $type = isset($params['type']) ? $params['type'] : 'white';
            $allowedTypes = ['success', 'secondary', 'info', 'warning', 'danger', 'white'];
            if (!in_array($type, $allowedTypes)) {
                $type = 'info';
            }

            $title = isset($params['title']) ? $params['title'] : '';

            $output = '<div class="card text-bg-' . $type . ' h-100">';
            $output .= '<div class="card-body">';
            if (!empty($title)) {
                $output .= '<div class="card-title fw-bold">' . $title . '</div>';
                $output .= '<hr class="border border-dark border-2 mt-1 mb-2 opacity-75">';
            }

            return $output;
        } else {
            $output = $content . '</div></div>';

            return $output;
        }
    }

    function smartyMarkdownParser($params, $smarty){
        $file = $params['file'];

        if (file_exists($file) && is_readable($file)) {
            $fileContent = file_get_contents($file);

            $markdown = new Parsedown();
            $parsed = $markdown->parse($fileContent);

            return $parsed;
        } else {

            return "Fehler: Die Datei existiert nicht oder ist nicht lesbar. Pfad: " . $file;
        }
    }

}
