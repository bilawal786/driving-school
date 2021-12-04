@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')

<!-- Contatc Area
============================================ -->

<div id="about-area" class="course-area bg-gray pt-90 pb-60" style="background-color:#ffffff;">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="col-md-6">
                <div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70" style="margin-top: 50px">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading" >Etudiant de l'information</h3>
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
			<div class="contact-form form text-left col-lg-8 col-sm-7 col-12">
            <form method="POST"  action="{{ route('checkout.store') }}" enctype="multipart/form-data">
             @csrf
				
					<div class="input-2">
						<div class="input"><input type="text" name="firstname" value="{{$user->fname ?? ''}}" placeholder="Saisir le prénom" /></div>
						<div class="input"><input type="text" name="lastname" value="{{$user->lname ?? ''}}" placeholder="Entrez le nom de famille" /></div>
					</div>
					<div class="input"><input type="text" name="email"value="{{$user->email ?? ''}}" placeholder="Entrer l'email" /></div>
					<div class="input"><input type="text" name="phone"value="{{$user->phone ?? ''}}" placeholder="Entrer dans le téléphone" /></div>
                    <div class="input"><input type="text" name="address"value="{{$user->address ?? ''}}" placeholder="Entrer l'adresse" /></div>
					<input type="hidden" name="total" value="{{$courses->price ?? ''}}">
                    <input type="hidden" name="user_id" value="{{$user->id ?? ''}}">
                    <input type="hidden" name="courseTitle" value="{{$courses->courseTitle ?? ''}}">
                    <input type="hidden" name="course_id" value="{{$courses->id ?? ''}}">
				
				
			</div>
		</div>
	</div>
	
</div>
                            </div>
                            <div class="col-md-6">
                            <div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70" style="margin-top: 50px">
                <div class="container pb-90 pt-90" >
                    <!-- Section Title -->
                    <div class="row" >
                        <div class="section-title text-center col-12 mb-45" >
                        <h3 class="heading"  >Votre Commande</h3>
                            <div class="excerpt">
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p> -->
                            </div>
                            <i class="icofont icofont-traffic-light"></i>
                        </div>
                    </div>
		<div class="row">
			<!-- Contact Info -->
			
				
			</div>
			<!-- Contact Form -->
			<div class="contact-form form text-left col-lg-8 col-sm-7 col-12" >
				
					<div class="input-3">
						<strong>Cours</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <strong>Quantile</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Total</strong>
					</div><hr>
					<div class="input-3">
                    {{$courses->courseTitle}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
                        1&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; {{$courses->price}}<hr>
					</div>
                    <div class="input-3">
						<strong>Le Montant Final</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <strong style="font-size: 17px;">{{$courses->price}}€</strong>
					</div><hr>
					<div class="input textarea">
                    <div class="payment-wrap offset-sm-top-45">
                            <div class="woocommerce-checkout-payment" id="payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bacs">
                                        <input checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs" type="radio">
                                        <label for="payment_method_bacs">Payez via votre carte</label>
                                        <div class="payment_box payment_method_bacs visibales">
                                            <div class="payment-method">
                                                <div class="payment-accordion">
                                                    <div class="order-button-payment">
                                                        <div class="clearfix">
                                                            <label>Moyen de paiement <span class="required">*</span></label>
                                                            <select name="pay" class="form-control" id="pay">
                                                                <option value="complete">Payer par carte bancaire</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group stripe-payment-method-div">
                                                            <label>{{ __('Carte bancaire') }}</label> <span class="text-danger">*</span>
                                                            <div id="card-element"></div>
                                                            <div id="card-errors" class="text-danger" role="alert"></div>
                                                        </div>
                                                        <input id="card-button" class="btn btn-default" value="Payer" type="submit" data-secret="{{ $intent }}">
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
					<!-- <div class="input input-submit"><input type="submit" value="send message" /></div> -->
			
				
			</div>
		</div>
	</div>
	
</div>
                </div>
            </div>
       
            </div>
        </div>
    </div>

    
    
  
@endsection