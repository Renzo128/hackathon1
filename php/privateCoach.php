<?php   //gesprek met persoonlijke coach inplannen
require('../php/db.php');
$coachID = $_POST['coachID'];
$sporterID = $_POST['sporterID'];
$sql = "INSERT INTO sign_up_coach (sporter_id, personal_coach_id) VALUES (?,?)";
$pdo->prepare($sql)->execute([$sporterID, $coachID]);
?>