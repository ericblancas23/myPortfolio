<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eric Blancas: Portfolio</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="https://www.bnmetrics.com/images/bunny-icon.png">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-docu">About Me</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-manuals">Projects</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-software">Skills</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-custom">Contact</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-training">Future Goals</a></div>
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="https://twitter.com/ericfly23"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
			<a class="link link--social link--faded" href="https://www.linkedin.com/in/eric-blancas23/"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
			<a class="link link--social link--faded" href="https://www.youtube.com/channel/UCf8Uvu6AJPtmn9nij991xXA"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<!-- header -->
			<header class="bp-header cf">
				<span class="bp-header__present">Eric Blancas</span>
				<h1 class="bp-header__title">Portfolio</h1>
			</header>
			<img class="poster" src="https://udemy-images.udemy.com/course/750x422/861624_864d_2.jpg" alt="img01" />
		</div>
		<!-- /page -->
		<div class="page" id="page-docu">
			<header class="bp-header cf">
				<h1 class="bp-header__title">About me</h1>
				
				<p class="info">
					Born and raised in San Diego, CA. Growing up I always had an admiration for computers and technology, Xanga and MySpace had become my stepping stone towards web development. 
					I would spend countless hours trying to make my profile page look colorful just to impress my friends and eventually from such a young age, it became one of my most treasured skills. Html/CSS was my first exposure to DOM manipulation of rendering colors, and creation of user interfaces; 
					thus began my journey of becoming a web developer.
				</p>
				<h2 class="bp-header__title">My Hobbies</h2>
				<ul>
					<li>Gaming</li>
					<li>Photography</li>
					<li>Vlogging</li>
				</ul>
			</header>
			<img class="poster" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAMABADGAAwAAQAAAAAAAA6zAAAAJGZjYzU2ZTk2LTU2YTUtNDE2Yi05Zjc2LThhZDVkOGJkMjAwOA.jpg" alt="img06" />
		</div>
		<div class="page" id="page-manuals">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Projects</h1>
				
				<p class="info">
				  These are some of the applications I produced with React and MongoDB/Express. 
				During my time at Lambda School and College I have learned to build full-scalable applications
				, I always have the time to improve on my skills as a front-end 
				developer; along with being open to many new experiences.
					<ul>
						<li><a href="https://movingimages.herokuapp.com/">Cliphy Project</a></li>
						<li><a href="https://lambdashowcase.herokuapp.com/">Lambda Showcase</a></li>
						<li><a href="https://airbnbproject.herokuapp.com/">AirBnb</a></li>
						<li><a href="https://github.com/ericblancas23/taxi-app">Carpool App</a></li>
						<li><a href="https://merry-weather.herokuapp.com/">Weather App</a></li>
					</ul>
				</p>
			</header>
		</div>
		<div class="page" id="page-software">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Skills</h1>
				<canvas id="myChart" ></canvas>
				<script>
				var ctx = document.getElementById("myChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'doughnut',
					data: {
						labels: ["React", "Javascript", "Redux", "Python", "Mongo", "Express", "Flask"],
						datasets: [{
							label: '# of Votes',
							data: [80, 85, 70, 45, 69, 55, 35],
							backgroundColor: [
								'rgba(255, 99, 132, 0.5)',
								'rgba(54, 162, 235, 0.5)',
								'rgba(255, 206, 86, 0.5)',
								'rgba(75, 192, 192, 0.5)',
								'rgba(153, 102, 255, 0.5)',
								'rgba(255, 159, 64, 0.5)'
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 0.5
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
				</script>
			</header>
		</div>
		<div class="page" id="page-custom">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
				
				<p class="info">
					<li><a href="https://www.linkedin.com/in/eric-blancas23/">Linkedin</a></li>
					<li>ericblancas23@gmail.com</li>
					<li><a href="https://lambdaschool.com/alumni/eric-blancas/">Lambda School Alumni</a></li>
					<li><a href="https://github.com/ericblancas23">Github</a></li>
				</p>

				<form action='https://www.getform.org/f/87e3c25f-640e-4b30-ba50-1a4ac5c967d8' method="POST">
					<input type="email" name="email" placeholder="email" /> <br />
					<textarea name="Message" id="message" class="input-style" required="" data-gramm="true" 
					data-txt_gramm_id="601f9a1f-85f3-f812-41cd-5c8fbd319ad9" 
					data-gramm_id="601f9a1f-85f3-f812-41cd-5c8fbd319ad9" 
					spellcheck="false" data-gramm_editor="true" 
					style="z-index: auto; position: relative; line-height: 21.4286px; font-size: 15px; transition: none; background: white !important;">
				</textarea> <br />
					<button type="submit">submit</button>
				</form>
			</header>
		</div>
		<div class="page" id="page-training">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Fundamentals</h1>
				
				<p class="info">
					I will always keep expanding my horizons and paths on technology and
					computer science. <br />
					As the tech field grows, and many new innovations are being created, my willingness 
				to learn and broaden my skills as a developer grows as the year grows on. My fundamental is simple 
				and that is to exchange, discover and apply new innovative ideas that come into play.
				</p>
			</header>
		</div>
	</div>
	<!-- /newPages -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
