<?php
include 'connect.php';
include 'functions.php';

if(ISSET($_GET['id'])) {
    //define id for use
    $id = $_GET['id'];
} else {
    //send to home if get is not set
    header('Location: ProjectweekTabel.php');
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
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
                    <h5 id="tit1">Tabel rij wijzigen</h5>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="ProjectweekContact.html"><button class="knoppie">Contact</button></a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="wijzigtabelform" method="POST" action="controller.php?wijzig_id=<?php echo $id; ?> ">
                    <div class="form-row">
                        <div class="col">
                            <label>jaar</label>
                            <input class="form-control" type="number" name="jaarinput2" required value="<?php tempvalue($id, "jaar") ?>">
                        </div>
                        <div class="col">
                            <label class="text-center">Bier</label>
                            <input class="form-control" type="number" step=".1" name="bierinput2" required value="<?php tempvalue($id, "bier") ?>">
                        </div>
                        <div class="col">
                            <label>Wijn</label>
                            <input class="form-control" type="number" step=".1" name="wijninput2" required value="<?php tempvalue($id, "wijn") ?>">
                        </div>
                        <div class="col">
                            <label>Gedistilleerd</label>
                            <input class="form-control" type="number" step=".1" name="gedistilleerdinput2" required value="<?php tempvalue($id, "gedistilleerd") ?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Wijziging bevestigen</button> 
                        <a href="ProjectweekTabel.php"><button type="button" class="btn btn-primary">Annuleren</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
