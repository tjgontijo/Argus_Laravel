@extends('adminlte::page')

@section('title', 'Cursos Publicados')

@section('content_header')

@if ( isset($course_releases) )      
<section class="content-header">
    <h1>Atualizar</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course_release.index')}}">Cursos Publicados</a></li>
        <li class="active">Atualizar Publicação</li>
    </ol>
</section>
{!! Form::model($course_releases, ['route' => ['course_release.update', $course_releases->id], 'class' => 'form', 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
@else 
<section class="content-header">
    <h1>Inserir</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('course_release.index')}}">Cursos Publicados</a></li>
        <li class="active">Nova Publicação</li>
    </ol>
</section>     
{!! Form::open(['route' => 'course_release.store', 'class' => 'form', 'enctype' => 'multipart/form-data']) !!}

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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="course_id">Curso:</label>  
                            <select class="form-control" id="course_id" name="course_id" value="" required>
                                <option value=""></option>
                                @foreach($courses as $course)
                                <option value="{{$course->id}}"
                                    @if(isset($course_releases) && $course_releases->course_id == $course->id )
                                    selected
                                    @endif
                                    >{{$course->short_name}} - {{$course->name}}</option>
                                    @endforeach    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status_release_id">Status:</label>  
                                <select class="form-control" id="status_release_id" name="status_release_id" required>
                                    <option value=""></option>
                                    @foreach($status_releases as $status_release)
                                    <option value="{{$status_release->id}}"
                                        @if(isset($course_releases) && $course_releases->status_release_id == $status_release->id )
                                        selected
                                        @endif
                                        >{{$status_release->name}}</option>
                                        @endforeach    
                                </select>
                            </div>
                        </div>                   
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="level">Nível:</label>  
                                <select class="form-control" id="level" name="level">
                                    <option value=""></option>
                                    @foreach($levels as $level)
                                    <option value="{{$level}}"
                                    @if(isset($course_releases) && $course_releases->level == $level )
                                    selected
                                    @endif
                                    >{{$level}}</option>
                                    @endforeach    
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('date_schedule_start', 'Início Programado:') !!}
                                @if(isset($date_schedule_start))
                                {!! Form::date('date_schedule_start', $date_schedule_start, ['class' => 'form-control']) !!}
                                @else
                                {!! Form::date('date_schedule_start', null, ['class' => 'form-control']) !!}
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('date_start', 'Início Efetivo:') !!} 
                                {!! Form::date('date_start',  null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('date_schedule_end', 'Término Programado:') !!} 
                                @if(isset($date_schedule_end))
                                {!! Form::date('date_schedule_end', $date_schedule_end, ['class' => 'form-control']) !!}
                                @else
                                {!! Form::date('date_schedule_end', null, ['class' => 'form-control']) !!}
                                @endif
                            </div>   
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('date_end', 'Término Efetivo:') !!} 
                                {!! Form::date('date_end', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('vacancies', 'Vagas Abertas:') !!}
                                {!! Form::number('vacancies', null, ['class' => 'form-control']) !!} 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('vacancies_fill', 'Vagas Preenchidas:') !!}
                                {!! Form::number('vacancies_fill', null, ['class' => 'form-control']) !!} 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('vacancies_conclusive', 'Vagas Concludentes:') !!}
                                {!! Form::number('vacancies_conclusive', null, ['class' => 'form-control']) !!} 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('duration', 'Duração:') !!} 
                                {!! Form::text('duration', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                {!! Form::label('workload', 'Carga Horária:') !!} 
                                {!! Form::text('workload', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('requeriments', 'Requisitos:') !!} 
                                {!! Form::textarea('requeriments', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="row">    
                                <div class="col-md-2">
                                    {!! Form::label('regime', 'Regime:') !!}  
                                    {!! Form::select('regime', [''=>'', 'A Distancia' => 'A Distancia', 'Presencial' => 'Presencial', 'Semipresencial' => 'Semipresencial'], null, ['class' => 'form-control']) !!}                          
                                </div>	
                            </div>
                    </div>                   
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('desc_regime', 'Descrição do Regime:') !!} 
                            {!! Form::textarea('desc_regime', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('observation', 'Observação:') !!} 
                                {!! Form::textarea('observation', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-md-12 text-right" >
                        <input type="button" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>
                        {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                    </div>           
                    {!! Form::close() !!}            
</section>  
@stop