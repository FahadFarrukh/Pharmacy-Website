<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.639dff71a171c385efa941f07cccd526?rik=JFCur4f%2fwvLFiA&riu=http%3a%2f%2ffiles.gamebanana.com%2fimg%2fico%2fsprays%2f50f916fcc9c5b.png&ehk=yJZLb5Bmq4mXww%2fsBMeWrBVmYCyrIopZpW68BelkCF0%3d&risl=&pid=ImgRaw&r=0">
    <title>FII Pharmacy</title>
<style>
  #logbut{
    background-color: #100cf0;
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
        <a href="index.php"><img  src="logo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white  " style=" border: 3px solid white ;border-radius: 50%;" height="136px" width="136px;" viewBox="0 0 24 24"></a>
          
        </svg>
        <span style="font-family: 'Brush Script MT';color:white;font-size: 64px;" class="ml-1 text-xl  ">FII Pharmacy</span>
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
 
      <section style="margin-top: 15px;"  class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-19 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 id="hh" class="title-font sm:text-4xl text-3xl mb-12 font-medium ">Welcome To Our Online Portal</h1>
            <p class="mb-7 leading-relaxed" style="
            
            color:white;">FII Pharmacy is your community pharmacy where it’s all about you. We have partnered with different health professionals to make access to healthcare for the whole family (including our furry friends) so much easier. Preventative health is our goal. We are small but definitely big enough to serve you. We strive to put our patients in control of their health. We are located in Benton Illinois and proudly serve the surrounding area. Our goal is to have a positive impact on our patients with whom we talk to everyday. As an independent pharmacy we’re working hard to get to know you by name and treat you like a neighbor, because that’s, in fact who you are! Stop in and see why so many patients in Benton prefer us over a large chain pharmacy.</p>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-2/3 w-6/7">
            <img src="https://cdn3.iconfinder.com/data/icons/health-care-and-medical-3/64/1-24-512.png" class="object-cover object-center rounded" id="kitchen" alt="hero" >
          </div>
        </div>
      </section>
   
      <section  class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-20 items-center justify-center flex-col">
          <img class=" mb-10 object-cover object-center rounded" alt="hero" id="pic2" src="g3.png">
          <div class="text-center lg:w-2/3 w-full">
           <br>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="color:white;" class="inline-block w-8 h-9  " viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="mb-8 leading-relaxed"><br>Increasing pollution, climatic changes and lack of health care recourses leads to serious health care issues in Pakistan. Online medical store in Pakistan is taking a crucial step in improving the lives of common man by offering online medicine delivery in Pakistan. Health budget in Pakistan has been raised to Rs.20b but majority of rural areas lack basic health facilities. Online medicine shopping in Pakistan can serve these deprived people by offering them medicine home delivery in Pakistan.</p>
            <div class="flex justify-center">
              
            </div>
          </div>
        </div>
      </section>
    
      <section style="margin-top: 10px;" class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-20 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 id="hh" class="title-font sm:text-4xl text-3xl mb-8 font-medium ">Medication & Safety</h1>
            <p class="mb-8 leading-relaxed">At FII Pharmacy, we procure all our medicines from only certified and registered pharmacies in Pakistan such as Kausar Medicos, Tayyab Medical, Time Medicos, etc. and authorized distributors of manufacturing companies. We sell high-quality drugs and practice hygiene measures to make sure all the prescriptions are safely placed in the best conditions.

              Being one of the leading online pharmacies in Pakistan, we never compromise drug quality for the sake of discounted price. All our products are monitored before dispensing via a team of experts in the field. If a product is damaged during the transit, we ensure a new package is immediately dispatched. We provide medications for a host of illness and serious diseases at our e-pharmacy. We provide medicines for blood pressure, cancer, diabetes, migraine, etc. If you love herbal and organic products, we have a section dedicated for those products too.</p>
            <div class="flex w-full md:justify-start justify-center items-end">
              <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                
               
              </div>
            
            </div>
            
            <div class="flex lg:flex-row md:flex-col">
           
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img id="ww" class="object-cover object-center rounded" alt="hero" src="https://pluspng.com/img-png/png-drugs-drugs-medication-pills-treatment-icon-512.png">
          </div>
        </div>
      </section>
     
    
      <section  id="c3" class="text-gray-600 body-font">
        <div class="container px-5 py-20 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 id="r" class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Reviews From Our Testimonial Happy Customers</h1>
            
          </div><br>
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="box" class=" px-4 py-6 rounded-lg">
                <div class="para3"><br>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="color:white;" class="inline-block w-8 h-9  " viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                  </svg>
                  <p><br> "Great service and rapid,
                      <br>delivery of a rare medicine,
                      <br> I would highly recommend
                      <br>FIIpharmacy.com.pk "<br><br><br>
                                                     
                      <cite class="customer-name">
                             <b>Bilal</b>
                         
                      </cite></p>
                      
              </div><br>
                <div class="rev"><img class="revpic" src="https://www.labforward.io/wp-content/uploads/2020/10/new-dev-rp.jpg"></div>
                
                <br>
              </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="box" class=" px-4 py-6 rounded-lg">
                <div class="para3"><br>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="color:white;" class="inline-block w-8 h-9  " viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                  </svg>
                  <p><br> "A Great and very Nobel
                       <br> job for humanity. 
                       <br> Reasonable medicines
                       <br>I love it. Best wishes"<br><br>
                                                     
                      <cite class="customer-name"><br>
                              <b>Shumail</b>
                         
                      </cite></p>
              </div><br>
                <div class="rev"><img class="revpic" src="https://th.bing.com/th/id/OIP.XRY9MNRXpptKoqs_ksWQugHaHb?pid=ImgDet&w=221&h=221&c=7&dpr=1.25"></div>
               
              <br>
              </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="box" class=" px-4 py-6 rounded-lg">
                <div class="para3">
                  <br><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="color:white;" class="inline-block w-8 h-9  " viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                  </svg>
                  <p> <br> "Wonderful experience,  
                       <br>  ordered through WhatsApp,
                       <br>received medicine on next
                       <br>day and I've installed app"<br><br>
                                                     
                      <cite class="customer-name"><br>
                      
                             <b>Ahmed</b>
                         
                      </cite></p>
              </div><br>
                <div class="rev"><img class="revpic" src="https://th.bing.com/th/id/OIP.7OYBATQP5VSdj1Y4dKePggHaHa?pid=ImgDet&w=208&h=208&c=7&dpr=1.25"></div>  
              <br>
               
              </div>
            </div>
            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
              <div class="box" class=" px-4 py-6 rounded-lg">
                <div><br><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" style="color:white;" class="inline-block w-8 h-9  " viewBox="0 0 975.036 975.036">
                  <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg><p> <br>"Very good portal
                  <br> and the service is,
                  <br>very fast. All medicines
                   <br>and services are available."<br><br>
                                                
                 <cite class="customer-name"><br>
                        <b>Ali</b>
                    
                 </cite></p></div><br>
                <div class="rev"><img class="revpic" src="https://i1.rgstatic.net/ii/profile.image/712790339756035-1546953868390_Q512/Lucas-Trambaiolli.jpg"></div>
                
               
              <br>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section style="margin-top: 60px;" class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img id="i2" class="object-cover object-center rounded" alt="hero" src="https://th.bing.com/th/id/R.5f1878194acd7316930785c8f4239782?rik=DqKhx66bsEosKQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fcommunication-community-connection-global-internet-network-icon-image-1897-512.png&ehk=ubbaImiXo7ZlgS5q4pM9YmltoLB6hUdjHJbbwbLcvZA%3d&risl=&pid=ImgRaw&r=0">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col   items-center text-center">
            <h1 id="ht" class="title-font sm:text-4xl text-3xl  font-medium ">Significance Of Online Pharmacies
            </h1><br><br>
            <svg  xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            </svg>
            <p class="mb-8 leading-relaxed">Online Pharmaceutical setups are really necessary in todays time as not everyone can have the convenience to go and get the medicince from whether a store or hospital, so we should really admire such startups where people are making it easy for our society to 
              easily get their medical needs fulfilled secondly it will cause less burden and rush on public pharmacies and hospitals as people can get their prescribed medicines easy from their homes by these online pharmacies that are made to assist us, so I really admire and appreciate their approach. 
            </p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
            <h2 class=" font-medium title-font tracking-wider ">Dr Faraz Ahmed</h2>
            <p class="text-gray-500">President Of Pharmaceutical Association </p>
            <div class="flex justify-center">
             
            </div>
          </div>
        </div>
      </section>
     
      <footer style="margin-top: 230px;" class="text-gray-600 body-font">
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