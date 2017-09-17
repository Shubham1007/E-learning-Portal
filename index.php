<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<script >
	paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
	
    <title>E-LEARN</title>

    <!-- Bootstrap Core CSS -->
	
    <link href="animate.css" rel="stylesheet">
    <link href="mix/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/cs1.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="mix/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.mySlides {display:none;}
	.rt{margin-left:-120px;
	img{
		margin:2px;
	}
	
	</style>

</head>

<body id="page-top" class="index">


<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

   
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
   
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
            </div>
<div class="rt"><a class="navbar-brand" href="#page-top"><div class="bounceInRight animated" style="margin-bottom:-1000px;" ><img src="img/ell.png" ></a></div> </div>
   
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-Sscroll">
                        <a href="loginsignupflip/logindesign/index.php">LOGIN</a>
						
                    </li>
					
                    <li class="page-Sscroll">
                        <a href="loginsignupflip/logindesign/index.php">SIGNUP</a>
						
                    </li>
					                  <li class="page-scroll">
                        <a href="#portfolio">More</a>
						
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            
        </div>
        
    </nav>

    
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name"><div class="bounceInUp animated">E - LEARN </div></h1>
                        <hr class="star-light">
                        <span class="skills"></span>
                    </div>
                </div>
            </div>
        </div>
		
    </header>
	
	<br>
	<center>
<div class="w3-content w3-section" style="max-width:400px;background-attachment:fixed;margin-right:400px; background-position:fiexd;">
  <img class="mySlides" src="img/elearn/el3.jpg" style="width200%">
  <img class="mySlides" src="img/elearn/el4.jpg" style="width:200%">
  <img class="mySlides" src="img/elearn/e99.jpg" style="width:200%">
   <img class="mySlides" src="img/elearn/el4.jpg" style="width:200%">
   <img class="mySlides" src="img/elearn/el5.jpg" style="width:200%">
</div>
</center>

<script align="center">
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 900); // Change image every 2 seconds
}

</script>

<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="sst">
<a class="sst1"   href="compiler/index.php"  style="margin-left:200px;">
<img src="img/elearn/sff.png" /></a>

<a class="sst2" href="quize.php" style="margin-left:140px; margin-top:200px;">
<img height="280" src="img/elearn/qui.jpg" /></a>

<a  class="sst3" style="margin-left:100px;" href="current.php">
<img height="280" src="img/elearn/curr.png" /></a>

</div>
<br>
<br><br><br><br><br><br>
<br><br>

<div class="ssst">
<a class="sst4" href="video.php "  style="margin-left:100px;">
<img src="img/elearn/vid.jpg" /></a>

<a class="sst5" href="reading.php" style="margin-left:90px; margin-top:200px;">
<img height="280" src="img/elearn/read.jpg" /></a>

<a class="sst6" style="margin-left:40px;" href="news.php">
<img height="250"  style="margin-bottom:30px;" src="img/elearn/news.jpg" /></a>

</div>



    <!-- About Section -->
    <section class="success" id="about"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>THE PORPUSE OF THIS SITE TO TEACH ALL THE NEEDED PERSON WHO WANT TO LEARN SOMETHING .</p>
                </div>
                <div class="col-lg-4">
                    <p>IN THIS TUTORIAL IS CONTAINING ALL THE VIDEO LECTURES ABOUT GIVEN TOPIC AND WHOLE READING MATRIALS AS WELL AS QUIZES </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  
                    <form action="contact.php" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label  for="email">Email Address</label>
                                <input name="name" type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input name="phone" type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea name="message" rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input   type="submit" name="submit" class="btn btn-success btn-lg" value="Send"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>VANDALUR-KELAMBAKKAM ROAD 
                            <br>KELLAKOTAIYAR, VIT UNIVERSITY CHENNAI </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/?stype=lo&jlou=Afc-6Ig7vxCOs6MSg1ntBVubG8TdRDdr05x27rhsAAjuC1duCc9HKPPEQaCw3sXzPyEjLqmCG8MsemAFmYK2cnXNURdiAgKWcB1c0jjpZy9RJg&smuh=22834&lh=Ac9MUHLVsA8EXfP4" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/login?lang=en" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://dribbble.com/" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About E-LEARN </h3>
                        <p>THIS IS FOR PUBLIC HELPING WEBSITE WHERE ANYONE CAN ONE CAN COME AND LEARN SOME THING NEW AND SPECIAL <a href="#">E-LEARN</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

   <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="mix/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="mix/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/cs1.min.js"></script>
	

</body>

</html>
