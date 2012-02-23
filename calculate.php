<?php
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $name = $_POST['myName'];

  $error 

  if (!is_numeric($num1)) {
     $error .= "Number 1 Should Be a Number. <br/>";
   }

  if (!is_numeric($num2)) {
     $error .= "Number 2 Should Be a Number. <br/>";
   }


   if $na




  function sum($number1, $number2){
    return $number1 + $number2;
  }

  $sum = sum($num1, $num2);

  $db = mysql_connect('127.0.0.1:8889', 'root', 'root') or die(mysql_error());

  mysql_select_db('girldev', $db) or die(mysql_error());

  mysql_query("INSERT INTO sumResults(sum,NAME) VALUES ($sum, \"$name\"); ", $db) or die(mysql_error());
?>
<html>
  <head>
    <title>My Result</title>
  </head>
  <body>
    <h1>Your Sum is <? echo $sum; ?> </h1>
    <a href='index.php'>Try Again</a>
  </body>
     <?
      if($error

</html>