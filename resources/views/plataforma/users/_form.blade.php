<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Nome</label>

    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">E-Mail</label>

    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('departament') ? ' has-error' : '' }}">
    <label for="departament" class="col-md-2 control-label">Departamento</label>

    <div class="col-md-6">
        {{ Form::select('departament', [
        'Administrativo' => 'Administrativo',
        'Administrativo' =>  'Financeiro',
        'RH' =>  'RH',
        'Marketing' =>  'Marketing',
        'Comercial' =>  'Comercial'],null, ['class' => 'form-control']) }}

        @if ($errors->has('departament'))
            <span class="help-block">
                <strong>{{ $errors->first('departament') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">Senha</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-2 control-label">Confirmar senha</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
    </div>
</div>