<?php
// een functie die een variabele kan gebruiken buiten de functie zelf
function newCalc($x){
  $newnr = $x * 0.75;
  echo "here is 75% of what to wrote: ".$newnr."<br>";
}

//75% van je vraag
$x = 100;

// echo functie aka functie oproepen
newCalc($x);



//75% van je vraag
$a = 10;

newCalc($a);
?>
