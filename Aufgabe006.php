<?php

//Aufgabe 6: Erstelle eine Klasse "Auto" und erstelle mehrere Auto-Objekte mit unterschiedlichen Eigenschaften (Marke, Modell, Baujahr).


class Auto {
    // Eigenschaften
    private $marke;
    private $modell;
    private $baujahr;

    // Konstruktor
    public function __construct($marke, $modell, $baujahr) {
        $this->marke = $marke;
        $this->modell = $modell;
        $this->baujahr = $baujahr;
    }

    // Methode zum Anzeigen von Autoinformationen
    public function getInfo() {
        echo "Marke: " . $this->marke . "\n";
        echo "Modell: " . $this->modell . "\n";
        echo "Baujahr: " . $this->baujahr . "\n";
        echo "<hr>";
    }
}

// Erstelle mehrere Auto-Objekte
$auto1 = new Auto("Volkswagen", "Golf", 2020);
$auto2 = new Auto("Toyota", "Camry", 2019);
$auto3 = new Auto("Ford", "Mustang", 2021);

// Zeige die Informationen der Autos an
$auto1->getInfo();
$auto2->getInfo();
$auto3->getInfo();

?>
