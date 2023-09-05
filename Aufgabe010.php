<?php

//Aufgabe 10: Erstelle Traits, um wiederverwendbaren Code zwischen verschiedenen Klassen zu teilen.

// Ein einfacher Trait
trait Fahrbar {
    public function fahren() {
        echo "Das Fahrzeug fährt.\n";
    }
}

trait Fliegbar {
    public function fliegen() {
        echo "Das Flugzeug fliegt.\n";
    }
}

// Klassen, die Traits verwenden
class Auto {
    use Fahrbar; // Die Klasse Auto verwendet den Fahrbar-Trait
}

class Flugzeug {
    use Fahrbar, Fliegbar; // Die Klasse Flugzeug verwendet sowohl den Fahrbar- als auch den Fliegbar-Trait
}

// Objekte erstellen und Methoden aufrufen
$auto = new Auto();
$flugzeug = new Flugzeug();

$auto->fahren(); // Aufrufen der Methode aus dem Fahrbar-Trait
$flugzeug->fahren(); // Auch das Flugzeug kann fahren
$flugzeug->fliegen(); // Aufrufen der Methode aus dem Fliegbar-Trait

?>
