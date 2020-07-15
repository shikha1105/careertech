 <?php
// header('location:regpage.php');
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="agri";

$conn=new mysqli($servername, $username, $password,$dbname);
echo "";
if ($conn->connect_error)
{
  die("Connection Failed".$conn->connect_error);
}



?>




 <!DOCTYPE html>
 <html>

 <head lang="en">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
   <title>Kisaan</title>
   <link rel="stylesheet" href="style3.css" />
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
 </head>

 <body>
   <div class="header">
     <div class="container">
       <div class="navbar">
         <div class="logo">
           <img src="Clipart-Email-5526302.png" width="100px" ; />
         </div>
         <nav>
           <ul>
             <li><a href="">Home</a></li>
             <li><a href="kisaan.php#footer">Contact</a></li>
             <li><a href="profile.php">Welcome <?php echo $_SESSION['user_id'] ; ?></a></li>
           </ul>
         </nav>


       </div>
       <div class="row">
         <div class="col-2">
           <h1>Cultivate</h1>
           <h1> Healthy!</h1>
           <p>Laborum fugiat consectetur
             cupidatat adipisicing fugiat nisi consectetur veniam.</p>
           <p>
             Occaecat sunt reprehenderit dolor ullamco sunt labore.</p>
           <a href="#feature" class="btn1">Explore Now</a>
         </div>
         <div class="col-2">
           <img src="toppng.com-farmer-png-723x573.png" ; />
         </div>
       </div>
     </div>
   </div>
   <!-- --------------featured categories------------------ -->
   <br />
   <div class="categories">
     <div class="small-container">
       <div class="row">
         <div class="col-3">
           <img src="seeds.jpg" width=340px />
         </div>
         <div class="col-3">
           <img src="greenveggies-12-1494566132.jpg" width=340px />
         </div>
         <div class="col-3">
           <img src="pesticides-638x425.jpg" width=340px />
         </div>
       </div>
     </div>
   </div>
   <!-- --------------featured products------------------ -->
   <div class="small-container">
     <br />
     <br />
     <h2 class="title" id="feature">Featured Products</h2>
     <div class="row">
       <div class="col-4">
         <img src="500-sona-moong-dal-500g-x-2-packets-moong-dal-max-health-original-imafqbeh5zh5bvhh.jpeg" />
         <h4>Moong</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.100.00
         </p>
       </div>
       <div class="col-4">
         <img src="vegetable.jpg" />
         <h4>Pole Beans</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>


         </div>
         <p>
           Rs.200.00
         </p>
       </div>
       <div class="col-4">
         <img src="260978.jpeg" />
         <h4>Green Peas</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.400.00
         </p>
       </div>
       <div class="col-4">
         <img src="pesticide.jpg" />
         <h4>Sohna Pesticide</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.350.00
         </p>
       </div>
     </div>
     <h2 class="title">Latest Products</h2>
     <div class="row">
       <div class="col-4">
         <img src="1.jpg" />
         <h4>Chia</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.100.00
         </p>
       </div>
       <div class="col-4">
         <img src="2.jpg" />
         <h4>Watermelon seeds</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>


         </div>
         <p>
           Rs.200.00
         </p>
       </div>
       <div class="col-4">
         <img src="3.jpg" />
         <h4>Quinoa seeds</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.400.00
         </p>
       </div>
       <div class="col-4">
         <img src="4.jpg" />
         <h4>Green Vegetables</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.350.00
         </p>
       </div>
     </div>
     <div class="row">
       <div class="col-4">
         <img src="5.jpg" />
         <h4>Green Vegetables</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.100.00
         </p>
       </div>
       <div class="col-4">
         <img src="6.jpg" />
         <h4>Fruits</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>


         </div>
         <p>
           Rs.200.00
         </p>
       </div>
       <div class="col-4">
         <img src="7.jpg" />
         <h4>Dry Fruits</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.400.00
         </p>
       </div>
       <div class="col-4">
         <img src="8.jpg" />
         <h4>Neem Leaves</h4>
         <div clas="rating">
           <i class="fa fa-star" aria-hidden="true" style="margin:0 auto;"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>
           <i class="fa fa-star-o" aria-hidden="true"></i>

         </div>
         <p>
           Rs.350.00
         </p>
       </div>
     </div>
   </div>
   <!-- -----------------offer------------------- -->
   <div class="offer">
     <div class="small-container">
       <div class="row">
         <div class="col-2">
           <img src="6.jpg" class="offer-img" />
         </div>
         <div class="col-2">
           <p>
             Exclusive available on Kisaan Store
           </p>
           <h1>Fresh Organic Fruits</h1>
           <small>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
             Aenean ultricies mi vitae est. Mauris placerat eleifend leo</small>
           <br /><a href="" class="btn">Buy Now &#8594;</a>
         </div>
       </div>
     </div>
   </div>
<div class="footer" id="footer">
  <div class="small-container">
    <div class="row">

      <h2> Follow us on </h2>

      <div class="col-31">
        <img src="pngguru.com (1).png" width=50px height=50px/>
      </div>
      <div class="col-31">
        <img src="pngguru.com (2).png"width=50px height=50px/>
      </div>
      <div class="col-31">
        <img src="pngguru.com (3).png"width=50px height=50px/>
      </div>
    </div>
    <br />
    <hr />
    <p class="copyright">
      Copyright 2020 - Kisaan Seva
    </p>
  </div>
</div>

 </body>

 </html>
