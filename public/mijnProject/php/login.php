<?php
    include('database.php');
    session_start();
    if (isset($_POST['mail'])) {
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM accounts WHERE email='".$mail."' AND wachtwoord='".$pass."'";
        $records = mysqli_query($DBverbinding, $sql);
        
        if (mysqli_num_rows($records) == 1) {
            $_SESSION["user"] = "$mail";
            $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
            $_SESSION["alert"] = 1;

            $sql = "SELECT naam FROM accounts WHERE email='$mail'";
            $record = mysqli_query($DBverbinding, $sql);
            $user = mysqli_fetch_array($record);
            mysqli_query($DBverbinding,"INSERT INTO `gebruiker` (`naam`) VALUES ('$user[0]')");

            require('home.php');
        }
        
        else {
            $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
            $_SESSION["alert"] = 0; 
            header("Location: ../index.php");
        }
    }
?>