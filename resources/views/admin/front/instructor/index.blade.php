@extends('layouts.admin')
@section('content')

 <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)"><!-- Home -->Accueil</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)"><!-- Dashboard -->Tableau de bord</a></li>
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
                  @if (Session::has('error'))
                  <div class="alert alert-danger alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong> {{ Session::get('error') }}.
									<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
								</div>
                  @endif
                <!-- row -->
                  <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><!-- Developer -->INSTRUCTEUR</h4>
                                <div class="float-lg-right">
                                <a href="{{route('instructor.create')}}" class="btn btn-primary">Ajouter un instructur</a>
                                
               

                                 </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                
                                                <th><!-- id -->Identifiant</th>
                                                <th><!--  Name -->Nom</th>
                                                 <th><!-- Job -->Travail</th>
                                                 <th><!-- Job --> Image1</th>
                                                 <th><!-- Job -->Image2</th>
                                                <th><!-- Action -->Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($instructor as $row)
                                            <tr>
                                                
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name }}</td>
                                                <td>{{$row->job }}</td>
                                                <td><a href="{{ asset($row->image1 ?? ' ')  }} " data-lightbox="image-1" 
                                data-title="{{$row->name}}"><img class="rounded-circle" width="50" src="{{asset($row->image1)}}" alt="Album Photo" style="border-radius: 20%;height: 60px;width: 60px; text-align: center;"></a></td>
                                               
                                <td><a href="{{ asset($row->image2 ?? ' ')  }} " data-lightbox="image-1" 
                                data-title="{{$row->name}}"><img class="rounded-circle" width="50" src="{{asset($row->image2)}}" alt="Album Photo" style="border-radius: 20%;height: 60px;width: 60px; text-align: center;"></a></td>
                                               
                                               
                                                <td>
													<div class="d-flex">
														
                                                    
                                                <a href="{{route('instructor.delete', ['id' => $row->id])}}" id="delete" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip" title="Delete">
                                                   <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="{{route('instructor.edit', ['id' => $row->id])}}" id="edit" class="btn btn-primary shadow btn-xs sharp" data-toggle="tooltip" title="edit">
                                                   <i class="fa fa-pencil"></i>
                                                </a>
													</div>												
												</td>												
                                            </tr>

                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


 

    

 @endsection