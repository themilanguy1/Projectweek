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

if(isset($_GET['wijzig_id'])) {
    $jaar = $_POST['jaarinput2'];
    $bier = $_POST['bierinput2'];
    $wijn = $_POST['wijninput2'];
    $gedistilleerd = $_POST['gedistilleerdinput2'];
    rijwijzigen($jaar, $bier, $wijn, $gedistilleerd);
}