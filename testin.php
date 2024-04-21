<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Elias Schinkinger">
    <title>PGPHPHP</title>
</head>
<body>
    
    <?php 
    
        $db = mysqli_connect("eliasschinkinger.lima-db.de:3306", "USER436891_gaudi", "gAudI420!?", "db_436891_2");

        $sql = "SELECT * FROM Foos";

        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result)){
            print_r($row);
        }

        mysqli_close($db);
    ?>

</body>
</html>