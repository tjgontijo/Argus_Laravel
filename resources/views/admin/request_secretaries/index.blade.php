@extends('adminlte::page') 
@section('title', 'Solicitações' ) 
@section('content_header')

<section class="content-header">
    <h1>Solicitações</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Solicitações</li>
    </ol>
</section>

@stop 
@section('content')
    @include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        <a href="{{route('request_secretaries.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
    </div>
    <div class="row">
        <table class="table table-hover table-striped table-responsive table-bordered">
            <thead>
                <th>Usuário</th>
                <th>Curso</th>
                <th>Solicitação</th>
                <th>Status</th>                
                <th></th>
            </thead>
            <tbody>
                @foreach($request_secretaries as $request_secretary)
                <tr>
                    <td>{{$request_secretary->user->name}}</td>
                    <td>{{$request_secretary->course_release->course->short_name}} - {{$request_secretary->course_release->course->name}}</td>
                    <td>{{$request_secretary->name}}</td>
                    <td>{{$request_secretary->status}}</td>
                    <td class="text-right">                            
                        <a href="{{url("/admin/request_secretaries/$request_secretary->id/edit")}}" title="Editar" class="btn"><i class="fa fa-pencil" style="color:green;" aria-hidden="true"></i></a>
                        <a href="{{url("/admin/request_secretaries/$request_secretary->id")}}" title="Visualizar" class="btn"><i class="fa fa-eye"  aria-hidden="true"></i></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@stop