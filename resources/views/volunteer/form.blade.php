<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Generacion') }}
            {{-- {{ Form::text('generation_id', $volunteer->generation_id, ['class' => 'form-control' . ($errors->has('generation_id') ? ' is-invalid' : ''), 'placeholder' => 'Generation Id']) }} --}}
            {{ Form::select('generation_id', $generations, $volunteer->generation_id, ['id' => 'generation_id','class' => 'form-control'])}}
            {!! $errors->first('generation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Constelacion') }}
            {{-- {{ Form::text('constellation_id', $volunteer->constellation_id, ['class' => 'form-control' . ($errors->has('constellation_id') ? ' is-invalid' : ''), 'placeholder' => 'Constellation Id']) }} --}}
            {{ Form::select('constellation_id', $constellations, $volunteer->constellation_id, ['id' => 'constellation_id','class' => 'form-control'])}}
            {!! $errors->first('constellation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grupo') }}
            {{-- {{ Form::text('group_id', $volunteer->group_id, ['class' => 'form-control' . ($errors->has('group_id') ? ' is-invalid' : ''), 'placeholder' => 'Group Id']) }} --}}
            {{ Form::select('group_id', $groups, $volunteer->group_id, ['id' => 'group_id','class' => 'form-control'])}}
            {!! $errors->first('group_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pseudonimo') }}
            {{ Form::text('pseudonym', $volunteer->pseudonym, ['class' => 'form-control' . ($errors->has('pseudonym') ? ' is-invalid' : ''), 'placeholder' => 'Pseudonym']) }}
            {!! $errors->first('pseudonym', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pseudonimo sin caracteres especiales') }}
            {{ Form::text('pseudonym_plain', $volunteer->pseudonym_plain, ['class' => 'form-control' . ($errors->has('pseudonym_plain') ? ' is-invalid' : ''), 'placeholder' => 'Pseudonym Plain']) }}
            {!! $errors->first('pseudonym_plain', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('names', $volunteer->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Names']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('last_names', $volunteer->last_names, ['class' => 'form-control' . ($errors->has('last_names') ? ' is-invalid' : ''), 'placeholder' => 'Last Names']) }}
            {!! $errors->first('last_names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('phone', $volunteer->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de nacimiento') }}
            {{-- {{ Form::text('birthday', $volunteer->birthday, ['class' => 'form-control' . ($errors->has('birthday') ? ' is-invalid' : ''), 'placeholder' => 'Birthday']) }} --}}
            {{-- <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/> --}}
            {{ Form::text('birthday', $volunteer->birthday, ['class' => 'form-control datepicker']) }}
            {!! $errors->first('birthday', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email', $volunteer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de contacto') }}
            {{ Form::text('contact_name', $volunteer->contact_name, ['class' => 'form-control' . ($errors->has('contact_name') ? ' is-invalid' : ''), 'placeholder' => 'Contact Name']) }}
            {!! $errors->first('contact_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono de contacto') }}
            {{ Form::text('contact_phone', $volunteer->contact_phone, ['class' => 'form-control' . ($errors->has('contact_phone') ? ' is-invalid' : ''), 'placeholder' => 'Contact Phone']) }}
            {!! $errors->first('contact_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-check form-switch">
            {{ Form::label('Activo') }}
            {{-- {{ Form::text('status', $volunteer->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }} --}}
            {{-- {{ Form::checkbox('status','yes', $volunteer->status) }} --}}
            {{ Form::checkbox('status',$volunteer->status, true, ['id' => 'status','class' => 'form-check-input']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
