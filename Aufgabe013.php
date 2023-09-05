<?php

// Aufgabe 13: Implementiere Fehlerbehandlung und Ausnahmen in deinen Klassen, um sicherzustellen, dass deine Anwendung robust und fehlertolerant ist.

class Division {
    public static function teile($dividend, $divisor) {
        if ($divisor == 0) {
            throw new Exception("Division durch Null ist nicht erlaubt.");
        }

        return $dividend / $divisor;
    }
}

try {
    $ergebnis = Division::teile(10, 2);
    echo "Ergebnis: $ergebnis\n";

    // Versuch, durch Null zu teilen
    $ergebnis = Division::teile(5, 0);
    echo "Ergebnis: $ergebnis\n"; // Dies wird nicht ausgeführt
} catch (Exception $e) {
    echo "Fehler: " . $e->getMessage() . "\n";
}

?>
