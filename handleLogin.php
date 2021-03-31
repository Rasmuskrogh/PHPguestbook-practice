<?php
    session_start();
    include("databasen.php");

    $uname = $_POST["username"];
    $pword = $_POST["password"];

    $salt = "aäsoifjwå48åasoiajd/)(&&&)";
    $pword = md5($pword.$salt);

    $stm = $db->prepare("SELECT count(ID) FROM users WHERE Användarnamn=:uname_IN AND Lösenord=:pword_IN");
    $stm->bindParam(":uname_IN", $uname);
    $stm->bindParam("pword_IN", $pword);
    $stm->execute();
    $return = $stm->fetch();

    if($return[0] > 0) {
        $_SESSION["username"] = $uname;
        $_SESSION["password"] = $pword;

        header("location:Databas och PDO.php");
    }

?>