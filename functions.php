<?php
function tabelweergave() {
    include 'connect.php';

    $sql = "SELECT * FROM alcoholconsumptie";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'> <thead> <tr> <th scope='col'>Jaar</th> <th scope='col'>Bier</th> <th scope='col'>Wijn</th> <th scope='col'>Gedistilleerd</th> <th scope='col'>Totaal</th> </tr></thead><tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            $totaal = ($row['bier']) + $row["wijn"] + $row["gedistilleerd"];
            echo "<tr> <td>".$row["jaar"]."</td> <td>".$row["bier"]."</td> <td>".$row["wijn"]."</td> <td>".$row["gedistilleerd"]."</td> <td>$totaal</td> </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "Geen resulaten gevonden";
    }
}

function feedback($naam, $email, $bericht) {
    include 'connect.php';

    //nog niet klaar
}