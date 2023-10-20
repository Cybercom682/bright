<?php

namespace tools;

use Parsedown;

class smartyFuncs {
    private $smarty;
    private $database;

    public function __construct($smarty,$database) {
        $this->smarty = $smarty;
        $this->database = $database;
        $this->registerSmartyFunctions();
    }

    private function registerSmartyFunctions() {
        $this->smarty->registerPlugin('function', 'alert', array($this, 'smartyBootstrapAlert'))
            ->registerPlugin('block', 'card', array($this, 'smartyBootstrapCard'))
            ->registerPlugin('block', 'modal', array($this,'smartyBootstrapModal'))
            ->registerPlugin('function', 'markdown', array($this, 'smartyMarkdownParser'))
            ->registerPlugin('function', 'DataTable', array($this, 'getDatabaseTable'))
            ->registerPlugin('function', 'LogFormat', array($this, 'formatArrayLog'));
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

    public function smartyBootstrapModal($params, $content, $smarty, &$repeat){
        if ($repeat) {
            $btnTitle = $params['btnText'] ?? '';
            $output = '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">'. $btnTitle . '</button>';
            $output .= '
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">' . $btnTitle . '</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">';

            return $output;
        } else {
            $showButtons = $params['optBtns'] ?? false;
            $output = $content;
            $output .= '</div>';
            if($showButtons) {
                $output .= '
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>';
            }
            $output .='
                </div>
            </div>
        </div>';
            }
            return $output;
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
    function getDatabaseTable($params, $smarty) {
        $table = $params['table'];
        $assign = $params['assign'];

        $data = $this->getDatabase()->query('SELECT * FROM ' . $table);

        if (isset($assign) && !empty($assign)) {
            $smarty->assign($assign, $data);
        }
    }

    function formatArrayLog($params, $smarty){
        $string = $params['string'];
        //beispiel-String: [2023-10-11T23:07:21.995168+02:00] daily.INFO: Test [] []
        //beispiel-String: [2023-10-12T11:48:14.366804+02:00] backend.DEBUG: simple debug test [] []

        if(str_contains($string,'INFO')){
            return '<strong>INFO</strong>' . $string;
        }else if(str_contains($string,'DEBUG')){
            return '<strong>DEBUG</strong>' . $string;
        }
        return $string;
    }


    /**
     * @return mixed
     */
    private function getDatabase()
    {
        return $this->database;
    }
}
