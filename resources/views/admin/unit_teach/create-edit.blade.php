@extends('adminlte::page')

@section('title', 'Unidade de Ensino') 

@section('content_header')

@if ( isset($unitteach) )      
<section class="content-header">
    <h1>Editar</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('unitteach.index')}}">Unidade de Ensino</a></li>
        <li class="active">Editar</li>
    </ol>
</section>
{!! Form::model($unitteach, ['route' => ['unitteach.update', $unitteach->id], 'class' => 'form', 'method' => 'put']) !!}
@else 
<section class="content-header">
    <h1>Adicionar nova Unidade de Ensino</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('unitteach.index')}}">Unidade de Ensino</a></li>
        <li class="active">Adicionar</li>
    </ol>
</section>     
{!! Form::open(['route' => 'unitteach.store', 'class' => 'form']) !!}
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
                {!! Form::label('short_name', 'Nome Curto:') !!} 
                {!! Form::text('short_name', null, ['class' => 'form-control', 'placeholder' => 'Insira a sigla da unidade de ensino']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Unidade de Ensino:') !!} 
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Insira o nome da unidade de ensino']) !!}
            </div>           
        </div>    
        <div class="box-footer">
            <div class="text-right" >
                <input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
            </div>   
            {!! Form::close() !!}         
        </div>
    </div>             
</section>
@stop