<?php   // abonnement annuleren
require('../php/db.php');
$sporterID = $_POST['sporterID'];
$sql = "UPDATE sporter SET total_access=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([0,$sporterID]);
?>