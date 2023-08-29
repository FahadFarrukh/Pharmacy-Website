<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
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
    <link href="about1.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.639dff71a171c385efa941f07cccd526?rik=JFCur4f%2fwvLFiA&riu=http%3a%2f%2ffiles.gamebanana.com%2fimg%2fico%2fsprays%2f50f916fcc9c5b.png&ehk=yJZLb5Bmq4mXww%2fsBMeWrBVmYCyrIopZpW68BelkCF0%3d&risl=&pid=ImgRaw&r=0">
    <title>FII Pharmacy</title>
<style>
   #btn3{
    margin-left: 30px;
    margin-top: 30px;
    background-color: #1410db;
  }
  #btn3:hover, #btn3:active {transition: all 0.3s ease 0s;

background: #0a0873;


    }
    #outb{
 
    margin-top: 80px;
    background-color: #1410db;
    width: 150px;
    text-align:center;
    font-size:25px;
  }
  #outb:hover, #outb:active {transition: all 0.3s ease 0s;
    background-color: #0a0873;
color:white;


    }
</style>
</head>

     
      <body class="url" style="background-color:#070217;  ">
  

      <section style="margin-left: 10px;" >
      
  
          
          <div class="container mt-4  "style="background: linear-gradient(to left top,#050a29 20%, #080682,#050a29 88% ); width: 700px; height: 600px; margin-left:400px; margin-top:80px;border:solid 2px white;">
          <div> <a href="index.php"><button id="btn3"    class="flex  text-white  border-0 py-1 px-5 focus:outline-none hover:bg-indigo-600 rounded">← Go Back</button></a></div>
         
        
          
          <section style="margin-top: 40px;text-align:center;align-content:center;">
      

  
      <div style="margin-left:0px;" >
      <h1 style="font-weight:400;font-size:30px;"><?php echo 'Welcome '. $_SESSION['username']?>! You are now Logged In.</h1>
      <img style="margin-left:200px;margin-top:20px;height:300px;" src="https://cdn4.iconfinder.com/data/icons/medical-soft-4/512/clinic_pharmacy_medical_ambulance_hospital_drug_shop_drugstore-512.png"></img>
      <div style=" margin-top: 40px;"> <a href="logout.php" id="outb" class="  text-white  border-0 py-1 px-8 focus:outline-none hover:bg-indigo-600 rounded"><button>Log Out</button></a> </div>
     
      </div>
      
     
          
        
         
      </section>
  </body>
   
         
 
</body>
</html>