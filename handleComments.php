<?php 
session_start();
include("databasen.php");

$meddelande = $_POST['meddelande'];
$username = $_SESSION["username"];
$password = $_SESSION["password"];



 if(!isset($_SESSION["username"])){
    echo "FEL!!";
    die();
}

$getSql= "SELECT ID FROM users WHERE Användarnamn=:username_IN AND Lösenord=:password_IN";
$stmt = $db->prepare($getSql);
$stmt->bindParam(":username_IN", $username);
$stmt->bindParam(":password_IN", $password);
$stmt->execute();
$user_id = $stmt->fetch();

 

$sql = "INSERT INTO entries(Meddelande, UserID) VALUES(:meddelande_IN, :UserID_IN)";
$stm = $db->prepare($sql);
$stm->bindParam(':meddelande_IN', $meddelande);
$stm->bindParam(":UserID_IN", $user_id[0]);


if($stm->execute()) {
header("location:Databas och PDO.php");
} 
else {
    echo "Det gick fel!";
}​​​​​
?>
