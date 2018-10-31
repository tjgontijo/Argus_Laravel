@extends('adminlte::page')

@section('title', 'Meu Perfil' )

@section('content_header')

<section class="content-header">
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Meu Perfil</li>
    </ol>
</section>
@stop
@section('content')
<section class="content">
    <div class="row">  
        <div class="col-md-12">
            <a href="{{url("/admin/user_profile/$user->id/edit")}}" class="btn btn-primary pull-right" title="Editar">
                <i class="fa fa-pencil" aria-hidden="true"></i> Editar
            </a> 
        </div>
    </div>
    <br> 
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Informações Pessoais</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
                        <label>Nome</label>
                        <p>{{$user->name}}</p>
                    </div>
                    <div class="col-md-5">
                        <label>Usuário Intranet</label>
                        <p>{{$user->username}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>CPF</label>
                        <p>{{$user->cpf}}</p>
                    </div>
                    <div class="col-md-5">
                        <label>Rg</label>
                        <p>{{$user->rg}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>Data de Nascimento</label>                        
                        <p>{{ date('d/m/Y', strtotime($user->date_birth)) }}</p> 
                    </div>
                    <div class="col-md-3">
                        <label>Sexo</label>
                        <p>{{$user->gender}}</p>
                    </div>
                </div>              
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Informações Profissionais</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
                        <label>Unidade</label>
                        <p>{{$user->unit->name}}</p>
                    </div>
                    <div class="col-md-5">
                        <label>Matricula</label>
                        <p>{{$user->registration}}</p>
                    </div>
                </div>         
                <div class="row">
                    <div class="col-md-5">
                        <label>Data de Admissão</label>                        
                        <p>{{ date('d/m/Y', strtotime($user->date_admission)) }}</p>                       
                    </div>
                    <div class="col-md-3">
                        <label>Posto / Graduação</label>
                        <p>{{$user->grade}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Contato</h3></div>
            <div class="panel-body">
                <div class="row">                      
                    <div class="col-md-5">
                        <label>E-mail Comporativo</label>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="col-md-5">
                        <label>E-mail Particular</label>
                        <p>{{$user->email2}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>Telefone Fixo</label>
                        <p>{{$user->phone}}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Telefone Celular</label>
                            <p>{{$user->cellphone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h3>Endereço</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
                        <label>Endereço</label>
                        <p>{{$user->address}} {{$user->complement}}, {{$user->number}}</p>
                    </div>
                    <div class="col-md-5">
                        <label>Endereço</label>
                        <p>{{$user->district}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <label>CEP</label>
                        <p>{{$user->cep}}</p>
                    </div>                  
                    <div class="col-md-5">
                        <label>Estado</label>
                        <p>{{$user->state}}</p>
                    </div>
                    <div class="col-md-2">
                        <label>Cidade</label>
                        <p>{{$user->city}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@stop