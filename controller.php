<?php

if(isset($_POST['naaminput'])) {

    $_POST['naaminput'] = $naam;
    $_POST['emailinput'] = $email;
    $_POST['berichtinput'] = $bericht;
    feedback($naam, $email, $bericht);
}