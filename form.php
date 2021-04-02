<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "bhaag yahaa se";
    echo "<br>";
    $myVar = 2;
    echo $myVar;
    echo "<br>";
    while($myVar<5){
    echo var_dump($myVar);
    echo "<br>";
    $myVar++;
    }
    $myVar = array("arvind", "ankit", "abhishek");
    $a = 30;
    //echo $myVar[0];
    echo "<br>";
    for($a=30; $a<35; $a++){
        echo "this is from for loop";
        echo "<br>";
    }
    $a=0;
    while($a<=10){
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
    $a=0;
    echo "<br> break <br>";
    do{
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
    while($a<10);
    ?>
</body>
</html>