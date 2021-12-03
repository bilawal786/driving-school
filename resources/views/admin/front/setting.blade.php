@extends('layouts.admin')
@section('content')

<style>
#output_image1{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image2{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image3{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image4{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image5{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image6{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image7{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image8{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image9{
 border-style: ridge;
 width: 150px;
 height: 100px;
}
#output_image10{
 border-style: ridge;
 width: 150px;
 height: 100px;
}


</style>
   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"><!-- home -->Domicile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"><!-- Element -->Élément</a></li>
                    </ol>
                </div>
                @if (Session::has('message'))
   <div class="alert alert-success solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong> {{ Session::get('message') }}.
									<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                </div>
                  @endif
                
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><!-- Setting --> Réglage</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                                             @csrf
                                             <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Logo(70x70)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('logo') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Logo</strong></center><input type="file" style="display: none;"name="logo" value="{{ old('logo') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp1" onchange="preview_image1(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image1" src="{{ asset($setting->logo ?? ' ')  }}" />
                    
                                        </div></div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Nom Site <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="siteName" value="{{$setting->siteName ?? ''}}" placeholder="Entrez le Nom du Site" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->E-mail  <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="email" value="{{$setting->email ?? ''}}" placeholder="Entrez le Email " >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Téléphone1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="phone1" value="{{$setting->phone1 ?? ''}}" placeholder="Entrez le Téléphone1" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Téléphone2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="phone2" value="{{$setting->phone2 ?? ''}}" placeholder="Entrez le Téléphone2" >
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- start time --> Heure  début <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="time" class="form-control" name="startTime" value="{{$setting->startTime ?? ''}}"  placeholder="Entrez le Temps" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- end time -->heure de fin  <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="time" class="form-control" name="endTime" value="{{$setting->endTime ?? ''}}" placeholder="Entrez le Address " >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Adresse  <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="address" value="{{$setting->address ?? ''}}" placeholder="Entrez le Address " >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->à propos de la description <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="aboutDescription" value="{{$setting->aboutDescription ?? ''}}" placeholder="Entrez le à propos de la description" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Facebook <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="facebook" value="{{$setting->facebook ?? ''}}" placeholder="Entrez le  Facebook" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Instagram <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="instagram" value="{{$setting->instagram ?? ''}}" placeholder="Entrez le Instagram" >
                                            </div>
                                            
                                        </div>

                             

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- copy right -->Droits d'auteur <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="copyRight" value="{{$setting->copyRight ?? ''}}" placeholder="Entrez le Droits d'auteur" >
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Image du curseur1 (1920x850)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('simage1') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="simage1" value="{{ old('simage1') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp5" onchange="preview_image5(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image5" src="{{ asset($setting->simage1 ?? ' ')  }}" />
                    
                                        </div></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Image du curseur2 (1920x850)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('simage2') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="simage2" value="{{ old('simage2') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp6" onchange="preview_image6(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image6" src="{{ asset($setting->simage2 ?? ' ')  }}" />
                    
                                        </div></div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Image du curseur3 (1920x850)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('simage3') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="simage3" value="{{ old('simage3') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp7" onchange="preview_image7(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image7" src="{{ asset($setting->simage3 ?? ' ')  }}" />
                    
                                        </div></div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Image du Fond de pied de page (1920x514)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('footerBackGroundImage') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="footerBackGroundImage" value="{{ old('footerBackGroundImage') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp7" onchange="preview_image8(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image8" src="{{ asset($setting->footerBackGroundImage )  }}" />
                    
                                        </div></div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Inscription aux Cours (1920x838)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('courseBackGroundImage') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="courseBackGroundImage" value="{{ old('courseBackGroundImage') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp7" onchange="preview_image9(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image9" src="{{ asset($setting->courseBackGroundImage )  }}" />
                    
                                        </div></div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Image du fond de témoignage (1920x516)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('jooberBackGroundImage') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="jooberBackGroundImage" value="{{ old('jooberBackGroundImage') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp7" onchange="preview_image10(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image10" src="{{ asset($setting->jooberBackGroundImage )  }}" />
                    
                                        </div></div>

                                        <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- Description -->Description du cours <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-12">
                                        
                                        <div class="card-body">

                                        <div >
                                        <textarea class="summernote" name="courseDescription"  >{{$setting->courseDescription ?? ''}}</textarea>
                                        </div>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"><!-- Submit -->Soumettre</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--**********************************
            Content body start
        ***********************************-->
        <script>
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}


</script>

<script>
function preview_image2(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>

<script>
function preview_image3(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image3');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}


</script>

<script>
function preview_image4(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image4');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
        <script>
function preview_image5(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image5');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}


</script>

<script>
function preview_image6(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image6');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>
        <script>
function preview_image7(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image7');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

function preview_image8(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image8');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

function preview_image9(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image9');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
function preview_image10(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image10');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>




@endsection
