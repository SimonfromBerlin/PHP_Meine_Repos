<?php
echo  "Operanden sind Daten die verbunden werden sollen und gegebenenfalls einen neuen Wert daraus zu schaffen. Diesen Wert können wir bsw, in einer Variable speichern oder in Kontrollstrukturen verwenden. Das sind in der Regel:</br>
      - Variablen = username </br>- Aussagen  = true/ false</br>- Literale  = 1024</br>
      <br>Ein Operator kann mit einem, zwei oder drei Operanden arbeiten</br>
      zahl++ = Unärer Operator</br>12*32 = Binärer Operator</br>true?20:10 = Ternärer Operator</br>
      <br>Es gibt verschiedene Arten von Operatoren hier drei Beispiele:
      </br>1. Arithmetische Operatoren, 2. Vergleichsoperatoren und 3. Logische Operatoren</br>";
echo "<h2>1. Arithmetische Operatoren:</h2>
     - sind die Grundrechenarten<br>- und lassen sich nur auf Zahlen anwenden</br>
     <br>addition: 13 + 4 = 17</br>subtraktion: 13 - 4 = 9</br>multiplikation: 13 * 4 = 52</br>division: 13 / 4 = 3,25</br>
     <br>der Code für einen einfachen Ausgabe-Pompt:<br>
     echo 13 + 4; //zeigt dann 17 an<br>echo 13 - 4;// zeigt dann 9 an<br>echo 13 * 4;// zeigt dann 52 an<br>echo 13 / 4;// zeigt dann 3,25 an<br></br>";
echo 13 + 4; echo 13 - 4; echo 13 * 4; echo 13 / 4;
echo "<br><br>zahl1 und zahl2 mit festen deklarierten  Werten</br>";
echo '$zahl1 = 13<br>$zahl2 = 4<br>$addition = $zahl1 + $zahl2 // zeigt dann 17 an<br>$subtraktion = $zahl1 - $zahl2 // zeigt dann 9 an<br>$multiplikation = $zahl1 * $zahl2 // zeigt dann 52 an<br>$division = $zahl1 / $zahl2 // zeigt dann 3.25 an</br>';
echo "<br>Der Modulo-Operator wird mit dem % Zeichen dargestellt:
      <br>- er wird verwendet, um den Rest einer Division zweier Ganzzahlen zu ermitteln.</br>- Wenn Sie beispielsweise die Zahl 7 durch 3 teilen, beträgt das Ergebnis 2 mit einem Rest von 1. Der Modulo-Operator gibt in diesem Fall den Wert 1 zurück.<br>- Mathematisch gesehen ist der Modulo-Operator der Ausdruck einer Ganzzahldivision. Im Gegensatz zur normalen Division, die das Ergebnis einer Aufteilung in gleiche Teile liefert, zeigt der Modulo den unteilbaren Rest an.</br>";
echo "ein Beispiel: 10%3=", 10 % 3 . "</br>";
echo "<br> Der Potenz-Operator in PHP wird verwendet, um die Potenz einer Zahl zur Basis einer anderen Zahl zu berechnen. In PHP gibt es keinen speziellen ^-Operator für die Potenzierung, wie es in einigen anderen Notationen der Fall ist. Stattdessen verwenden wir die Funktion pow(), um die Potenz zu berechnen.<br> Hierbei steht ";
echo '$basis'; echo " für die zu potenzierende Basis und "; echo '$exponent'; echo " für den Exponenten. Das Ergebnis ist die Basis hoch Exponent.<br></br>";
echo "Einige Beispiele:<br>"; echo 'pow ($basis, $exponent)'; echo "<br>", 'var_dump(pow(2, 8))';  " /Gibt int (256) aus"; echo "<br>", 'echo pow(-1, 20)', " /Gibt 1 aus"; echo "<br>", 'echo pow(0, 0)', " /Gibt 1 aus"; echo "<br>", 'echo pow(10, -1)', " /Gibt 0.1 aus"; echo "<br>", 'echo pow(-1, 5.5)', " /Gibt NAN (Not-a-Number) aus<br><br>";
echo  "Hinweis:<br>Die pow()-Funktion wandelt alle Eingaben in numerische Werte um, selbst nicht-skalare Werte. Dies kann zu seltsamen Ergebnissen führen.</br> Alternativ zur pow()-Funktion kannst du auch den Exponentiationsoperator verwenden.<br><br>
       Ab PHP 5.6.0 ist folgende Schreibweise möglich:<br>"; echo '$x = $y ** 2'; echo " Äquivalent zu "; echo 'pow($y, 2)<br><br>';
echo "Bitte beachte, dass negative Exponenten in Klammern gesetzt werden müssen, wenn du den Exponentiationsoperator verwendest:<br>";
echo '-1 ** 2'; echo " Gibt -1 aus<br>"; echo '(-1) ** 2'; echo "Gibt 1 aus<br><br>";
echo "In der Praxis ist die pow()-Funktion jedoch die gängigere Methode zur Berechnung von Potenzen in PHP.<br>
🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌</br>";

echo "<h2>2. Vergleichsoperatoren:</h2>";

echo "Vergleichsoperatoren werden häufig verwendet, um Variablen miteinander zu vergleichen. Diese Operatoren ermöglichen es, Bedingungen zu prüfen und Entscheidungen in Codeabschnitten wie if- und else-Anweisungen zu treffen. Hier sind einige gängige Vergleichsoperatoren und ihre Funktionsweise:</br>";
echo "1. Gleichheit (==):
      <br>Dieser Operator prüft, ob zwei Werte gleich sind. Er führt eine automatische Typkonvertierung durch, um den Vergleich zu ermöglichen. Ein Beispiel:</br>";
echo "<br>als geschriebene Code wird durch den ECHO-Befehl nur das Ergebnis angezeigt:<br>";$a = 1; $b = '1'; if ($a == $b) {echo 'a ist gleich b';} else {echo 'a ist nicht gleich b<br>';}
echo "<br>... und so sieht der gerschriebene Code aus:<br>"; echo '$a = 1; $b = 1; if ($a == $b) {'; echo "echo 'a ist gleich b';} else { echo 'a ist nicht gleich b';}</br>"; echo "Ergebnis: “a ist gleich b”</br>";
echo "<br><br>2. Identität (===):
      <br>Dieser Operator prüft nicht nur die Gleichheit der Werte, sondern auch den Datentyp. Ein Beispiel:</br>";echo "als geschriebene Code wird durch den ECHO-Befehl nur das Ergebnis angezeigt:</br>"; if ($a === $b) {echo 'a ist gleich b';} else {echo 'a ist nicht gleich b';}
echo "<br>... und so sieht der gerschriebene Code aus:<br>"; echo "if"; echo '($a === $b)'; echo"{"; echo "echo 'a ist gleich b'"; echo "} else {"; echo "echo 'a ist nicht gleich b'"; echo "}<br>";
echo "Ergebnis: “a ist nicht gleich b” (weil die Datentypen unterschiedlich sind)<br></br>";
Echo "3. Ungleichheit (!= oder < >):
      <br> Diese Operatoren prüfen, ob zwei Werte ungleich sind. Beispiel:</br>";echo "als geschriebener Code wird durch den ECHO-Befehl nur das Ergebnis angezeigt:</br>"; if ($a != $b) {echo 'a ist nicht gleich b';} else {echo 'a ist gleich b<br>';};
      echo "<br>... und so sieht der gerschriebene Code aus:<br>"; echo "if";echo '($a != $b)';echo"{";echo "echo 'a ist nicht gleich b';"; echo"} else {"; echo "echo 'a ist gleich b';";echo "}<br>";
echo "Ergebnis: “a ist gleich b” (weil die Werte gleich sind)<br></br>";
echo "4. Nicht-Identität (!==):
      <br> Dieser Operator prüft sowohl die Ungleichheit der Werte als auch den Datentyp. Ein Beispiel:</br>"; echo "als geschriebener Code wird durch den ECHO-Befehl nur das Ergebnis angezeigt:</br>";if ($a !== $b) {echo 'a ist nicht gleich b';} else {echo 'a ist gleich b<br></br>';}
echo "<br>... und so sieht der gerschriebene Code aus:<br>"; echo "if";echo'($a !== $b)';echo"{";echo"echo 'a ist nicht gleich b';";echo"} else {";echo"echo 'a ist gleich b';";echo"}<br>";
echo "Ergebnis: “a ist nicht gleich b” (weil die Datentypen unterschiedlich sind)<br></br>";
echo "5. Kleiner als (<) und Kleiner oder gleich (<=):
     <br>Diese Operatoren vergleichen numerische Werte. Ein Beispiel:<br>"; echo "als geschriebener Code wird durch den ECHO-Befehl nur das Ergebnis angezeigt:</br>";$x = 5;$y = 10;if ($x < $y) {echo '$x ist kleiner als $y<br>';};
     echo "<br>... und so sieht der gerschriebene Code aus:<br>";echo "$";echo "x = 5;";echo"$";echo"y = 10";echo "if";echo"(";echo"$";echo"x < ";echo"$";echo"y)";echo"{";echo"echo";echo"'$";echo"x ist kleiner als ";echo"$";echo"y'";echo"}<br>";echo "Ergebnis: “";echo"$";echo"x ist kleiner als ";echo"$";echo"y”<br></br>";
echo "6. Größer als (>) und Größer oder gleich (>=):
     <br> Diese Operatoren funktionieren ähnlich wie die vorherigen, prüfen jedoch auf größere Werte. Ein Beispiel:<br>";echo "als geschriebene Code wird durch den ECHO-Befehl nur das Ergebnis angezeigt:<br>";if ($y >= $x) {echo '$y ist größer oder gleich $x<br>';}
echo "<br>... und so sieht der gerschriebene Code aus:<br>";echo "if";echo '($y >= $x)';echo"{echo";echo"'$";echo"y ist größer oder gleich ";echo"$";echo"x'";echo"}<br></br>Ergebnis: “";echo"$";echo"y ist größer oder gleich ";echo"$";echo"x”<br>Vergleichsoperatoren sind ein grundlegender Bestandteil der Programmierung und helfen dabei, logische Entscheidungen in Ihren PHP-Code einzubauen.</br>";
echo "🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌🙌<br>";

echo "<h2>3. Logische Operatoren:</h2>";

echo "In PHP gibt es verschiedene logische Operatoren, die es ermöglichen, mehrere Bedingungen zu kombinieren. Hier sind die wichtigsten:</br>
      1. AND (&&): Wenn zwei oder mehr Bedingungen mit AND verknüpft werden, müssen alle Bedingungen erfüllt sein. Die alternative Schreibweise für AND ist &&.</br>
      2. OR (||): Bei der Verknüpfung mit OR reicht es aus, wenn eine der Bedingungen erfüllt ist. Die alternative Schreibweise für OR ist ||.</br>
      3. Negation (!): Das Ausrufezeichen ! wird verwendet, um eine Bedingung zu verneinen. Wenn eine Bedingung mit ! negiert wird, bedeutet das, dass sie erfüllt ist, wenn die ursprüngliche Bedingung nicht zutrifft.</br>
      4. Klammern: Manchmal möchten wir AND- und OR-Operatoren kombinieren, um bestimmte Alternativen zu erlauben. In solchen Fällen können wir Klammern verwenden, um die Zusammengehörigkeit der Operatoren klarzumachen.</br>
      <br>Hier sind einige Beispiele:</br>";

echo "der geschriebene Code wird nicht angezeigen:</br>";
$username = "Simon";
$password = "php-einfach";
echo "so sieht der geschriebene Code aus<br>";
echo "$";echo"username =";echo'"Simon"<br>';
echo "$";echo"password = ";echo'"php-einfach"<br>';

echo "1. AND-Verknüpfung<br>";
$username = "Simon";
$password = "php-einfach";

// AND-Verknüpfung
if ($username == "Nils" && $password == "php-einfach") {
    echo "Benutzername und Passwort sind korrekt.";
}
echo "if";echo"($";echo"username == ";echo'"Simon"';echo" && ";echo"$";echo"password == ";echo'"php-einfach")';echo"{<br>";
echo 'echo "Benutzername und Passwort sind korrekt.";';echo"}";
echo "2. OR-Verknüpfung<br>";
// if ($username == "Simon" || $password == "geheim") {
//     echo "Entweder Benutzername oder Passwort stimmen.";
// }
//
// // Gruppierung mit Klammern
// if (($username == "Simon" && $password == "php-einfach") || ($username == "Paul" && $password == "geheim")) {
//     echo "Entweder Simon mit dem Passwort 'php-einfach' oder Paul mit dem Passwort 'geheim'.";
// }
//
// // Negation
// $number = 25;
// if (!($number >= 10 && $number <= 20)) {
//     echo "Die Zahl liegt nicht zwischen 10 und 20.";
// }
// Die Verwendung dieser logischen Operatoren ermöglicht es uns, komplexe Bedingungen in unseren PHP-Programmen zu formulieren.
// <?php
//
//
// // OR-Verknüpfung
// if ($username == "Nils" || $password == "geheim") {
//     echo "Entweder Benutzername oder Passwort stimmen.";
// }
//
// // Gruppierung mit Klammern
// if (($username == "Nils" && $password == "php-einfach") || ($username == "Paul" && $password == "geheim")) {
//     echo "Entweder Nils mit dem Passwort 'php-einfach' oder Paul mit dem Passwort 'geheim'.";
// }
//
// // Negation
// $number = 25;
// if (!($number >= 10 && $number <= 20)) {
//     echo "Die Zahl liegt nicht zwischen 10 und 20.";
// }





?>
