<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <title>Bestenliste</title>
    <link rel="stylesheet" href="stylebest.css">
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
                echo "<a href='index.php'>HOME</a>";
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


    <?php
    
    $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");

    $sql = "SELECT FoodID, FoodName, Nationality, PachToPic, Likes FROM Foos ORDER BY LIKES DESC";

    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_array($result)){
        $foodID    = $row[ 'FoodID'  ];
        $foodName  = $row['FoodName' ];
        $pathToPic = $row['PachToPic'];
        $likes     = $row[  'Likes'  ];

        

        echo "<table>
            
            <tr>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
            </tr>
            <tr class='hmp_foods'>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
            </tr>


            <tr>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                <td class='text_in_table'><div id='hmp_food_descrip'>$foodName: $likes Like/s </div><br></td>
                <td><img src=\"$pathToPic\" alt=\"Pic of $foodName\" style=\"width: 400px;\"></td>
                <td class='hmp_empty'>Dies ist ein Platzhaltertext.............</td>
                
            </tr>

            
            
        </table>";
    }

    mysqli_close($db);
    
    ?>

</body>
</html>
