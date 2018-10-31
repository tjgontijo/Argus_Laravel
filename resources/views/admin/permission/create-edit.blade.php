@extends('adminlte::page') 
@section('title', 'Cursos') 
@section('content_header') 
@if ( isset($permission) )
<section class="content-header">
    <h1>Atualizar</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('permissions.index')}}">Cursos</a></li>
        <li class="active">Atualizar</li>
    </ol>
</section>
{!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'class' => 'form', 'method' => 'put']) !!} 
@else
<section class="content-header">
    <h1>Inserir</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('permissions.index')}}">Permissões</a></li>
        <li class="active">Inserir</li>
    </ol>
</section>
{!! Form::open(['route' => 'permissions.store', 'class' => 'form']) !!} 
@endif 

@if (isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif 
@stop 
@section('content')
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        {!! Form::label('name', 'Nome:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-9">
                        {!! Form::label('guard_name', 'Padrão:') !!} 
                        {!! Form::text('guard_name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="col-md-12 text-right">
                <input type="button" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>
                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
</section>

@stop