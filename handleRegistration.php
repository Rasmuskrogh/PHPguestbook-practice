<?php
  include("databasen.php");

  $name = $_POST["name"];
  $email = $_POST["email"];
  $uname = $_POST["username"];
  $pword = $_POST["password"];

  $salt = "aäsoifjwå48åasoiajd/)(&&&)";
  $pword = md5($pword.$salt);

  $sql = "INSERT INTO users(Namn, Epost, Användarnamn, Lösenord) VALUES(:name_IN, :email_IN, :uname_IN, :pword_IN)";

  $stm = $db->prepare($sql);
  $stm->bindParam(":name_IN", $name);
  $stm->bindParam(":email_IN", $email);
  $stm->bindParam(":uname_IN", $uname);
  $stm->bindParam(":pword_IN", $pword);
  
  if($stm->execute()) {
      header("location:index.php");
  } else {
      echo "ERROR!!!";
  }

?>