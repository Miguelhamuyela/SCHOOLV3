@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Startup')

@section('content')

    <div class="card">
        <div class="col-lg-12">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5><b>
                            <a href="{{ url('admin/startup/list') }}">Listar Startups</a>
                            > Detalhes da Startup - {{ $startup->name }}


                        </b></h5>
                    </div>

                    <div class="col">
                        <div class="float-right mb-">

                            <a target="_blank" type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/startup/print/{$startup->id}") }}">
                                <span class="fa fa-print fa-16 mr-3"></span>Imprimir
                            </a>

                    </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-12">




                    <div class="row  align-items-center">


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações da Startup </b> </h5>
                            <hr>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Nome da Startup</b><br>
                                        <small> {{ $startup->name }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Número de Identificação Fiscal</b><br>
                                        <small> {{ $startup->nif }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Telefone</b><br>
                                        <small> {{ $startup->tel }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Email</b><br>
                                        <small> {{ $startup->email }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Sala</b><br>
                                        <small> {{ $startup->roomName }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Site</b><br>
                                        <small> {{ $startup->site }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Modelo de Incubadora</b><br>
                                        <small> {{ $startup->incubatorModel }}</small>
                                    </p>
                                </div>

                                <div class="col-md-4">
                                    <p class="text-dark">
                                        <b>Documentação</b><br>
                                        <small> <a target="_blank"
                                                href="/storage/{{$startup->document}}">Documento</a></small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Detalhes Sobre a Startup</b><br>
                                        <small> {{ $startup->StartupDetails }}</small>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <h5 class=""><b>Período Do Contrato </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Inicio do Contracto</b><br>
                                        <small> {{ $startup->scheldules->started }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Fim do Contracto</b><br>
                                        <small> {{ $startup->scheldules->end }}</small>
                                    </p>
                                </div>



                            </div>
                        </div>


                        <div class="col-12 mt-2">
                            <h5 class=""><b>Informações de Pagamento </b> </h5>
                            <hr>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Tipo de Pagamento</b><br>
                                        <small> {{ $startup->payments->type }}</small>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Valores a Pagar</b><br>
                                        <small> {{ $startup->payments->value }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Referência</b><br>
                                        <small> {{ $startup->payments->reference }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">
                                        <b>Moeda</b><br>
                                        <small> {{ $startup->payments->currency }}</small>
                                    </p>
                                </div>

                                <div class="col-md-3">
                                    <p class="text-dark">

                                        <b>Estado do Pagamento</b> <br>
                                        @if ($startup->payments->status == 'Pago')
                                            <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                {{ $startup->payments->status }}</div>
                                        @elseif($startup->payments->status == 'Não Pago')
                                            <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                {{ $startup->payments->status }}</div>
                                        @elseif($startup->payments->status == 'Em Validação')
                                            <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                {{ $startup->payments->status }}</div>
                                        @else
                                            <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                {{ $startup->payments->status }}</div>
                                        @endif

                                    </p>
                                </div>


                            </div>
                        </div>



                        <div class="col-12 my-5">
                            <hr>
                            <div class="row">


                                <div class="col-md-8">
                                    <small class="mb-1 text-dark">
                                        <b>Data de Cadastro:</b>
                                        {{ $startup->created_at }}
                                    </small><br>
                                    <small class="mb-1 text-dark">
                                        <b>Última Actualização:</b>
                                        {{ $startup->updated_at }}
                                    </small>
                                </div>


                                <div class="col-md-4 text-dark text-right">
                                    <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                        href='{{ url("admin/startup/edit/{$startup->id}") }}'>
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </a>
                                    <br>


                                    <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                        value="{{ $startup->id }}">
                                        <i class="fa fa-trash"></i>
                                        Eliminar
                                    </button>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div> <!-- .row -->


    </div> <!-- .container-fluid -->

    <div class="card mb-2">
        <div class="card-body">
            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="page-title h4">Membros</h2>
                </div>
                <div class="col-auto">
                    <a type="button" class="btn btn-lg btn-primary text-white"
                        href="{{ url("admin/member/create/{$startup->id}") }}">
                        <span class="fa fa-plus fa-16 mr-3"></span>Novo Membro
                    </a>
                </div>
            </div>


            <div class="page-category pb-5">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable-1">
                        <thead class="bg-primary thead-dark">
                            <tr class="text-center">

                                <th>NOME DO MEMBRO</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>NIF</th>
                                <th>FUNÇÃO</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($startup->members as $item)
                                <tr class="text-center text-dark">
                                    <td class="text-left">{{ $item->name }}</td>
                                    <td class="text-left">{{ $item->email }}</td>
                                    <td class="text-left">{{ $item->tel }}</td>
                                    <td class="text-left">{{ $item->nif }}</td>
                                    <td class="text-left">{{ $item->occupation }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon fa-sm" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/member/qrcode/$item->id") }}'
                                                    class="dropdown-item mb-2">Credenciamento</a>

                                                <a href='{{ url("admin/member/delete/$item->id") }}'
                                                    class="dropdown-item text-danger">Eliminar</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>



    @include('admin.extras.modal.delete.startup.index')

@endsection
