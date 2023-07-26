	<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'smazurchuk@mcw.edu'; 
    $subject = 'Hello';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	if ($_POST['submit']) {
    	if (mail ($to, $subject, $body, $from)) { 
        	echo '<p>Your message has been sent!</p>';
    	} else { 
        	echo '<p>Something went wrong, go back and try again!</p>'; 
    	}
	}
	?>
<!DOCTYPE HTML>
<!--
	Hi! Looking at the page source, huh? This site was made during my sophmore year of undergrad, and has been periodically updated since then.

	SM

	This template:
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Stephen Mazurchuk</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->

        <div id="header">

				<!-- Logo -->

            <h1><a href="index.html" id="logo">Stephen Mazurchuk <em></em></a></h1>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Home</a></li>

							<li><a href="left-sidebar.html">About Me</a></li>
							<li>
                                <a href="xfel.html">Research</a>
                                <ul class="dropdown">
                                    <li><a href="xfel.html">BioXFEL 2015</a></li>
                                    <li><a href="right-sidebar.html">Previous Experiences</a></li>
                                </ul>
                            </li>
                            <li><a href="study_abroad.html">Study Abroad</a></li>
							<li><a href="two-sidebar.html"><strong><u>Resume</u></strong></a></li>
							<li><a href="no-sidebar.html">References</a></li>
                            <li><a href="sideproject.html">Side Projects</a></li>
						</ul>
					</nav>

			</div>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2> <em>Downtown Buffalo<a href="http://html5up.net"></a></em></h2>
					<!-- <a href="#" class="button">Learn More</a> -->
				</header>
			</section>


        <!-- Gigantic Heading -->
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>Current Research Interests</h2>

					</header>
				</div>
			</section>

		<!-- Posts -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row">
						<section class="6u 12u(2)">
							<div class="box post">
								<a href="http://braininitiative.nih.gov/" class="image left"><img src="research/pic01.JPG" alt="" /></a>
								<div class="inner">
									<h3><a href="http://braininitiative.nih.gov/" >NIH BRAIN Initiative</a></h3>
									<p>Brain Research through Advancing Innovative
                                    Technologies</p>
								</div>
							</div>
						</section>
						<section class="6u 12u(2)">
							<div class="box post">
								<a href="http://engineering.buffalo.edu/biomedical.html" class="image left"><img src="images/pic02.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="http://engineering.buffalo.edu/biomedical.html" >University at Buffalo</a></h3>
									<p>The school which I call home. I have had the opportunity
                                    to extensivly explore my interests thanks to the many
                                    resources offered through the school.
                                    </p>
								</div>
							</div>
						</section>
					</div>
					<div class="row">
						<section class="6u 12u(2)">
							<div class="box post">
								<a href="http://www.humanconnectomeproject.org/" class="image left"><img src="images/pic03.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="http://www.humanconnectomeproject.org/" >Human Connectome Project</a></h3>
									<p>A project to completely map structural and
                                    neural connections</p>
								</div>
							</div>
						</section>
						<section class="6u 12u(2)">
							<div class="box post">
								<a href="http://www.usal.es/webusal/" class="image left"><img src="images/pic04.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="http://www.usal.es/webusal/" >Universidad de Salamanca, Espana</a></h3>
									<p>Aqui es donde voy a pasar el semestre de primavera
                                    este ano!</p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

         <!-- Gigantic Heading -->
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>A little about me</h2>

					</header>
				</div>
			</section>
        <!-- Highlights -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row 200%">
						<section class="4u 12u(2)">
							<div class="box highlight">
								<i class="icon major fa-paper-plane"></i>
								<h3>Where I want to go</h3>
								<p>We all have an interest in bettering the world and it is my goal to do
                                just that in every way I can</p>
							</div>
						</section>
						<section class="4u 12u(2)">
							<div class="box highlight">
								<i class="icon major fa-pencil"></i>
								<h3>The Reason?</h3>
								<p> We ought to be driven to
                                    reflect those existential human traits that define
                                    the ultimate ends of human life. It is for this reason,
                                    though dense, I am always
                                    keenly aware of my responsibility as a person.</p>
							</div>
						</section>
						<section class="4u 12u(2)">
							<div class="box highlight">
								<i class="icon major fa-wrench"></i>
								<h3>How?</h3>
								<p>To qoute House of Cards; "the same way you devour a whale, one bite at a time".
                                    Sheer relentess effort using the tools provided</p>
							</div>
						</section>
					</div>
				</div>
			</section>



		<!-- CTA -->
			<section id="cta" class="wrapper style3">
				<div class="container">
					<header>
						<h2>Thanks for Visiting!</h2>

					</header>
				</div>
			</section>

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<section class="3u 6u(2) 12u$(3)">
							<h3>Links to Stuff</h3>
							<ul class="links">
								<li><a href="http://www.mathworks.com/matlabcentral/cody/players/5339384-stephen">Project Cody</a></li>
								<li><a href="https://sites.google.com/site/ubacademicbowl/home">Academic Bowl</a></li>
								<li><a href="https://www.linkedin.com/pub/stephen-mazurchuk/93/540/424">LinkedIn</a></li>
								<li><a href="https://www.roswellpark.edu/education/summer-programs/high-school-students">Roswell Summer Program</a></li>
							</ul>
						</section>
						<section class="3u 6u$(2) 12u$(3)">

						</section>
						<section class="6u 12u(narrower)">
								<h3>Get In Touch!</h3>
								<form method="post"  action="index.php">
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Submit" id="submit" name="submit" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
					</div>
				</div>
				<!-- Icons -->


                            <ul class="icons">

						<li><a href="https://github.com/famousshooter98" class="icon fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="https://www.linkedin.com/pub/stephen-mazurchuk/93/540/424" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://plus.google.com/u/0/105825931053828864937/posts" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

				<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; Stephen M. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58131938-2', 'auto');
  ga('send', 'pageview');

</script>
</html>
