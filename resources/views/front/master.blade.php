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
<link rel="icon" type="image/png" href="{{url('csa/logo/csa.png')}}">
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
							<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +62 21 6617005</p>
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><div id="google_translate_element"></div><script type="text/javascript">
									function googleTranslateElementInit() {
									  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
									}</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
									<li><a target="_blank" href="https://www.facebook.com/mutuindonesia/"><i style="font-size: 2em;" class="fa fa-facebook"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/mutu.indonesia/"><i style="font-size: 2em;" class="fa fa-instagram"></i></a></li>
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
									<a href="{{url('/')}}"><img class="navbar-logo" src="{{url('csa/logo/csa1.png')}}" alt=""></a>
									<!-- <h1><a href="index.html">Interior <span>Style</span></a></h1> -->
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li><a href="{{url('/')}}">Home</a> </li>
								<li><a href="{{url('about')}}">About </a> </li>
								<!-- <li><a href="gallery.html">Gallery</a></li> -->
								<li class="dropdown">
									<a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Brands <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="http://mutuindonesia.com" target="_blank">MUTU</a></li>
										<li><a href="#" data-toggle="modal" data-target="#Modalfomac">FOMAC</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#Modalpowerpack">POWERPACK</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#Modaldremax">DREMAX</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#Modalautata">AUTATA</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#Modalaecoe">AECOE</a></li>
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
	<div class="modal video-modal fade" id="Modalmutu" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					MUTU
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/product/produkmutu.jpg')}}" alt="Produk Mutu Indonesia" class="img-responsive" />
						<p style="text-align:justify">MUTU is a brand of kitchen and catering equipment made of stainless steel with the best quality and safe because it is food grade.
							visit us at <a href="http://mutuindonesia.com" target="_blank">www.mutuindonesia.com</a> </p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="modal video-modal fade" id="Modalfomac" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					FOMAC
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/product/produkfomac.jpg')}}" alt="Produk Fomac" class="img-responsive" />
						<p style="text-align:justify">FOMAC which focused on food processing products, FOMAC has more than 400 products with a focus on the results of the best food in every production. FOMAC has machine that can greatly favored in every make or treating and processing foods with the best results.</p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="modal video-modal fade" id="Modalpowerpack" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					POWERPACK
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/product/produkpowerpack.jpg')}}" alt="Produk Powerpack" class="img-responsive" />
						<p style="text-align:justify">POWERPACK is a brand of packaging machine that focuses on the best results from each production, precision in packaging and packaging strength in the.</p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="modal video-modal fade" id="Modaldremax" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					DREMAX
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/product/produkdremax.jpg')}}" alt="Produk Dremax" class="img-responsive" />
						<p style="text-align:justify">DREMAX Engineering of the State of Japan which is designed exclusively for cutting vegetables and fruit – fruit. High speed is able to produce pieces that are beautiful and perfect as a master chef who has experienced many – years.</p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="modal video-modal fade" id="Modalautata" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					AUTATA
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/product/produkautata.jpg')}}" alt="Produk Autata" class="img-responsive" />
						<p style="text-align:justify">AUTATA Machine created to facilitate the management of plastic glass materials. Designed specifically with elegant design and has a high-quality components.</p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="modal video-modal fade" id="Modalaecoe" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					AECOE
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/product/produkaecoe.jpg')}}" alt="Produk Aecoe" class="img-responsive" />
						<p style="text-align:justify">AECOE is a brand of food processing machines and packaging at a very economical price within best quality.</p>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>History of Us</h4>
					<p>PT Catureka Suwarna Abadi is a subsidiary of PT Putra Chandra Sentosa who has been engaged in food processing and packaging machinery since 2004. <span>With professional management, PT Catureka Suwarna Abadi has grown into one of the largest companies engaged in the food processing and packaging industry in Indonesia.</span><span>Seeing the development of HOREKA's business in Indonesia, Catureka was built in 2015 specifically to serve the needs of the market with the maximum service and professional.</span></p>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Facebook Page</h4>
					<ul class="w3agile_footer_grid_list">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmutuindonesia%2F&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=867605666704819" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</ul>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Instagram Post</h4>
					<ul>
						<iframe src="//widgets-code.websta.me/w/934d40c13770?ck=MjAxNy0wOC0yMVQwMjo1MTozOC45OTJa" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:auto;height:328px;width:308px;"></iframe> <!-- WEBSTA WIDGETS - widgets.websta.me -->
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
	<script src="{{url('csa/js/bars.js')}}"></script>
	<!-- //bars-js -->

</body>
</html>
