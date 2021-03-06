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

            {{-- Strat Content--}}

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#admindocument" data-toggle="tab" class="nav-link active show"><!--ActiveJobRequest-->Votre document</a>
                                    </li>
                                    <li class="nav-item"><a href="#studentdocument" data-toggle="tab" class="nav-link"><!--CloseJobeRequest-->Document ??tudiant</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div id="admindocument" class="tab-pane fade active show">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title"><!-- Developer -->Documents</h4>
                                                    <div class="float-lg-right">
                                                        <a href="{{route('document.create')}}" class="btn btn-primary">Ajouter un nouveau</a>

                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                            <tr>

                                                                <th><!-- id -->Identifiant</th>
                                                                <th><!--  Name -->Nom d'utilisateur</th>
                                                                <th><!-- Job -->title</th>
                                                                <th><!-- document --> Document</th>

                                                                <th><!-- Action -->Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($document as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>
                                                                    <?php  $user =  \App\User::where('id','=',$row->user_id)->first();?>
                                                                    <td>{{$user->fname}}  {{$user->lname}}</td>
                                                                    <td>{{$row->title }}</td>
                                                                    <td><a target="_blank" href="{{asset($row->file)}}">Download Now</a></td>

                                                                    <td>
                                                                        <div class="d-flex">


                                                                            <a href="{{route('document.delete', ['id' => $row->id])}}" id="delete" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip" title="Delete">
                                                                                <i class="fa fa-trash"></i>
                                                                            </a>
                                                                            <a href="{{route('document.edit', ['id' => $row->id])}}" id="edit" class="btn btn-primary shadow btn-xs sharp" data-toggle="tooltip" title="edit">
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
                                    </div>

                                    <div id="studentdocument" class="tab-pane fade">

                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">

                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="example3" class="display min-w850">
                                                            <thead>
                                                            <tr>

                                                                <th><!-- id -->Identifiant</th>
                                                                <th><!--  Name -->Nom d'utilisateur</th>
                                                                <th><!-- Job -->title</th>
                                                                <th><!-- document --> Document</th>
                                                                <th>Cr???? ??</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($studentDocument as $row)
                                                                <tr>

                                                                    <td>{{$row->id}}</td>

                                                                    <td>{{$row->user->fname}}  {{$row->user->lname}}</td>
                                                                    <td>{{$row->title }}</td>
                                                                    <td><a href="{{ route('student.download.url',['id'=>$row->id]) }}"><span style="color: blue;">T??l??charger </span></a></td>
                                                                    <td>{{$row->created_at}}</td>
                                                                </tr>

                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Modal -->

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


@endsection
