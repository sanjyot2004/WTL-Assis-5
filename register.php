<?php
session_start();

if(isset($_POST['registerbtn'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['clss'];
    $email = $_POST['email'];
    $password = $_POST['pws'];


    $con = mysqli_connect('localhost','root','','assignment5');
    $sql = "INSERT INTO student VALUES ('$name','$roll','$class','$email','$password')";
    $sql = "select * from student";

    if($result){
        echo "Data inserted successfully";
    }
    else{
        echo "Data not inserted";
        die(mysqli_error($con));
    }

}
?>