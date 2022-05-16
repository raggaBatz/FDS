<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('intervention_id') }}
            {{ Form::text('intervention_id', $interventiondetail->intervention_id, ['class' => 'form-control' . ($errors->has('intervention_id') ? ' is-invalid' : ''), 'placeholder' => 'Intervention Id']) }}
            {!! $errors->first('intervention_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volunteer_id') }}
            {{ Form::text('volunteer_id', $interventiondetail->volunteer_id, ['class' => 'form-control' . ($errors->has('volunteer_id') ? ' is-invalid' : ''), 'placeholder' => 'Volunteer Id']) }}
            {!! $errors->first('volunteer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $interventiondetail->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
