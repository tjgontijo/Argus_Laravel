@extends('adminlte::page') 
@section('title', 'Solicitações') 
@section('content_header') 

@if ( isset($request_secretaries))

<section class="content-header">
    <h1>Editar Solicitação</b></h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('request_secretaries.index')}}">Solicitações</a></li>
        <li class="active">Editar</li>
    </ol>
</section>
{!! Form::model($request_secretaries, ['route' => ['request_secretaries.update' , $request_secretaries->id], 'class' => 'form',
'method' => 'put']) !!} 
@else
<section class="content-header">
    <h1>Adicionar nova Solicitação</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('request_secretaries.index')}}">Solicitações</a></li>
        <li class="active">Adicionar</li>
    </ol>
</section>
{!! Form::open(['route' => 'request_secretaries.store', 'class' => 'form']) !!} 
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
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::label('name', 'Solicitação:') !!} {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::label('description', 'Descrição:') !!} {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_release_id">Curso:</label>
                    <select class="form-control" id="course_release_id" name="course_release_id">
                        <option value=""></option>                                      
                        @foreach($enrolls_active as $enroll_active)
                        <option value="{{ $enroll_active->course_release_id }}" 
                            @if(isset($request_secretaries) && ($request_secretaries->course_release_id == $enroll_active->course_release_id)) 
                            selected
                            @endif
                            >{{$enroll_active->course_release->course->name}}</option>
                        @endforeach                
                    </select>
                </div>
                @if ( !isset($request_secretaries))
                <input type="hidden" name="status" value="Aberto">
                @endif
                @can('request_secretary_status_edit')
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('status', 'Estado:') !!}  
                            {!! Form::select('status', ['Aberto' => 'Aberto', 'Processando' => 'Processando', 'Negado' => 'Negado', 'Solucionado' => 'Solucionado'], null, ['class' => 'form-control']) !!}                          
                        </div>	
                    </div>
                </div>
                @endcan
            </div>
            <div class="box-footer">
                <div class="col-md-12 text-right">
                    <input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</section>
@stop