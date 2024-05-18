<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Demarlé Julianna">

    <link rel="stylesheet" href="styleImp.css">
    <title>Homepage</title>

</head>
<body>
    <header id="header">
        <div id="heading">
            <h1>RateTheFood</h1>

            <div id="loggin">
            <?php 

            if(isset($_SESSION["user"]))
            {
                $user = $_SESSION["user"]["Username"];

                echo "<a href='logout.php'>SIGN OUT</a>";
            } else {
                echo "<a href='login.php' style='margin-right: 10px;'>LOG IN </a>";
                echo "<a href='signup.php'>SIGN UP</a>";
            }

            ?>
            </div>

            <div id="links">
                <a href="index.php" style="margin-right: 10px;">GERICHTE</a>
                <a href="bestenliste.php" style="margin-right: 10px;">BESTENLISTE</a>
                <a href="#">IMPRESSUM</a>
            </div>
        </div>

        <div id="bar">
            
        </div>
    </header>



</body>
</html>
