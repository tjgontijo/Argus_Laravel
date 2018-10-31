@extends('adminlte::page') 
@section('title', 'Cursos Publicados') 
@section('content_header')
<section class="content-header">
    <h1>Descrição</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course_release.index')}}">Cursos Publicados</a></li>
        <li class="active">Descrição</li>
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
            <div class="row">
                <div class="col-md-12">
                    <div style="padding-left:30px;">
                        <p><b>Curso:</b></p>
                        <p>{{$course_release->course->short_name}} - {{$course_release->course->name}}</p>                        
                        @if($course_release->date_schedule_start <> NULL)
                        <p><b>Início Programado:</b></p>
                        <p>{{ date('d/m/y', strtotime($course_release->date_schedule_start)) }}</p>
                        @else                        
                        @endif
                        @if($course_release->date_start <> NULL)
                        <p><b>Início Efetivo:</b></p>
                        <p>{{ date('d/m/y', strtotime($course_release->date_schedule_start)) }}</p>
                        @else                       
                        @endif                     
                        @if($course_release->date_schedule_end <> NULL)
                        <p><b>Término Programado:</b></p>
                        <p>{{ date('d/m/y', strtotime($course_release->date_schedule_start)) }}</p>
                        @else                        
                        @endif
                        @if($course_release->date_end <> NULL)
                        <p><b>Término Efetivo:</b></p>
                        <p>{{ date('d/m/y', strtotime($course_release->date_schedule_start)) }}</p>
                        @else                        
                        @endif                      
                        <p><b>Status:</b></p>
                        <p>{{$course_release->status_release->name }}</p>
                        <p><b>Tipo</b></p>
                        <p>{{$course_release->course->coursetype->name}} - {{$course_release->course->coursetype->type}}</p>
                        <p><b>Vagas:</b></p>
                        <p>{{$course_release->vacancies }}</p>
                        <p><b>Duração:</b></p>
                        <p>{{$course_release->duration }} dias</p>
                        <p><b>Carga Horária:</b></p>
                        <p>{{$course_release->workload }} h/a</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <input type="button" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>
            @can('course_release-delete')
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
                <p>Deseja realmente deletar esta Publicação de Curso?</p>
                <p>Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['course_release.destroy' ,$course_release->id], 'method' => 'DELETE']) !!}
                @can('course_release-delete')
                <input type="submit" value="Deletar" class="btn btn-danger"></input>
                @endcan
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </div>
</div>
@stop