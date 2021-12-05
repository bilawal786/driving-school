@extends('front.master')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: #dec839;
  outline: #dec839;s;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #dec839;;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #dec839;;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>


<!-- Contatc Area
============================================ -->

<div id="contact-area" class="contact-area bg-red overlay   AQ6overlay-black overlay-70">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-12 mb-45">
				<h3 class="heading" style="margin-top: 50px">Tableau de bord</h3>
				<div class="excerpt">
				@if (Session::has('message'))
   <div class="alert alert-success solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong> {{ Session::get('message') }}.
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
			<div class="contact-info col-lg-12 col-sm-12 col-12">
				<!-- <div class="single-info text-left fix">
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
				</div> -->
			</div>
			<!-- Contact Form -->
			<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Inscription aux Cours</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Document</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Profil</button>
  <button class="tablinks" > <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                   class="">
                                    
                                    Sortir
                                    </span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></button>
  
</div>

<div id="London" class="tabcontent">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Cours</th>
                <th>Price</th>
                <th>Created_at</th>
               
            </tr>
        </thead>
        <tbody>
            <tr> 
			@foreach($checkOut as $row)
                <td>{{$row->courseTitle}}</td>
                <td>{{$row->total}}</td>
                <td>{{$row->created_at}}</td>
		    @endforeach
                
            </tr>
           
        </tbody>
       
    </table>
</div>



<div id="Paris" class="tabcontent">
@foreach($document as $row)

<a href="{{ route('download_url',$row->file) }}">Download</a>
@endforeach
</div>

<div id="Tokyo" class="tabcontent">
<form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                             @csrf
  <div class="form-row" style="margin-top: 25px;">
    <div class="col-lg-2">
	<label ><!--Icon-->Prénom<strong style="color: red;font-size: 20px;"> * </strong></label>
	</div>
	<div class="col-lg-4">
      <input type="text" class="form-control" name="fname" value="{{Auth::user()->fname}}" placeholder="Prénom" >
    </div>
    <div class="col-lg-2">
	<label ><!--Icon-->Nom de famille<strong style="color: red;font-size: 20px;"> * </strong></label>
	</div>
	<div class="col-lg-4">
      <input type="text" class="form-control" name="lname" value="{{Auth::user()->lname}}" placeholder="Nom de famille">
    </div>
  </div>
  <div class="form-row" style="margin-top: 25px;">
    <div class="col-lg-2">
	<label ><!--Icon-->E-mail<strong style="color: red;font-size: 20px;"> * </strong></label>
	</div>
	<div class="col-lg-4">
      <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" placeholder="E-mail" readonly >
    </div>
    <div class="col-lg-2">
	<label ><!--Icon-->Téléphone<strong style="color: red;font-size: 20px;"> * </strong></label>
	</div>
	<div class="col-lg-4">
      <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" placeholder="Téléphone">
    </div>
  </div>
  <div class="form-row" style="margin-top: 25px;">
    <div class="col-lg-2">
	<label ><!--Icon-->Addressl<strong style="color: red;font-size: 20px;"> * </strong></label>
	</div>
	<div class="col-lg-4">
      <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}" placeholder="Address"  >
    </div>
    <div class="col-lg-2">
	<label ><!--Icon-->Image de profil<strong style="color: red;font-size: 20px;"> * </strong></label>
	</div>
	<div class="col-lg-4">
      <input type="file" class="form-control" name="image"  >
    </div>
  </div>
  <div class="form-row" style="margin-top: 25px;">
    
	
  <input type="submit"  style=" background-color: #dec839; border: 1px solid #dec839;" value="Mettre à jour" />
    
    
  </div>
</form>
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
	
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

@endsection