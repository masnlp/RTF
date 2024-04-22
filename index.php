<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Demarlé Julianna">
    <!-- wtf is this ju??? 
    <meta http-equiv="refresh" content="3"> 
    -->
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div id="homepage_header"><h1>Rate The Food</h1>
        <?php 
            if(isset($_SESSION["user"]))
            {
                $user = $_SESSION["user"]["Username"];
                echo "boss, $user";
                echo "<a href='logout.php'>SIGN OUTUTT</a>";
            } else {
                echo "<a href='login.php'>LOG IN</a>";
                echo "<a href='signup.php'>SIGN UP</a>";
            }
            
        ?>

        
    </div>
    
    

    <!--Picture1-->


    <!--Food-Boxes start here-->
    
    <div class="homepage_container_fluid">
        <div class="homepage_container_list">
            <div class="homepage_search">
                
                
            </div>
            <img id="hmp_pic1" src="pictures/hmp_pasta.jpg" alt="big picture of two forks holding pasta">

        </div>
    </div>
</body>
</html>