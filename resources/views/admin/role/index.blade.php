@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<section class="content-header">
    <h1>Papeis</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Papeis</li>
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
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Inserir</a>
                @endcan
            </div>
        </div>
    </div>
    
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    
    <table class="table table-hover table-striped  table-bordered">				
      <tr>
         <th>Nº</th>
         <th>Papel</th>
         <th width="280px"></th>
      </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                @can('role-edit')
                    <a class="btn" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                @endcan
                @can('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
    
    
    {!! $roles->render() !!}
@stop