<div class="box box-info padding-1">
    <div class="box-body">

        {{-- <div class="form-group">
            {{ Form::label('ID Voluntario') }}
            {{ Form::text('volunteer_id', $user->volunteer_id, ['class' => 'form-control' . ($errors->has('ID voluntario') ? ' is-invalid' : ''), 'placeholder' => 'ID Voluntario']) }}
            {!! $errors->first('volunteer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel') }}
            {{ Form::text('level', $user->level, ['class' => 'form-control' . ($errors->has('level') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('level', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
