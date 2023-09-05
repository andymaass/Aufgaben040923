<?php

// Aufgabe 7: Erstelle eine Klasse mit statischen Methoden und Eigenschaften und verwende sie, um auf Klassenebene Informationen zu speichern und abzurufen.

class KlassenInformationen {
    // Statische Eigenschaften
    private static $anzahlInstanzen = 0;
    private static $gespeicherteInformationen = [];

    // Statische Methode zum Hinzufügen von Informationen
    public static function addInformation($info) {
        self::$gespeicherteInformationen[] = $info;
        self::$anzahlInstanzen++;
    }

    // Statische Methode zum Abrufen der gespeicherten Informationen
    public static function getInformationen() {
        return self::$gespeicherteInformationen;
    }

    // Statische Methode zum Abrufen der Anzahl der erstellten Instanzen
    public static function getAnzahlInstanzen() {
        return self::$anzahlInstanzen;
    }
}

// Informationen hinzufügen
KlassenInformationen::addInformation("Information 1");
KlassenInformationen::addInformation("Information 2");
KlassenInformationen::addInformation("Information 3");

// Informationen abrufen
$gespeicherteInfos = KlassenInformationen::getInformationen();
echo "Gespeicherte Informationen: \n";
foreach ($gespeicherteInfos as $info) {
    echo $info . "\n";
}

// Anzahl der erstellten Instanzen abrufen
$anzahlInstanzen = KlassenInformationen::getAnzahlInstanzen();
echo "Anzahl der erstellten Instanzen: " . $anzahlInstanzen . "\n";

?>
