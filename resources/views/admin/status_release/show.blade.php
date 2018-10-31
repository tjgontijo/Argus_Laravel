@extends('adminlte::page') 
@section('title', 'Status do Curso:') 
@section('content_header')
<section class="content-header">
    <h1>Detalhes</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('status_release.index')}}">Status dos Cursos</a></li>
        <li class="active">Detalhes</li>
    </ol>
</section>
@stop 
@section('content')
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <p><b>Situação:</b></p>
            <p>{{$status_release->name}}</p>
        </div>
        <div class="box-footer">
            <input type="button"  value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
            @can('status_release-delete')
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
                <p>Deseja realmente deletar este Status de Curso?</p>
                <p>Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['status_release.destroy' ,$status_release->id], 'method' => 'DELETE']) !!}
                <input type="submit" value="Deletar" class="btn btn-danger"></input>
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@stop