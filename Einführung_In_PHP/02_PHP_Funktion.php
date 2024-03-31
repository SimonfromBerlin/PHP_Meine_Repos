<?php
echo "Zufallszahl: ".rand();
// für einen Zeilenumbruch muss eine Zeile eingefügt werden
echo "<br>";
echo " Hallo Stringlänge; ".strlen("Hallo");

echo "<br>";
// eine Funkionen erstellt man mit function und sollte einen
// naheliegenden Namen erhalten dessen Funktion erfüllt werden soll
function textAnzeigen(){
  echo "<h2>h2 Überschrift h2</h2>";
}
// diese einmal geschriebene Funktion läßt sich beliebig oft dublizieren
textAnzeigen();
textAnzeigen();

function textAnzeigen1(){
  echo "<h6> h6 Bitte hier Sarkasmus einfügen h6</h6>";
}
textAnzeigen1();
textAnzeigen1();
textAnzeigen1();

// eine function die fexible auf verschiedene Eingaben reagiert
// - dafür werden Variablen in den Runden Klammern der function deklariert
// - eine function kann beliebig viele Parameter verwenden, diese werden dann, durch ein Komma ergänzt
// - durch $farbe="eineFarbe" kann ein Standardwert geschaffen werden ohne ein Farbargument wird dieser dann verwendet (siehe Mittwoch und Donnerstag)
function textAnzeigen2($text, $farbe="violet"){
  echo "<h4 style='background: $farbe'>h4 $text h4</h4>";
}
textAnzeigen2("Montag","red");
textAnzeigen2("Dienstag","yellow");
textAnzeigen2("Mittwoch");
textAnzeigen2("Donnerstag");
textAnzeigen2("Freitag", "green");

// Return statements dienen dazu Werte zurückzugeben
// man kann prinzipiel jeden Datentyp zurückliefern: Strings, Boolean, Arrays, Objekte oder in diesem Fall eine Zahl
// hierbei ist zu beachten das das Return-Statment die Funktion sofort beendet
// Anweisungen die darunten kommen werden nicht mehr ausgeführt
function multiply($zahl1, $zahl2){
  $ergebnis = $zahl1 * $zahl2;
  return $ergebnis;
  echo "ein Ergbnisvorschlag"; // wird nicht ausgeführt
}
$result = multiply(10, 5);
var_dump($result);


?>
