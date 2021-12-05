@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')

<!-- Contatc Area
============================================ -->

<div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading" style="margin-top: 50px">Connexion</h3>
				<div class="excerpt">
					<!-- <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p> -->
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row">
			<!-- Contact Info -->
			<div class="contact-info col-lg-12 col-sm-12 col-12">
			
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-lg-6 col-sm-7 col-12">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
					
					<div class="input"><input type="text" name="email" placeholder="Entrez l'e-mail" /></div>
					<div class="input"><input type="password" name="password" placeholder="Entrer le mot de passe" /></div>
					<div class="input input-submit"><input type="submit" value="Connexion" /></div>
				</form>
				
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
	
</div>
  
@endsection