<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <label for="name"><b>Naam</b></label>
    <br>
    <input type="text" placeholder="Uw naam" name="naam" id="naam">
    <br>
    <br>

    <label for="name"><b>Achternaam</b></label>
    <br>
    <input type="text" placeholder="Uw achternaam" name="Achternaam" id="naam">
    <br>
    <br>

    <label for="name"><b>Adres</b></label>
    <br>
    <input type="text" placeholder="Uw adres" name="adres" id="naam">
    <br>
    <br>

    <label for="telefoon_nummer"><b>Telefoon nummer</b></label>
    <br>
    <input type="text" placeholder="Uw naam" name="telefoon_nummer" id="naam">
    <br>
  </body>
</html>

<?php
// verbinding maken met de database
try {
  $pdo = new PDO("mysql:host=localhost;dbname=dierenwinkel",'root','');
} catch (Exception $e) {
  echo $e->getMessage();
}

//Het toevoegen van gegevens in je database door gebruik te maken van insert into query
$parameters = array
(
  ':id'=> NULL,
  ':naam'=>$_POST= ,
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
