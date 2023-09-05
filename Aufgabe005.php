<?php

// Aufagbe 5: Implementiere Getter- und Setter-Methoden für die Eigenschaften deiner Klassen, um den Zugriff auf diese Eigenschaften zu kontrollieren.


class Tier {
    protected $name;
    protected $alter;
    protected $art;

    public function __construct($name, $alter, $art) {
        $this->setName($name);
        $this->setAlter($alter);
        $this->setArt($art);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAlter() {
        return $this->alter;
    }

    public function setAlter($alter) {
        if ($alter >= 0) {
            $this->alter = $alter;
        } else {
            echo "Das Alter muss eine positive Zahl sein.\n";
        }
    }

    public function getArt() {
        return $this->art;
    }

    public function setArt($art) {
        $this->art = $art;
    }

    public function getInfo() {
        echo "Name: " . $this->getName() . "\n";
        echo "Alter: " . $this->getAlter() . " Jahre\n";
        echo "Art: " . $this->getArt() . "\n";
    }
}

class Hund extends Tier {
    private $rasse;

    public function __construct($name, $alter, $art, $rasse) {
        parent::__construct($name, $alter, $art);
        $this->setRasse($rasse);
    }

    public function getRasse() {
        return $this->rasse;
    }

    public function setRasse($rasse) {
        $this->rasse = $rasse;
    }

    public function bell() {
        echo "Wuff! Wuff!\n";
    }
}

class Katze extends Tier {
    private $fellfarbe;

    public function __construct($name, $alter, $art, $fellfarbe) {
        parent::__construct($name, $alter, $art);
        $this->setFellfarbe($fellfarbe);
    }

    public function getFellfarbe() {
        return $this->fellfarbe;
    }

    public function setFellfarbe($fellfarbe) {
        $this->fellfarbe = $fellfarbe;
    }

    public function schnurren() {
        echo "Schnurr, schnurr!\n";
    }
}

class Vogel extends Tier {
    private $fluegelspannweite;

    public function __construct($name, $alter, $art, $fluegelspannweite) {
        parent::__construct($name, $alter, $art);
        $this->setFluegelspannweite($fluegelspannweite);
    }

    public function getFluegelspannweite() {
        return $this->fluegelspannweite;
    }

    public function setFluegelspannweite($fluegelspannweite) {
        $this->fluegelspannweite = $fluegelspannweite;
    }

    public function singen() {
        echo "Zwitscher, zwitscher!\n";
    }
}

$hund = new Hund("Bello", 5, "Hund", "Golden Retriever");
$hund->setAlter(-1); // Teste einen ungültigen Alter-Wert
$hund->getInfo();
$hund->bell();

$katze = new Katze("Minka", 3, "Katze", "Schwarz");
$katze->getInfo();
$katze->schnurren();

$vogel = new Vogel("Flöckchen", 2, "Vogel", "30 cm");
$vogel->getInfo();
$vogel->singen();

?>
