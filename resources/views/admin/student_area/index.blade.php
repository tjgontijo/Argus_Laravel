@extends('adminlte::page') 
@section('title', 'Área do Aluno') 
@section('content_header')

<section class="content-header">

  <ol class="breadcrumb">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Área do Aluno</li>
  </ol>
  <br>
</section>

@stop 
@section('content')
  @include('flash::message')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-black" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd_dSQu1K7F0dhdpdrPCHEC7nMhNMnZcXDPt2auyzrTkmrHgvd') center center;">
          <h3 class="widget-user-username">{{auth()->user()->name}}</h3>
          <h5 class="widget-user-desc">{{auth()->user()->grade}}</h5>
        </div>
        {{--  <div class="widget-user-image">
          <img class="img-circle" src="https://adminlte.io/themes/AdminLTE/dist/img/user8-128x128.jpg">
        </div>  --}}
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header"></h5>
                <span class="description-text"></span>
              </div>
            </div>
            <div class="col-sm-4 border-right">
              <div class="description-block">
                <h5 class="description-header"></h5>
                <span class="description-text"></span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header"></h5>
                <a href="{{route('user_profile.index')}}" class="btn btn-default pull-right" title="Editar"><i class="fa fa-search" aria-hidden="true"></i> Visuzlizar Perfil</a>                
                <span class="description-text"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>{{$enrolls_active->count()}}</h3>
          <p>Cursos Inscritos</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{route('enroll_user')}}" class="small-box-footer">Verificar Cursos <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $course_release_open->count() }}</h3>
          <p>Cursos Abertos</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Mais informações (Em Breve)  <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $enrolls_finish->count() }}</h3>
          <p>Cursos Concluidos</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Mais informações (Em Breve)  <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="row">
    <br>
    <div class="col-md-12">
      <!-- PRODUCT LIST -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Secretaria Acadêmica</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @foreach ($request_secretaries as $request_secretary)
            <li class="item">
              <div class="product-img">
                <img src="http://1.bp.blogspot.com/-5eECoVKGaRo/Vc3yU20dyqI/AAAAAAAAAXI/6mF_eHFXfyo/s1600/icon_OpenBrasil.org_pencil.png">
              </div>
              <div class="product-info">
                <a href="" class="product-title">{{$request_secretary->name}}
                  <span class="label {{$request_secretary->description}} pull-right">{{$request_secretary->status}}</span>
                </a>
                  <span class="product-description">Solicitação gerada em: {{$request_secretary->created_at}}</span>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="box-footer text-center">
            <a href="{{route('request_secretaries.index')}}" class="btn btn-default pull-right"><i class="fa fa-search"></i> Visualizar Solicitações</a></li>
        </div>
      </div>
    </div>
  </div>
</section>

@stop