#!/usr/bin/php
<?php

// Textfarben
$red = "\033[0;31m";
$green = "\033[0;32m";
$yellow = "\033[0;33m";
$blue = "\033[0;34m";
$magenta = "\033[0;35m";
$cyan = "\033[0;36m";
$white = "\033[0;37m";

// Textformatierungen
$bold = "\033[1m";
$underline = "\033[4m";
$blink = "\033[5m";

// Hintergrundfarben
$bg_black = "\033[40m";
$bg_red = "\033[41m";
$bg_green = "\033[42m";
$bg_yellow = "\033[43m";
$bg_blue = "\033[44m";
$bg_magenta = "\033[45m";
$bg_cyan = "\033[46m";
$bg_white = "\033[47m";

// Zurücksetzen auf die Standardfarbe
$reset = "\033[0m";


// Funktion zur Anzeige des Hauptmenüs
function showMainMenu() {
    global $reset, $red, $cyan, $bold, $yellow;
    echo $red . "**************************". $reset."\n";
    echo $red . "**  ".$cyan."|[ _BRIGHT-CLI_ ]|".$red."  **". $reset."\n";
    echo $red . "**************************". $reset."\n";
    echo $bold . $yellow . "-------------------". $reset."\n";
    echo $bold . $yellow . "|[SETTINGS::CACHE]|". $reset."\n";
    echo $bold . $yellow . "-------------------". $reset."\n";
    echo "[1] clear::object_cache\n";
    echo "[2] clear::template_cache\n";
    echo $bold . $yellow . "--------------------". $reset."\n";
    echo $bold . $yellow . "|[SETTINGS::PLUGIN]|". $reset."\n";
    echo $bold . $yellow . "--------------------". $reset."\n";
    echo "[3] create::PLUGIN_SKELETON\n";
    echo "[4] install::PLUGIN\n";
    echo "[5] update::PLUGIN\n";
    echo "[6] delete::PLUGIN\n";
    echo $bold . $yellow . "----------------------". $reset."\n";
    echo $bold . $yellow . "|[SETTINGS::TEMPLATE]|". $reset."\n";
    echo $bold . $yellow . "-----------------------". $reset."\n";
    echo "[7] create::TEMPLATE_SKELETON\n";
    echo "[8] install::TEMPLATE\n";
    echo "[9] update::TEMPLATE\n";
    echo "[10] delete::TEMPLATE\n";
}

// Funktion zur Auswahl und Verarbeitung der Optionen
function processOption($option) {
    global $bold, $yellow, $reset;
    switch ($option) {
        case 1:
            echo $bold . $yellow . "-------------------". $reset."\n";
            echo $bold . $yellow . "Du hast 'clear::object_cache' gewählt.". $reset."\n";
            echo $bold . $yellow . "-------------------". $reset."\n";
            break;
        case 2:
            echo "Du hast Option B ausgewählt.\n";
            // Führe hier die entsprechende Aktion für Option B aus
            break;
        case 3:
            echo "Du hast Option C ausgewählt.\n";
            // Führe hier die entsprechende Aktion für Option C aus
            break;
        case 0:
            echo "Beenden.\n";
            exit;
        default:
            echo "Ungültige Option. Bitte erneut auswählen.\n";
    }
}

// Hauptprogramm
while (true) {
    showMainMenu();
    echo "\nBitte wähle eine Option (0-3): ";
    $option = trim(fgets(STDIN));

    // Überprüfe, ob die Eingabe eine ganze Zahl zwischen 0 und 3 ist
    if (ctype_digit($option) && $option >= 0 && $option <= 3) {
        processOption((int)$option);
    } else {
        echo "Ungültige Eingabe. Bitte eine gültige Option wählen.\n";
    }
}

