<?php
session_start();
//  if(
//    isset($_SESSION['fname'])
//    && ($_SESSION['email']))
//  {
//   header("location:index.php");
//   exit();
// }
?>
<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <title>Hello, world!</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#CB202D;">
      <div class="container">
         <a class="navbar-brand" href="#"> <img src="https://b.zmtcdn.com/images/zomato_white_logo_new.svg" alt=""> </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <style media="screen">
         @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
         nav .nav-link{
            font-family: 'Montserrat', sans-serif;
         }
         nav .nav-link:hover{
            /* background-color: #fff; */
            background-color: rgba(255,255,255,0.2);
            border-radius: 2px;
         }
         </style>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="logout.php">Log Out</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container">
      <div class="row">
         <div class="col-bg-muted text-success justify-content">
            <?php if ( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] ): ?>
               Welcome <?php echo $_SESSION['fname'];?> to Bilsams
            <?php else: ?>
               Welcome  to Bilsams
            <?php endif; ?>
         </div>
      </div>
   </div>
   <footer class="page-footer font-small mdb-color lighten-3 pt-4">
      <div class="container-fluid text-center text-white text-md-left "style="background-color:#282C35" >
         <div class="row">
            <hr>
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
               <div class="panel-footer">
                  <img src="https://b.zmtcdn.com/images/logo/zomato_flat_bg_logo.svg"   class="img" style="width:20%;padding-top:-10%;" >
               </div>
               <br>
               <h5 class="font-weight-bold text-uppercase mb-4">About Zomato</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                  esse
                  quasi, veritatis totam voluptas nostrum.
               </p>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
               <br><br><br><br>
               <h5 class="font-weight-bold text-uppercase mb-4">About</h5>
               <ul class="list-unstyled">
                  <li>
                     <p>
                        <a href="https://www.zomato.com/about">About US</a>
                     </p>
                  </li>
                  <li>
                     <p>
                        <a href="https://www.zomato.com/blog/">Culture</a>
                     </p>
                  </li>
                  <li>
                     <p>
                        <a href="https://www.zomato.com/privacy">BLOG</a>
                     </p>
                  </li>
                  <li>
                     <p>
                        <a href="https://www.zomato.com/contact">Contact Us</a>
                     </p>
                  </li>
               </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
               <br><br><br><br>
               <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
               <ul class="list-unstyled">
                  <li>
                     <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US <br>
                        <i class="fas fa-envelope mr-3"></i> info@example.com<br>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88<br>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89<br>
                     </p>
                  </li>
               </div>
               <hr class="clearfix w-100 d-md-none">
               <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
                  <br><br><br><br>
                  <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
                  <a class="fb-ic">
                     <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="padding-left:50px;"> </i>
                  </a>
                  <a class="ins-ic">
                     <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
               </div>
            </div>
         </div>
         <div class="footer-copyright text-center text-white py-3" style="background-color:#282C35">
            <hr style="border-top: 1px solid #ccc; background: transparent;">© 2019 Copyright:
            <a href="https://www.bilsamtech.org/">
               <u>
                  <b>bilsamtech.org</b></u></a>
                  <img src="https://www.bilsamtech.org/assets/img/site-logo/bilsam_brand_name_n_logo_03.png" alt="" style="width: 7%;">
               </div>
            </footer>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/1c6d6f934d.js"></script>
         </body>
         </html>
