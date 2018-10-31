@extends('adminlte::page')

@section('title', 'Unidades de Ensino')

@section('content_header')

<section class="content-header">
    <h1>Unidades de Ensino</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Unidades de Ensino</li>
    </ol>
</section>
@stop
@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('unit_teach-create')
        <a href="{{url("/admin/unitteach/create")}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <table class="table table-hover table-striped table-responsive table-bordered">							
        <thead>        
        <th>Sigla</th>
        <th>Nome</th>
        <th></th>
        </thead>
        <tbody>                     
            @foreach($unitteachs as $unitteach)           
            <tr>                
                <td><b>{{ $unitteach->short_name }}</b></td>
                <td>{{ $unitteach->name }}</td>                           
                <td class="text-right">
                    @can('unit_teach-edit')
                    <a href="{{url("/admin/unitteach/$unitteach->id/edit")}}" title="Editar" class="btn"><i class="fa fa-pencil" style="color:green;" aria-hidden="true"></i></a>
                    @endcan
                    @can('unit_teach-show')
                    <a href="{{url("/admin/unitteach/$unitteach->id")}}" title="Visualizar" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></i></a>             
                    @endcan
                </td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</section>
@stop