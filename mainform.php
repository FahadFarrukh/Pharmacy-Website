<?php
$insert = false;

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
    $cnic = $_POST['cnic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $id = $_SESSION["id"];
 
   
    $sql = "INSERT INTO `pharmacy`.`billing` (`name`, `cnic`,`phone`,`email`,`address`,`dt`,`id`) VALUES ('$name', '$cnic', '$phone','$email','$address', current_timestamp(),'$id')";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $con->close();
        header("location: successful.php");

    }
    else{
        echo "<p1>Please log in first<p1>";
        echo "ERROR: $sql <br> $con->error";
        $con->close();
        header("location: unsuccessful.php");
       
    }

    // Close the database connection
    

}
?>