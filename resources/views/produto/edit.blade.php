@extends('adminlte::page')

@section('title', 'produto editar')

@section('content_header')
<a href="{{route('produtos.index')}}">
    <button type="button" class="btn btn-warning btn-sm">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </button>
</a>
<ol class="breadcrumb">
    <li><a href="">Dashboard</a></li>
    <li><a href="">Produto</a></li>
    <li><a href="">Editar</a></li>
</ol>
@stop
@section('content')
<div class="panel panel-warning">
    <div class="panel-heading" style="text-align: center">editar cliente</div>

    <div class="panel-body table-responsive">
        @include('includes.alerts')

        <form action="{{route('produtos.update', $produto->id)}}" method="post">
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}

            @include('produto.form', ['formMode' => 'update'])

        </form>
    </div>
</div>
@stop