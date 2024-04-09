@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Cliente')

@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/customers/list') }}">Listar Cliente</a>
                    > Detalhes do Cliente - {{ $customers->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações sobre o Cliente </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Teleone do Cliente/Empresa(IP) </b><br>
                            <small> {{ $customers->tel }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Email do Cliente/Empresa</b><br>
                            <small> {{ $customers->email }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Número de Identificação Fiscal(NIF)</b><br>
                            <small> {{ $customers->nif }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Endereço do Cliente/Empresa</b><br>
                            <small> {{ $customers->address }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Tipo de Clinte ou Empresa</b><br>
                            <small> {{ $customers->clienttype}}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome do Ponto Focal</b><br>
                            <small>
                                {{ $customers->focalPointName }}
                                </small>
                            @if (!isset($customers->focalPointName))
                            @else
                            <p class="text-dark">
                                <b>Telefone do Ponto Focal</b><br>
                                <small>
                                {{ $customers->focalPointPhone }}
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
                            {{ $customers->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $customers->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/customers/edit/{$customers->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>
                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $customers->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>


    @include('admin.extras.modal.delete.customes.index')
@endsection
