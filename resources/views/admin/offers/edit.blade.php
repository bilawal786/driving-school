@extends('layouts.admin')
@section('content')

<style>
#output_image1{
 border-style: ridge;
 width: 120px;
 height: 120px;
}
#output_image2{
 border-style: ridge;
 width: 120px;
 height: 120px;
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
                                <h4 class="card-title"><!-- About --> Des Offres</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('offers.update',['id'=>$offers->id]) }}" enctype="multipart/form-data">
                                             @csrf

                            <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><!-- Title -->Titre <strong style="color: red;font-size: 20px;"> *</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="title" value="{{$offers->title}}"  placeholder="Entrez le Titre" >
                        </div>
                        <label class="col-sm-2 col-form-label"><!-- end date -->Date de Fin  <strong style="color: red;font-size: 20px;"> *</strong></label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="date" value="{{$offers->date}}"  >
                        </div>
                    </div>
                                        
                            
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label"><!--Icon-->Image(115x115)<strong style="color: red;font-size: 20px;"> * </strong></label>
                        <div class="col-sm-5">
                     <label class="form-control @error('image') is-invalid @enderror">
            <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre Image</strong></center><input type="file" style="display: none;"name="image" value="{{ old('image') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp1" onchange="preview_image1(event)">
            </label>
                                </div>
                            
                            <div class="col-sm-4">
            
                            <img id="output_image1" src="{{asset($offers->image)}}" />
        
                            </div></div>
                <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><!-- link -->Relier <strong style="color: red;font-size: 20px;"> *</strong></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="link" value="{{$offers->link}}"  placeholder="Entrez le Relier" >
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
@endsection
