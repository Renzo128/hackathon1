<?php
require('../header/header.php');
require('../php/db.php');
$data = $pdo->query("SELECT * FROM sporter where id=1")->fetch();
$subscription = $data['total_access'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/abonnement.css">
    <script src="../javascript/abonnement.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h2> Abonnement </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                Abbonement: <?php echo $subscription; ?>
            </div>
        </div>
        <div class="row justify-content-center mt-3 ">
            <button onclick="cancelSubscription(<?php echo $data['id'] ?>)" class="btn btn-primary buttonsize" type="button">Annuleren</button>
        </div>
    </div>
</body>

</html>