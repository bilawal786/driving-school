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
                                <h4 class="card-title"><!-- funfact -->Catégorie de cours</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
                                             @csrf
                                             <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- Title -->Catégorie1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="category1" value="{{$course->category1 ?? ''}}" placeholder="Entrez le Catégorie1" >
                                            </div>
                                           
                                        </div> 
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- Title -->Catégorie2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="category2" value="{{$course->category2 ?? ''}}" placeholder="Entrez le Catégorie2" >
                                            </div>
                                           
                                        </div> 
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- Title -->Catégorie3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="category3" value="{{$course->category3 ?? ''}}" placeholder="Entrez le Catégorie3" >
                                            </div>
                                           
                                        </div> 
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!-- Title -->Catégorie4 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="category4" value="{{$course->category4 ?? ''}}" placeholder="Entrez le Catégorie4" >
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
    

@endsection
