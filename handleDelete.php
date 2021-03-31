<?php
    include("databasen.php");

    $id = $_GET['id'];

    $statement = $db->query("DELETE FROM entries WHERE ID=$id");

    if($statement->execute()) {
        header("location:Databas och PDO.php");
    } else {
        echo "FEL!";
    }

?>