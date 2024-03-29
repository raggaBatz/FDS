<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $center->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $center->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de centro') }}
            {{-- {{ Form::text('centertype_id', $center->centertype_id, ['class' => 'form-control' . ($errors->has('centertype_id') ? ' is-invalid' : ''), 'placeholder' => 'Centertype Id']) }} --}}
            {{ Form::select('centertype_id', $centertypes, $center->centertype_id, ['id' => 'centertype_id','class' => 'form-control'])}}
            {!! $errors->first('centertype_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br/>
    <br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
