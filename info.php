<?php

  $connection = mysql_connect("localhost", "root", "password1");
  $db = mysql_select_db("AI_Frenzy_db", $connection);

  $name = $_POST['name'];
  $email = $_POST['email'];

  $query = mysql_query(“INSERT INTO my_table(name, email) VALUES ('$name', '$email')”);

  mysql_close($connection);

?>
