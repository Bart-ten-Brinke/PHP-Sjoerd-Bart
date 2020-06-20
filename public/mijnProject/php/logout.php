<?PHP
    session_start();
    session_unset();
    session_destroy();
    require('database.php');
    mysqli_query($DBverbinding,"TRUNCATE `project`.`gebruiker`");
    header("Location: ../index.php");
?>