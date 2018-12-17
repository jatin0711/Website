<?php 
include('config.php');
if(isset($_POST['signup']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$year=$_POST['year'];
$city=$_POST['city'];
$college=$_POST['college'];
$college_s=$_POST['college_s'];
$degree=$_POST['degree'];
$message=$_POST['comments'];
$quer = mysqli_query($bd,"SELECT * FROM register WHERE email = '". $email ."' OR email = '". $email ."'");
if (mysqli_num_rows($quer) > 0)
{
   echo " <script type='text/javascript'>alert('$name email you entered is already exist in our database please try another one')</script>";
    
}
 else
 {
$query=mysqli_query($bd,"INSERT into register(name,email,number,year,city,college,college_s,degree,comments) values( '$name', '$email', '$number', '$year', '$city', '$college', '$college_s', '$degree', '$message')");
if($query)
{
	echo "<script>alert('Thanks for registration');</script>";
}
else
{
	echo "<script>alert('Something went wrong please try again.');</script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campus Ambassador</title>
	
    <!-- css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.php" class="brand">ORDINADO 2019</a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">

                                          	 <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="#service">Responsibilities</a></li>
                                                                  <li><a href="#about">Benefits</a></li>
															      <li><a href="#intro">Register</a></li>
                                                                  <li><a href="#contact">Contact</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 


	<section class="hero" id="intro">
             
              <div class="row" style="margin-right: 5px;">
                <div class="col-md-12 col-md-offset-2 inner">
					<div class="animatedParent">
						<br><p class="animated fadeInUp" style="margin-left: 20px;">Enter your details for register as a Campus Ambassador.</p><br>
						<h1 class="animated fadeInDown"> 
                      <div id="login-box"  style="margin: 10px;">
            
            <div class="left-box" >
                <h1 style="color: black;font-family: sans-serif; margin: ">  </h1>
                <form class="left-box" method="post" action=""  role="form" class="form-horizontal">
        <label class="lable" style="color: #fff; font-family: sans-serif;font-weight: 500;">Register</label><br>
        <input type="text" maxlength="30" name="name" placeholder="Name" required/>                  
		<input type="email" maxlength="30" name="email" placeholder="Email" required/>
		<input type="text" name="number" maxlength="10" placeholder="Contact no." required/>
		<input type="text" name="year" maxlength="1" placeholder="Year of studying" required/>
		<input type="text" name="city" maxlength="15" placeholder="City" required/> 
		<input type="text" name="college" maxlength="100" placeholder="College name" required/> 
		<input type="text" name="college_s" placeholder="College strength" required/> 
		<input type="text" name="degree" placeholder="Degree and field of study" required/> 
        <textarea style="background-color: transparent;font-family: sans-serif;border: none; outline: none;border-bottom: 1px solid #aaa;color: white;font-weight: 400;font-size: 15px;"  class="form-control" name="comments" maxlength="1000" placeholder="Enter Your Message" cols="25" rows="6"></textarea><br>
        <input type="submit" name="signup" value="Register" placeholder="sign up"/>
         </form>
            </div>
                            

						</h1>
						
					</div>
			   </div>
              </div>
    </section>
	
	

    <!-- /Navigation -->  

	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white" style="color: black;">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">About Ordinado 2019</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
		
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
					write your code here
					</p><br><br>
				</div>
            </div>
		

        </div>		
		</div>

		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">Perks</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
		
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
					write your code here
					</p>
				</div>
            </div>
		

        </div>		
		</div>


	</section>
	<!-- /Section: about -->
	
	
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray" style="color: black;">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">Responsibilities</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-12 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user fa-2x"></span> 
					</div>
					<div class="service-desc">						
						<h5>Team Leader</h5>
						<div class="divider-header"></div>
						<p>
						CA will be solely responsible for getting participants for events and workshops for Quark from your college. CA will be the point of contact to us from the college.
						</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Publicity Manager</h5>
						<div class="divider-header"></div>
						<p>
						CA has to publicize all events and workshops in their college as well as in social media platforms.
						</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-code fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Event & Workshop Coordinator</h5>
						<div class="divider-header"></div>
						<p>
						CA will be the coordinator for the various regional events and Quark National Workshop conducted in their college and region.
						</p>
					</div>
                </div>
				</div>
            </div>

        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center"  style="color: black;">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Contact</h2><br>
					<p>YOGESH JAKHAR</p><br><p>yogeshjakhar259@gmail.com</p><br><p>9079662467</p>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		</section>
	<!-- /Section: contact -->


    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>

</body>

</html>
