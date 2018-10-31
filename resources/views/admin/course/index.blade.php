@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')

<section class="content-header">
    <h1>Cursos</h1>
    <ol class="breadcrumb">        
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>        
        <li class="active">Cursos</li>
    </ol>
</section>
@stop
@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('course-create')
        <a href="{{route('course.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <table class="table table-hover table-striped table-responsive table-bordered">						
        <thead>
            <th>Sigla</th>
            <th width="400px">Nome</th>
            <th>Unidade Responsável</th>
            <th>Unidade Executora</th>
            <th>Tipo</th>
            <th></th>
        </thead>
        <tbody>                 
            @foreach($courses as $course)           
            <tr>
                <td><b>{{$course->short_name}}</b></td>
                <td>{{$course->name}}</td>
                <td>{{$course->unitteach->short_name}}</td>
                <td>{{$course->unitexecuting->short_name}}</td>
                <td>{{$course->coursetype->name}} - {{$course->coursetype->type}}</td>
                <td class="text-right">
                    @can('course-edit')
                    <a href="{{url("/admin/course/$course->id/edit")}}" class="btn"  title="Editar"><i class="fa fa-pencil"  style="color:green;" aria-hidden="true"></i></a>
                    @endcan
                    @can('course-show')
                    <a href="{{url("/admin/course/$course->id")}}" class="btn"  title="Visualizar"><i class="fa fa-eye" aria-hidden="true"></i></i></a>             
                    @endcan
                </td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</section>
@stop