<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <title>Bestenliste</title>
</head>
<body>
    
    <?php
    
    $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");

    $sql = "SELECT f.FoodID, f.FoodName, f.Nationality, f.PachToPic, COUNT(lf.UserID) AS Likes
            FROM Foos AS f
            INNER JOIN likedFood AS lf
            ON f.FoodId = lf.FoodID
            GROUP BY lf.FoodID
            ORDER BY COUNT(lf.UserID) DESC;";

    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_array($result)){
        $foodID = $row['FoodID'];
        $foodName = $row['FoodName'];
        $pathToPic = $row['PachToPic'];
        $likes = $row['Likes'];
        echo $foodName. " ". " from: ". $row['Nationality'];

        echo '<div>';
        
        echo "<img src=\"$pathToPic\" alt=\"Pic of $foodName\" style=\"width: 100px; height: 100px;\">";
        echo "Likes: ".$likes;

        echo '</div>';

    
    }

    mysqli_close($db);
    ?>

</body>
</html>