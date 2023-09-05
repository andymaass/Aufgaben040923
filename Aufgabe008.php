<?php

// Aufgabe 8: Erstelle eine abstrakte Klasse und eine Schnittstelle und implementiere sie in anderen Klassen, um sicherzustellen, dass bestimmte Methoden vorhanden sind.


// Abstrakte Klasse
abstract class Lebewesen {
    // Eine abstrakte Methode, die von allen abgeleiteten Klassen implementiert werden muss
    abstract public function essen();
}

// Schnittstelle
interface Flugfaehig {
    // Eine Methode, die von Klassen, die das Flugfaehig-Interface implementieren, vorhanden sein muss
    public function fliegen();
}

// Klasse "Vogel", die die abstrakte Klasse erweitert und das Flugfaehig-Interface implementiert
class Vogel extends Lebewesen implements Flugfaehig {
    public function essen() {
        echo "Der Vogel isst Samen und Insekten.<br>";
    }

    public function fliegen() {
        echo "Der Vogel kann fliegen.<br>";
    }
}

// Klasse "Hund", die die abstrakte Klasse erweitert, aber das Flugfaehig-Interface nicht implementiert
class Hund extends Lebewesen {
    public function essen() {
        echo "Der Hund isst Fleisch und Trockenfutter.<br>";
    }
}

// Erstelle Objekte der Klassen
$vogel = new Vogel();
$hund = new Hund();

// Rufe die essen-Methode auf
$vogel->essen();
$hund->essen();

// Rufe die fliegen-Methode auf (nur für Vogel verfügbar)
$vogel->fliegen();

?>
