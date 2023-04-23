<?php
require("includes/common.php");
if(isset($_SESSION['email'])) {
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Code For Food</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Get your own code at fontawesome.com-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
        <style>
            * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  }
  
  body {
	font-family: "Poppins", sans-serif;
  }
  
  .navbar {
	display: flex;
	align-items: center;
	padding: 20px;
  }
  
  nav {
	flex: 1;
	text-align: right;
  }
  
  nav ul {
	display: inline-block;
	list-style-type: none;
  }
  
  nav ul li {
	display: inline-block;
	margin-right: 20px;
  }
  
  a {
	text-decoration: none;
	color: #555;
  }
  
  p {
	color: #555;
  }
  
  .container {
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
  }
  
  .row {
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space-around;
  }
  
  .col-2 {
	flex-basis: 50%;
	min-width: 300px;
  }
  
  .col-2 img {
	max-width: 100%;
	padding: 50px 0;
  }
  
  .col-2 h1 {
	font-size: 50px;
	line-height: 60px;
	margin: 25px 0;
  }
  
  .btn {
	display: inline-block;
	background: #ff523b;
	color: #ffffff;
	padding: 8px 30px;
	margin: 30px 0;
	border-radius: 30px;
	transition: background 0.5s;
  }
  
  .btn:hover {
	background: #563434;
  }
  
  .header {
	background: radial-gradient(#fff, #ffd6d6);
  }
  
  .header .row {
	margin-top: 70px;
  }
  
  .categories {
	margin: 70px 0;
  }
  
  .col-3 {
	flex-basis: 30%;
	min-width: 250px;
	margin-bottom: 30px;
  }
  
  .col-3 img {
	width: 100%;
  }
  
  .small-container {
	max-width: 1080px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
  }
  
  .col-4 {
	flex-basis: 25%;
	padding: 10px;
	min-width: 200px;
	margin-bottom: 50px;
	transition: transform 0.5s;
  }
  
  .col-4 img {
	width: 100%;
  }
  
  .title {
	text-align: center;
	margin: 0 auto 80px;
	position: relative;
	line-height: 60px;
	color: #555;
  }
  .title::after {
	content: "";
	background: #ff523b;
	width: 80px;
	height: 5px;
	border-radius: 5px;
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translate(-50%);
  }
  
  h4 {
	color: #555;
	font-weight: normal;
  }
  
  .col-4 p {
	font-size: 14px;
  }
  
  .rating .fas {
	color: #ff523b;
  }
  
  .rating .far {
	color: #ff523b;
  }
  
  .col-4:hover {
	transform: translateY(-5px);
  }
  
  /* Offer */
  
  .offer {
	background: radial-gradient(#fff, #ffd6d6);
	margin-top: 80px;
	padding: 30px 0;
  }
  
  .col-2 .offer-img {
	padding: 50px;
  }
  
  small {
	color: #555;
  }
  
  /* testimonial */
  
  .testimonial {
	padding-top: 100px;
  }
  
  .testimonial .col-3 {
	text-align: center;
	padding: 40px 20px;
	box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
	cursor: pointer;
	transition: transform 0.5s;
  }
  
  .testimonial .col-3 img {
	width: 100px;
	margin-top: 20px;
	border-radius: 50%;
  }
  
  .testimonial .col-3:hover {
	transform: translateY(-10px);
  }
  
  .fa-quote-left {
	font-size: 34px;
	color: #ff523b;
  }
  
  .col-3 p {
	font-size: 14px;
	margin: 12px 0;
	color: #777777;
  }
  
  .testimonial .col-3 h3 {
	font-weight: 600;
	color: #555;
	font-size: 16px;
  }
  
  .brands {
	margin: 100px auto;
  }
  
  .col-5 {
	width: 160px;
  }
  
  .col-5 img {
	width: 100%;
	cursor: pointer;
	filter: grayscale(100%);
  }
  
  .col-5 img:hover {
	width: 100%;
	cursor: pointer;
	filter: grayscale(0);
  }
  
  /* footer */
  
  .footer {
	background: #000;
	color: #8a8a8a;
	font-size: 14px;
	padding: 60px 0 20px;
  }
  
  .footer p {
	color: #8a8a8a;
  }
  
  .footer h3 {
	color: #ffffff;
	margin-bottom: 20px;
  }
  
  .footer-col-1,
  .footer-col-2,
  .footer-col-3,
  .footer-col-4 {
	min-width: 250px;
	margin-bottom: 20px;
  }
  
  .footer-col-1 {
	flex-basis: 30%;
  }
  
  .footer-col-2 {
	flex: 1;
	text-align: center;
  }
  
  .footer-col-2 img {
	width: 180px;
	margin-bottom: 20px;
  }
  
  .footer-col-3,
  .footer-col-4 {
	flex-basis: 12%;
	text-align: center;
  }
  
  ul {
	list-style-type: none;
  }
  
  .app-logo {
	margin-top: 20px;
  }
  .app-logo img {
	width: 140px;
  }
  
  .footer hr {
	border: none;
	background: #b5b5b5;
	height: 1px;
	margin: 20px 0;
  }
  
  .copyright {
	text-align: center;
  }
  
  .menu-icon {
	width: 28px;
	margin-left: 20px;
	display: none;
  }
  
  /* media query for menu */
  
  @media only screen and (max-width: 800px) {
	nav ul {
	  position: absolute;
	  top: 70px;
	  left: 0;
	  background: #333;
	  width: 100%;
	  overflow: hidden;
	  transition: max-height 0.5s;
	}
	nav ul li {
	  display: block;
	  margin-right: 50px;
	  margin-top: 10px;
	  margin-bottom: 10px;
	}
  
	nav ul li a {
	  color: #fff;
	}
	.menu-icon {
	  display: block;
	  cursor: pointer;
	}
  }
  
  /* all products page */
  
  .row-2 {
	justify-content: space-between;
	margin: 100px auto 50px;
  }
  
  select {
	border: 1px solid #ff523b;
	padding: 5px;
  }
  
  select:focus {
	outline: none;
  }
  
  .page-btn {
	margin: 0 auto 80px;
  }
  
  .page-btn span {
	display: inline-block;
	border: 1px solid #ff523b;
	margin-left: 10px;
	width: 40px;
	height: 40px;
	text-align: center;
	line-height: 40px;
	cursor: pointer;
  }
  
  .page-btn span:hover {
	background: #ff523b;
	color: #ffffff;
  }
  
  /* single product details */
  
  .single-product {
	margin-top: 80px;
  }
  
  .single-product .col-2 img {
	padding: 0;
  }
  
  .single-product .col-2 {
	padding: 20px;
  }
  
  .single-product h4 {
	margin: 20px 0;
	font-size: 22px;
	font-weight: bold;
  }
  
  .single-product select {
	display: block;
	padding: 10px;
	margin-top: 20px;
  }
  
  .single-product input {
	width: 50px;
	height: 40px;
	padding-left: 10px;
	font-size: 20px;
	margin-right: 10px;
	border: 1px solid #ff523b;
  }
  
  input:focus {
	outline: none;
  }
  
  .single-product .fas {
	color: #ff523b;
	margin-left: 10px;
  }
  
  .small-img-row {
	display: flex;
	justify-content: space-between;
  }
  
  .small-img-col {
	flex-basis: 24%;
	cursor: pointer;
  }
  
  /* cart items */
  
  .cart-page {
	margin: 90px auto;
  }
  
  table {
	width: 100%;
	border-collapse: collapse;
  }
  
  .cart-info {
	display: flex;
	flex-wrap: wrap;
  }
  
  th {
	text-align: left;
	padding: 5px;
	color: #ffffff;
	background: #ff523b;
	font-weight: normal;
  }
  td {
	padding: 10px 5px;
  }
  
  td input {
	width: 40px;
	height: 30px;
	padding: 5px;
  }
  
  td a {
	color: #ff523b;
	font-size: 12px;
  }
  
  td img {
	width: 80px;
	height: 80px;
	margin-right: 10px;
  }
  
  .total-price {
	display: flex;
	justify-content: flex-end;
  }
  
  .total-price table {
	border-top: 3px solid #ff523b;
	width: 100%;
	max-width: 400px;
  }
  
  td:last-child {
	text-align: right;
  }
  
  th:last-child {
	text-align: right;
  }
  /* account page */
  .account-page {
	padding: 50px 0;
	background: radial-gradient(#fff, #ffd6d6);
  }
  
  .form-container {
	background: #ffffff;
	width: 300px;
	height: 400px;
	position: relative;
	text-align: center;
	padding: 20px 0;
	margin: auto;
	box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
	overflow: hidden;
  }
  
  .form-container span {
	font-weight: bold;
	padding: 0 10px;
	color: #555555;
	cursor: pointer;
	width: 100px;
	display: inline-block;
  }
  
  .form-btn {
	display: inline-block;
  }
  
  .form-container form {
	max-width: 300px;
	padding: 0 20px;
	position: absolute;
	top: 130px;
	transition: transform 1s;
  }
  
  form input {
	width: 100%;
	height: 30px;
	margin: 10px 0;
	padding: 0 10px;
	border: 1px solid #ccc;
  }
  
  form .btn {
	width: 100%;
	border: none;
	cursor: pointer;
	margin: 10px 0;
  }
  
  form .btn:focus {
	outline: none;
  }
  
  #LoginForm {
	left: -300px;
  }
  
  #RegForm {
	left: 0;
  }
  
  form a {
	font-size: 12px;
  }
  
  #Indicator {
	width: 100px;
	border: none;
	background: #ff523b;
	height: 3px;
	margin-top: 8px;
	transform: translateX(100px);
	transition: transform 1s;
  }
  
  /* media query for less than 600 screen size */
  
  @media only screen and (max-width: 600px) {
	.row {
	  text-align: center;
	}
	.col-2,
	.col-3,
	.col-4 {
	  flex-basis: 100%;
	}
  
	.single-product .row {
	  text-align: left;
	}
  
	.single-product .col-2 {
	  padding: 20px 0;
	}
	.single-product h1 {
	  font-size: 26px;
	  line-height: 32px;
	}
	.cart-info p {
	  display: none;
	}
  }
  
        </style>
    </head>
    <style>
        .thumbnail:hover{
            background-color: skyblue;
            transform:scale(1.05);
            transition:1s;
        }
    </style>
    <body style="padding-top: 50px; background-color: rgb(216, 240, 232);">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>

        <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <a  href="index.php#services" class="btn btn-danger btn-lg active" style="margin-top:200px;margin-left:500px;">Donate</a>
                        </div>
                    </center>
                </div>
            </div>
            <div style="border:3px solid; margin-top:10px;" id="about">
                <center><h2>About Us</h2></center>
                <p style="font-size:18px;padding-left:10px;padding-right:10px;">
                    We started as an organization dedicated to being the go-to source for the latest news and insights on global injustices. Back then, our goal was to improve health and wellness for all, whether that be advocating for proper veteran care, highlighting food deserts in the country or spreading awareness on Food security, conditions and issues.<br>
                    We aim to redistribute surplus food to those who are in need of it. We as an organization feed the needy and in-distress people through joint efforts. We mobilise, empower and strengthen the homeless so that they have access to their food needs and also can assert their rights and live with honour and dignity.<br>
                    Over the past few years, the organization has grown significantly and expanded its coverage to include other areas where hope and support is much needed, such as:<br>
                    • Poverty<br>
                    • Avoid Food Waste<br>
                    • Malnutrition<br>
                    • Awareness about Food Security<br> 
                    • Disaster Emergencies<br>
                    • Sustainable Food<br>
                    • Food Safety<br>
                    • Zero Hunger<br>
                    As our organization continues to grow, we have made it a priority to stick to our core value: keeping the public informed on some of humanity’s most important issues. And given the current state of the world, it’s more important than ever to be an active, educated citizen so we encourage you to bookmark our page and follow our social media accounts to stay up to date on the latest global issues and humanitarian efforts
                </p>
            
            </div>
            <div style="border:3px solid; margin-top:10px;" id="services">
                <center><h2 style="margin-bottom:-40px;">Our Services</h2></center>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#events" >
                            <div class="thumbnail">
                                <img src="img/clothes.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Donate Clothes</h3>
                                  
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#money" >
                            <div class="thumbnail">
                                <img src="img/money.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Donate Money</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#food" >
                            <div class="thumbnail">
                                <img src="img/food.jpg" alt="">
                                <div class="caption">
                                    <h3>Donate Food</h3>                                  
                                </div>
                            </div>
                        </a>
                    </div>              
                </div>
            </div>
            </div>
            </div>
            <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
          "I stumbled upon this website while looking for ways to give back to my community,
           and I have to say I was blown away by how easy it was to make a donation to help feed those in need. 
           The process was simple and straightforward, and I loved that I could see exactly where my donation was going. 
           Keep up the great work!"
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="img/arth.jpg" alt="" height='100px'/>
          <h3>Arth Masand</h3>
        </div>

        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
          "I've been a regular donor on this website for several months now, 
          and I can honestly say it's been one of the most rewarding experiences of my life.
           Knowing that my contributions are making a real difference in the lives of hungry people is incredibly fulfilling,
           and the website's interface makes it easy to donate on a regular basis. Highly recommended!"
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="img/amogh.jpg" alt="" height='100px'/>
          <h3>Amogh Bansal</h3>
        </div>

        <div class="col-3">
          <i class="fas fa-quote-left"></i>
          <p>
          "I was hesitant to donate at first, since there are so many scams out there, 
          but after doing some research I decided to give this website a try. 
          I'm so glad I did! The organization behind the website is transparent and reputable, 
          and I can see firsthand the impact my donations are having. 
          It feels great to be part of a community that's making a real difference."
          </p>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <img src="img/arpan.jpg" alt="" height='100px'/>
          <h3>Arpan Singh</h3>
        </div>
      </div>
    </div>
  </div>
            <div id="contact" style="margin-top:10px;background-color:#1B1E23;">
              <div class="container">
                  <div class="row text-center">
                  <div class="col-sm-6">
                      <h2 style="color:#D4AF37;font-size:25px;">CodeForFood</h2>
                      <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                      <p style="font: normal normal normal 20px arial,sans-serif;">This company is a nonprofit organization with the aim of improving health and wellness around the world.If you're interested in learning more or partnering for a good cause. Please feel free to reach out </p>
                      
                      </div>    
                  </div>
                  <div class="col-sm-6">
                      <h2 style="color:#D4AF37;font-size:25px;">Contact Information</h2>
                      <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                      <p class="fa fa-google" style="font-size:20px;">  arthhello@gmail.com</p><br>
                      <p class="fa fa-phone" style="font-size:20px;"> +91 8448406746</p><br>
                      <a href="https://www.facebook.com/amogh.bansal.12" class="fa fa-facebook" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      <a href="https://www.youtube.com/@bhavyamalik249" class="fa fa-youtube" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      <a href="https://www.instagram.com/amogh.bansal" class="fa fa-instagram" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      <a href="https://twitter.com/ArpanSingh69" class="fa fa-twitter" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      </div>
                  </div>
                  </div>
              </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>   
    </body> 
</html>