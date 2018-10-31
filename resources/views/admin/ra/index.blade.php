@extends('adminlte::page')

@section('title', 'Regiões Administrativas' )

@section('content_header')

<section class="content-header">
    <h1>Regiões Administrativas</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Regiões Administrativas</li>
    </ol>
</section>
@stop

@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('ra-create')
        <a href="{{route('ra.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <div class="row">
        <table class="table table-hover table-striped table-responsive table-bordered">						
            <thead>       
            <th><h3>Nome</h3></th>
            <th><h3>Localização</h3></th>
            <th></th>
            </thead>
            <tbody>       
                @foreach($ras as $ra)           
                <tr>                
                    <td>{{$ra->name}}</td>
                    <td>{{$ra->local}}</td>
                    <td class="text-right">
                        @can('ra-edit')
                        <a href="{{url("/admin/ra/$ra->id/edit")}}" title="Editar" class="btn"><i class="fa fa-pencil" style="color:green;" aria-hidden="true"></i></a>
                        @endcan
                        @can('ra-show')
                        <a href="{{url("/admin/ra/$ra->id")}}" title="Visualizar" class="btn"><i class="fa fa-eye"  aria-hidden="true"></i></i></a>             
                        @endcan
                    </td>
                </tr>
                @endforeach           
            </tbody>
        </table>
    </div>
</section>
@stop