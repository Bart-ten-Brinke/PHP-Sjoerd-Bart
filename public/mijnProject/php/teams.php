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
        <title>F1 Teams</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <div class=hoofddeel>
            <div class="team">
                Mercedes-AMG Petronas
                <a href="teams.php?id=1">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Scuderia Ferrari
                <a href="teams.php?id=2">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Aston Martin Red Bull Racing
                <a href="teams.php?id=3">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                McLaren F1
                <a href="teams.php?id=4">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Renault F1
                <a href="teams.php?id=5">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Scuderia AlphaTauri
                <a href="teams.php?id=6">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                BWT Racing Point F1
                <a href="teams.php?id=7">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Alfa Romeo Racing
                <a href="teams.php?id=8">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Haas F1 Team
                <a href="teams.php?id=9">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                ROKiT Williams Racing
                <a href="teams.php?id=10">
                    <span class="link"></span>
                </a>
            </div>
        </div>
    </body>
</html>

<?php
    }
    else {

    $sql = "SELECT naam FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $naam = mysqli_fetch_array($record);

    $sql = "SELECT land FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $land = mysqli_fetch_array($record);

    $sql = "SELECT eerste FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $eerste = mysqli_fetch_array($record);

    $sql = "SELECT actief FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $actief = mysqli_fetch_array($record);

    $sql = "SELECT baas FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $baas = mysqli_fetch_array($record);

    $sql = "SELECT een FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $een = mysqli_fetch_array($record);

    $sql = "SELECT twee FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $twee = mysqli_fetch_array($record);

    $sql = "SELECT car FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $auto = mysqli_fetch_array($record);

    $sql = "SELECT motor FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $motor = mysqli_fetch_array($record);

    $sql = "SELECT wcc FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $wcc = mysqli_fetch_array($record);

    $sql = "SELECT win FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $win = mysqli_fetch_array($record);

    $sql = "SELECT podium FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $podium = mysqli_fetch_array($record);

    $sql = "SELECT beste FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $beste = mysqli_fetch_array($record);

    $sql = "SELECT laatste_w FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $laatste_w = mysqli_fetch_array($record);

    $sql = "SELECT laatste_p FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $laatste_p = mysqli_fetch_array($record);

    $sql = "SELECT tekst1 FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst1 = mysqli_fetch_array($record);

    $sql = "SELECT tekst2 FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst2 = mysqli_fetch_array($record);

    $sql = "SELECT tekst3 FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst3 = mysqli_fetch_array($record);

    $sql = "SELECT tekst4 FROM teams WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst4 = mysqli_fetch_array($record);

    $soort = "team";
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
                <h1> <?php echo $naam[0]; ?> </h1>
                <br>
                <table>
                    <tr>
                        <td>Naam:</td>
                        <td> <?php echo $naam[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Nationaliteit:</td>
                        <td> <?php echo $land[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Eerste race:</td>
                        <td> <?php echo $eerste[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Jaren actief:</td>
                        <td> <?php echo $actief[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Teambaas:</td>
                        <td> <?php echo $baas[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Eerste driver:</td>
                        <td> <?php echo $een[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Tweede driver:</td>
                        <td> <?php echo $twee[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Auto:</td>
                        <td> <?php echo $auto[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Motor leveraar:</td>
                        <td> <?php echo $motor[0]; ?> </td>
                    </tr>
                    <tr>
                        <td>Aantal WCC's:</td>
                        <td> <?php echo $wcc[0]; ?> </td>
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
                        <td>Beste finish positie :</td>
                        <td> <?php echo $beste[0]; ?> </td>
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