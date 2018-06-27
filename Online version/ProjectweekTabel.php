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
                <div class="col-md-12">
                    <h5>Met dit formulier kunt u een nieuwe rij toevoegen aan de tabel.</h5>
                    <p>Let op: u kunt alleen een nieuwe rij toevoegen met een jaartal dat nog niet bestaat.</p>
                </div>
                <div class="col-md-12">
                    <form id="nieuwrijform" method="POST" action="controller.php">
                        <div class="form-row">
                            <div class="col">
                                <input class="form-control" type="number" name="jaarinput" required placeholder="Jaar">
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" step=".1" name="bierinput" required placeholder="Bier">
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" step=".1" name="wijninput" required placeholder="Wijn">
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" step=".1" name="gedistilleerdinput" required placeholder="Gedistilleerd">
                            </div>
                            <button type="submit" class="btn btn-primary">Rij invoegen</button>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <br>
                <div class="col-sm-12 tabelweergavediv">
                    <h4 class="text-center">Alcohol consumptie</h4>
                    <?php tabelweergave(); ?>
                </div>
                <div class="col-sm-12 tabelweergavediv">
                    <h4 class="text-center">Gemiddelde alcohol consumptie</h4>
                    <?php gemiddelde(); ?>
                </div>
                <div class="col-sm-8">
                    <h4 class="text-center">Grafiek alcohol consumptie</h4>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-center">Gegevensanalyse</h4>
                </div>
                <div class="col-sm-8">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <div class="col-md-4" id="tabeluitleg">
                    <br>
                    <p>Tussen 1960 en 2005 is de totale alcoholconsumptie gestegen, wel met 139%.</p>
                    <p>De consumptie van bier en wijn is gestegen maar de consumptie van gedistilleerde alcohol is gedaald.</p>
                    <p>daarnaast is de consumptie van wijn ook gestegen met wel een factor van 13,5 sinds 1960</p>
                    <p>Ook is te zien aan de gegevens dat de alcoholconsumptie voor het eerst ontzettend steeg in de jaren 70.</p>
                </div>
            </div>
        </div>
    </div>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script type="text/javascript" src="grafiek.js"></script>
</body>
</html>