<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Tipo de grupo') }}
            {{-- {{ Form::text('grouptype_id', $group->grouptype_id, ['class' => 'form-control' . ($errors->has('grouptype_id') ? ' is-invalid' : ''), 'placeholder' => 'Grouptype Id']) }} --}}
            {{ Form::select('grouptype_id', $grouptypes, $group->grouptype_id, ['id' => 'grouptype_id','class' => 'form-control'])}}
            {!! $errors->first('grouptype_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID encargado') }}
            {{ Form::text('manager_id', $group->manager_id, ['class' => 'form-control' . ($errors->has('manager_id') ? ' is-invalid' : ''), 'placeholder' => 'Manager Id']) }}
            {!! $errors->first('manager_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID sub encargado') }}
            {{ Form::text('submanager_id', $group->submanager_id, ['class' => 'form-control' . ($errors->has('submanager_id') ? ' is-invalid' : ''), 'placeholder' => 'Submanager Id']) }}
            {!! $errors->first('submanager_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $group->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
