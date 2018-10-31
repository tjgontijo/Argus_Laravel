@extends('adminlte::page') 
@section('title', 'Usuários') 
@section('content_header')
<section class="content-header">
    <h1>Detalhes</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('user.index')}}">Usuários</a></li>
        <li class="active">Descrição</li>
    </ol>
</section>
@stop 
@section('content')
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        @php 
        function mask($val, $mask) { $maskared = ''; $k = 0; for($i = 0; $i<=strlen($mask)-1; $i++) { if($mask[$i] == '#') { if(isset($val[$k])) $maskared .= $val[$k++]; } else { if(isset($mask[$i])) $maskared .= $mask[$i]; } } return $maskared; } 
        @endphp
            
        <div class="box-body">
            <p><b>Nome</b></p>
            <p>{{$user->name}}</p>
            <p><b>E-mail</b></p>
            <p>{{$user->email}}</p>
            <p><b>Admissão</b></p>
            <p>{{$user->date_admission}}</p>
            <p><b>Gênero</b></p>
            <p>{{$user->gender}}</p>
            <p><b>Naturalidade</b></p>
            <p>{{$user->naturalness}}</p>
            <p><b>Matricula</b></p>
            <p>{{$user->registration}}</p>
            <p><b>Raça/Cor</b></p>
            <p>{{$user->breed}}</p>
            <p><b>Telefone Celular</b></p>
           <!-- <p>{{mask($user->cellphone , '(##) #####-####')}}</p> -->
            <p>{{$user->cellphone}}</p>
            <p><b>Telefone Fixo</b></p>
           <!-- <p>{{mask($user->phone , '(##) ####-####')}}</p> -->
            <p>{{$user->phone }}</p>
            <p><b>E-mail Particular</b></p>
            <p>{{$user->email2}}</p>
            <p><b>CEP</b></p>
            <p>{{ $user->cep }}</p>            
            <p><b>Logradouro</b></p>
            <p>{{$user->address}}</p>
            <p><b>Estado</b></p>
            <p>{{$user->state}}</p>
            <p><b>Cidade</b></p>
            <p>{{$user->city}}</p>
            <p><b>Complemento</b></p>
            <p>{{$user->complement}}</p>
            <p><b>Número</b></p>
            <p>{{$user->number}}</p>
            <p><b>Bairro:</b></p>
            <p>{{$user->district}}</p>
            <p><b>Unidade:</b></p>
            <p>{{$user->unit->name}}</p>
    </div>
    <div class="box-footer">
        <input type="button" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm">Excluir</button> {!! Form::close()
        !!}
    </div>
    </div>
</section>
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Confirmação de Exclusão</h3>
            </div>
            <div class="modal-body text-center">
                <p>Deseja realmente deletar este Usuário?</p>
                <p>Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['user.destroy' ,$user->id], 'method' => 'DELETE']) !!}
                <input type="submit" value="Deletar" class="btn btn-danger"></input>
                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@stop