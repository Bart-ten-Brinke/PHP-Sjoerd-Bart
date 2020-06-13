<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require('database.php');
    require('header.php');
    
    $id = $_GET["id"];
    if($id==0) {
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>F1 Coureurs</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
         <div class=hoofddeel>
            <div class="coureur">
                Lewis Hamilton
                <a href="coureurs.php?id=1">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Valtteri Bottas
                <a href="coureurs.php?id=2">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Sebastian Vettel
                <a href="coureurs.php?id=3">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Charles Leclerc
                <a href="coureurs.php?id=4">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Max Verstappen
                <a href="coureurs.php?id=5">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Alexander Albon
                <a href="coureurs.php?id=6">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Carlos Sainz
                <a href="coureurs.php?id=7">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Lando Norris
                <a href="coureurs.php?id=8">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Daniel Ricciardo
                <a href="coureurs.php?id=9">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Esteban Ocon
                <a href="coureurs.php?id=10">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Pierre Gasly
                <a href="coureurs.php?id=11">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Daniil Kvyat
                <a href="coureurs.php?id=12">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Sergio Perez
                <a href="coureurs.php?id=13">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Lance Stroll
                <a href="coureurs.php?id=14">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Kimi Räikkönen
                <a href="coureurs.php?id=15">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Antonio Giovinazzi
                <a href="coureurs.php?id=16">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Romain Grosjean
                <a href="coureurs.php?id=17">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Kevin Magnussen
                <a href="coureurs.php?id=18">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                George Russell
                <a href="coureurs.php?id=19">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Nicholas Latifi
                <a href="coureurs.php?id=20">
                    <span class="link"></span>
                </a>
            </div>
         </div>
    </body>
</html>

<?php
    }
    else {

    $sql = "SELECT naam FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $naam = mysqli_fetch_array($record);

    $sql = "SELECT geboorte FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $geboorte = mysqli_fetch_array($record);

    $sql = "SELECT land FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $land = mysqli_fetch_array($record);

    $sql = "SELECT nummer FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $nummer = mysqli_fetch_array($record);

    $sql = "SELECT huidig FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $huidig = mysqli_fetch_array($record);

    $sql = "SELECT career FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $career = mysqli_fetch_array($record);

    $sql = "SELECT wdc FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $wdc = mysqli_fetch_array($record);

    $sql = "SELECT win FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $win = mysqli_fetch_array($record);

    $sql = "SELECT podium FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $podium = mysqli_fetch_array($record);

    $sql = "SELECT laatste_w FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $laatste_w = mysqli_fetch_array($record);

    $sql = "SELECT laatste_p FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $laatste_p = mysqli_fetch_array($record);

    $sql = "SELECT tekst1 FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst1 = mysqli_fetch_array($record);

    $sql = "SELECT tekst2 FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst2 = mysqli_fetch_array($record);

    $sql = "SELECT tekst3 FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst3 = mysqli_fetch_array($record);

    $sql = "SELECT tekst4 FROM coureurs WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst4 = mysqli_fetch_array($record);

    $soort = "coureur";
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title> <?php echo $naam[0]; ?> </title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <div class="alles">
            <div class="links">
            </div>
        
            <div class="midden">
                <header class="Coureurnaam">
                    <h1> <?php echo $naam[0]; ?> </h1>
                </header>
                <br>
                <table>
                    <tr>
                        <td>Naam:</td>
                        <td> <?php echo $naam[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Geboortedatum:</td>
                        <td> <?php echo $geboorte[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Nationaliteit:</td>
                        <td> <?php echo $land[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Racenummer:</td>
                        <td> <?php echo $nummer[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Huidig team:</td>
                        <td> <?php echo $huidig[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Carrière:</td>
                        <td> <?php echo $career[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Aantal WDC's:</td>
                        <td> <?php echo $wdc[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Aantal overwinningen:</td>
                        <td> <?php echo $win[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Aantal podiums:</td>
                        <td> <?php echo $podium[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Laatste overwinning:</td>
                        <td> <?php echo $laatste_w[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Laatste podium:</td>
                        <td> <?php echo $laatste_p[0]; ?> </td>
                    </tr>
                </table>

                <br>
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

                <br>
                <br>
                <br>
                
                <?php
                    require('comment.php');
                ?>
                
                <br>
                <br>

            </div>

            <div class="rechts">
            </div>
            
        </div>
    </body>
</html>

<?php
    }
    require('footer.php');
?>