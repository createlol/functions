<?php

// verbinding maken met de database
try {
  $pdo = new PDO("mysql:host=localhost;dbname=dierenwinkel",'root','');
} catch (Exception $e) {
  echo $e->getMessage();
}


//het ophalen van data uit de geselecteerde tabel
$sth = $pdo->prepare('SELECT * FROM `hond` WHERE `grootklein` = "groot" AND `natdroog` = "droog"');
$sth->execute();

while ($row = $sth->fetch()) {
  echo $row['naam'].'<br/>'.
    $row['beschrijving'].'<br/>'.
    $row['prijs'].'<br/>';
}

 ?>
