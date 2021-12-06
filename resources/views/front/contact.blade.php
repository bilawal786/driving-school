@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')

<!-- Contatc Area
============================================ -->

<div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70" style="margin-top: 50px">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading" >Nous Contacter</h3>
				<div class="excerpt">
				@if (Session::has('message'))
   <div class="alert alert-success solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong> {{ Session::get('message') }}.
									<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                              @endif
                              @if (Session::has('error'))
                  <div class="alert alert-danger alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong> {{ Session::get('error') }}.
									<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
								</div>
                  @endif
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
						<h5><!--call us-->Appelez-Nous</h5>
						<p>{{$website->phone1 ?? ''}}<br />{{$website->phone2 ?? ''}}</p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-envelope"></i></div>
					<div class="content fix">
						<h5><!--your message-->Votre Message</h5>
						<p><a href="#">{{$website->email ?? ''}}</a></p>
					</div>
				</div>
				<div class="single-info text-left fix">
					<div class="icon"><i class="icofont icofont-location-pin"></i></div>
					<div class="content fix">
						<h5><!--our location-->Notre Emplacement</h5>
						<p>{{$website->address ?? ''}}</p>
					</div>
				</div>
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-lg-8 col-sm-7 col-12">
			<form method="POST" action="{{ route('contact.store') }}" >
			@csrf
					<div class="input-2">
						<div class="input"><input type="text" name="name" placeholder="Nom" /></div>
						<div class="input"><input type="email" name="email" placeholder="E-mail" /></div>
					</div>
					<div class="input"><input type="text" name="subject" placeholder="Sujette" /></div>
					<div class="input textarea"><textarea name="message" placeholder="Un message"></textarea></div>
					@auth
					<div class="input input-submit"><input type="submit" value="Envoyer le Message" /></div>
					@else
                    <div class="input input-submit"><button style=" background-color: #dec839; " ><a href="{{route('front.login')}}" >Envoyer le Message</a></button></div>
                    @endauth
				</form>
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
	
</div>
  
@endsection