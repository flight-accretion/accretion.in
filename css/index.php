<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="language" content="english"/>
    <meta name="description" content="Accretion has been involved in Textile Chemical, Real State, Finance and Aviation. owned by Rajeev Lochan Muchhal, Anuradha Muchhal and Rahul Muchhal"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HOME | Charter, Yacht, Chopper Helicopter, Air Ambulance, |Accretion Group</title>
    <meta name="keywords" content="ambulance helicopter, helicopter booking, helicopter flights, price of a helicopter, helicopter ambulance, medevac, air ambulance, private jet, executive jet, aircraft charter, yacht rental Goa, boat party Mumbai, helicopter rides,chopper ride, price of helicopter, private helicopter, chopper plane, yacht rentals, luxury yachts, boat rental, private yacht, private jet charter, private jet price, charter plane, private jet charter, helicopter charter, helicopter flights, private helicopter price, yacht in mumbai, yacht party in mumbai, new year party in mumbai, helicopter ride in mumbai,tuticorin to chennai flight" />
    <!-- Bootstrap -->
      <link href="bxslider/jquery.bxslider.css" type="text/css" rel="stylesheet">
    <script src="bxslider/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="bxslider/jquery.bxslider.min.js" type="text/javascript"></script>
    <link href="Css/style.css" type="text/css" rel="stylesheet">
    <link href="Css/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Effect/style_common.css" />
    <link rel="stylesheet" type="text/css" href="Effect/style10.css" />
    <link href="js/flexslider.css" type="text/css" rel="stylesheet">
	<link href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favcon.png"/>

  </head>

  <body>
    <header class="banner">
    	<div class="container">
        	<div class="row">
            	<div id='nav'>
                  	<nav class="navbar navbar-default" style="background:none; border:none;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-top:50px; background:#2b53a9; border:none;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar line"></span>
        <span class="icon-bar line"></span>
        <span class="icon-bar line"></span>
      </button>
      <img src="images/accresation.png" class="img-responsive" style="margin-top:10px;" alt="accretion">
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right navigation">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="media.php">Media</a></li>
        		  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="business.php">Textile Chemical</a></li>
            <li><a href="realstate.php">Real State</a></li>
            <li><a href="finance.php">Finance</a></li>
<!--            <li role="separator" class="divider"></li-->
            <li><a href="http://www.accretionaviation.com" target="_blank">Aviation</a></li>
          </ul>
        </li>
        </li>
        <li><a href="contact.php">Contact Us</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                </div>
            </div>
        </div>
   </header>

   <div class="flexslider">
 			 <ul class="slides">
              <li>
              <img src="images/bg8.jpg" alt="accretion slider" />
            </li>
    	<li>
             <img src="images/bg6.jpg" alt="accretion slider" />
            </li>
            <li>
              <img src="images/bg7.jpg" alt="accretion slider"/>
            </li>
            <li>
              <img src="images/bg4.jpg" alt="accretion slider"/>
            </li>
            <li>
              <img src="images/bg5.jpg" alt="accretion slider" />
            </li>

          </ul>
</div>

    <section style="background:#fff;">
    	<div class="container-fluid">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="heading">Accretion Group</div>
                    <div class="more-text">Accretion has been involved in multiple fields with the premise of expertise in all niche segments . We are headquartered in Indore, Madhya Pradesh but work all over the country and internationally. Founded in 1992 we have had tremendous growth and exposure. The group operates with core essence of being a market leader in the domains that it operates in with exceptionally high service and quality standards. </div>
 <div class="button text-center">
        		<ul>
                		<li><a href="aboutus.php" class="butt">Know More</a></li>
                </ul>
        </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background:#2b53a9;">
    	<div class="container-fluid">
        	<div class="row">
            	<div class="col-md-12">
            	<div class="box">
                 	 <ul class="bxslider">
  <?php
     include("admin/function/db.php");
     $sql1 = "SELECT * from resources";
     $run = mysqli_query($conn, $sql1);
     while($row = mysqli_fetch_array($run))
     {


     ?>
                <li>
                       <img src="admin/img/<?php echo $row['logo']; ?> " class="srt" style="padding-top:100px; ">

<div style="color:#fff !important;" class="heading"><?php echo $row['name']; ?></div>
<div class="heading" style="color:#fff !important; text-align:center"><?php echo $row['title']; ?></div>
                  <div class="more-text" style="color:#fff; text-align:justify;"></div>
 <div class="button">
        		<ul>
                		<li><a href="<?php echo $row['url']; ?>" target="_blank" class="butt">Read More</a></li>
                </ul>
        </div>

          </li>
          <?php } ?>




          </ul>
                 </div>
                </div>
            </div>
        </div>
    </section>
<script>
	$('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 2,
  slideWidth: 550,
  slideMargin: 0,
});
</script>

<section  id="gallery" style="background:#fff;">
  <div class="container">
    <div class="row">

     <div class="col-md-12" style="margin:30px 0px 0px 0px;">
       	<div class="heading">Our Business</div>
                    <div class="more-text">Accretion is a diverse business group with interests in Textile Chemicals, Real Estate Development, Finacial Investments and Lending , Private Plane, Helicopter and Yacht Charter. The group also has a trading arm which trades in multiple products and commodities accross segments. </div>
      </div>
     </div>

     <div class="row" style="margin-top:20px;">

     	<div class="col-md-4" style="text-align:center;">
         <a href="business.php">
        	  <div class="main">
                <!-- TENTH EXAMPLE -->
                <div class="view view-tenth">
                    <img src="images/service2.jpg" class="img-responsive" />
                    <div class="mask">
                        <h2>TEXTILE CHEMICALS</h2>
                       <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                       <!-- <a href="#" class="info">Read More</a>-->
                    </div>
                </div>
                </div>
                </a>
        </div><!--col-md-4-->

        <div class="col-md-4" style="text-align:center;">
         <a href="realstate.php">
        	  <div class="main">
                <!-- TENTH EXAMPLE -->
                <div class="view view-tenth">
                    <img src="images/service5.jpg" class="img-responsive" />
                    <div class="mask">
                        <h2>REAL ESTATE DEVELOPMENT</h2>
                       <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                       <!-- <a href="#" class="info">Read More</a>-->
                    </div>
                </div>
                </div>
                </a>
        </div><!--col-md-4-->

        <div class="col-md-4" style="text-align:center;">
        <a href="finance.php">
        	  <div class="main">
                <!-- TENTH EXAMPLE -->
                <div class="view view-tenth">
                    <img src="images/service1.jpg" class="img-responsive" />
                    <div class="mask">
                        <h2>FINANCE</h2>
                       <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                       <!-- <a href="#" class="info">Read More</a>-->
                    </div>
                </div>
                </div>
                </a>
        </div><!--col-md-4-->
     </div>

      <div class="row" style="margin-top:20px; margin-bottom:80px;">
     	<div class="col-md-4" style="text-align:center;" onclick="location.href='http://www.accretionaviation.com'">
        	  <div class="main">
                <!-- TENTH EXAMPLE -->
                <div class="view view-tenth">
                    <img src="images/service3.jpg" class="img-responsive" />
                    <div class="mask">
                        <h2>PRIVATE PLANE, HELICOPTER AND YACHT CHARTER</h2>
                        <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
                       <!-- <a href="#" class="info">Read More</a>-->
                    </div>
                </div>
                </div>
        </div><!--col-md-4-->



     </div>
  </div>
</section>

<section style="background:#2b53a9;">
	<div class="container">
    	<div class="row">
        	<!--<div class="col-md-4">
            	<img src="images/accresation.png" class="img-responsive" style="padding:50px 0px;">
            </div>-->

            <div class="col-md-4"  style="margin-top: 30px;">

                <div class="indore">Indore Office</div>
                <div style=" font-size:13px;   padding:5px 0px 0px 0px; line-height: 21px; color:#FFF;"><i class="fa fa-map-marker"></i> &nbsp;301, Alankar Chambers A/2 Ratlam Kothi A.B . Road Indore 452001.</div>
                <div style=" font-size:13px;   padding:5px 0px 0px 0px; line-height: 21px; color:#FFF;"><i class="fa fa-phone"></i> &nbsp;+91-731-4006026</div>
                <div style=" font-size:13px;   padding:5px 0px 0px 0px; line-height: 21px; color:#FFF;"><i class="fa fa-envelope"></i> &nbsp;info@accretion.in</div>
            </div>
            <div class="col-md-4">
            	<div class="indore1">Mumbai Office</div>
                <div style=" font-size:13px;   padding:5px 0px 0px 0px; line-height: 21px; color:#FFF;"><i class="fa fa-map-marker"></i> &nbsp;Office No 201,2nd Floor, Corporate Avenue, Sonawala Road, Goregaon (East) Mumbai 400063.</div>
                <div style=" font-size:13px;   padding:5px 0px 0px 0px; line-height: 21px; color:#FFF;"><i class="fa fa-phone"></i> &nbsp;+91-22-26861330</div>
                <div style=" font-size:13px;   padding:5px 0px 0px 0px; line-height: 21px; color:#FFF;"><i class="fa fa-envelope"></i> &nbsp;info@accretion.in</div>
            </div>
            <div class="col-md-4">

                <input type="text" placeholder="Your Email" class="in-area">
                <textarea style="width:100%; margin-top:10px; padding:10px 10px;" placeholder="Type Your Message"></textarea>
                <div class="button" style="margin-top:10px; background:#E62721;">
        		<ul>
                		<li><a href="#" class="butt" >Submit</a></li>
                </ul>
        </div>
            </div>
        </div>
    </div>
</section>

<!--<section style="background:#000; padding:10px 0px;">
	<div class="container-fluid">
    	<div class="row">
        <img src="images/footer.png" class="img-responsive center-block" style="padding:5px 0px;">
        	<div class="text-center" style="color:#FFF;">Copyright © 2017. All right reserved by StartupGenie</div>
        </div>
    </div>
</section>
-->
	    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <script src="Css/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


  </body>


  <script type="text/javascript">
 $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>
</html>
