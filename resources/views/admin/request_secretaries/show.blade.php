@extends('adminlte::page')

@section('title', 'Solicitações')

@section('content_header')

<section class="content-header">
    <h1></h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('request_secretaries.index')}}">Solicitações</a></li>
        <li class="active">Detalhes</li>
    </ol>
</section>
@stop 

@section('content')    

<section class="content">   
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Solicitação n°: {{$request_secretary->id}}</h3>
        </div>
        <div class="box-body">
           <p><b>Curso</b></p>
           <p>{{$request_secretary->course_release->course->name}}</p>                           
           <p><b>Solicitação</b></p>
           <p>{{$request_secretary->name}}</p>           
           <p><b>Descrição</b></p>
           <p>{{$request_secretary->description}}</p>
           <p><b>Status</b></p>
           <p>{{$request_secretary->status}}</p>
       </div>         
        <div class="box-footer">    
        <input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
        
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm">Excluir</button>
        
        {!! Form::close() !!}
    </div>        
</div>
</section>

<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Confirmação de Exclusão</h3>
            </div>
            <div class="modal-body text-center">
                <p>Deseja realmente deletar esta Solicitação?</p>
                <p>Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['request_secretaries.destroy' ,$request_secretary->id], 'method' => 'DELETE']) !!}              
                <input type="submit" value="Deletar" class="btn btn-danger"></input>  
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop