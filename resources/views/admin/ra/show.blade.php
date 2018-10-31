@extends('adminlte::page')

@section('title', 'Região Administrativa:')

@section('content_header')

<section class="content-header">
    <h1></h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('ra.index')}}">Regiões Administrativas</a></li>
        <li class="active">Detalhes</li>
    </ol>
</section>
@stop 

@section('content')    

<section class="content">   
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Região Administrativa</h3>    
                         
        </div>
        <div class="box-body">
           <p><b>Nome</b></p>
           <p>{{$ra->name}}</p>           
           <p><b>Localização:</b></p>
           <p>{{$ra->local}}</p>
       </div>         
        <div class="box-footer">    
        <input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
        @can('ra-delete')  
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm">Excluir</button>
        @endcan
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
                <p>Deseja realmente deletar esta Região Administrativa?</p>
                <p>Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['ra.destroy' ,$ra->id], 'method' => 'DELETE']) !!}              
                <input type="submit" value="Deletar" class="btn btn-danger"></input>  
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop