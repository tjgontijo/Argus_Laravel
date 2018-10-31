@extends('adminlte::page') 
@section('title', 'Cursos Publicados') 

@php 

@endphp

@section('content_header')
<section class="content-header">
    <h1>Cursos Publicados</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Cursos Publicados</li>
    </ol>
</section>
@stop 
@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('course_release-create')
        <a href="{{route('course_release.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <table class="table table-hover table-striped table-responsive table-bordered">				
            <thead>
                <tr>                    
                    <th class="text-center">Curso</th>
                    <th class="text-center">Unidade Responsável</th>
                    <th class="text-center">Início Programado</th>
                    <th class="text-center">Início Realizado</th>            
                    <th class="text-center">Término Programado</th>
                    <th class="text-center">Término Realizado</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Vagas Disponíveis</th>
                    <th class="text-center">Vagas Preenchidas</th>
                    <th class="text-center">Concludentes</th>
                    <th></th>
                </tr>               
            </thead>      
        <tbody>
            @foreach($course_releases as $course_release)
            @if (($course_release->vacancies == NULL) || ($course_release->date_schedule_start == NULL) || ($course_release->date_schedule_end == NULL))
            <tr style="background-color:#ff66665c">
            @else
            <tr>
                @endif
                <td title="{{$course_release->nome_curso}}" ><b>{{$course_release->nome_curso_short}}</b></td>
                <td title="{{$course_release->unit_name}}" class="text-center">{{$course_release->unit_short_name}}</td>   
                @if($course_release->date_schedule_start <> NULL)
                <td class="text-center">{{ date('d/m/y', strtotime($course_release->date_schedule_start)) }}</td>
                @else
                <td></td>
                @endif
                @if($course_release->date_start <> NULL)
                <td class="text-center">{{ date('d/m/y', strtotime($course_release->date_start)) }}</td>
                @else
                <td></td>
                @endif
                @if($course_release->date_schedule_end <> NULL)
                <td class="text-center">{{ date('d/m/y', strtotime($course_release->date_schedule_end)) }}</td>
                @else
                <td></td>
                @endif
                @if($course_release->date_end <> NULL)
                <td class="text-center">{{ date('d/m/y', strtotime($course_release->date_end)) }}</td>
                @else
                <td></td>
                @endif
                <td>{{$course_release->status_name}}</td>
                <td>{{$course_release->course_type_name}} - {{$course_release->course_type}}</td>
                <td class="text-center">{{$course_release->vacancies}}</td>
                <td class="text-center">{{$course_release->vacancies_fill}}</td>
                <td class="text-center">{{$course_release->vacancies_conclusive}}</td>
                <td class="text-right">
                    @can('course_release-edit')                    
                    <a href="{{ route('course_release.edit', ['id' => $course_release->id] ) }}"  title="Editar" class="btn" ><i class="fa fa-pencil" style="color:green;" alt="Editar" aria-hidden="true"></i></a>
                    @endcan
                    @can('course_release-show')
                    <a href="{{url("/admin/course_release/$course_release->id")}}"  title="Visualizar" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></i></a>
                    @endcan
                    @can('course_release_attachment-list')
                    <a class="btn" href="{{ route('course_release_attachment.index', ['id' => $course_release->id] ) }}" title="Anexos"><i class="fa fa-paperclip" style="color:#660099;" aria-hidden="true"></i></a>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</section>
@stop