<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_evento') }}
            {{ Form::text('id_evento', $evento->id_evento, ['class' => 'form-control' . ($errors->has('id_evento') ? ' is-invalid' : ''), 'placeholder' => 'Id Evento']) }}
            {!! $errors->first('id_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $evento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_evento') }}
            {{ Form::text('fecha_evento', $evento->fecha_evento, ['class' => 'form-control' . ($errors->has('fecha_evento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Evento']) }}
            {!! $errors->first('fecha_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_evento') }}
            {{ Form::text('hora_evento', $evento->hora_evento, ['class' => 'form-control' . ($errors->has('hora_evento') ? ' is-invalid' : ''), 'placeholder' => 'Hora Evento']) }}
            {!! $errors->first('hora_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar_evento') }}
            {{ Form::text('lugar_evento', $evento->lugar_evento, ['class' => 'form-control' . ($errors->has('lugar_evento') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Evento']) }}
            {!! $errors->first('lugar_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_evento') }}
            {{ Form::text('tipo_evento', $evento->tipo_evento, ['class' => 'form-control' . ($errors->has('tipo_evento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Evento']) }}
            {!! $errors->first('tipo_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actividad_id') }}
            {{ Form::text('actividad_id', $evento->actividad_id, ['class' => 'form-control' . ($errors->has('actividad_id') ? ' is-invalid' : ''), 'placeholder' => 'Actividad Id']) }}
            {!! $errors->first('actividad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle_id') }}
            {{ Form::text('detalle_id', $evento->detalle_id, ['class' => 'form-control' . ($errors->has('detalle_id') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Id']) }}
            {!! $errors->first('detalle_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>