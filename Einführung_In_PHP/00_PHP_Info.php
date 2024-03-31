<?php
echo "1. Xampp download, installieren alles mit Ja bestätigen<br>
 2. xampp control panel öffnen> Explorer-Button> htdocs öffnen entweder alles löschen oder in einen Ordner verschieben ... fertig<br>
 3. einen Ordner für eure Projekte erstellen in dem alles gespeichert werden soll (Unterordner können auch in Atom erstellt werden)<br>
 4. Atom Software download, installieren<br>
 5. in Atom den Ordner xampp\htdocs öffnen und fertig<br>
 6. im Xampp Control Panel mindestens Apache für PHP starten<br>
 7. Web-Browser starten<br>
 8. lokalhost als Web-Adresse fertig du kannst anfangen<br></br>";

 echo " - mit STRG+Shift+7(Backslash) wird eine oder mehrere markierte Zeilen in einen Kommentar umwandeln dies, funktioniert auch umgedreht<br>- mit echo wird ALLES in doppelten Anführungszeichen auf der Website angezeigt<br>- mit echo und den einfachen Anführungszeichen können Befehle angezeigt werden<br>- mit kleiner_als br größer_als werden Zeilenumbrüche gesetzt<br>- ALLE Variablen (Strings, Integer, Boolean ect) werden mit dem $ erstellt<br>
        - nach jedem Befehlende kommt immer ein Semikolon<br>- man kann über den Echo-Befehl auch HTML-Befehle ausgeben, dies ist auch in der HTML Struktur sichtbar<br>- mit halten der STRG-Taste in die Zeile klicken werden mehrere Curser gesetzt</br>- mit STRG halten können Zeilenübergreifend Bereiche markiert und gleichzeitig verändert werden<br></br>";

echo "<br>Überschriftenbespiele dies ist die Standard Schriftgröße von h1 - h6<br>";
echo "<h1>Überschrift</h1>";
echo "<h2>Überschrift</h2>";
echo "<h3>Überschrift</h3>";
echo "<h4>Überschrift</h4>";
echo "<h5>Überschrift</h5>";
echo "<h6>Überschrift</h6>";
$name = "Simon";
echo "$name<br>";
echo "<br>ein Beispiel mit Überschriften:<br><h1>Das ist viel einfacher</h1><h2>wenn man am Anfang</h2><h3>die doppelten Anführungszeichen</h3><h4>und erst am Ende</h4><h5>vor dem Semikolon</h5><h6>die doppelten Anführungszeichen setzt</h6><h4>alles dazwischen wird angezeigt</h4><h4>solange es KEIN BEFEHL mit einem Dollerzeichen ist</h4>";

echo"Befehle mit dem Dollerzeichen werden im ECHO-befehl mit einfachen 'Anführungszeichen'angezeigt</br>";
echo"Nun naja der Code ansich wird nicht angezeigt nur seine Ausgaben mit ECHO innerhalb der einfachen und doppelten Anführungszeichen.<br></br>";
$name = "Simon";
echo"$name<br>";
echo"Hier jetzt der Code wie er in eine PHP-Datei enthalten ist<br>";
echo'$';echo"name = ";echo'"Simon"<br>';
echo"echo";echo'"$name"';echo";";
echo"<br>Angezeigt wird dann: Simon";

?>
