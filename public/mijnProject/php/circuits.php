<?php
error_reporting(E_ALL & ~E_NOTICE);
require('database.php');
require('header.php');
$id = $_GET["id"];
?>

<?php 
    if($id==0) {
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>F1 Circuits</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
    <h1 class="paginatitel">Alle Formule 1 circuits van het seizoen 2020</h1>
        <div class=hoofddeel>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto1">
                Melbourne
                <a href="circuits.php?id=1">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Melbourne.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto2">
                Bahrein
                <a href="circuits.php?id=2">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Bahrein.png" style="width:320px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto3">
                Hanoi
                <a href="circuits.php?id=3">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Hanoi.png" style="width:340px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto4">
                Shanghai
                <a href="circuits.php?id=4">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Shanghai.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto5">
                Zandvoort
                <a href="circuits.php?id=5">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Zandvoort.png" style="width:320px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto6">
                Barcelona
                <a href="circuits.php?id=6">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Barcelona.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto7">
                Monaco
                <a href="circuits.php?id=7">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Monaco.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto8">
                Baku
                <a href="circuits.php?id=8">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Baku.png" style="width:360px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto9">
                Montreal
                <a href="circuits.php?id=9">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Montreal.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto10">
                Marseille
                <a href="circuits.php?id=10">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Marseille.png" style="width:350px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto11">
                Spielberg
                <a href="circuits.php?id=11">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Spielberg.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto12">
                Silverstone
                <a href="circuits.php?id=12">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Silverstone.png" style="width:350px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto13">
                Budapest
                <a href="circuits.php?id=13">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Budapest.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto14">
                Spa-Franchorchamps
                <a href="circuits.php?id=14">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Spa-Francorchamps.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto15">
                Monza
                <a href="circuits.php?id=15">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Monza.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto16">
                Singapore
                <a href="circuits.php?id=16">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Singapore.png" style="width:350px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto17">
                Sochi
                <a href="circuits.php?id=17">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Sochi.png" style="width:350px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto18">
                Suzuka
                <a href="circuits.php?id=18">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Suzuka.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto19">
                Austin
                <a href="circuits.php?id=19">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Austin.png" style="width:240px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto20">
                Mexico-city
                <a href="circuits.php?id=20">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Mexico-city.png" style="width:350px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto21">
                São Paulo
                <a href="circuits.php?id=21">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2São Paulo.png" style="width:290px; margin: 0px;">
                </div>
            </div>
            <div class="circuit achtergrondfotoalgemeen achtergrondfoto22">
                Abu Dhabi
                <a href="circuits.php?id=22">
                    <span class="link"></span>
                </a>
                <div>
                <img src="../images/circuits/2Abu Dhabi.png" style="width:270px; margin: 0px;">
                </div>
            </div>

        </div>
    </body>
</html>

<?php
    }

    else {
?>
<?php
    $sql = "SELECT land FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $land = mysqli_fetch_array($record);

    $sql = "SELECT naam FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $naam = mysqli_fetch_array($record);

    $sql = "SELECT eerste FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $eerste = mysqli_fetch_array($record);

    $sql = "SELECT lengte FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $lengte = mysqli_fetch_array($record);

    $sql = "SELECT rondes FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $rondes = mysqli_fetch_array($record);

    $sql = "SELECT totaal FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $totaal = mysqli_fetch_array($record);

    $sql = "SELECT bochten FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $bochten = mysqli_fetch_array($record);

    $sql = "SELECT drs FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $drs = mysqli_fetch_array($record);

    $sql = "SELECT richting FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $richting = mysqli_fetch_array($record);

    $sql = "SELECT soort FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $soort = mysqli_fetch_array($record);

    $sql = "SELECT winnaar FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $winnaar = mysqli_fetch_array($record);

    $sql = "SELECT snelste FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $snelste = mysqli_fetch_array($record);

    $sql = "SELECT foto FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $foto = mysqli_fetch_array($record);

    $sql = "SELECT tekst1 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst1 = mysqli_fetch_array($record);

    $sql = "SELECT tekst2 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst2 = mysqli_fetch_array($record);

    $sql = "SELECT tekst3 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst3 = mysqli_fetch_array($record);

    $sql = "SELECT tekst4 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst4 = mysqli_fetch_array($record);

    $sql = "SELECT tekst5 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst5 = mysqli_fetch_array($record);

    $sql = "SELECT tekst6 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst6 = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="nl">

    <head>
        <title> <?php echo $foto[0]; ?> </title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <h1>Grand Prix van <?php echo $land[0]; ?> </h1>
        <br>
        <h2> <?php echo $naam[0]; ?> : </h2>

        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td> <?php echo $eerste[0]; ?> </td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td> <?php echo $lengte[0]; ?> </td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td> <?php echo $rondes[0]; ?> </td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td> <?php echo $totaal[0]; ?> </td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td> <?php echo $bochten[0]; ?> </td>
            </tr>
            <tr>
                <td>Aantal DRS-zones:</td>
                <td> <?php echo $drs[0]; ?> </td>
            </tr>
            <tr>
                <td>Rijrichting:</td>
                <td> <?php echo $richting[0]; ?> </td>
            </tr>
            <tr>
                <td>Circuit type:</td>
                <td> <?php echo $soort[0]; ?> </td>
            </tr>
            <tr>
                <td>Laatste winnaar:</td>
                <td> <?php echo $winnaar[0]; ?> </td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td> <?php echo $snelste[0]; ?> </td>
            </tr>
        </table>

        <br>
        <img src="../images/circuits/<?= $foto[0]?>.png" alt="Circuit" style="width:700px; margin: 15px;">
        <br>

        <p>
            <?php echo $tekst1[0]; ?>
        </p>
        <p>
            <?php echo $tekst2[0]; ?>
        </p>
        <p>
            <?php echo $tekst3[0]; ?>
        </p>
        <p>
            <?php echo $tekst4[0]; ?>
        </p>
        <p>
            <?php echo $tekst5[0]; ?>
        </p>
        <p>
            <?php echo $tekst6[0]; ?>
        </p>
        <br>
        <br>
        <br>
        <?php
            require('comment.php');
        ?>
        <br>
        <br>
    </body>

</html>

<?php
    }
?>

<?php
    require('footer.php');
?>

