@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Startup')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar  {{$startup->name}} </h3>

             @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" enctype="multipart/form-data" method="POST" action="{{ route('admin.startup.update', $startup->id) }}">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                     </div>
                     @endif

                    <div class="card-body bg-light">
                        <h4 class="card-title "><b>Startups</b></h4>
                        <hr>
                        @include('forms._formStartups.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title "><b>Período Do Contrato</b></h4>
                        <hr>
                        @include('forms._formScheldules.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title "><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPayments.index')
                    </div>

                    
                    
                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                    Salvar Alterações
                                </button>
    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
