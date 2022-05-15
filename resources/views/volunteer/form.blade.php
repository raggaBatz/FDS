<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('generation_id') }}
            {{ Form::text('generation_id', $volunteer->generation_id, ['class' => 'form-control' . ($errors->has('generation_id') ? ' is-invalid' : ''), 'placeholder' => 'Generation Id']) }}
            {!! $errors->first('generation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('constellation_id') }}
            {{ Form::text('constellation_id', $volunteer->constellation_id, ['class' => 'form-control' . ($errors->has('constellation_id') ? ' is-invalid' : ''), 'placeholder' => 'Constellation Id']) }}
            {!! $errors->first('constellation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('group_id') }}
            {{ Form::text('group_id', $volunteer->group_id, ['class' => 'form-control' . ($errors->has('group_id') ? ' is-invalid' : ''), 'placeholder' => 'Group Id']) }}
            {!! $errors->first('group_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pseudonym') }}
            {{ Form::text('pseudonym', $volunteer->pseudonym, ['class' => 'form-control' . ($errors->has('pseudonym') ? ' is-invalid' : ''), 'placeholder' => 'Pseudonym']) }}
            {!! $errors->first('pseudonym', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pseudonym_plain') }}
            {{ Form::text('pseudonym_plain', $volunteer->pseudonym_plain, ['class' => 'form-control' . ($errors->has('pseudonym_plain') ? ' is-invalid' : ''), 'placeholder' => 'Pseudonym Plain']) }}
            {!! $errors->first('pseudonym_plain', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('names') }}
            {{ Form::text('names', $volunteer->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Names']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_names') }}
            {{ Form::text('last_names', $volunteer->last_names, ['class' => 'form-control' . ($errors->has('last_names') ? ' is-invalid' : ''), 'placeholder' => 'Last Names']) }}
            {!! $errors->first('last_names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $volunteer->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birthday') }}
            {{ Form::text('birthday', $volunteer->birthday, ['class' => 'form-control' . ($errors->has('birthday') ? ' is-invalid' : ''), 'placeholder' => 'Birthday']) }}
            {!! $errors->first('birthday', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $volunteer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_name') }}
            {{ Form::text('contact_name', $volunteer->contact_name, ['class' => 'form-control' . ($errors->has('contact_name') ? ' is-invalid' : ''), 'placeholder' => 'Contact Name']) }}
            {!! $errors->first('contact_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_phone') }}
            {{ Form::text('contact_phone', $volunteer->contact_phone, ['class' => 'form-control' . ($errors->has('contact_phone') ? ' is-invalid' : ''), 'placeholder' => 'Contact Phone']) }}
            {!! $errors->first('contact_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $volunteer->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>