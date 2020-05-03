<?php
if(isset($_POST['name'])){

    //connection variables
$server = "localhost";
$username = "root";
$password ="";
//to make connection to the database or create a database
$con = mysqli_connect($server, $username, $password);
//check for connection
if(!$con){
    die("conection to this database failed due to " . mysqli_connect_error());

}
// echo "success";



//collect post variables
$name = $_POST['name'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$desc= $_POST['desc'];

$sql = " INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;


//execute query
if($con->query($sql)==true){
    echo "successfully inserted";
}
else{
    echo "error: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome ti SSGMCE US trip form</h1>
        <p>Enter your details and submit this form to comform your partichipation in the trip </p>

        <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="name " id="name">
            <input type="text" name="age" placeholder="age " id="age">
            <input type="text" name="gender" placeholder="gender" id="gender">
            <input type="text" name="email" placeholder="email " id="email">
            <input type="text" name="phone" placeholder="phone" id="phone">
            <textarea name="desc" placeholder="description" id="desc " cols="30" rows="10"></textarea>
            <button type="submit" class="btn">submit</button>



        </form>
    </div>
    <script src="main.js"></script>



</body>

</html>