@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')

@if ( isset($course) )      
<section class="content-header">
    <h1>Editar o curso: <b>{{ $course->short_name }}</b> - {{$course->name}}</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course.index')}}">Cursos</a></li>
        <li class="active">Editar</li>
    </ol>
</section>
{!! Form::model($course, ['route' => ['course.update', $course->id], 'class' => 'form', 'method' => 'put']) !!}
@else 
<section class="content-header">
    <h1>Adicionar</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course.index')}}">Cursos</a></li>
        <li class="active">Adicionar</li>
    </ol>
</section>     
{!! Form::open(['route' => 'course.store', 'class' => 'form']) !!}
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
                        {!! Form::label('short_name', 'Sigla:') !!}  
                        {!! Form::text('short_name', null, ['class' => 'form-control']) !!}
                    </div>						
                    <div class="col-md-9">
                        {!! Form::label('name', 'Nome:') !!}  
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>	
                </div>
            </div>
            <div class="form-group">
                <label for="unit_teach_id">Unidade Responsável:</label>      
            <select class="form-control" id="unit_teach_id" name="unit_teach_id" required>
                    <option value=""></option>
                    @foreach($units as $unit)
                    <option value="{{$unit->id}}"
                        @if(isset($course) && ($course->unit_teach_id == $unit->id))
                            selected
                            @endif
                        >{{$unit->short_name}} - {{$unit->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unit_executing_id">Unidade Executora do Curso:</label>      
                <select class="form-control" id="unit_executing_id" name="unit_executing_id" required>
                    <option value=""></option>                    
                    @foreach($units_executing as $unit_all)
                    <option value="{{$unit_all->id}}"
                        @if(isset($course) && ($course->unit_executing_id  == $unit_all->id))
                            selected
                        @endif
                        >{{$unit_all->short_name}} - {{$unit_all->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_type_id">Tipo de Curso:</label>      
            <select class="form-control" id="course_type_id" name="course_type_id">
                    <option value=""></option>
                    @foreach($types as $type)
                    <option value="{{$type->id}}"
                        @if(isset($course) && ($course->course_type_id == $type->id))
                        selected
                        @endif
                        >{{$type->name}} - {{$type->type}}</option>
                    @endforeach
            </select>

            </div>
            <div class="form-group text-capitalize">
                {!! Form::label('description', 'Descrição:') !!}  
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}                
            </div>
        </div>
        <div class="box-footer">
            <div class="col-md-12 text-right" >
                <input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
                {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
            </div>           
            {!! Form::close() !!}            
            </section>  
            @stop