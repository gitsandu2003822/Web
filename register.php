<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "company";

//create the connection
$connection = mysqli_connect($host,$username,$password,$database);

//check the connection
if(!$connection){

    die("connection error!:".mysqli_connect_error());
}

//user input data

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = $_POST['first name'];
    $lname = $_POST['second name'];
    $address = $_SERVER['address'];
    $email = $_SERVER['email'];
    $gender = $_SERVER['gender'];


//write the sql query
$sql = "INSERT INTO registration
('FirstName',LastName,Address,Email,Gender)VALUES('  $fname','$lname',' $address','$email','$gender')";

//run the query

if($connection->query($sql)==true){

    echo"Record inserted";
}
else{

    echo"error";
}

//close the connection
$connection->close();
}
?>