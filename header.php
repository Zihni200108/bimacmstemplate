<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="assets/css/style.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick-theme.css">
	<!--Let browser know website is optimized for mobile-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
</head>
<body>
	<header>
		<div class="container">
			<nav>
				<div class="nav-wrapper">
					<div class="get-bimacms">
						<div class="thumbnail">
							<a href=" "><img src="assets/img/icon1.png"></a>
						</div>
						<div class="content">
							<a href=" "><p>GET BIMACMS</p></a>
						</div>
					</div>
					<div class="row">
						<div class="col l6 m8 s8">
							<img class="header-logo" src="assets/img/BIMACMS.png">
							<a href="#" class="sidenav-trigger" data-target="mobile-nav">
								<i class="material-icons">menu</i>
							</a>
							<ul class="right hide-on-med-and-down" id="nav-mobile">
								<li><a class="beranda" href="sass.html">BERANDA</a></li>
								<li><a href="badges.html">KERJASAMA</a></li>
								<li><a href="collapsible.html">BANTUAN</a></li>
							</ul>						
						</div>
					</div>
				</div>
			</div>
		</nav>
		<ul class="sidenav" id="mobile-nav">
			<li><a class="beranda" href="sass.html">BERANDA</a></li>
			<li><a href="badges.html">KERJASAMA</a></li>
			<li><a href="collapsible.html">BANTUAN</a></li>
		</ul>
	</div>
</header>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/slick-master/slick/slick.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$('.sidenav').sidenav();
	}); 
	$(document).ready(function(){
		$('.carousel.carousel-slider').carousel({
			fullWidth: true
		});

		$('.responsive').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 6,
			slidesToScroll: 1,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}
			]
		});
	});
	AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000
    });
</script>
