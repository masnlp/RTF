<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Demarlé Julianna">

    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>

</head>
<body>
        <div id="homepage_sign">
            <?php 
            if(isset($_SESSION["user"]))
            {
                $user = $_SESSION["user"]["Username"];
                echo "boss, $user";
                echo "<a href='logout.php' class='hmp_logout' style='position:absolute; top:200px; right:190px' >SIGN OUT</a>";
            } else {
                echo "<a href='login.php' class='hmp_login'>LOG IN</a>";
                echo "<a href='signup.php' class='hmp_signup'>SIGN UP</a>";
            }
            
        ?>
        
        </div>
    
    

    <!--Picture1
        also all the foos from the table foos
    -->

    <?php 
    
        $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");

        $sql = "SELECT * FROM Foos";

        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result)){
            $foodID    = $row[ 'FoodId'  ];
            $foodName  = $row['FoodName' ];
            $pathToPic = $row['PachToPic'];
            $likes     = $row[  'Likes'  ];

            echo "<div id='hmp_food_descrip'>" . $foodName. " ". " from: ". $row['Nationality'] . "</div>";

            echo '<div>';
            echo '    <form action="like.php" method="post">';
            echo '        <input type="number" name="foodID" id="foodID" value="'.$foodID.'" hidden>';
    
            echo '        <input type="submit" value="like"> '. $likes;
            echo '    </form>';
            echo "<img src=\"$pathToPic\" alt=\"Pic of $foodName\" style=\"width: 100px; height: 100px;\">";
            echo '</div>';

            
        }

        mysqli_close($db);
    ?>
    


    
    <!--Food-Boxes start here-->

    
    
    <div class="homepage_container_fluid">
        <div class="homepage_container_list">
            <div class="homepage_search">
                
                
            </div>
            <div class="hmp_pic1_and_searchbar">
                <img id="hmp_pic1" src="pictures/hmp_pasta.png" alt="big picture of two forks holding pasta">
                <input type="search" name="searchbar" id="hmp_searchbar" placeholder="Gib hier den Namen eines Gerichts ein...">
            </div>
            

        </div>
    </div>

    <div id="errorMsges">
        <?php
            if(isset($_SESSION["error"]))
            {
                echo "<ul>";
                foreach ($_SESSION["error"] as $key => $value) 
                {
                    echo "<li>";
                    echo "$key => $value";
                    echo "</li>";
                }

                echo "<ul>";
            }

            unset($_SESSION["error"]);
        ?>
    </div>
</body>
</html>
