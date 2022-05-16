<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Centro') }}
            {{-- {{ Form::text('center_id', $intervention->center_id, ['class' => 'form-control' . ($errors->has('center_id') ? ' is-invalid' : ''), 'placeholder' => 'Center Id']) }} --}}
            {{ Form::select('center_id', $centers, $intervention->center_id, ['id' => 'centertype_id','class' => 'form-control'])}}
            {!! $errors->first('center_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grupo') }}
            {{-- {{ Form::text('group_id', $intervention->group_id, ['class' => 'form-control' . ($errors->has('group_id') ? ' is-invalid' : ''), 'placeholder' => 'Group Id']) }} --}}
            {{ Form::select('group_id', $groups, $intervention->group_id, ['id' => 'group_id','class' => 'form-control'])}}
            {!! $errors->first('group_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{-- {{ Form::text('intervention_date', $intervention->intervention_date, ['class' => 'form-control' . ($errors->has('intervention_date') ? ' is-invalid' : ''), 'placeholder' => 'Intervention Date']) }} --}}
            {{ Form::text('intervention_date', $intervention->intervention_date, ['class' => 'form-control datepicker']) }}
            {!! $errors->first('intervention_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Herramientas') }}
            {{ Form::text('tools', $intervention->tools, ['class' => 'form-control' . ($errors->has('tools') ? ' is-invalid' : ''), 'placeholder' => 'Tools']) }}
            {!! $errors->first('tools', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
