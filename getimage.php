<?php
	//Omogucuje ispisivanje slika
  $id = $_GET['id'];

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("restoran") or die(mysql_error());
  $sql = "SELECT slika FROM jela WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['slika'];
?>
