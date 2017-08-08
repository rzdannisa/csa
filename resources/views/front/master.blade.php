<!DOCTYPE html>
<html lang="en">
<head>
<title>PT CATUREKA SUWARNA ABADI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Interior Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{url('csa/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{url('csa/css/style.css')}}" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="{{url('csa/css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<!-- //font -->
<script src="{{url('csa/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('csa/js/bootstrap.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner-1">
			<div class="w3layouts-header-top">
				<div class="container">
					<div class="w3-header-top-grids">
						<div class="w3-header-top-left">
							<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +1 234 567 8901</p>
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-vk"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1><a href="index.html">Interior <span>Style</span></a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li><a href="{{url('/')}}">Home</a> </li>
								<li class="active"><a href="{{url('about')}}">About </a> </li>
								<li><a href="gallery.html">Gallery</a></li>
								<li class="dropdown">
									<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Brands <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="www.mutuindonesia.com">MUTU</a></li>
										<li><a href="codes.html">FOMAC</a></li>
                    <li><a href="codes.html">POWERPACK</a></li>
                    <li><a href="codes.html">DREMAX</a></li>
                    <li><a href="codes.html">AUTATA</a></li>
                    <li><a href="codes.html">AECOE</a></li>
									</ul>
								</li>
								<li><a href="{{url('contact')}}">Contact</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
	</div>
	<!-- //banner -->

  @yield('content')

  <!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>History of Us</h4>
					<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. <span>Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.</span></p>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Twitter Posts</h4>
					<ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-2 agile-footer-grid">
					<h4>Events</h4>
					<ul>
						<li>12th Feb <a href="#" data-toggle="modal" data-target="#myModal">Curabitur</a></li>
						<li>10th Mar <a href="#" data-toggle="modal" data-target="#myModal">Fusce urna</a></li>
						<li>24th Mar <a href="#" data-toggle="modal" data-target="#myModal">Praesent</a></li>
						<li>17th Apr <a href="#" data-toggle="modal" data-target="#myModal">Malesuada </a></li>
						<li>09th May <a href="#" data-toggle="modal" data-target="#myModal">Cum sociis</a></li>
					</ul>
				</div>
				<div class="col-md-2 agile-footer-grid">
					<h4>Navigation</h4>
					<ul>
						<li class="text"><a href="index.html">Home</a></li>
						<li class="text"><a href="about.html">About</a></li>
						<li class="text"><a href="icons.html">Icons</a></li>
						<li class="text"><a href="codes.html">Typography</a></li>
						<li class="text"><a href="gallery.html">Gallery</a></li>
						<li class="text"><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="agileits-w3layouts-copyright">
		<div class="container">
			<p>© 2017 Interior Style. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //copyright -->

  <script src="{{url('csa/js/jarallax.js')}}"></script>
	<script src="{{url('csa/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
  <script src="{{url('csa/js/responsiveslides.min.js')}}"></script>
	<script type="text/javascript" src="{{url('csa/js/easing.js')}}"></script>
	<script type="text/javascript" src="{{url('csa/js/move-top.js')}}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- bars-js -->
	<script src="js/bars.js"></script>
	<!-- //bars-js -->

</body>
</html>
