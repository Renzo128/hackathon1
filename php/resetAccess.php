<?php   // toegang resetten
require('../php/db.php');
$day = date('D');
$hour = date('H');
if($day == 'Sun' && $hour == 11){
$sql = "UPDATE sporter SET total_access=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([4]);
}
?>