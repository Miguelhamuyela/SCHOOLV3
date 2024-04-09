@extends('layouts.merge.dashboard')
@section('titulo', 'veeam_backups')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Maquinas do Backup</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.veeam_backups.create.index') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped  my-5" id="dataTable-1">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>MAQUINA DO BACKUP</th>
                                    <th>IP DA MAQUINA DO BACKUP</th>
                                    <th>NOME DA MAQUINA VERTUAL</th>
                                    <th class="text-center">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($veeam_backups as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->machineIp }} </td>
                                        <td>{{ $item->virtual_machines->name }} </td>
                                        <td>

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
@endsection
