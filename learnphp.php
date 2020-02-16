<html> 
<head>
    <title>Info gathered</title>    
</head>
<body>
    <?php

    echo "<p>Data processed</p>";

    date_default_timezone_set("UTC");

    echo date("h:i:s:u a, l F jS Y e");
    
    $usersName = $_POST['username'];
    $streetsAddress = $_POST['streetaddress'];
    $cityAddress = $_POST['cityaddress'];
    echo "<p>$usersName </br> $streetsAddress </br> $cityAddress </br></p>";

    ?>

</body>
</html>