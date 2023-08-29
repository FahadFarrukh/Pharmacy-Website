<?php
$insert = false;
error_reporting(0);
session_start();
if(isset($_POST['name'])){
  
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $id = $_SESSION["id"];
   
    $sql = "INSERT INTO `pharmacy`.`contact` (`name`, `email`, `message`,`dt`,`id`) VALUES ('$name', '$email', '$message', current_timestamp(),'$id')";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $con->close();
        header("location: response.php");

    }
    else{
        
        $con->close();
        header("location: error.php");
        
    }

    // Close the database connection
    

}
?>