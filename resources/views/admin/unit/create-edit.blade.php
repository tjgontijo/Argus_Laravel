@extends('adminlte::page')

@section('title', 'Unidade') 

@section('content_header')

@if ( isset($unit) )      
<section class="content-header">
    <h1>Editar</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('unit.index')}}">Unidade / Batalhão</a></li>
        <li class="active">Editar</li>
    </ol>
</section>
{!! Form::model($unit, ['route' => ['unit.update', $unit->id], 'class' => 'form', 'method' => 'put']) !!}
@else 
<section class="content-header">
    <h1>Adicionar nova Unidade / Batalhão</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('unit.index')}}">Unidade / Batalhão</a></li>
        <li class="active">Adicionar</li>
    </ol>
</section>     
{!! Form::open(['route' => 'unit.store', 'class' => 'form']) !!}
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
                {!! Form::text('short_name', null, ['class' => 'form-control', 'placeholder' => 'Insira a sigla da unidade']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Unidade:') !!} 
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Insira o nome da unidade']) !!}
            </div>
            <div class="form-group">
                <label for="ra_id">Região Administrativa:</label>      
                <select class="form-control" id="ra_id" name="ra_id">
                    <option value=""></option>
                    @foreach($ras as $ra)
                    <option value="{{$ra->id}}" 
                            @if(isset($unit) && ($unit->ra_id == $ra->id)) 
                            selected
                            @endif
                            >{{$ra->name}} - {{$ra->local}}</option>
                    @endforeach                
                </select>        
            </div>
            <div class="form-group">
                <div class="row">    
                    <div class="col-md-12">
                        {!! Form::label('telephone', 'Telefone Fixo:') !!}  
                        {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                    </div>	
                </div>
            </div>         
            <div class="form-group">
                <div class="row">    
                    <div class="col-md-12">
                        {!! Form::label('cellphone', 'Telefone Celular:') !!}  
                        {!! Form::text('cellphone', null, ['class' => 'form-control']) !!}
                    </div>	
                </div>
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

@section('scripts') @parent
<!-- Mask Input Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript" >
    $(document).ready(function ($) {
        $('#telephone').mask("(99) 9999-9999");       
        $('#cellphone').mask("(99) 99999-9999");       
    });
</script>

@stop



