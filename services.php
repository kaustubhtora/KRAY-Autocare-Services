<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>KRAY - AutoCare & Services </title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">

<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>



























    <style>
@import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');


*
{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body
{
    background: #fff;
    font-family:  sans-serif;

}

.services
{
    display: block;
    position: relative;
    padding: 0;

}
.container
{
    max-width: 1200px;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.services-title
{
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    
}
.services-box
{
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    margin-top: -15px;
    
}

.title{
    margin-left: 15px;
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-bottom: 40px;
    text-align: center;
    top: 26px;
}
/**
.services-title>span {
    height: 36px;
    width: 130px;
    margin: 0 auto;
    margin-bottom: 20px;
    display: inline-block;
    font-size: 20px;
    color:rgb(255, 74, 50);
 
}****/
.services-title h2 {
    margin-top: -10px;
    margin-bottom: 6px;
    text-transform: capitalize;
    font-size: 36px;
    line-height: 48px;
    font-weight: 700;
    color: #333;
    font-family: 'ubuntu',sans-serif;

}
.services-title h2 span
{
    color: #3c44a9;
}


.box
{
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    max-width: 33.333333%;

}
.ser-box
{    margin-top: 75px;
    padding: 0 60px;
    padding-bottom: 30px;
    min-height: 198px;
    text-align: center;
    border-radius: 10px;
    background-color: #fff;
    -webkit-transition: all .4s ease-in-out;
    -moz-transition: all .4s ease-in-out;
    -ms-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
    -webkit-box-shadow: 0 0 25px 0 rgba(20,27,201,.17);
    box-shadow: 0 0 25px 0 rgba(20,27,201,.17);
}

.ser-box .icon
{
    margin-bottom: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    text-align: center;
}
.ser-box h4
{
    font-size: 20px;
    line-height: 1;
    font-weight: 700;
    color: #3c44a9;
    margin-top: -10px;
    font-family: 'Ubuntu', sans-serif;

}
.ser-box p {
    color: #61648e;
    line-height: 24px;
    margin-top: 20px;
    font-family: 'Ubuntu', sans-serif;

}


.ser-box:hover {
 background-image:-moz-linear-gradient(-45deg,#fb0054 0%,#f55b2a 100%);
 background-image:-webkit-linear-gradient(-45deg,#fb0054 0%,#f55b2a 100%);
 background-image:-ms-linear-gradient(-45deg,#fb0054 0%,#f55b2a 100%);
 -webkit-box-shadow:0 0 25px 0 rgba(20,27,201,.05);
 box-shadow:0 0 25px 0 rgba(20,27,201,.05);
 cursor:pointer
}

.ser-box:hover h4,
.ser-box:hover p {
 color:#fff
}



.services-box .box:nth-child(1) .ser-box:hover {
 background-image:-webkit-linear-gradient(-45deg,#34b5bf 0%,#210c59 100%);
 background-image:linear-gradient(-45deg,#34b5bf 0%,#210c59 100%)
}
.services-box .box:nth-child(3) .ser-box:hover {
 background-image:-webkit-linear-gradient(-45deg,#3615e7 0%,#44a2f6 100%);
 background-image:linear-gradient(-45deg,#3615e7 0%,#44a2f6 100%)
}
.services-box .box:nth-child(4) .ser-box:hover{
 background-image:-webkit-linear-gradient(-45deg,#fc6a0e 0%,#fdb642 100%);
 background-image:linear-gradient(-45deg,#fc6a0e 0%,#fdb642 100%);
}
.services-box .box:nth-child(5) .ser-box:hover {
 background-image:linear-gradient(-45deg,#8d40fb 0%,#5a57fb 100%);
 background-image:-webkit-linear-gradient(-45deg,#8d40fb 0%,#5a57fb 100%);

}
.services-box .box:nth-child(6) .ser-box:hover {
 background-image:-webkit-linear-gradient(-45deg,#27b88d 0%,#22dd73 100%);
 background-image:linear-gradient(-45deg,#27b88d 0%,#22dd73 100%)
}






@media (min-width: 768px){
.box 
{
    flex: 0 0 50% !important;
    max-width: 50% !important;
}

}



@media (min-width: 600px){
.box 
{
    flex: 0 0 50% !important;
    max-width: 50% !important;
}

}





@media (min-width: 992px)
{
.box 
{
    flex: 0 0 33.333333% !important;
    max-width: 33.333333% !important;
}
}


@media (min-width: 414px){
.box 
{
    flex: 0 0 100%;
    max-width: 100%;
}

}

@media (min-width: 370px){
.box 
{
    flex: 0 0 100%;
    max-width: 100%;
}

}

@media (min-width: 320px){
.box 
{
    flex: 0 0 100%;
    max-width: 100%;
}

}





</style>
</head>
<body>

<<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>services</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>services</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->
<section class="section-padding">
  <div class="container">
  <div class="section-header text-center">
      <b><p><h1><strong> Our Services</strong></h1></p></b>
      </div>
    </div>
  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4164179339714!2d72.92742251472919!3d19.045420487105428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c67614d745a3%3A0x2265d8a2bbdb6eb6!2sBMC%20School!5e0!3m2!1sen!2sin!4v1620547673160!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen=""></iframe>

</section>









<section>
  

<div style="text-align:center">
  <h2>Solve your queries on the click of a Button</h2>
  
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Need of KRAY</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why hesitate 
      while using website!!!</b></h1>
      <p>Vehicles plays vital role in our daily life as we relie on them every time.So it is important that we take good care of them thise video will show you importance of servicing and will also show you easiest way to get your job  done. </p>
      <button class="button">Meet The Professionals</button>
    </div>
    <div class="column-33">
      <video width="500"  height="300"controls>
        <source src="includes/images/vid10.mp4" type="video/mp4">
      </video>
    </div>

</div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <video width="350"  height="300"controls>
        <source src="includes/images/vid11.mp4" type="video/mp4">
      </video>

      
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Few features to ease your life...! </b></h1>
      <h1 class="large-font" style="color:red;"><b>Take a closer look</b></h1>
      <p><span style="font-size:20px">Thise video mentiones each and every job related to your vehicle and aslo get it done hassle-free.</span></p>
      <button class="button" style="background-color:red">VIEW MORE</button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Trust</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>When it comes to trust, you can always rely on KRAY</b></h1>
      <p>This video explains why it is important to let expert mechanics handel your vehicle As any other non-trusted local mechanic can exchange your original parts with the duplicate ones.Even showroom located in other cities can charge you hesty costs if you aren't their regular customer.    </p>
      <button class="button">GET STARTED</button>
    </div>
    <div class="column-33">
        <video width="500"  height="300"controls>
        <source src="includes/images/vid12.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>






</section>









<section class="services">

    <div class="container">
 
        <div class="services-title">
            <div class="title">
                  <!---- <span>S</span> ----->
                   
            </div>
        </div>

        <div class="services-box">
           
           <div class="box">
                  <div class="ser-box">
                     <div class="icon">
                         <img src="includes/images/setting.png">
                     </div>
                     <h4>Diagnostics</h4>
                     <p>We always use the most advanced diagnostic equipment to diagnose your vehicle problems and check engine lights.</p>
                  </div>
           </div>

           <div class="box">
                <div class="ser-box">
                   <div class="icon">
                       <img src="includes/images/speed.png">
                   </div>
                   <h4>Repairs </h4>
                   <p>We take all auto repairs seriously. That’s why all our auto mechanics are ASE Certified and work with our service advisors to give you as many options as possible. </p>
                </div>
           </div>

          <div class="box">
            <div class="ser-box">
               <div class="icon">
                   <img src="includes/images/protect.png">
               </div>
               <h4>Tire Service</h4>
               <p>Depending on the damage to your tire, we’ll either install your usable spare, re-inflate your tire, or tow your vehicle.</p>
            </div>
          </div>

          <div class="box">
            <div class="ser-box">
               <div class="icon">
                   <img src="includes/images/backup.png">
               </div>
               <h4>Towing</h4>
               <p>We can get you towed to a shop or your preferred mechanic. Towing milage depends on your insururers mileage limits.</p>
            </div>
          </div>

          <div class="box">
          <div class="ser-box">
             <div class="icon">
                 <img src="includes/images/freessl.png">
             </div>
             <h4>Mechanical First Aid</h4>
             <p>Our drivers can identify and address some of the most common mechanical problems. We can make minor adjustments not requiring parts or supplies in an effort to get your vehicle running.</p>
          </div>
          </div>

          <div class="box">
           <div class="ser-box">
              <div class="icon">
                 <img src="includes/images/database.png">
              </div>
             <h4>Locksmith Service</h4>
             <p>Locked your keys inside your car? We'll send service to help you gain entry. If the attempt fails, the Towing Service policy will apply.</p>
           </div>
          </div>


        </div>

    </div>
</section>    











































<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>