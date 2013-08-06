<?php
include ('bd/conexao.php');

mysql_select_db("sysadmin");
$result = mysql_query("SELECT * FROM paginas");

while ($row = mysql_fetch_array($result)) {

//echo "<pre>";
//print_r($row);
  //echo "</pre>";

  $contador = $row[1];

  echo $contador;



}


?>