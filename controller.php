<?php
include 'functions.php';
if(isset($_POST['naaminput'])) {

    $_POST['naaminput'] = $naam;
    $_POST['emailinput'] = $email;
    $_POST['berichtinput'] = $bericht;
    feedback($naam, $email, $bericht);
}

if(isset($_POST['bierinput'])) {
    $jaar = $_POST['jaarinput'];
    $bier = $_POST['bierinput'];
    $wijn = $_POST['wijninput'];
    $gedistilleerd = $_POST['gedistilleerdinput'];
    rijinvoegen($jaar, $bier, $wijn, $gedistilleerd);
}