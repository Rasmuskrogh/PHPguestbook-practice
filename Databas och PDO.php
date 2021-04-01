<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ("databasen.php");

$stm = $db->query("SELECT ID, Namn, Epost, Användarnamn, Lösenord FROM users");

while ($row = $stm->fetch()) {
    echo $row['ID'] . " " . $row['Namn'] . " " . $row['Epost'] . " " . $row['Användarnamn'] . " " . $row["Lösenord"] . "<br />";
}
?>
<pre>
<form action = "handleComments.php" method = "POST">
<input type="text" name="meddelande" placeholder="meddelande">
<input type="submit" value="skikka"> 
</pre>
</form>

<form action="handleEdit.php" method = "POST">
<p>Ändra detta id</p>
<input type="text" name="id" placeholder="id">
<br>
<input type="text" name="newMessage" placeholder="nytt meddelande">
<br>
<input type="submit" value="Edit">
</form>

<form action="handleDelete.php" method="GET">
<p>Ta bort det här inlägget (id)</p>
<input type="text" name="id" placeholder="id">
<input type="submit" value="Ta bort">
</form>
</body>
</html>