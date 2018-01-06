<div class="form-group{{ $errors->has('counter1_name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Nome Contador 1</label>
    <div class="col-md-6">
        {!! Form::text('counter1_name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('counter1_name'))
            <span class="help-block">
                <strong>{{ $errors->first('counter1_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('counter1_value') ? ' has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Valor Contador 1</label>
    <div class="col-md-6">
        {!! Form::number('counter1_value', null, ['class' => 'form-control']) !!}

        @if ($errors->has('counter1_value'))
            <span class="help-block">
                <strong>{{ $errors->first('counter1_value') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('counter2_name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Nome Contador 2</label>
    <div class="col-md-6">
        {!! Form::text('counter2_name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('counter2_name'))
            <span class="help-block">
                <strong>{{ $errors->first('counter2_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('counter2_value') ? ' has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Valor Contador 2</label>
    <div class="col-md-6">
        {!! Form::number('counter2_value', null, ['class' => 'form-control']) !!}

        @if ($errors->has('counter2_value'))
            <span class="help-block">
                <strong>{{ $errors->first('counter2_value') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('counter3_name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Nome Contador 3</label>
    <div class="col-md-6">
        {!! Form::text('counter3_name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('counter3_name'))
            <span class="help-block">
                <strong>{{ $errors->first('counter3_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('counter3_value') ? ' has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Valor Contador 3</label>
    <div class="col-md-6">
        {!! Form::number('counter3_value', null, ['class' => 'form-control']) !!}

        @if ($errors->has('counter3_value'))
            <span class="help-block">
                <strong>{{ $errors->first('counter3_value') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('who_we_are') ? ' has-error' : '' }}">
    <label for="Data" class="col-md-2 control-label">Quem somos</label>
    <div class="col-md-6">
        {!! Form::textarea('who_we_are', null, ['class' => 'form-control','size' => '30x5', 'id' => 'summernote-base']) !!}

        @if ($errors->has('who_we_are'))
            <span class="help-block">
                <strong>{{ $errors->first('who_we_are') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('mission') ? ' has-error' : '' }}">
    <label for="Data" class="col-md-2 control-label">Nossa Missão</label>
    <div class="col-md-6">
        {!! Form::textarea('mission', null, ['class' => 'form-control','size' => '30x5', 'id' => 'summernote-base']) !!}

        @if ($errors->has('mission'))
            <span class="help-block">
                <strong>{{ $errors->first('mission') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('processes') ? ' has-error' : '' }}">
    <label for="Data" class="col-md-2 control-label">Nossos processos</label>
    <div class="col-md-6">
        {!! Form::textarea('processes', null, ['class' => 'form-control','size' => '30x5', 'id' => 'summernote-base']) !!}

        @if ($errors->has('processes'))
            <span class="help-block">
                <strong>{{ $errors->first('processes') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('how_we_work') ? ' has-error' : '' }}">
    <label for="Data" class="col-md-2 control-label">Como trabalhamos</label>
    <div class="col-md-6">
        {!! Form::textarea('how_we_work', null, ['class' => 'form-control','size' => '30x5', 'id' => 'summernote-base']) !!}

        @if ($errors->has('how_we_work'))
            <span class="help-block">
                <strong>{{ $errors->first('how_we_work') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('what_we_do') ? ' has-error' : '' }}">
    <label for="Data" class="col-md-2 control-label">Oque fazemos</label>
    <div class="col-md-6">
        {!! Form::textarea('what_we_do', null, ['class' => 'form-control','size' => '30x5', 'id' => 'summernote-base']) !!}

        @if ($errors->has('what_we_do'))
            <span class="help-block">
                <strong>{{ $errors->first('what_we_do') }}</strong>
            </span>
        @endif
    </div>
</div>