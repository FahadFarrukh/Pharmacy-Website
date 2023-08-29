<?php



session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: error.php");
}







  
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
    $quantity=$_POST['Quantity'];
    $product=$_POST['pno'];
    
    if($product==1){
       
      $price=20*$quantity;
      $pname="Panadol";
      
    }
    elseif($product==2){
      $price=25*$quantity;
      $pname="Calpol";
      
    }
    elseif($product==3){
      $price=50*$quantity;
      $pname="Ponston";
    }
    elseif($product==4){
      $price=200*$quantity;
      $pname="Surbex Z";
    }
    elseif($product==5){
      $price=120*$quantity;
      $pname="Xanax";
    }
    elseif($product==6){
      $price=155*$quantity;
      $pname="Calamox";
    }
    elseif($product==7){
      $price=70*$quantity;
      $pname="Flagyl";
    }
    elseif($product==8){
      $price=200*$quantity;
      $pname="Rivotril";
    }
    elseif($product==9){
      $price=650*$quantity;
      $pname="Extor";
    }
    elseif($product==10){
      $price=120*$quantity;
      $pname="pcam gel";
    }
    elseif($product==11){
      $price=200*$quantity;
      $pname="Saniplast";
    }
    elseif($product==12){
      $price=140*$quantity;
      $pname="Brufen Cream";
    }
    $id = $_SESSION["id"];
    
 
   
    $sql = "INSERT INTO `pharmacy`.`total` (`pname`,`quantity`, `product`,`price`,`dt`,`id`) VALUES ('$pname','$quantity', '$product', '$price', current_timestamp(),'$id')";

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $con->close();
      

    }
    else{
        echo "<p1>Please log in first<p1>";
        echo "ERROR: $sql <br> $con->error";
       // header("location: error.php");
        $con->close();
    }

    // Close the database connection
    






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
    <link href="form.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.639dff71a171c385efa941f07cccd526?rik=JFCur4f%2fwvLFiA&riu=http%3a%2f%2ffiles.gamebanana.com%2fimg%2fico%2fsprays%2f50f916fcc9c5b.png&ehk=yJZLb5Bmq4mXww%2fsBMeWrBVmYCyrIopZpW68BelkCF0%3d&risl=&pid=ImgRaw&r=0">
    <title>FII Pharmacy</title>
    <style> 
.price{
  font-size:36px;
  font-weight:700;
}       #btn3{
    color: white;
    background: #0d0a5a;
    padding: 2px 29px;
    font-size: 18px;
    border: 2px solid white;
    cursor: pointer;
    margin-top:30px;
height:40px;
    width:148px;

}
#btn3:hover, #btn3:active {transition: all 0.3s ease 0s;

background: #230ebf;


    }

  </style>
</head>
<body class="url" style="background: linear-gradient(to left top,#050a29 20%, #080682,#050a29 88% );  ">
  

      <section style="margin-top:80px;" class=" body-font">
     
      <h1 style="font-size:72px;margin-left:250px;margin-bottom:20px;text-shadow: 10px 10px  #000000;" class="title-font   mb-4 font-medium ">Medicines Purchase & Delivery
            </h1>
           
          </div>
      
     
        <div class="container mx-auto flex px-5 py-20 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-20 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          
            <br>
            <?php
        
       
       
       

      if($product==1){
       
        
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==2){
      
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==3){
      
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==4){
      
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==5){
      
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==6){
     
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==7){
     
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==8){
      
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==9){
       
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==10){
   
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==11){
     
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
      elseif($product==12){
      
        echo "<h1 class='price'>Your Total Amount is : Rs $price</h1>" ;
      }
    ?>
            <form style="margin-bottom:200px;" action="mainform.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                <input type="text" name="cnic" id="age" placeholder="Enter your CNIC" required>
                <input type="text" name="phone" id="gender" placeholder="Enter your Phone" required>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                <input type="phone" name="address" id="phone" placeholder="Enter your Address" required>
         
                
                   
                <textarea name="prescription" id="desc" cols="30" rows="10" placeholder="Mention your Doctors Prescription" required></textarea>
               
                    <br>
                    <label class="container1">
  <input type="checkbox">
  <span class="checkmark"></span>
  <p>Save this information for next time.</p>
</label>
                   
                
                  <br> <br> <br> <br> <br> <br> 
                <button class="btn">Order</button> 
            </form>
          </div>
          <script src="index.js"></script>
       
    
          
          
          <div  class="  ">
            <img style="height: 530px;width:500px; margin-top:50px;" class="object-cover object-center rounded" alt="hero" src="https://cdn4.iconfinder.com/data/icons/medical-soft-2/512/treatment-512.png">
            <img style="height: 630px;width:600px;" class="object-cover object-center rounded" alt="hero" src="https://cdn4.iconfinder.com/data/icons/medical-soft-5/512/transport_alert_ambulance_medicine_transportation_medical_help_mobile_hospital-512.png">
          </div>
          
        </div>
      
      </section>
   
         
      <footer style="margin-top: 50px;" class=" body-font">
        <hr />
        <div class="container px-5 py-20 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
         
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-5 mt-15">
            
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <img src="logo.png" style="height: 120px; width:120px;border-radius: 50%;border: solid 2px white;" >
               
            </img>
              <h2 class="ml-4 text-xl leading-relaxed text-3xl font-medium tracking-widest">FII Pharmacy</h2>
            </a>
           
          </div>
          <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Authentic</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class=" leading-relaxed">Products that are listed on</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">FIIPharmacy.com are</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">100% genuine & sourced</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">from licensed pharmacies.</p2>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Reasonable</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class=" leading-relaxed">We work hard to bring </p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">you unimaginable discounts</p2>
                    
                </li>
                <li>
                  <p2 class=" leading-relaxed">without compromising on</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">quality and products.</p2>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Licensed</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class="leading-relaxed ">We are an official licensed</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">store by Government of</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">Pakistan & Ministry Of Health</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">with 100% secure portal.</p2>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium leading-relaxed  mb-3"><b>Find Us Online</b></h2>
              <nav class="list-none mb-10">
                <li>
                  <p2 class="leading-relaxed ">Facebook : FIIPharmacy</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed"> Instagram : FIIPharmacy</p2>
                </li>
                <li>
                  <p2 class="leading-relaxed ">Whatsapp : 03008200000</p2>
                </li>
                <li>
                  <p2 class=" leading-relaxed">Gmail : GPharm@gmail.com</p2>
                </li>
              </nav>
            </div>
          </div>
        </div>
        <div id="q">
          <div class="container mx-auto py-6 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2022 FII Pharmacy —
              <a rel="noopener noreferrer" class=" ml-1" target="_blank">@Fahad Farrukh Ibad Absar Arsal Naveed</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
        <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
      </footer>
</body>
</html>