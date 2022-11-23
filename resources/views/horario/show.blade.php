@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horario.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Horaentrada:</strong>
                            {{ $horario->horaentrada }}
                        </div>
                        <div class="form-group">
                            <strong>Horasalida:</strong>
                            {{ $horario->horasalida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
