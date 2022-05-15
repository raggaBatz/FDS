<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('center_id') }}
            {{ Form::text('center_id', $intervention->center_id, ['class' => 'form-control' . ($errors->has('center_id') ? ' is-invalid' : ''), 'placeholder' => 'Center Id']) }}
            {!! $errors->first('center_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('group_id') }}
            {{ Form::text('group_id', $intervention->group_id, ['class' => 'form-control' . ($errors->has('group_id') ? ' is-invalid' : ''), 'placeholder' => 'Group Id']) }}
            {!! $errors->first('group_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('intervention_date') }}
            {{ Form::text('intervention_date', $intervention->intervention_date, ['class' => 'form-control' . ($errors->has('intervention_date') ? ' is-invalid' : ''), 'placeholder' => 'Intervention Date']) }}
            {!! $errors->first('intervention_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tools') }}
            {{ Form::text('tools', $intervention->tools, ['class' => 'form-control' . ($errors->has('tools') ? ' is-invalid' : ''), 'placeholder' => 'Tools']) }}
            {!! $errors->first('tools', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>