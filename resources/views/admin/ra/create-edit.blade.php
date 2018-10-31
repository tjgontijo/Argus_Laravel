@extends('adminlte::page')

@section('title', 'Região Administrativa')

@section('content_header')

@if ( isset($ra) )      
<section class="content-header">
    <h1>Editar Região Administrativa: <b>{{$ra->name}}</b></h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('ra.index')}}">Região Administrativa</a></li>
        <li class="active">Editar</li>
    </ol>
</section>
{!! Form::model($ra, ['route' => ['ra.update' , $ra->id], 'class' => 'form', 'method' => 'put']) !!}
@else 
<section class="content-header">
    <h1>Adicionar nova Região Administrativa</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('ra.index')}}">Região Administrativa</a></li>
        <li class="active">Adicionar</li>
    </ol>
</section>     
{!! Form::open(['route' => 'ra.store', 'class' => 'form']) !!}
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
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>      
            <div class="box-body">
                <div class="form-group">
                    <div class="row">              
                        <div class="col-md-12">
                            {!! Form::label('name', 'Nome:') !!}  
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('local', 'Local:') !!}  
                            {!! Form::text('local', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="col-md-12 text-right" >
                    <input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                </div>           
                {!! Form::close() !!}  
            </div>
        </div>            
</section>  
@stop