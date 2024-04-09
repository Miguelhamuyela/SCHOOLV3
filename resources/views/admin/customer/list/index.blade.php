@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Clientes')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Cliente</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.customers.create.index') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>NOME DO CLIENTE</th>
                                    <th>TIPO DE CLIENTE</th>
                                    <th>NIF</th>
                                    <th>TELEFONE</th>
                                    <th>EMAIL</th>
                                    <th>ENDEREÇO</th>
                                    <th class="text-left">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->clienttype }} </td>
                                        <td>{{ $item->nif }} </td>
                                        <td>{{ $item->tel }} </td>
                                        <td>{{ $item->email }} </td>
                                        <td>{{ $item->address }} </td>
                                        <td>
                                            <a href='{{ url("admin/customers/show/{$item->id}") }}' type="button"
                                                class="btn btn-icons btn-rounded btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.extras.modal.clients.index')
@endsection
