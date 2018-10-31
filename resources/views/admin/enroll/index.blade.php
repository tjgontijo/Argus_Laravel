@extends('adminlte::page')

@section('title', 'Matriculas' )

@section('content_header')

<section class="content-header">
    <h1>Matriculas</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Matriculas</li>
    </ol>
</section>
@stop

@section('content')
<section class="content">
    <div class="text-right btn-add">
        <a href="{{route('enroll.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
    </div>
    <div class="row">
        <table class="table table-hover table-striped">				
            <thead>       
            <th><h3>ID</h3></th>
            <th><h3>Usuário</h3></th>
            <th><h3>Curso</h3></th>
            <th><h3>Função</h3></th>
            <th><h3>Status</h3></th>
            <th></th>
            </thead>
            <tbody>       
                @foreach($enrols as $enroll)           
                <tr>                
                    <td>{{$enroll->id}}</td>
                    <td>{{$enroll->user->name}}</td>
                    <td>{{$enroll->course_release->course->name}}</td>                    
                    <td>{{$enroll->function_enroll->name}}</td>
                    <td>{{$enroll->status_enroll->name}}</td>                    
                    <td class="text-right">
                        <a href="{{url("/admin/enroll/$enroll->id/edit")}}" class="btn"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{url("/admin/enroll/$enroll->id")}}" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></i></a>             
                    </td>
                </tr>
                @endforeach           
            </tbody>
        </table>
    </div>
</section>
@stop