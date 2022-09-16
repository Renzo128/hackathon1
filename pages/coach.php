<?php
require('../php/db.php');   // database connectie
require('../header/header.php');    // pagina header
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/coach.css">
    <script src="../javascript/coach.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    $coachData = "";
    $data = $pdo->query("SELECT * FROM personal_coach")->fetchAll(); // alle persoonlijke coaches ophalen
    foreach ($data as $row) {   // alle persoonlijke coaches op de pagina inladen
        $coachData .= "<div class='row pt-3 h-25'>";
        $coachData .= "<div class='col-1'></div>";
        $coachData .= "<div class='col-10 border border-dark'>";
        $coachData .= "<div class='row'>";
        $coachData .= "<div class='col-8'>";
        $coachData .= $row['personal_coaches'];
        $coachData .= "</div>";
        $coachData .= "<div class='col-4 text-right apply'>";
        $coachData .= "<button class='btn btn-primary' id=" . $row['id'] . " onclick='applyForCoach(this.id," . $_COOKIE['sporterID'] . ")' type='button'>Aanmelden</button";
        $coachData .= "</div>";
        $coachData .= "</div>";
        $coachData .= "<div class='col-1'></div>";
        $coachData .= "</div>";
        $coachData .= "</div>";
        $coachData .= "</div>";
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h2> Personal Coach </h2>
            </div>
        </div>
        <?php echo $coachData; ?>
    </div>
</body>

</html>