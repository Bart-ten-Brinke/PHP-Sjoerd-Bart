<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/design.css">
    </head>

    <body>
        <div class="header">
            <div style="width: 286.5px; height: 100px; display: table-cell;">
                <img src="images/logo.png" alt="Logo" style="height:70px; margin: 15px;">
            </div>
        </div>
        
        <div class="login">
            <form method="POST" class="login" action="php/login.php">
                <label for="mail">E-mail:</label>
                <br>
                <input type="email" class="form-control mb-2 mr-sm-2" placeholder="e-mail..." id="mail" name="mail">
                <br>
                <label for="pass">Wachtwoord:</label>
                <br>
                <input type="password" class="form-control mb-2 mr-sm-2" placeholder="wachtwoord..." id="pass" name="pass">
                <br>
                <button type="submit" class="btn btn-secondary mb-2">LOGIN</button>
            </form>
        </div>
        <div class="nieuwA">
            <p>Heeft u nog geen account?</p>
            <p>Maak hier dan een account aan:</p>
            <a href="php/nieuwAccount.php">NIEUW ACCOUNT</a>
        </div>
        <br>
        <br>
    </body>
</html>

