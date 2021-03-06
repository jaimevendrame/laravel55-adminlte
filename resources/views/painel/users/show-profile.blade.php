@extends('adminlte::page')

@section('title', 'Gestão de usuários')

@section('content_header')
    <h1>Gestão de perfil <small>Visualizar</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Perfil</a></li>

    </ol>
@stop

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Visualizar perfil</h3>
                </div>
                <!-- /.box-header -->

                <!-- Alert Errors start -->
                @if( isset($errors) && count($errors) > 0 )
                    <div class="col-md-12">
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-warning"></i> Atenção!</h4>
                            @foreach( $errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    </div>

                @endif
                <!-- /.Alert Errors start -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                @if(isset($data->image))
                                    <img src="{{URL::asset('/assets/uploads/users/'.$data->image)}}" alt="$user->image" class="img-responsive img-circle img-bordered center-block" style="width: 50%;">
                                @endif
                            </div>
                            <div class="row text-center">
                                <h4><strong>{{$data->name}}</strong></h4>
                                <h4>{{$data->email}}</h4>
                            </div>
                        </div>

                        <div class="col-md-8">

                            <h4><strong>Nome: </strong>{{$data->name}}</h4>
                            <h4><strong>Email: </strong>{{$data->email}}</h4>
                            <h4><strong>Facebook: </strong>{{$data->facebook}}</h4>
                            <h4><strong>Twitter: </strong>{{$data->twitter}}</h4>
                            <h4><strong>GitHun: </strong>{{$data->github}}</h4>
                            <h4><strong>Site: </strong>{{$data->site}}</h4>
                            <h4><strong>Biográfia: </strong>{{$data->biography}}</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <!-- form start -->
                <form role="form" method="post" action="{{route('usuarios.destroy', $data->id)}}" >
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="box-footer">
                        <div class="col-md-4">
                        </div>
                        <div class="form-group col-md-8">
                            <a href="{{route('profile.edit')}}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
                            <a href="{{route('home')}}" class="btn btn-info"><i class="fa fa-undo"></i>  Voltar</a>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.box -->
@stop