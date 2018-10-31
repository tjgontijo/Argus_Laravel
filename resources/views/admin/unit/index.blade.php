@extends('adminlte::page')

@section('title', 'Unidades')

@section('content_header')

<section class="content-header">
    <h1>Unidades / Batalhões</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Unidades / Batalhões</li>
    </ol>
</section>
@stop
@section('content')
@include('flash::message')
<section class="content">
    <div class="text-right btn-add">
        @can('unit-create')
        <a href="{{url("/admin/unit/create")}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>
        @endcan
    </div>
    <table class="table table-hover table-striped table-responsive table-bordered">							
        <thead>        
        <th>Unidade</th>
        <th>Descrição</th>
        <th>Região Administrativa</th>
        <th>Tel. Fixo</th>
        <th>Tel. Celular</th>
        <th></th>
        </thead>
        <tbody> 
            @php 
                 function mask($val, $mask) { $maskared = ''; $k = 0; for($i = 0; $i<=strlen($mask)-1; $i++) { if($mask[$i] == '#') { if(isset($val[$k])) $maskared .= $val[$k++]; } else { if(isset($mask[$i])) $maskared .= $mask[$i]; } } return $maskared; } 
            @endphp            
            @foreach($units as $unit)           
            <tr>                
                <td><b>{{ $unit->short_name }}</b></td>
                <td>{{ $unit->name }}</td>
                <td>{{ $unit->ra->name }} - {{ $unit->ra->local }}</td>
                @if ($unit->telephone <> '')
                <td>{{ mask($unit->telephone, '(##) ####-####') }}</td>             
                @else
                <td></td>
                @endif
                @if ($unit->cellphone <> '')
                <td>{{ mask($unit->cellphone, '(##) #####-####') }}</td>   
                @else
                <td></td> 
                @endif         
                <td class="text-right">
                    @can('unit-edit')
                    <a href="{{url("/admin/unit/$unit->id/edit")}}" title="Editar" class="btn"><i class="fa fa-pencil" style="color:green;" aria-hidden="true"></i></a>
                    @endcan
                    @can('unit-show')
                    <a href="{{url("/admin/unit/$unit->id")}}" title="Visualizar" class="btn"><i class="fa fa-eye" aria-hidden="true"></i></i></a>             
                    @endcan
                </td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</section>
@stop