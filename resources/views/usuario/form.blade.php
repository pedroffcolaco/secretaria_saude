@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{ url('usuarios')  }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if (Request::is('*/edit'))
                    <form action="{{ url ('usuarios/update')}}/{{$usuario->id}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control" value="{{ $usuario->name  }}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{ $usuario->email  }}" > <br>

                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>

                     @else

                    <form action="{{ url ('usuarios/add') }}" method="post">
                    @csrf
                        <h1>SIH-trânsito PB Sistema de Informações Hospitalares de Trânsito da Paraíba</h1>
                        <h4>Atenção: nos campos marcados com 'Visível ao público' não devem ser colocados dados de privacidade.

Informações gerais do acidente</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do usuário:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name="email" class="form-control" ><br>


                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data do acontecimento:</label>
                            <input type="data" name="data" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Período do Dia:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="periodo" id="exampleRadios1" value="manha" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Manhã
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="periodo" id="exampleRadios2" value="tarde">
                                <label class="form-check-label" for="exampleRadios2">
                                    Tarde
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="periodo" id="exampleRadios3" value="noite">
                                <label class="form-check-label" for="exampleRadios3">
                                    Noite
                                </label>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Em que dia da semana ocorreu o acidente::</label>
                            <input type="text" name="ocorrido" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">O acidente ocorreu em dia de feriado:</label>
                            <input type="text" name="feriado" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Município de ocorrência do acidente:</label>
                            <input type="text" name="municipio" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço do local do acidente (Avenida, Rua, etc):</label>
                            <input type="text" name="enderecoacidente" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipo de acidente:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_acidente" id="exampleRadios1" value="opcao1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                Abalroamento
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_acidente" id="exampleRadios2" value="opcao2">
                                <label class="form-check-label" for="exampleRadios2">
                                Atropelamento
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_acidente" id="exampleRadios3" value="option3" >
                                <label class="form-check-label" for="exampleRadios3">
                                Capotamento
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_acidente" id="exampleRadios4" value="option4" >
                                <label class="form-check-label" for="exampleRadios4">
                                Queda de moto
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_acidente" id="exampleRadios5" value="option5" >
                                <label class="form-check-label" for="exampleRadios5">
                                Colisão/Choque
                                </label>
                                </div>

                                {{-- <input class="" type="text" name="" placeholder="Outros" id="">
                                <label class="form-check-label" for="">
                                </label>

                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipo de veículo da vítima que sofreu o acidente:</label>
                            <input type="text" name="veiculo_acidente_vitima" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipos de veículos envolvidos no acidente:</label>
                            <input type="text" name="veiculo_acidente_envolvido" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">O paciente envolvido no acidente era:</label>
                            <input type="text" name="paciente_envolvido" class="form-control" placeholder="Pedrestre, Condutor ou Passageiro">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">A vítima apresenta sinais de embriagues e/ou consumo de bebidas alcoolicas</label>
                            <input type="text" name="embriagues" class="form-control">
                        </div>
                        <h1>Severidade do acidente e quantidade de vítimas</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Houve vítimas fatais?</label>
                            <input type="text" name="vitima_fatal" class="form-control" placeholder="Sim ou Não">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Número de vítimas fatais envolvidas no acidente:</label>
                            <input type="text" name="numero_vitimas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Número de feridos envolvidos no acidente:</label>
                            <input type="text" name="numero_feridos" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quadro de lesões:</label>
                            <input type="text" name="quadro_lesao" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Em caso de óbito</label>
                            <input type="text" name="obito" class="form-control" placeholder="Óbito no local, Óbito no encaminhamento ou Óbito no Hospital">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quem foi responsável por prestar apoio no local:</label>
                            <input type="text" name="reposnavel_apoio" class="form-control" placerholder="Descreva qual orgão prestou apoio no local">
                        </div>
                            <h1>Informações do Paciente</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do paciente:</label>
                            <input type="text" name="nome_paciente" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Data de nascimento</label>
                            <input type="text" name="data_nascimento_paciente" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Idade do paciente:</label>
                            <input type="text" name="idade_paciente" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sexo</label>
                            <input type="text" name="genero_paciente" class="form-control" placeholder="Masculino ou Feminino">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Filiação (Nome da mãe):</label>
                            <input type="text" name="filiacao_paciente" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço do paciente:</label>
                            <input type="text" name="endereco_paciente" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contato telefônico do(a) autor(a) principal</label>
                            <input type="text" name="contato_autor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">O paciente envolvido no acidente foi referenciado/regulado para outro Hospital:</label>
                            <input type="text" name="paciente_referenciado" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Qual o hospital:                                                          Se a resposta anterior for SIM</label>
                            <input type="text" name="hospital_direcionado" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Informações complementares:</label>
                            <input type="text" name="observacoes" class="form-control">
                        </div>
                        <h1>Unidade Notificadora</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome da instituição/Hospital:</label>
                            <input type="text" name="instituicao" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do responsável pelas informações:</label>
                            <input type="text" name="responsavel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargo e/ou função do notificador:</label>
                            <input type="text" name="cargo_notificador" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contato do notificador:</label>
                            <input type="text" name="contato_notificador" class="form-control"> <br>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>



                    </form> @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
