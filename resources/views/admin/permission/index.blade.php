@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<section class="content-header">
    <h1>Permissões</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Permissões</li>
    </ol>
</section>
@stop

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('permissions.create') }}"> Adicionar</a>
                @endcan
            </div>
        </div>
    </div>
    
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    
    <table class="table table-hover table-striped table-responsive table-bordered">				
      <tr>
         <th>Nº</th>
         <th>Nome</th>
         <th width="280px"></th>
      </tr>
        @foreach ($permissions as $key => $permission)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $permission->name }}</td>
            <td>               
                @can('role-edit')
                    <a class="btn" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                @endcan
                @can('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Deletar', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    
    
    {!! $permissions->render() !!}
@stop