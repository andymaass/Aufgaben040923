<?php


// Aufgabe 1: Erstelle eine Klasse namens "Person" mit Eigenschaften wie Name, Geburtsdatum und Adresse. Schreibe dann eine Methode, um diese Informationen auszugeben.


class Person {
    // Eigenschaften der Person
    private $name;
    private $geburtsdatum;
    private $adresse;

    // Konstruktor, um eine Person zu erstellen
    public function __construct($name, $geburtsdatum, $adresse) {
        $this->name = $name;
        $this->geburtsdatum = $geburtsdatum;
        $this->adresse = $adresse;
    }

    // Methode zum Ausgeben der Informationen
    public function getInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Geburtsdatum: " . $this->geburtsdatum . "\n";
        echo "Adresse: " . $this->adresse . "\n";
    }
}

// Eine Person erstellen
$person1 = new Person("Max Mustermann", "01.01.1990", "Musterstraße 123, Musterstadt");

// Informationen ausgeben
$person1->getInfo();



// Aufgabe 2: Erstelle eine Hauptklasse "Tier" mit grundlegenden Eigenschaften wie Name, Alter und Art. Erstelle dann Unterklassen wie "Hund", "Katze" und "Vogel", die von der Hauptklasse erben und zusätzliche Eigenschaften und Methoden haben.
// Aufgabe 3: Füge Konstruktoren und Destruktoren zu den Klassen hinzu, um zu verstehen, wie sie beim Instanziieren und Zerstören von Objekten arbeiten.

class Tier {
    // Grundlegende Eigenschaften
    protected $name;
    protected $alter;
    protected $art;

    // Konstruktor, um ein Tier zu erstellen
    public function __construct($name, $alter, $art) {
        $this->name = $name;
        $this->alter = $alter;
        $this->art = $art;
    }

    // Allgemeine Methode zum Ausgeben von Tierinformationen
    public function getInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Alter: " . $this->alter . " Jahre\n";
        echo "Art: " . $this->art . "\n";
    }
}

// Unterklassen

class Hund extends Tier {
    // Zusätzliche Eigenschaften für Hunde
    private $rasse;

    // Konstruktor für Hunde
    public function __construct($name, $alter, $art, $rasse) {
        parent::__construct($name, $alter, $art);
        $this->rasse = $rasse;
    }

    // Zusätzliche Methode für Hunde
    public function bell() {
        echo "Wuff! Wuff!\n";
    }
}

class Katze extends Tier {
    // Zusätzliche Eigenschaften für Katzen
    private $fellfarbe;

    // Konstruktor für Katzen
    public function __construct($name, $alter, $art, $fellfarbe) {
        parent::__construct($name, $alter, $art);
        $this->fellfarbe = $fellfarbe;
    }

    // Zusätzliche Methode für Katzen
    public function schnurren() {
        echo "Schnurr, schnurr!\n";
    }
}

class Vogel extends Tier {
    // Zusätzliche Eigenschaften für Vögel
    private $flügelspannweite;

    // Konstruktor für Vögel
    public function __construct($name, $alter, $art, $flügelspannweite) {
        parent::__construct($name, $alter, $art);
        $this->flügelspannweite = $flügelspannweite;
    }

    // Zusätzliche Methode für Vögel
    public function singen() {
        echo "Zwitscher, zwitscher!\n";
    }
}

// Beispielverwendung

$hund = new Hund("Bello", 5, "Hund", "Golden Retriever");
$hund->getInfo();
$hund->bell();

$katze = new Katze("Minka", 3, "Katze", "Schwarz");
$katze->getInfo();
$katze->schnurren();

$vogel = new Vogel("Flöckchen", 2, "Vogel", "30 cm");
$vogel->getInfo();
$vogel->singen();
?>