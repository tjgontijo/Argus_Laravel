@extends('adminlte::page')

@section('title', 'Tipo de Curso')

@section('content_header')

<section class="content-header">
	<h1>Tipos de Cursos</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Tipos de Cursos</li>
	</ol>
</section>
@stop
@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('course_type-create')
        <a href="{{route('course_type.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <div class="row">
        <table class="table table-hover table-striped table-responsive table-bordered">						
            <thead>       
            <th><h3>Nome</h3></th>
            <th><h3>Descrição</h3></th>
            <th><h3>Executor</h3></th>
            <th></th>
            </thead>
            <tbody>       
                @foreach($course_types as $course_type)           
                <tr>                
                    <td>{{$course_type->name}}</td>
                    <td>{{$course_type->description}}</td>
                    <td>{{$course_type->type}}</td>
                    <td class="text-right">
                        @can('course_type-edit')
                        <a href="{{url("/admin/course_type/$course_type->id/edit")}}" class="btn"  title="Editar"><i class="fa fa-pencil" style="color:green;" aria-hidden="true"></i></a>
                        @endcan
                        @can('course_type-show')
                        <a href="{{url("/admin/course_type/$course_type->id")}}" class="btn"  title="Visualizar"><i class="fa fa-eye" aria-hidden="true"></i></i></a>             
                        @endcan
                    </td>
                </tr>
                @endforeach           
            </tbody>
        </table>
    </div>
</section>
@stop