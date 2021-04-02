<?php
$insert = false;

if(isset($_POST['name'])){

$db = 'localhost';
$user = 'root';
$pass = '';


$con = mysqli_connect($db, $user, $pass);

if(!$con){
   die("unable to connect" . mysqli_connect_error());   
} 

//echo "Great Mate";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO `data`.`datalog` (`Name`, `Email`, `Message`) VALUES ('$name','$email','$message');";
//echo $sql;

if($con->query($sql) == true){
    //echo "successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>


<!Doctype html>
<html lang="en" dir="ltr">
<head>
    <Title>Arvind Khichar</Title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
</head>
<body>
<div class="contact">
            <h1 style="color: teal">Contact Me</h1>
            <?php
            if($insert == true){
            echo "<p>Form submitted successfully</p>";
            }
            ?>
            <div class="form">
                <form action="index.php" method="POST">
                    Name<br><input class="cname" type="text" name="name" size="40" placeholder=" type your name here" required><br><br>
                    Email<br><input class="cname" type="email" name="email" size="40" placeholder=" type your email here" required><br><br>
                    Your Query<br><input class="cquery" type="text" name="message" size="40" placeholder=" write your query here"><br><br>
                    <input class="csubmit" type="submit" value="submit" required><br><br>
                </form>
            </div>
        </div>

</body>
</html>
