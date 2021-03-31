<?php
 include("databasen.php");

 $id = $_POST['id'];
 $new_message = $_POST['newMessage'];
 $statement = $db->query("UPDATE entries SET Meddelande= '$new_message' WHERE ID = $id");
 
 if($statement->execute()) {
     header("location:Databas och PDO.php");
 } else {
     echo "ERROR";
 }

?>