@extends('adminlte::page')

@section('title', 'Tipo de Curso') 

@section('content_header')

	@if ( isset($course_type) )      
		<section class="content-header">
			<h1>Editar</b></h1>
			<ol class="breadcrumb">
				<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
				<li><a href="{{route('course_type.index')}}">Tipos de Cursos</a></li>
				<li class="active">Editar</li>
			</ol>
		</section>
		{!! Form::model($course_type, ['route' => ['course_type.update', $course_type->id], 'class' => 'form', 'method' => 'put']) !!}
	@else 
		<section class="content-header">
			<h1>Adicionar</h1>
			<ol class="breadcrumb">
				<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
				<li><a href="{{route('course_type.index')}}">Tipos de Cursos</a></li>
				<li class="active">Adicionar</li>
			</ol>
		</section>     
		{!! Form::open(['route' => 'course_type.store', 'class' => 'form']) !!}
	@endif

	@if (isset($errors) && count($errors) > 0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif

@stop 

@section('content')

<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"></h3>
		</div>
		<div class="box-body">
			<div class="form-group">
				{!! Form::label('name', 'Nome:') !!} 
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('description', 'Descrição:') !!} 
				{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				<label for="type">Executor:</label>      
				<select class="form-control" id="type" name="type">
					<option value=""></option>
					@foreach($types as $type)
					<option value="{{ $type }}" 
					@if(isset($course_type) && ($course_type->type == $type)) 
					selected
					@endif
					>{{ $type }}</option>
					@endforeach                
				</select>        
			</div>           
		</div>
		<div class="box-footer">
			<div class="text-right" >
				<input type="button" value="Voltar" onclick="history.back()" class="btn btn-warning"></input>
				{!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
			</div>           
		</div>
	</div>
	{!! Form::close() !!} 
</section>
@stop
