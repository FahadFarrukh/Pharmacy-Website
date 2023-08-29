<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                        else{
                            header("location: incorrect.php");
                        }
                      
                    }  else{
                        header("location: incorrect.php");
                    }

                }
                else{
                    header("location: incorrect.php");
                }

    }
}    


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
    margin-top: 5px;
    align-items: center;
    padding: 5px 5px;
    margin-bottom: 10px;
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
    width: 400px;
    height: 50px;
    margin: 14px 0px;
    padding: 7px;
    background-color: black;
 
}
#btn-primary{
    background-color: #1410db;
    width: 290px;
    margin-top: 40px;
    margin-bottom: 20px;
    margin-left: 60px;
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
</style>
</head>
<body class="url" style="background-color:#070217;  ">
  

      <section style="margin-left: 10px;" >
      
  
          
          <div class="container mt-4  "style="background: linear-gradient(to left top,#050a29 20%, #080682,#050a29 88% ); width: 700px; height: 600px; margin-left:400px; margin-top:80px;border:solid 2px white;">
          <div> <a href="index.php"><button id="btn3"    class="flex  text-white  border-0 py-1 px-5 focus:outline-none hover:bg-indigo-600 rounded">← Go Back</button></a></div>
          <h1 class="mt-5">Log In</h1>
        
          
          <form id="f" action="" method="post" >
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
              <label style="margin-left: 5px;" for="exampleInputPassword1"> Password </label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label id="hh1" class="form-check-label" for="exampleCheck1">Save My Information</label>
            </div>
            <button type="submit" id="btn-primary" class="text-white  border-0 py-2 px-6 focus:outline-none  rounded text-lg">Log In</button>
          </form>
          
          <p id="tree">Dont have an account? <a style="font-weight:400;" id="regtag" href="register.php"> Register </a>Now</p>
          
          </div>
         
      </section>
  </body>
  </html>
      
   
         
