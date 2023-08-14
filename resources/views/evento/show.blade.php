@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? "{{ __('Show') Evento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Evento:</strong>
                            {{ $evento->id_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $evento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Evento:</strong>
                            {{ $evento->fecha_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Evento:</strong>
                            {{ $evento->hora_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Evento:</strong>
                            {{ $evento->lugar_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Evento:</strong>
                            {{ $evento->tipo_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad Id:</strong>
                            {{ $evento->actividad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle Id:</strong>
                            {{ $evento->detalle_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
