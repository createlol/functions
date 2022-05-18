<?php
$xml = simplexml_load_file('dataset.xml');


foreach ($xml as $record)
{
  echo
  "|". pad(30,$record->first_name." ". $record->last_name).
  "|". pad(50,$record->email).
  "|". pad(10,$record->gender).
  "|". pad(20,$record->ip_address).
  "<br>";
}


/*
In deze functie gebruiken we 2 variabelen een om de lengte te controleren van de
array die we gebruiken zodra de length niet voldoet aan het getal dat is meegegeven
 word dit opgevuld met een opening.
*/
function pad($length, $value)
{
  if (strlen($value) < $length)
  {
    for ($i= strlen($value); $i < $length; $i++) {
      $value.="&nbsp";
    }
  }
  return $value;

}



 ?>
