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

    $str = <<<EOD
    Customer's name is $usersName.
    They live at $streetsAddress in $cityAddress.</br>
EOD;

    echo $str;

    define("MY_AGE", 25);

    echo "I am " . MY_AGE . " years old.</br>";

    $num = 10;
    $numRef = &$num;
    echo "</br>\$num ($num) is equal to \$numRef (" . $numRef . ") --according to reference operators.</br></br>";

    $myArr = array("c", "a", 5);
    $myArr[900] = 7;

    foreach($myArr as $z){
        echo $z . " </br></br>";
    }

    $kvarr = array("One"=>1, "Two"=>2, "Three"=>3);
    
    foreach($kvarr as $key => $val) {
        echo $key . " : ". $val . "</br>";
    }

    echo "</br></br>";

    $testAddArr = $myArr + $kvarr;

    foreach($testAddArr as $z){
        echo $z . ", ";
    }

    echo "</br></br>";

    ?>

</body>
</html>