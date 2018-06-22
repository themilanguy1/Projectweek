<?php
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alcohol & Drugs</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="ProjectweekStylesheet.css">
</head>
<body>
    <div class="container-flex">
        <div class="wrapperdiv">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <a href="ProjectweekHome.html"><button class="knoppie">Home</button></a>
                </div>
                <div class="col-sm-6 text-center">
                    <h3 class="titmain text-center">Alcohol & Drugs</h3>
                    <br>
                    <h5 id="tit1">Consumptietabel</h5>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="ProjectweekContact.html"><button class="knoppie">Contact</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="wrapperdiv2">
            <div class="row">
                <div class="col-sm-12 tabelweergavediv">
                    <?php tabelweergave(); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>