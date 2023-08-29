<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$x1=0;

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
        $x1=5;
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                    $x1=4;
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
                $x1=6;
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    $x1=1;
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    $x1=2;
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    $x1=3;
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="tree.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.639dff71a171c385efa941f07cccd526?rik=JFCur4f%2fwvLFiA&riu=http%3a%2f%2ffiles.gamebanana.com%2fimg%2fico%2fsprays%2f50f916fcc9c5b.png&ehk=yJZLb5Bmq4mXww%2fsBMeWrBVmYCyrIopZpW68BelkCF0%3d&risl=&pid=ImgRaw&r=0">
    <title>FII Pharmacy</title>
<style> 
label{

color:white;
font-size: 20px;
  font-weight: 350;
  margin-right: 10px;

}
input{
    margin:10px;
}
h1 {
font-size: 48px; 
color: white; 
text-shadow: 4px 4px  #000000;
font-weight: 550;
margin-bottom: 10px;



}

.form-check-input{
    width: 25px;
    height:25px;
    margin-top: 20px;
    margin-left: 60px;
}#f{
    text-align: center;
    margin-right: 60px;
    margin-top: 50px;
    align-items: center;
    padding: 5px 5px;
  
}
.form-group{
    margin-top: 10px;
}
.form-control{
    
    border: 2px solid grey;
    border-radius: 8px;
    color: gray;
    outline: none;
    font-size: 15px;
    width: 280px;
    height: 50px;
    margin: 14px 0px;
    padding: 7px;
    background-color: black;
 
}
#btn-primary{
    background-color: #1410db;
    width: 250px;
    margin-top: 44px;
 
   
}
#btn-primary:hover,   #btn-primary:active {transition: all 0.2s ease 0s;
    background-color: #0a0873;
  
  
  }
  #hh1{
        margin-left: 10px;
    }
    #tree{
    margin-left: 70px;
    margin-top: 10px;
    font-size: 20px;
  }
  #btn3{
    margin-left: 30px;
    margin-top: 30px;
    background-color: #1410db;
  }
  #btn3:hover, #btn3:active {transition: all 0.3s ease 0s;

background: #0a0873;


    }
    .abcq{
        color: red;
        font-size:25px;
    }
</style>
</head>
<body class="url" style="background-color:#070217;  ">
  

      <section style="margin-left: 10px;" >
      
  
          
          <div class="container mt-4  "style="background: linear-gradient(to left top,#050a29 20%, #080682,#050a29 88% ); width: 1000px; height: 680px; margin-left:250px; margin-top:35px;border:solid 2px white;">
          <div> <a href="index.php"><button id="btn3"    class="flex  text-white  border-0 py-1 px-5 focus:outline-none hover:bg-indigo-600 rounded">← Go Back</button></a></div>
          <h1 class="mt-1">Register</h1>
          <?php
          if($x1==1){
       
        
            echo "<h3 class='abcq'>Password cannot be blank!</h3>" ;
          }
          else if($x1==2){
       
        
            echo "<h3 class='abcq'>Password cannot be less than 5 characters!</h3>" ;
          }
          else if($x1==3){
       
        
            echo "<h3 class='abcq'>Passwords should match!</h3>" ;
          }
          else if($x1==4){
       
        
            echo "<h3 class='abcq'>This username is already taken!</h3>" ;
          }
          else if($x1==5){
       
        
            echo "<h3 class='abcq'>Username cannot be blank!</h3>" ;
          }
          else if($x1==6){
       
        
            echo "<h3 class='abcq'>Something went wrong!</h3>" ;
          }
          ?>
          
          <form action="" method="post">
  <div style="margin-right:60px;"  class="form-row">
 
      <label style="margin-right:10px;" for="inputEmail4">Username</label>
      <input  style="margin-top:47px;"  type="text" class="form-control" name="username"  placeholder="Enter you Email" required>
      <label style="margin-left:60px;" for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password"  placeholder="Enter Your Password" required>
    

  
<br>
      <label style="margin-left:18px;" for="inputPassword4">Confirm</label>
      <input style="margin-top:60px;" type="password" class="form-control" name ="confirm_password" placeholder="Confirm Password" required>
      <label style="margin-left:70px;" for="inputAddress2">Address</label>
    <input  type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Address" required>
   

<br>
 
      <label style="margin-left:30px;" for="inputCity">Phone</label>
      <input style="margin-top:60px;" type="text" class="form-control" id="inputCity" placeholder="Enter Your Phone" required>
      <label style="margin-left:60px;" for="inputCity">City/State</label>
      <input style="margin-top:60px;" type="text" class="form-control" id="inputCity" placeholder="Enter Your City" required>
   

      
      
      </select>
    
   
      
  </div>
  <div class="form-group">
    <div class="form-check">
      
    </div>
  </div>
  <button type="submit" id="btn-primary" class="text-white  border-0 py-2 px-6 focus:outline-none  rounded text-lg">Register</button>
</form>
          
         
          
          </div>
         
      </section>
  </body>
  </html>
      
   
         
