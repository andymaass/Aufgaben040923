<?php

//Aufgabe 9: Experimentiere mit magischen Methoden wie `_toString`, `construct`, `get`, und `_set` und verstehe, wie sie das Verhalten von Klassen beeinflussen.

class Auto {
    private $marke;
    private $modell;

    public function __construct($marke, $modell) {
        $this->marke = $marke;
        $this->modell = $modell;
    }

    public function __toString() {
        return $this->marke . " " . $this->modell;
    }

    public function __get($eigenschaft) {
        if ($eigenschaft == 'marke') {
            return $this->marke;
        } elseif ($eigenschaft == 'modell') {
            return $this->modell;
        } else {
            return "Eigenschaft nicht gefunden.";
        }
    }

    public function __set($eigenschaft, $wert) {
        if ($eigenschaft == 'marke') {
            $this->marke = $wert;
        } elseif ($eigenschaft == 'modell') {
            $this->modell = $wert;
        } else {
            echo "Eigenschaft nicht gefunden.";
        }
    }
}

// Objekt erstellen und Eigenschaften setzen
$meinAuto = new Auto("Toyota", "Camry");

// __toString-Methode aufrufen
echo "Mein Auto: " . $meinAuto . "\n";

// __get-Methode aufrufen
echo "Marke: " . $meinAuto->marke . "\n";
echo "Modell: " . $meinAuto->modell . "\n";

// __set-Methode aufrufen
$meinAuto->marke = "Honda";
$meinAuto->modell = "Accord";

// Aktualisierte Informationen anzeigen
echo "Aktualisiertes Auto: " . $meinAuto . "\n";

?>
