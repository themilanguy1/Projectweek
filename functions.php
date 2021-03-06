<?php
function tabelweergave() {
    include 'connect.php';

    $sql = "SELECT * FROM alcoholconsumptie ORDER BY jaar ASC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'> <thead> <tr> <th scope='col'>Jaar</th> <th scope='col'>Bier</th> <th scope='col'>Wijn</th> <th scope='col'>Gedistilleerd</th> <th scope='col'>Totaal</th> <th scope='col'>Gedistilleerd 2</th> <th scope='col'>Wijn 2</th> <th scope='col'></th> <th scope='col'></th> </tr></thead><tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            $gedistilleerd2 = number_format(($row["gedistilleerd"] / 8 * 7), 1);
            $totaal = ($row["bier"]) + $row["wijn"] + $gedistilleerd2;
            $wijn2 = number_format($row["wijn"] / $totaal * 100, 1);
            echo "<tr> <td>".$row["jaar"]."</td> <td>".$row["bier"]."</td> <td>".$row["wijn"]."</td> <td>".$row["gedistilleerd"]."</td> <td>$totaal</td> <td>$gedistilleerd2</td> <td>$wijn2%</td> <td><a style='font-size: 1.5em;' class='fas fa-edit' href='wijzigtabel.php?id=".$row["id"]."'></a></td> <td><a style='font-size: 1.5em;' class='fas fa-trash' href='controller.php?del_id=".$row["id"]."'></a></td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "Geen resulaten gevonden";
    }
}

function gemiddelde() {
    include 'connect.php';

    $sql = "SELECT AVG(bier) AS 'gembier', AVG(wijn) AS 'gemwijn', AVG(gedistilleerd) AS 'gemgedistilleerd' FROM alcoholconsumptie";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'> <thead> <tr> <th scope='col'>Bier</th> <th scope='col'>Wijn</th> <th scope='col'>Gedistilleerd</th> </thead><tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>".number_format($row["gembier"],'1')."</td> <td>".number_format($row["gemwijn"],'1')."</td> <td>".number_format($row["gemgedistilleerd"],'1')."</td> </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "Geen resulaten gevonden";
    }
}

function feedback($naam, $email, $bericht) {
    include 'connect.php';
    if(isset($_POST['naaminput'])) {
        $sql = "INSERT INTO contactfeedback (naam, email, bericht)
        VALUES ('$naam', '$email', '$bericht')";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: verzonden.html');
            echo "";
        } else {
            echo "";
        }
    }
}

function rijinvoegen($jaar, $bier, $wijn, $gedistilleerd) {
    include 'connect.php';
    if(isset($_POST['jaarinput'])) {
        $query = mysqli_query($conn, "SELECT jaar FROM alcoholconsumptie WHERE jaar = '".$jaar."'");
        if (!$query) {
            die('Error: ' . mysqli_error($conn));
        } else { 
            if(mysqli_num_rows($query) > 0){
                header('Location: error.html');
                } else {
                    $sql = "INSERT INTO alcoholconsumptie (jaar, bier, wijn, gedistilleerd)
                    VALUES ('$jaar', '$bier', '$wijn', '$gedistilleerd')";
                    
                    if ($conn->query($sql) === TRUE) {
                        header('Location: ProjectweekTabel.php');
                        echo "";
                    } else {
                        echo "";
                    }
            }
        }
    }
}

function rijwijzigen($jaar, $bier, $wijn, $gedistilleerd) {
    include 'connect.php';
    if(ISSET($_GET['wijzig_id'])) {
        $wijzig_id = $_GET['wijzig_id'];
        if(isset($_POST['jaarinput2'])) {
            $sql = "UPDATE alcoholconsumptie 
                    SET jaar = '$jaar', 
                    bier = '$bier',
                    wijn = '$wijn',
                    gedistilleerd = '$gedistilleerd'
                    WHERE id= $wijzig_id";
            if ($conn->query($sql) === TRUE) {
                header('Location: ProjectweekTabel.php');
                echo "";
            } else {
                echo "";
            }
        }
    }
}

function tempvalue($wijzig_id, $parameter) {
    include 'connect.php';
    $sql = "SELECT * FROM alcoholconsumptie WHERE id = ". $wijzig_id. "";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["$parameter"]; 
        }
    }
}

function deletefunctie() {
    include 'connect.php';
    mysqli_query($conn,"DELETE FROM `alcoholconsumptie` WHERE id = " . $_GET["del_id"]);
    header('Location: ProjectweekTabel.php');
}