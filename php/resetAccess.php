<?php
require('../php/db.php');
$day = date('D');
$hour = date('H');
if($day = 'sun' && $hour == 24){
$sporterID = $_POST['sporterID'];
$sql = "UPDATE sporter SET total_access=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([4]);
}

?>