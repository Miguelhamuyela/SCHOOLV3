@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Maquina Vertual')

@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/maquinaVertual/list') }}">Listar Maquina Vertual</a>
                    > Detalhes de Maquina Vertual - {{ $virtual_machines->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações sobre Maquina Vertual </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Endereço da Maquina(IP) </b><br>
                            <small> {{ $virtual_machines->ip }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Sistema Operativo</b><br>
                            <small> {{ $virtual_machines->so }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Espaço no Disco</b><br>
                            <small> {{ $virtual_machines->diskSpace }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Memória</b><br>
                            <small> {{ $virtual_machines->memory }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Estado da Maquina</b><br>
                            <small> {{ $virtual_machines->status }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Storage</b><br>
                            <small> {{ $virtual_machines->storage }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Empresa</b><br>
                            <small> {{ $virtual_machines->interprise }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Unidade Central do Processamento</b><br>
                            <small> {{ $virtual_machines->cpu }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Reininciar Automático</b><br>
                            <small>{{ $virtual_machines->autoRestart }} </small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b></b><br>
                            @if (!isset($virtual_machines->storage))
                            <p class="text-dark">

                            </p>

                            @else
                            <p class="text-dark">
                                <b>Tipo de Cliente</b><br>
                                <small>
                                {{ $virtual_machines->clienttype }}
                                </small>
                            </p>
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
                            {{ $virtual_machines->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $virtual_machines->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/maquinaVertual/edit/{$virtual_machines->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>
                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $virtual_machines->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>


    @include('admin.extras.modal.delete.maquinaVertual.index')
@endsection
