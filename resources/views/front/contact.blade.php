@extends('front.master')
@section('content')
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
				<h2>Contact</h2>
				<div class="agileits-border"> </div>
			</div>
			<div class="map">
				<h4>How to find us :</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48388.364704188425!2d-73.99489843077946!3d40.7120108624803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1490244727346"  style="border:0" allowfullscreen></iframe>
			</div>

			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Address :</h4>
					<ul>
						<li><p>Eiusmod Tempor inc<br>
								Broome St,<br>
								Canada 56777</p>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Phone :</h4>
					<p>+2 123 456 789</p>
					<p>+2 987 654 321</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:example@email.com">mail@example.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-infom">
				<h4>Miscellaneous Information:</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages,
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s with the release of Letraset
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="contact-form">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="phone" placeholder="Telephone" required="">
					<textarea placeholder="Message" name="message" required=""></textarea>
					<button class="btn1">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->

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
						<img src="images/1.jpg" alt=" " class="img-responsive" />
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
