<?php
require('../hackathon1/header/headerindex.php');
require('../hackathon1/php/db.php');
$coachData = "";
$data = $pdo->query("SELECT * FROM sporter where id=1")->fetch();
setcookie('sporterID', $data['id'], time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>

<div class="container-fluid">

        <div class="row justify-content-center mt-3 ">
            <a href="../hackathon1/pages/qrcode.php" class="btn btn-primary buttonsize">
                QR code
                </a>
        </div>
        <div class="row justify-content-center mt-3">
        <a href="../hackathon1/pages/cursus.php" class="btn btn-primary buttonsize">
                Cursus
                </a>
        </div>
        <div class="row justify-content-center mt-3">
        <a href="../hackathon1/pages/coach.php" class="btn btn-primary buttonsize">
                Persoonlijke coach
                </a>
        </div>
        <div class="row justify-content-center mt-3">
        <a href="../hackathon1/pages/abonnement.php" class="btn btn-primary buttonsize">
                abonnement
                </a>
        </div>
    </div>
    </div>
</body>
</html>