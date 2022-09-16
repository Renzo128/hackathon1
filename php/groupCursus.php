<?php   // aanmelden voor groeps cursus
require('../php/db.php');
$sporterID = $_POST['sporterID'];
$clinicID = $_POST['clinicID'];
$sql = "INSERT INTO sign_up_clinic (sporter_id, clinic_id) VALUES (?,?)";
$pdo->prepare($sql)->execute([$sporterID, $clinicID]);
?>