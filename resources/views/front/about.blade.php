@extends('front.master')
<title>ABOUT | PT CATUREKA SUWARNA ABADI</title>
@section('content')

<!-- about -->
	<div class="about">
		<div class="container">
			<div class="w3-heading-grid">
				<h2>About Us</h2>
				<div class="agileits-border"> </div>
			</div>
			<p class="about-w3text">PT Catureka Suwarna Abadi is a subsidiary of PT Putra Chandra Sentosa who has been engaged in food processing and packaging machinery since 2004. With professional management, PT Catureka Suwarna Abadi has grown into one of the largest companies engaged in the food processing and packaging industry in Indonesia. Seeing the development of HOREKA's business in Indonesia, Catureka was built in 2015 specifically to serve the needs of the market with the maximum service and professional.</p>
			<div class="services-row-agileinfo">
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-leaf hi-icon" aria-hidden="true"></span>
					<h5>Vision</h5>
					<p>Aims to be at the forefront of serving the needs of the culinary industry of hotels, restaurants, cafes and packers in Indonesia.</p>
				</div>
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-heart hi-icon" aria-hidden="true"></span>
					<h5>Culture Value</h5>
					<p>Integritas</p>
					<p>Kami melayani dengan hati dan berprinsip melakukan yang terbaik untuk kepuasan pelanggan dan pertumbuhan perusahaan</p>
					<p>Profesional</p>
					<p>Kami menanggapi setiap kebutuhan pelanggan dengan cepat, ramah dan tanggung jawab</p>
				</div>
				<div class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-list-alt hi-icon" aria-hidden="true"></span>
					<h5>Mission</h5>
					<p>Providing high-quality products with maximum service.</p>
					<p>Helping the culinary business of hotels, restaurants, cafes in Indonesia to achieve success by using products we provide.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
	</div>
	<!-- //about -->
	<!-- features -->
	<div class="features wthree-sub jarallax">
		<div class="container">
			<div class="w3-heading-grid">
				<h3>Features</h3>
				<div class="agileits-border"> </div>
			</div>
			<div class='bar_group'>
				<div class='bar_group__bar thin elastic' label='dealers' value='230'></div>
				<div class='bar_group__bar thin elastic' label='support' value='130'></div>
				<div class='bar_group__bar thin elastic' label='Finance' value='160'></div>
			</div>
		</div>
	</div>
	<!-- //features -->
	<!-- about-team -->
	<div class="about team">
		<div class="container">
			<div class="w3-heading-grid">
				<h3>Our Team</h3>
				<div class="agileits-border"> </div>
			</div>
			<div class="team-row-agileinfo">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{url('csa/images/t5.jpg')}}" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Vaura Tegsner</h4>
							<p>Manager</p>
							<div class="social-w3licon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{url('csa/images/t6.jpg')}}" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Jark Kohnson</h4>
							<p>Director</p>
							<div class="social-w3licon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{url('csa/images/t7.jpg')}}" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Chunk Erson</h4>
							<p>Worker</p>
							<div class="social-w3licon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="{{url('csa/images/t8.jpg')}}" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Goes Mehak</h4>
							<p>CEO</p>
							<div class="social-w3licon">
								<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Interior Style
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="{{url('csa/images/1.jpg')}}" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum
							exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem
							vel eum iure reprehenderit qui in ea voluptate velit
							esse quam nihil molestiae consequatur, vel illum qui
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
@endsection
