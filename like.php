<?php
    session_start();

    if(!isset($_SESSION["user"])) {
        die();
    }

    $foodID = $_POST["foodID"];
    $userID = $_SESSION["user"] ["UserID"];

    $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");


    $sql = "INSERT INTO `likedFood` (`FoodID`, `UserID`) VALUES ($foodID, $userID)";
    

    mysqli_query($db, $sql);


    mysqli_close($db);


    header("Location: index.php");
?>