<?php
// - Variablen sind Container für digital Daten sie dienen also zur
//   vorübergehenden speicherung von Daten welch sich mit der Zeit verändern
//   können
// - Variablen können Zahlen, Texte oder Wahrheitswerte sein

// - jede Variable besitzt einen Namen worüber auf sie zugegriffen werden kann
//   zudem hat sie einen Datentyp der die Information bestimmt die gespeichert
//   werden soll
// - das ; weist das Ende eines Befehls aus
// - in PHP werden Variablen durch ein $ gefolgt vom Namen der Variablen
//   dargestellt
// - der Zuweisungsopperator = weist den Wert z.B 5 zu
//   dabei wird der rechte Wert der linken Seite zugewiesen

$number = 5;
echo $number; // ist hier 5
$numbers = 12; // wird jetzt überschrieben der neue Wert ist 12
echo $number;

// nutze aussagekräftige variablennamen die dem Verwendungszweck entsprechen

// Nameskonventionen
// 1. name darf nur aus Buchstaben, Zahlen, Unterstriche bestehen
// 2. name darf nicht mit einer Zahl beginnen
// 3. namen beginnen mit kleinen Buchstaben um sie von Objekten zu unterscheiden

// - man unterscheidet grundsätzlich Zwei Arten von Variablen Global und lokal
// - lokale variablen wurden innerhalb einer Funktion deklariert und können
//   nur in dieser Funktion verwenden werden

// Funktion mit lokaler Variable
function ausgabeLokal(){
  $name = "Max";
  echo $name; // Gibt die lokale Variable 'Max' aus
}
ausgabeLokal();

// Funktion mit globaler Variable
function ausgabeGlobal(){
  global $name;
  echo $name; // Gibt die globale Variable 'Max' aus
}
ausgabeGlobal();

// - variablen außerhalb einer Funktion sind globale diese gelten überall
//   außerhalb der Funktion
// - mit dem Schlüsselwort Global kann man auch innerhalb einer Funktion
//   auf die globalen variablen zugreifen dabei ist es meistens sinnvoller
//   diese variablen als Parameter an die Funktion zu übergeben
// Funktion mit Parameter
function ausgabeParam($name){
  echo $name; // Gibt den übergebenen Parameter aus
}
ausgabeParam("Max"); // Gibt 'Max' aus
?>
