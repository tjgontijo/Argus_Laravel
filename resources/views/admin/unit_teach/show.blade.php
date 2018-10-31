
@extends('adminlte::page')

@section('title', 'Unidade ')

@section('content_header')

<section class="content-header">
	<h1></h1><br>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
		<li><a href="{{route('unit.index')}}">Unidades de Ensino</a></li>
		<li class="active">Descrição</li>
	</ol>
</section>

@stop 

@section('content')    

<section class="content">    
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>{{$unitteach->name}}</b></h3>    
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"	title="Collapse">
					<i class="fa fa-minus"></i>
				</button>
			</div>              
		</div>
		<div class="box-body">
			<p><b>Nome curto:</b></p>
			<p>{{$unitteach->short_name}}</p>
			<p><b>Nome</b></p>
			<p>{{$unitteach->name}}</p>			
		</div>
		<!-- /.box-body -->
		<div class="box-footer">    
			<input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>  
			@can('unit-delete')         
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm" >Excluir</button>
			@endcan
			{!! Form::close() !!}
		</div>
		<!-- /.box-footer-->
	</div>
	<!-- /.box -->    
</section>

<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
	<div class="modal-dialog" role="dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Confirmação de Exclusão</h3>
			</div>
			<div class="modal-body text-center">
				<p>Deseja realmente deletar esta Unidade de Ensino ?</p>
				<p class="alert alert-danger">Todos os Cursos desta Unidade de Ensino serão removidos.</p>
				<p>Esta ação não poderá ser desfeita.</p>
			</div>
			<div class="modal-footer">
				{!! Form::open(['route' => ['unitteach.destroy' ,$unitteach->id], 'method' => 'DELETE']) !!} 
				<input type="submit" value="Deletar" class="btn btn-danger"></input>                  
				<button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
			</div>
		</div>
	</div>
</div>


@stop