<?php

class XmlReader
{
    public function readFromXml(string $file, int $returnType)
    {
        $xmlString = file_get_contents($file);

        if ($xmlString === false) {
            return null; // Fehler beim Lesen der Datei
        }

        $xmlData = simplexml_load_string($xmlString);

        if ($xmlData === false) {
            return null; // Fehler beim Parsen der XML
        }

        if ($returnType === 0) {
            return json_decode(json_encode($xmlData), true); // Als Array zurückgeben
        } elseif ($returnType === 1) {
            return $xmlData; // Als SimpleXMLElement-Objekt zurückgeben
        } else {
            return null; // Ungültiger Rückgabetyp
        }
    }
}
