<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "us_trip";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
    }
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    //$tstamp = $_POST['tstamp'];

    //echo "Connection successful to the database";
    $sql = "INSERT INTO `clg_trip`.`us_trip` (`id`, `name`, `gender`, `age`, `email`, `phone`, `other`, `tstamp`) 
    VALUES ('$id', '$name', '$gender', '$age', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;

    if($con->query($sql) == TRUE){
        //echo "Successfully inserted";\

        $insert = TRUE;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        $not_insert = true;
    }

    $con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img class="wp" src="Walter_Pyramid.jpg" alt="CSULB" srcset="">
    <div class="container">
        <h1>Welcome to the USA Travel Form</h1>
        <P> Enter your details and submit this form to confirm your participation in the trip</P>
        <?php
        IF($insert == true){
        echo "<P class='submitForm'>Thank you for submitting the form , we will get back to you soon via email</P>";}
        ?>

        <form action="index.php" method="post">
            <input type="id" name="id" id="id" placeholder="Enter your Student ID">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name ="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info if any"></textarea>
            <button class="btn">Submit</button>
    </div>
    <script src="index.js"></script>
    <!---->
</body>
</html>