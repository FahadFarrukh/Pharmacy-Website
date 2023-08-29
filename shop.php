<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="about.css" rel="stylesheet">
    <link href="about2.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.639dff71a171c385efa941f07cccd526?rik=JFCur4f%2fwvLFiA&riu=http%3a%2f%2ffiles.gamebanana.com%2fimg%2fico%2fsprays%2f50f916fcc9c5b.png&ehk=yJZLb5Bmq4mXww%2fsBMeWrBVmYCyrIopZpW68BelkCF0%3d&risl=&pid=ImgRaw&r=0">
    <title>Garrison Pharmacy</title>
<style>
  #logbut{
    background-color: #1612e9;
  width: 98px;
  }

#logbut:hover,  #logbut:active {transition: all 0.2s ease 0s;
  background-color: #0f0e5f;


}

</style>
</head>
<body class="url" style="background: linear-gradient(to left top,#050a29 20%, #080682,#050a29 88% );  ">
  
<header style="margin-top: 30px;" class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <a href="index.php"><img  src="logo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white  " style=" border: 3px solid white ;border-radius: 50%;" height="146px" width="146px;" viewBox="0 0 24 24"></a>
          
        </svg>
        <span style="font-family: 'Brush Script MT';color:white;font-size: 64px;" class="ml-2 text-xl  ">Garrison Pharmacy</span>
      </a>
      <nav id="navv" style="color: white;font-size: 18px;" class=" md:ml-40 flex flex-wrap items-center text-base justify-center md:pl-3 md:border-l md:border-gray-100">
        <a href="index.php" class="mr-5 ">Home</a>
        <a href="about.php" class="mr-5 ">About</a>
        <a href="shop.php" class="mr-5 ">Shop Now</a>
        <a href="contact.php" class="mr-5 ">Contact Us</a>
      
     
       
      </nav>
     
      <?php
    


      session_start();

      if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
      {
          echo   "<a href='login.php'> <button id='logbut'  class='text-white  border-0 py-2 px-2 focus:outline-none  rounded text-lg'>Log in →</button></a>";
      }

else if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] ==true){
  echo   "<a href='login.php'> <button id='logbut'  class='text-white  border-0 py-2 px-2 focus:outline-none  rounded text-lg'>Logged in</button></a>";
}

?>
   
   
 
  </div>
  </header>
  <section  class="body-font">
    <div class="container mx-auto flex px-5 py-14 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 style="font-size:45px;width:800px;font-weight:645;" class="title-font m:text-4xl text-4xl mb-4 font-medium ">Buy Medicines From Our Online Medical Platform
        </h1>
        <p class="mb-8 leading-relaxed">Select your desired medicines from here then fill the form, enter your details and the medicines will be delivered to your doorstep. Only one medicine can be ordered at a single time, so if you want multiple medicines, fill the form for each medicine. All the medicines are licensed by professional doctors and are registered by Ministry Of Health. All medicines are freshly manufactured and no medicine can be found expired or near expiring date as we constantly update our stocks.</p>
       
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="phone.webp">
      </div>
    </div>
  </section>
  <section class=" body-font">
    <div  class="container px-5 py-24 mx-auto">
      <div  class="flex flex-wrap m-50">
        <div id="e1" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img  alt="ecommerce" class="object-cover object-center w-full h-full block mt-2" src="panadol.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m1.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2  class=" title-font text-lg font-medium">Panadol</h2>
            <p class="mt-1">Rs20.00</p>
          </div>
        </div>
        <div id="e2" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img  class="object-cover object-center w-full h-full block" alt="ecommerce"  src="calpol.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m2.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Calpol</h2>
            <p class="mt-1">Rs25.00</p>
          </div>
        </div>
        <div id="e3" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="ponstan.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m3.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Ponstan</h2>
            <p class="mt-1">Rs50.00</p>
          </div>
        </div>
        <div id="e4" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img style="height: 190px;width:300px;" alt="ecommerce" class="object-cover object-center  block" src="surbexz.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m4.php"> <button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Surbex Z</h2>
            <p class="mt-1">Rs200.00</p>
          </div>
        </div>
        <div id="e5" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img style="height: 170px;width:300px;" alt="ecommerce" class="mt-5" src="xanax.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m5.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2  class=" title-font text-lg font-medium">Xanax</h2>
            <p class="mt-1">Rs120.00</p>
          </div>
        </div>
        <div id="e6" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="calamox.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m6.php"> <button class="ebutton"><p style="color: rgb(255, 255, 255);"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Calamox</h2>
            <p class="mt-1">Rs250.00</p>
          </div>
        </div>
        <div id="e7" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="flagyl.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m7.php"> <button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Flagyl</h2>
            <p class="mt-1">Rs70.00</p>
          </div>
        </div>
        <div id="e8" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="rivotril.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m8.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Rivotril</h2>
            <p class="mt-1">Rs200.00</p>
          </div>
        </div>
        <div id="e9" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="extor.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m9.php"> <button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Extor</h2>
            <p class="mt-1">Rs650.00</p>
          </div>
        </div>
        <div id="e10" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="pcam.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m10.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Pcam Gel</h2>
            <p class="mt-1">Rs120.00</p>
          </div>
        </div>
        <div id="e11" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="saniplast.gif">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m11.php"><button class="ebutton"><p style="color: white;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Saniplast</h2>
            <p class="mt-1">Rs200.00</p>
          </div>
        </div>
        <div id="e12" class="lg:w-1/4 md:w-1/2 p-4 m-12 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="brufen.png">
          </a>
          <div class="mt-4">
            <div class="middle">
              <a href="m12.php"><button class="ebutton"><p style="color: #ffffff;"><b>Add To Cart</b></p></button></a>
            </div>
            <h2 class=" title-font text-lg font-medium">Brufen Cream</h2>
            <p class="mt-1">Rs140.00</p>
          </div>
        </div>
      
     
      </div>
    </div>
  </section>

      
  <footer style="margin-top: 170px;" class="text-gray-600 body-font">
    <hr />
    <div class="container px-5 py-20 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
     
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-5 mt-15">
        
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <img src="logo.png" style="height: 120px; width:120px;border-radius: 50%;border: solid 2px white;" >
           
        </img>
          <h2 class="ml-4 text-xl leading-relaxed text-3xl font-medium tracking-widest">Garrison Pharmacy</h2>
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
              <p2 class=" leading-relaxed">GarrisonPharmacy.com are</p2>
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
              <p2 class="leading-relaxed ">Facebook : GarrisonPharmacy</p2>
            </li>
            <li>
              <p2 class=" leading-relaxed"> Instagram : GarrisonPharmacy</p2>
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
        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2022 Garrison Pharmacy —
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