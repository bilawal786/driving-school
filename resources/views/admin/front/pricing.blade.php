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
                                <h4 class="card-title"><!-- Apricing plan --> Plan Tarifaire</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('price.store') }}" enctype="multipart/form-data">
                                             @csrf
                                             
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Titre du prix1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingTitle1" value="{{$price->pricingTitle1 ?? ''}}"  placeholder="Entrez le Titre du prix1" >
                                                
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails11" value="{{$price->pricingDetails11 ?? ''}}"  placeholder="Entrez le Deatils des Pix1" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails12" value="{{$price->pricingDetails12 ?? ''}}"  placeholder="Entrez le Deatils des Pix2" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails13" value="{{$price->pricingDetails13 ?? ''}}"  placeholder="Entrez le Deatils des Pix3" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails14" value="{{$price->pricingDetails14 ?? ''}}"  placeholder="Entrez le Deatils des Pix4" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils5 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails15" value="{{$price->pricingDetails15 ?? ''}}"  placeholder="Entrez le Deatils des Pix5" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Prix1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="price1" value="{{$price->price1 ?? ''}}"  placeholder="Entrez le Prix1" >
                                                
                                           
                                        </div>
                                        </div>
                                        <hr><br>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Titre du prix2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingTitle2" value="{{$price->pricingTitle2 ?? ''}}"  placeholder="Entrez le Titre du prix2" >
                                                
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails21" value="{{$price->pricingDetails21 ?? ''}}"  placeholder="Entrez le Deatils des Pix1" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails22" value="{{$price->pricingDetails22 ?? ''}}"  placeholder="Entrez le Deatils des Pix2" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails23" value="{{$price->pricingDetails23 ?? ''}}"  placeholder="Entrez le Deatils des Pix3" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails24" value="{{$price->pricingDetails24 ?? ''}}"  placeholder="Entrez le Deatils des Pix4" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils5 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails25" value="{{$price->pricingDetails25 ?? ''}}"  placeholder="Entrez le Deatils des Pix5" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Prix2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="price2" value="{{$price->price2 ?? ''}}"  placeholder="Entrez le Prix2" >
                                                
                                        </div> 
                                        </div>
                                        <hr><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Titre du prix3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingTitle3" value="{{$price->pricingTitle3 ?? ''}}"  placeholder="Entrez le Titre du prix3" >
                                                
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails31" value="{{$price->pricingDetails31 ?? ''}}"  placeholder="Entrez le Deatils des Pix1" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails32" value="{{$price->pricingDetails32 ?? ''}}"  placeholder="Entrez le Deatils des Pix2" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails33" value="{{$price->pricingDetails33 ?? ''}}"  placeholder="Entrez le Deatils des Pix3" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails34" value="{{$price->pricingDetails34 ?? ''}}"  placeholder="Entrez le Deatils des Pix4" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils5 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails35" value="{{$price->pricingDetails35 ?? ''}}"  placeholder="Entrez le Deatils des Pix5" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Prix3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="price3" value="{{$price->price3 ?? ''}}"  placeholder="Entrez le Prix3" >
                                                
                                          </div> 
                                        </div>
                                        <hr><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Titre du prix4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingTitle4" value="{{$price->pricingTitle4 ?? ''}}"  placeholder="Entrez le Titre du prix4" >
                                                
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails41" value="{{$price->pricingDetails41 ?? ''}}"  placeholder="Entrez le Deatils des Pix1" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails42" value="{{$price->pricingDetails42 ?? ''}}"  placeholder="Entrez le Deatils des Pix2" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails43" value="{{$price->pricingDetails43 ?? ''}}"  placeholder="Entrez le Deatils des Pix3" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"><!-- Title -->Deatils4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails44" value="{{$price->pricingDetails44 ?? ''}}"  placeholder="Entrez le Deatils des Pix4" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Deatils5 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="pricingDetails45" value="{{$price->pricingDetails45 ?? ''}}"  placeholder="Entrez le Deatils des Pix5" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Title -->Prix4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="price4" value="{{$price->price4 ?? ''}}"  placeholder="Entrez le Prix4" >
                                                
                                         </div>  
                                        </div>
                                        <hr><br>
                                        <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><!-- Description -->La description <strong style="color: red;font-size: 20px;"> *</strong></label>
                                        <div class="col-sm-12">
                                        
                                        <div class="card-body">

                                        <div >
                                        <textarea class="summernote" name="pricingDescription"  >{{$price->pricingDescription ?? ''}}</textarea>
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
@endsection
