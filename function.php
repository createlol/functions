<?php
// In deze functie word er connectie gemaakt met de database .
function connection($host,$dbname,$pw,$name)
{
  try
  {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$pw,$name);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  return $pdo;
}
/*
Hieronder geef ik variabelen een bepaalde waarde die gebruikt worden voor de
connectie van de database.

$host = 'localhost';
$dbname = 'dierenwinkel';
$pw = 'root';
$name = '';

Hier roep ik de functie 'connection' op om een connectie te maken met de database,
hierbij word er gebruik gemaakt van de varieablen die hierboven een waarde hebben gekregen.

$pdo = connection($host,$dbname,$pw,$name);
*/

//In deze functie word er data opghaald uit de database
function selectData($pdo)
{
  $sth = $pdo->prepare('SELECT * FROM `hond` WHERE `grootklein` = "klein" AND `natdroog` = "droog"');
  $sth->execute();

/*
Er word gebruik gemaakt van een while loop zodat de loop data blijft
ophalen zolang er nog data valt opthalen uit de database
*/
  while ($row = $sth->fetch())
  {
    echo $row['naam'].'<br/>'.
      $row['beschrijving'].'<br/>'.
      $row['prijs'].'<br/>';
  }
}





function insertData($pdo)
{
  $naam = 'testnaam';
  $beschrijving = 'testbedshjcf';
  $prijs = 3 ;
  $grootklein = 'klein';
  $natdroog = 'droog';

  $parameters = array(
    ':naam' => $naam ,
    ':beschrijving' => $beschrijving ,
    ':prijs' => $prijs ,
    ':grootklein' => $grootklein ,
    ':natdroog' => $natdroog ,
   );
  $sth = $pdo->prepare('INSERT INTO `hond` (`naam`, `beschrijving`, `prijs`, `grootklein`, `natdroog`) VALUES (:naam, :beschrijving, :prijs, :grootklein, :natdroog)');
  $sth->execute($parameters);
}

 ?>
