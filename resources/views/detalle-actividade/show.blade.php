@extends('layouts.app')

@section('template_title')
    {{ $detalleActividade->name ?? "{{ __('Show') Detalle Actividade" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Actividade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-actividades.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $detalleActividade->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $detalleActividade->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
