@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')
<style>
.center_div{
    margin: 0 auto;
    width:80% /* value of your choice which suits your alignment */
}
</style>

<!-- Contatc Area
============================================ -->

<div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading" style="margin-top: 50px">Inscription</h3>
				<div class="excerpt">
					<!-- <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p> -->
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<div class="row ">
			<!-- Contact Info -->
			
			<!-- Contact Form -->
			<div class="contact-form form text-center center_div col-lg-6 col-sm-7 col-12">
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="input "><input type="text" class="@error('fname') is-invalid @enderror" name="fname" placeholder="Entrez l'Prénom" required autocomplete="lname" /></div>
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="input "><input type="text"  class="@error('lname') is-invalid @enderror" name="lname" placeholder="Entrez l'Nom de famille"  required autocomplete="lname"></div>
                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					<div class="input "><input type="text"  class="@error('email') is-invalid @enderror" name="email" placeholder="Entrez l'e-mail" required autocomplete="email"/></div>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					<div class="input"><input type="password"  class="@error('password') is-invalid @enderror" name="password" placeholder="Entrer le mot de passe" required autocomplete="new-password" /></div>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="input"><input type="password"  class="@error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Entrer le Confirmez le mot de passe" required autocomplete="new-password" /></div>
					<div class="input input-submit"><input type="submit" value="Connexion" /></div>
				</form>
				
				<div class="input "><p class="form-messege" style="margin-top: 30px">Pas un membre ? <a href="{{ route('front.login') }}" style="color:#dec839;">S'inscrire maintenant</a></p></div>
			</div>
		</div>
	</div>
	
</div>
  
@endsection