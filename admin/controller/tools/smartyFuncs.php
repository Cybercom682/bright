<?php

namespace tools;

class smartyFuncs {
    private $smarty;

    public function __construct($smarty) {
        $this->smarty = $smarty;
        $this->registerSmartyFunctions();
    }

    private function registerSmartyFunctions() {
        $this->smarty->registerPlugin('function', 'alert', array($this, 'smartyBootstrapAlert'))
            ->registerPlugin('block', 'card', array($this, 'smartyBootstrapCard'));
    }

    public function smartyBootstrapAlert($params, $smarty) {
        // Prüfen, ob der 'type' Parameter vorhanden ist und einen gültigen Wert hat
        $type = isset($params['type']) ? $params['type'] : 'info';
        $allowedTypes = ['success', 'info', 'warning', 'danger'];
        if (!in_array($type, $allowedTypes)) {
            $type = 'info'; // Standardwert auf 'info' setzen, wenn der Typ ungültig ist
        }

        // Nachricht aus den Parametern holen oder einen Standardwert verwenden
        $message = isset($params['message']) ? $params['message'] : '';

        // HTML für den Bootstrap-Alert generieren
        $output = '<div class="alert alert-' . $type . '">' . $message . '</div>';

        return $output;
    }

    public function smartyBootstrapCard($params, $content, $smarty, &$repeat) {
        // Wenn $repeat true ist, handelt es sich um den Öffnungsblock {card}
        if ($repeat) {
            // Prüfen, ob der 'type' Parameter vorhanden ist und einen gültigen Wert hat
            $type = isset($params['type']) ? $params['type'] : 'info';
            $allowedTypes = ['success', 'info', 'warning', 'danger'];
            if (!in_array($type, $allowedTypes)) {
                $type = 'info'; // Standardwert auf 'info' setzen, wenn der Typ ungültig ist
            }

            // Titel aus den Parametern holen oder einen Standardwert verwenden
            $title = isset($params['title']) ? $params['title'] : '';

            // HTML für den Card-Block generieren
            $output = '<div class="card card-' . $type . ' h-100">';
            $output .= '<div class="card-body">';
            if (!empty($title)) {
                $output .= '<div class="card-title fw-bold">' . $title . '</div>';
                $output .= '<hr class="mt-1 mb-2">';
            }

            return $output;
        } else {
            // Wenn $repeat false ist, handelt es sich um den schließenden Block {/card}
            // Hier schließen wir einfach den Card-Body und den Card-Block
            $output = $content . '</div></div>';

            return $output;
        }
    }



}
