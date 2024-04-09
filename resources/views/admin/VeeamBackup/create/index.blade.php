@extends('layouts.merge.dashboard')
@section('titulo', 'VeeamBackup')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="{{route('admin.veeam_backups.store')}}" >
                    @csrf

                    <div class="card-body bg-light">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                     </div>
                     @endif
                        <h4 class="card-title"><b>
                        <a href="{{ url('admin/veeamBackups/list') }}">Listar E-learnings</a>
                        > E-learnings
                        </b></h4>
                        <hr>
                        @include('forms._formVeeamBackup.index')
                    </div>
                <div class="card-body bg-light">
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                Salvar
                            </button>

                        </div>
                    </div>
            </div>
            </form>
            </div>
        </div>
    </div>
@endsection
