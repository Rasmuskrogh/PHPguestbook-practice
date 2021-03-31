<?php 
session_start();
include("databasen.php");

$meddelande = $_POST['meddelande'];
$username = $_SESSION["username"];
$password = $_SESSION["password"];



/* if(!isset($_SESSION["username"])){
    echo "FEL!!";
}else {
    $getSql= "SELECT ID FROM users WHERE Användarnamn=:username_IN AND Lösenord=:password_IN";
    $stmt = $db->prepare($getSql);
    $stmt->bindParam(":username_IN", $username);
    $stmt->bindParam(":password_IN", $password);
  $ID = $userID
}
 */

$sql = "INSERT INTO entries(Meddelande, UserID) VALUES(:meddelande_IN, :UserID_IN)";
$stm = $db->prepare($sql);
$stm->bindParam(':meddelande_IN', $meddelande);
$stm->bindParam(":UserID_IN", $_SESSION["ID"]);


if($stm->execute()) {
header("location:Databas och PDO.php");
} 
else {
    echo "Det gick fel!";
}​​​​​
?>
