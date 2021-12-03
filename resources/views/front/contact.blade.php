@extends('front.master')
@section('content')

<!-- Contatc Area
============================================ -->

<div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading" style="margin-top: 20px">Nous Contacter</h3>
				<div class="excerpt">
					<!-- <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p> -->
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Contact Info -->
			<div class="contact-info col-lg-4 col-sm-5 col-12">
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-phone"></i></div>
					<div class="content fix">
						<h5>call us</h5>
						<p>{{$website->phone1 ?? ''}}<br />{{$website->phone2 ?? ''}}</p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-envelope"></i></div>
					<div class="content fix">
						<h5>your message</h5>
						<p><a href="#">{{$website->email ?? ''}}</a></p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-location-pin"></i></div>
					<div class="content fix">
						<h5>our location</h5>
						<p>{{$website->address ?? ''}}</p>
					</div>
				</div>
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-lg-8 col-sm-7 col-12">
				<form id="contact-form" action="mail.php" method="post">
					<div class="input-2">
						<div class="input"><input type="text" name="name" placeholder="Name" /></div>
						<div class="input"><input type="email" name="email" placeholder="E-mail" /></div>
					</div>
					<div class="input"><input type="text" name="subject" placeholder="Subject" /></div>
					<div class="input textarea"><textarea name="message" placeholder="Message"></textarea></div>
					<div class="input input-submit"><input type="submit" value="send message" /></div>
				</form>
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
	
</div>
  
@endsection