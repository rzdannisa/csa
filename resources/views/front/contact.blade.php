@extends('front.master')
<title>CONTACT | PT CATUREKA SUWARNA ABADI</title>
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.95692479412!2d106.79429331477606!3d-6.136489995556907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f61fff9f5409%3A0x438a9f7252b1cfe9!2sMutu+Indonesia!5e0!3m2!1sen!2sid!4v1502175010388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Address :</h4>
					<ul>
						<li><p>Rukan Bandengan Indah Blok B No. 1<br>
								Jl. Bandengan Utara, Penjaringan<br>
								Jakarta Utara, DKI Jakarta</p>
						</li>
					</ul>
				</div>

				<div class="col-sm-4 address-grids">
					<h4>Phone :</h4>
					<p>+62 21 6617005</p>
					<p>+62 21 6617006</p>
					<p>+62 21 6629510</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p><a href="#">cs@catureka.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>

			<!-- <div class="contact-infom">
				<h4>Miscellaneous Information:</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages,
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s with the release of Letraset
					  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div> -->
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
