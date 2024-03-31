<?php

$zahl = 0;
while($zahl < 10){
  echo "<h2>$zahl</h2>";
  $zahl++;
}
// for(Startanweisung; Bedingung; Durchlaufanweisung)
for($zahl = 0; $zahl < 10; $zahl++){
  if($zahl == 5){
  // bricht bei 5 ab zu sehende zahlen sind 0, 1, 2, 3, 4
  // es gibt zwei wichtige Anweisungen die man innerhalb einer Schleife aufrufen kann "break; und countinue;"
  break;
  }
  echo "<h2>$zahl</h2>";
}

for($zahl = 0; $zahl < 10; $zahl++){
  if($zahl % 2 == 0){
    echo "<div style=
    '
// farbe ist beliebig
    width: 50px;
    height: 50px;
    length; 50px;
    background: yellow;
    '></div>";
  }else{
    echo "<div style=
    '
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: red;
    '></div>";
  }
}

?>
