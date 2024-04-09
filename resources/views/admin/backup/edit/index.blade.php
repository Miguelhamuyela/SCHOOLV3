@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Funcionário')
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body bg-light">
                    <h4 class="card-title">
                        <b>
                            <a href="{{ url('admin/backups/list') }}">Listar Funcionários</a> >
                            Editar Funcionário {{ $backups->name }}
                        </b>
                    </h4>
                    <hr>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="row" method="POST" action="{{ route('admin.backups.update', $backups->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @include('forms._formBackups.index')

                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-3 btn-primary">
                                    Salvar Alterações
                                </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
