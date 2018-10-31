@extends('adminlte::page')

@section('title', 'Usuários' )

@section('content_header')

<section class="content-header">
    <h1>Usuários</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Usuários</li>
    </ol>
</section>
@stop

@section('content')
<section class="content">
    <div class="text-right btn-add">
        @can('user-create')
        <a href="{{url("/admin/user/create")}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <div class="row">
        <table class="table table-hover table-striped">				
            <thead>       
            <th><h3>Nome</h3></th>
            <th><h3>Matricula</h3></th>
            <th><h3>Usuário PMDF</h3></th>
            <th><h3>Unidade/Batalhão</h3></th>
            <th></th>
            </thead>
            <tbody>       
                @foreach($users as $user)           
                <tr>                
                    <td>{{$user->name}}</td>
                    <td>{{$user->registration}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->unit->short_name}}</td>
                    <td class="text-right">
                        <a href="{{url("/admin/user/$user->id/edit")}}" class="btn" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{url("/admin/user/$user->id")}}" class="btn" title="Visualizar"><i class="fa fa-eye" aria-hidden="true"></i></i></a>             
                    </td>
                </tr>
                @endforeach           
            </tbody>
        </table>
    </div>
</section>
@stop