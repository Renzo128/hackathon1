<?php
require('../header/headerindex.php'); // pagina header
require('../php/db.php');    // database connectie
$data = $pdo->query("SELECT * FROM sporter where id=1")->fetch();    // gebruiker ophalen
setcookie('sporterID', $data['id'], time() + (86400 * 30), "/");    // gebruiker informatie opslaan in een cookie voor in dag
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css" />
</head>

<body>

    <div class="container-fluid">

        <div class="row justify-content-center mt-3 ">
            <a href="../pages/qrcode.php" class="btn btn-primary buttonsize">
                <!-- knop om naar de qr code pagina te gaan -->
                QR code
            </a>
        </div>
        <div class="row justify-content-center mt-3">
            <a href="../pages/cursus.php" class="btn btn-primary buttonsize">
                <!-- knop om naar de cursusen pagina te gaan -->
                Cursus
            </a>
        </div>
        <div class="row justify-content-center mt-3">
            <a href="../pages/coach.php" class="btn btn-primary buttonsize">
                <!-- knop om naar de persoonlijke coach pagina te gaan -->
                Persoonlijke coach
            </a>
        </div>
        <div class="row justify-content-center mt-3">
            <a href="../pages/abonnement.php" class="btn btn-primary buttonsize">
                <!-- knop om naar de abonnement pagina te gaan -->
                abonnement
            </a>
        </div>
    </div>
    </div>
</body>

</html>