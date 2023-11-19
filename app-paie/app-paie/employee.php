<?php
$connectbdd = mysqli_connect("localhost", "root", "", "appli paie");
$sql = $connectbdd->query("SELECT * FROM employee");
while($donnees = $sql->fetch_assoc())
{
echo $donnees[header('Location: http://localhost/fiche-de-paie-master/')];
}
?>