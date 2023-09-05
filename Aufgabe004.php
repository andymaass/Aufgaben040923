<?php

//Aufagbe 4: Experimentiere mit den verschiedenen Sichtbarkeitsmodifikatoren (public, protected, private) für Eigenschaften und Methoden und sieh, wie sich der Zugriff von außerhalb der Klasse ändert.


class Tier {
    public $name;
    public function getInfo() {
        echo "Name: " . $this->name . "<br>";
    }
}

$tier = new Tier();
$tier->name = "Fido";
$tier->getInfo(); // Zugriff auf die öffentliche Eigenschaft und Methode von außerhalb der Klasse

class Tier {
    protected $name;
    protected function getInfo() {
        echo "Name: " . $this->name . "<br>";
    }
}

class Hund extends Tier {
    public function setInfo($name) {
        $this->name = $name; // Zugriff auf die geschützte Eigenschaft von einer abgeleiteten Klasse aus
    }
}

$hund = new Hund();
$hund->setInfo("Bello");
$hund->getInfo(); // Zugriff auf die geschützte Methode von einer abgeleiteten Klasse aus

class Tier {
    private $name;
    private function getInfo() {
        echo "Name: " . $this->name . "<br>";
    }
}

class Hund extends Tier {
    public function setInfo($name) {
        // $this->name = $name; // Dies würde zu einem Fehler führen, da $name privat ist
    }
}

$tier = new Tier();
// $tier->getInfo(); // Dies würde zu einem Fehler führen, da getInfo() privat ist

