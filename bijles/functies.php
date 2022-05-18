<?php
//HET TOEVOEGEN VAN GEGEVENS IN JE DATABASE DOOR GEBRUIKT TE MAKEN van
//EEN INSERT INTO query
$parameters = array
(
  ':id'=> NULL,
  ':naam'=>"Naam",
  ':achtenraam'=>"achternaam",
  ':adres'=>"adress",
  ':telefoon_nummer'=>"06943",
);
$sth = $pdo->prepare('INSERT INTO `klant` (`id`, `naam`, `achternaam`, `adres`, `telefoon_nummer`)
VALUES
(
  :id,
  :naam,
  :achtenraam,
  :adres,
  :telefoon_nummer
);');

$sth->execute($parameters);
?>
