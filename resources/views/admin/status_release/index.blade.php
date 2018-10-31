@extends('adminlte::page')

@section('title', 'Situações dos Cursos')

@section('content_header')
<section class="content-header">
    <h1>
        Situações dos Cursos
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Situações dos Cursos</li>
    </ol>
</section>
@stop

@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('status_release-create')
            <a href="{{route('status_release.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <table class="table table-hover table-striped table-responsive table-bordered">						
        <thead>
        
        <th>Situação</th>
        <th></th>
        </thead>
        <tbody>       
            @foreach($status_releases as $status_release)           
            <tr>                
                <td>{{$status_release->name}}</td>
                <td class="text-right">
                    @can('status_release-edit')
                    <a href="{{url("/admin/status_release/$status_release->id/edit")}}" class="btn" title="Editar"><i class="fa fa-pencil" style="color:green;" aria-hidden="true"></i></a>
                    @endcan
                    @can('status_release-show')
                    <a href="{{url("/admin/status_release/$status_release->id")}}" class="btn" title="Visualizar"><i class="fa fa-eye" aria-hidden="true"></i></i></a> 
                    @endcan            
                </td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</section>

@stop