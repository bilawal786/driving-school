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
                                <h4 class="card-title"><!-- funfact --> Fait amusant</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('document.update',['id'=>$document->id]) }}" enctype="multipart/form-data">
                                             @csrf
                                             <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- students -->Étudiantes <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-9">
                                                <select class="form-control form-control-lg default-select select2" id="user_id" name="user_id">
                                            	<option>Choisir une Étudiantes</option>
                                            	@foreach($users as $row)
                                                
                                                <option value="{{$row->id}}" {{ $document->user_id == $row->id ? 'selected' : '' }} >{{$row->fname}} {{$row->lname}}</option>
                                               
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
            <label class="col-sm-3 col-form-label"><!-- Course Title -->Titre  <strong style="color: red;font-size: 20px;"> *</strong></label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="title" value="{{$document->title}}"  placeholder="Entrez le titre " >
                
            </div>
        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->Déposer<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-9">
                                              
                                               <input type="file" name="file" value=""  >
                        
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
