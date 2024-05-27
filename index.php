<?php
    session_start();

    function showItems($result){
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
    }
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
        
        if(isset($_POST["submit"])){

            $searchbar = $_POST["searchbar"];
            
            $sqlSearch = "SELECT * FROM `Foos` WHERE FoodName LIKE '%$searchbar%'";
            
            $result = mysqli_query($db, $sqlSearch);
            
            
        } else {
            
            $sql = "SELECT * FROM Foos";
            
            $result = mysqli_query($db, $sql);
        }
        mysqli_close(  $db  );
        showItems   ($result);
    ?>
    


    
    <!--Food-Boxes start here-->

        
    
    
            <div class="homepage_search">
                
                
            </div>
                

                <table class="hmp_foods">

                    <tr>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td colspan="4">
                            <div class="hmp_pic1_and_searchbar">
                                <img id="hmp_pic1" src="pictures/hmp_pasta.png" alt="big picture of two forks holding pasta">
                            <form action="index.php" method="post" class="search-bar">
                                <input type="search" name="searchbar" class="searchbar" placeholder="Search ...">
                                <button type="submit" name="submit" value="Suchen" class="search-btn"></button>
                            </form>  
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                    </tr>
                    <tr>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                    </tr>
                    <tr>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td><img id="hmp_table_cburger" src="pictures/hmp_burger.jpg" alt="cheeseburger"></td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        <td><img id="hmp_table_frice" src="pictures/hmp_fried-rice.jpg" alt="frid rice"></td>
                        <td class="hmp_empty">Dies ist ein Platzhaltertext.............</td>
                        
                    </tr>
                    <tr id="backgroundtest">
                    <td class="hmp_empty"></td>
                        <th id="cheesertest">Cheeseburger</th>
                    </tr>
                </table>    

        
    

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
