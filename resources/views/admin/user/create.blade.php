@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')

<section class="content-header">
    <h1>Inserir</h1>
    <ol class="breadcrumb">
        <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{route('user.index')}}">Usuário</a></li>
        <li class="active">Inserir</li>
    </ol>
</section>     
{!! Form::open(['route' => 'user.store', 'class' => 'form']) !!}


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
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>      
            <div class="box-body">
                <div class="form-group">
                    <div class="row">              
                        <div class="col-md-12">
                            {!! Form::label('name', 'Nome:') !!}  
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('email', 'E-mail:') !!}  
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>  
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('username', 'Usuário Intranet:') !!}  
                            {!! Form::text('username', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>  
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('gender', 'Gênero:') !!}  
                            {!! Form::select('gender', ['Masculino' => 'Masculino', 'Feminino' => 'Feminino'], null, ['class' => 'form-control']) !!}                          
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('naturalness', 'Naturalidade:') !!}  
                            {!! Form::text('naturalness', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                        <div class="row">    
                            <div class="col-md-12">
                                {!! Form::label('breed', 'Raça / Cor:') !!}  
                                {!! Form::select('breed', ['Branca' => 'Branca', 'Preta' => 'Preta', 'Amarela'=>'Amarela','Parda'=>'Parda','Indígena'=>'Indígena'], null, ['class' => 'form-control']) !!}                          
                            </div>	
                        </div>
                    </div>
                <div class="form-group">
                        <div class="row">    
                            <div class="col-md-12">
                                {!! Form::label('date_admission', 'Admissão:') !!}  
                                {!! Form::date('date_admission', null, ['class' => 'form-control']) !!}
                            </div>	
                        </div>
                    </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('registration', 'Matricula:') !!}  
                            {!! Form::text('registration', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            <label for="unit_id">Unidade:</label>      
                            <select class="form-control" id="unit_id" name="unit_id">
                                <option value=""></option>
                                @foreach($units as $unit)
                                <option value="{{$unit->id}}"
                                    @if(isset($user) && ($user->unit_id == $unit->id))
                                        selected
                                        @endif
                                    >{{$unit->short_name}} - {{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>	
                    </div>
                </div> 
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('cellphone', 'Celular:') !!}  
                            {!! Form::text('cellphone', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('phone', 'Telefone:') !!}  
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('email2', 'E-mail Particular:') !!}  
                            {!! Form::email('email2', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('cep', 'Cep:') !!}  
                            {!! Form::text('cep', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('address', 'Logradouro:') !!}  
                            {!! Form::text('address', null, ['class' => 'form-control' , 'disabled']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('complement', 'Complemento:') !!}  
                            {!! Form::text('complement', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('number', 'Número:') !!}  
                            {!! Form::text('number', null, ['class' => 'form-control']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('district', 'Bairro:') !!}  
                            {!! Form::text('district', null, ['class' => 'form-control' , 'disabled']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('city', 'Cidade:') !!}  
                            {!! Form::text('city', null, ['class' => 'form-control' , 'disabled']) !!}
                        </div>	
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">    
                        <div class="col-md-12">
                            {!! Form::label('state', 'UF:') !!}  
                            {!! Form::text('state', null, ['class' => 'form-control' , 'disabled']) !!}
                        </div>	
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Papel:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="col-md-12 text-right" >
                    <input type="button" value="Voltar" onclick="history.back()" class="btn btn-primary"></input>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                </div>           
                {!! Form::close() !!}  
            </div>
        </div>            
</section>  
@stop
      
@section('scripts') @parent
<!-- Mask Input Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript" >
$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#address").val("");
        $("#district").val("");
        $("#city").val("");
        $("#state").val("");
        }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#address").val("...");
                $("#district").val("...");
                $("#city").val("...");
                $("#state").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#address").val(dados.logradouro);
                        $("#district").val(dados.bairro);
                        $("#city").val(dados.localidade);
                        $("#state").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                        $("#complement").val("");
                        $("#number").val("");
                    } //end if.
                   
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});
</script>


<script>
    $(document).ready(function ($) {
        $('#phone').mask("(99) 9999-9999");
        $('#cellphone').mask("(99) 99999-9999");
        $('#cep').mask("99.999-999");
    });
</script>

@stop



