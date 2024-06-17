<?php
    session_start();

    if(!isset($_SESSION["user"])) 
    {
        $_SESSION["error"] ["login"] = "Log dich ein um zu liken >:(";
        header("Location: index.php");
        die();
    }

    $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");

    $foodID = $_POST["foodID"];
    $userID = $_SESSION["user"] ["UserID"];

    $likes  = "SELECT Likes Foos Where foodID = $foodID";
    $check  = "SELECT FoodID FROM likedFood WHERE UserID = $userID";


    
    $result = mysqli_query($db, $check);

    $alreadyLiked = FALSE;

    while($row = mysqli_fetch_array($result))
    {
        if($row["FoodID"] == $foodID)
        {
            $alreadyLiked = TRUE;
            $_SESSION["error"] ["doublelike"] = "Dieses essen ist bereits geliked";
            break;
        }
    }
    
    if(!$alreadyLiked)
    {
        $sql    = "INSERT INTO likedFood (FoodID, UserID) VALUES ($foodID, $userID)";
        $update = "UPDATE Foos SET Likes = ($likes) + 1 WHERE FoodID = $foodID";

        mysqli_query($db, $sql);
        mysqli_query($db, $update);
        
    }


    mysqli_close($db);


    header("Location: index.php");
?>