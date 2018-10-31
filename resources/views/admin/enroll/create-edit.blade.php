@extends('adminlte::page')

@section('title', 'Regiões Administrativas')

@section('content_header')

@if ( isset($enroll) )      
<section class="content-header">
    <h1>Atualizar</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('enroll.index')}}">Matricula</a></li>
        <li class="active">Atualizar</li>
    </ol>
</section>
{!! Form::model($enroll, ['route' => ['enroll.update' , $enroll->id], 'class' => 'form', 'method' => 'put']) !!}
@else 
<section class="content-header">
    <h1>Inserir</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('enroll.index')}}">Matricula</a></li>
        <li class="active">Inserir</li>
    </ol>
</section>     
{!! Form::open(['route' => 'enroll.store', 'class' => 'form']) !!}
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
                            <label for="user_id">Usuário:</label>      
                            <select class="form-control" id="user_id" name="user_id">
                                <option value=""></option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}"
                                    @if(isset($enroll) && ($enroll->user_id == $user->id))
                                        selected
                                        @endif
                                    >{{$user->grade}} - {{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            <label for="function_enroll_id">Função:</label>      
                            <select class="form-control" id="function_enroll_id" name="function_enroll_id">
                                <option value=""></option>
                                @foreach($functions as $function)
                                <option value="{{$function->id}}"
                                    @if(isset($enroll) && ($enroll->function_enroll_id == $function->id))
                                        selected
                                        @endif
                                    >{{$function->name}}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            <label for="status_enroll_id">Status:</label>      
                            <select class="form-control" id="status_enroll_id" name="status_enroll_id">
                                <option value=""></option>
                                @foreach($status as $state)
                                <option value="{{$state->id}}"
                                    @if(isset($enroll) && ($enroll->status_enroll_id == $state->id))
                                        selected
                                        @endif
                                    >{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            <label for="course_release_id">Curso:</label>      
                            <select class="form-control" id="course_release_id" name="course_release_id">
                                <option value=""></option>
                                @foreach($course_releases as $course_release)
                                <option value="{{$course_release->id}}"
                                    @if(isset($enroll) && ($enroll->course_release_id == $course_release->id))
                                        selected
                                        @endif
                                    >{{$course_release->course->name}} - {{ $course_release->date_schedule_start }}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                </div> 
            </div>
            <div class="box-footer">
                <div class="col-md-12 text-right" >
                    <input type="button" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                </div>           
                {!! Form::close() !!}  
            </div>
        </div>            
</section>  
@stop