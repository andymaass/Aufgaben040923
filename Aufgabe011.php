<?php

// Aufgabe 11: Forsche in den grundlegenden objektorientierten Designmustern wie Singleton, Factory, Observer, und Dependency Injection und versuche, sie in deinem Code anzuwenden.

//Singleton
class Singleton {
    private static $instanz;

    private function __construct() { }

    public static function getInstance() {
        if (self::$instanz === null) {
            self::$instanz = new Singleton();
        }
        return self::$instanz;
    }
}

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

var_dump($singleton1 === $singleton2); // true, da beide auf die gleiche Instanz zugreifen


//Factory

interface Tier {
    public function sprechen();
}

class Hund implements Tier {
    public function sprechen() {
        echo "Wuff! Wuff!\n";
    }
}

class Katze implements Tier {
    public function sprechen() {
        echo "Miau! Miau!\n";
    }
}

class TierFabrik {
    public static function erstelleTier($typ) {
        if ($typ === 'Hund') {
            return new Hund();
        } elseif ($typ === 'Katze') {
            return new Katze();
        }
    }
}

$meinHund = TierFabrik::erstelleTier('Hund');
$meineKatze = TierFabrik::erstelleTier('Katze');

$meinHund->sprechen();
$meineKatze->sprechen();


//Observer

interface Beobachter {
    public function aktualisieren($nachricht);
}

class NachrichtenSubjekt {
    private $beobachter = [];

    public function hinzufuegenBeobachter(Beobachter $beobachter) {
        $this->beobachter[] = $beobachter;
    }

    public function sendeNachricht($nachricht) {
        foreach ($this->beobachter as $beobachter) {
            $beobachter->aktualisieren($nachricht);
        }
    }
}

class EmailBeobachter implements Beobachter {
    public function aktualisieren($nachricht) {
        echo "E-Mail-Benachrichtigung: $nachricht\n";
    }
}

class SMSBeobachter implements Beobachter {
    public function aktualisieren($nachricht) {
        echo "SMS-Benachrichtigung: $nachricht\n";
    }
}

$nachrichtenSubjekt = new NachrichtenSubjekt();
$emailBeobachter = new EmailBeobachter();
$smsBeobachter = new SMSBeobachter();

$nachrichtenSubjekt->hinzufuegenBeobachter($emailBeobachter);
$nachrichtenSubjekt->hinzufuegenBeobachter($smsBeobachter);

$nachrichtenSubjekt->sendeNachricht("Wichtige Nachricht");


//Dependency Injection
class Datenbank {
    public function query($sql) {
        // Simuliere eine Datenbankabfrage
        return "Ergebnis der Abfrage: $sql";
    }
}

class BenutzerRepository {
    private $datenbank;

    public function __construct(Datenbank $datenbank) {
        $this->datenbank = $datenbank;
    }

    public function findeBenutzer($id) {
        $sql = "SELECT * FROM benutzer WHERE id = $id";
        return $this->datenbank->query($sql);
    }
}

$datenbank = new Datenbank();
$benutzerRepo = new BenutzerRepository($datenbank);

$ergebnis = $benutzerRepo->findeBenutzer(1);
echo $ergebnis;


?>