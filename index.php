<?

 $db = mysql_connect('127.0.0.1:8889', 'root', 'root') or die(mysql_error());

  mysql_select_db('girldev', $db) or die(mysql_error());

$sums = mysql_query('SELECT * FROM sumResults WHERE name IS NOT NULL');


?>
<html>
  <head>
    <title>My PHP Form</title>
  </head>
  <body>
    <h1>My Form</h1>
    <form action="calculate.php" method="POST">
      <label for="num1">Number 1:</label>
      <input type="text" name="num1" />
      <label for="num2">Number 2:</label>
      <input type="text" name="num2" />
      <br/>
       <label for="name"> Your Name; </label>
       <input type="text" name="myName" />
       <input type="submit" value="Add Numbers"/>
    </form>
   
    <table>
	<tr>
	  <th>Time</th>
          <th>Name</th>
          <th>Sum</th>
        </tr>
   
   <?  
      while($row = mysql_fetch_assoc($sums)){
        echo"<tr>
         <td>". $row['time'] ."</td>
         <td>". $row['name'] ."</td>
         <td>". $row['sum'] ."</td>
      </tr>";
     }
    ?>    
   </table>
  </body>
</html>