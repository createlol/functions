<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="form-calc">
      <form method="post">
        <input type="text" name="num1" placeholder="Number1">
        <input type="text" name="num2" placeholder="Number2">
        <select name="operator">
          <option value="None">None</option>
          <option value="Add">Add</option>
          <option value="Subtract">Subtract</option>
          <option value="Mulitply">Mulitply</option>
          <option value="Divide">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit">calculate</button>
      </form>
  <p>The answer is:</p>
    </div>

<?php
if (isset($_POST ['submit'])) {
  $result1 = $_POST['num1'];
  $result2 = $_POST['num2'];
  $operator = $_POST['operator'];

  switch ($operator)
  {
    case 'None':
      echo "you need to select a method";
      break;
    case 'Add':
      echo $result1 + $result2;
      break;
    case 'Subtract':
      echo $result1 - $result2;
      break;
    case 'Mulitply':
      echo $result1 * $result2;
      break;
    case 'Divide':
      echo $result1 / $result2;
      break;
  }
}
 ?>
  </body>
</html>
