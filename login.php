<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <title>Login</title>
</head>
<body>

    <form action="login.php" method="post">

        <label for="Username">Username / Email:</label> 
        <input type="text" name="Username" id="Username" placeholder="Username / Email">
        <br>
        <label for="Password">Password</label>
        <input type="password" name="Password" id="Password">
        <br>
        <input type="submit" name="submit" id="submit" value="LOGIN">

    </form>
    
    <?php 

        if(isset($_POST["submit"]))
        {
            $username = $_POST["Username"];
            $password = $_POST["Password"];

            $passwordEnc = hash('sha256', $password);


            $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");

            $sql = "SELECT * FROM users WHERE (Username = '$username' OR EMail = '$username') AND Password = '$passwordEnc'";

            $result = mysqli_query($db, $sql);

            #while($row = mysqli_fetch_array($result)){
            #    print_r($row);
            #}

            if (($user = mysqli_fetch_array($result)) != null) 
            {
                $_SESSION["user"] = $user;
                
                header("Location: index.php");
            }
            
            mysqli_close($db);
            
        }
        

    ?>

</body>
</html>