<?php include 'sendemail.php'; ?>


<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>JOAD Youth Empowerment Program</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">	
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/twrite.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<link rel="stylesheet" href="css/twrite.css">
		</noscript>
	</head>
	<body class="landing">

	<!--alert messages start-->
	<?php echo $alert; ?>
	<!--alert messages start-->
	<script src="js/load.js"></script>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">JOAD Youth Empowerment Program</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="#" class="button special modal-btn2">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Form -->
		<section id="forms">
			<div class="bg-modal"> 
            	<div class="modal-content">
					<div class="close">+</div>
                	<img src="images/profile_placeholder.gif" alt="">
                    <h3>Form</h3>
                    <form method="post" action="">
                        <div class="row uniform 50%">
                        	<div class="6u 12u$(4)">
                                <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                            </div>
                            <div class="6u$ 12u$(4)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                            </div>
                            <div class="12u$">
                                <div class="select-wrapper">
                                    <select name="category" id="category" required>
                                        <option value=""> Select Category </option>
                                        <option value="Art of Writing">Art of Writing</option>
                                        <option value="Blogging">Blogging</option>
                                        <option value="Graphics Design">Graphics Design</option>
                                        <option value="Social Media Marketing">Social Media Marketing</option>
                                        <option value="Web design">Web design</option>
                                    </select>
                                </div>
                            </div>
                            <div class="6u$ 12u$(4)">
                                <input type="tel" name="phone" id="phone" value="" placeholder="Phone Number" required/>
                            </div>
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" name="submit" value="Sign Up" class="special" /></li>
                                </ul>
                            </div>
                        </div>
                	</form>
            	</div>
			</div>
		</section>

		<!-- Banner -->
			<section id="banner">
				<div class="typewritercontainer">
					<h1>WELCOME </br></h1>
					<h2><span class="txt-type" data-wait="3000" data-words='["TO THE BIGGEST IN DEMAND SKILL TRAINING"]'></span>
					</h2>

				</div> 
				
				<div>

				</div>
				<ul class="actions">
					<li>
						<a href="#" class="button big modal-btn">Join Us</a>
					</li>
				</ul>
				<script src="js/signup.js"></script>
				
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>A Virtual 4-Day Skill Acquisition Program</h2>
						<p>Great Opportunity to learn skills for just a minimal fee</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color1 fa-laptop"></i>
								<h3>Web Design</h3>
								<p>Building a simple website with Wordpress</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Blogging</h3>
								<p>Something Something Something</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color5 fa-book"></i>
								<h3>Copywriting</h3>
								<p>Something Something Something</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color7 fa-codepen"></i>
								<h3>Blogging</h3>
								<p>Something Something Something</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<i class="icon big rounded color7 fa-codepen"></i>
								<h3>Blogging</h3>
								<p>Something Something Something</p>
							</section>
						</div>
					</div>
				</div>
			</section>


		<!-- Two -->
			<section id="two" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Meet Our Team</h2>
						<p>The Ladies are prayer warriors</p>
					</header>
					<section class="profiles">
						<div class="row">
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/Olamide1.jpeg" alt="" />
								<h4>Olamide Komolafe</h4>
								<p>Social Media Manager </br> Graphics Designer</p>
							</section>
							<section class="3u 6u$(medium) 12u$(xsmall) profile">
								<img src="images/Joseph.jpeg" alt="" />
								<h4>Joseph Edoh</h4>
								<p>Programmer </br> Web Developer</p>
							</section>
							<section class="3u 6u(medium) 12u$(xsmall) profile">
								<img src="images/arinola2.jpg" alt=""/>
								<h4>Arinola Quadri</h4>
								<p>Brand Ambassador </br> Research Writer </br> Content Developer </p>
							</section>
							<section class="3u$ 6u$(medium) 12u$(xsmall) profile">
								<img src="images/damilola.jpeg" alt="" />
								<h4>Damilola Akintola</h4>
								<p>Writer @ Culture Custodian </br> Blogger </p>
							</section>
						</div>
					</section>
				</div>
			</section>

		
		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>FOR MORE ENQUIRIES</h2>
						<p>Send us a message, Our Team responds</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text" required>
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email" required>
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Your Message" rows="6" required></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type= "submit" ></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

		
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; 2020. All rights reserved.</li>
								<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
	</body>
</html>