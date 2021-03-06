{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>403 Acesso Negado</h1>
@stop

@section('content')

    <div class="error-page">
        <h2 class="headline text-red">
            403
        </h2>
    </div>
    <div class="error-content">
        <h3>
            <i class="fa fa-warning text-red"></i>
            Oops! Acesso Negado para este conteúdo.
        </h3>
        <p>
           Você não tem permissão para acessar este conteúdo. </br> <a href="javascript:history.back()">Voltar</a>

        </p>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop