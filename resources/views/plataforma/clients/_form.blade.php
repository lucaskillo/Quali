<div class="form-group">
    <label class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-8">
        <a href="{{ route('clients.create', ['pessoa' => \App\Client::PESSOA_FISICA])}}">
            <button class="btn btn-outline btn-primary dim {{$pessoa == \App\Client::PESSOA_FISICA ? 'active': ''}} " type="button">
                <i class="fa fa-check">Pessoa Física</i>
            </button>
        </a>
        <a href="{{ route('clients.create', ['pessoa' => \App\Client::PESSOA_JURIDICA])}}">
            <button class="btn btn-outline btn-primary dim {{$pessoa == \App\Client::PESSOA_JURIDICA ? 'active': ''}}" type="button">
                <i class="fa fa-check">Pessoa Jurídica</i>
            </button>
        </a>
    </div>

</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{$pessoa == \App\Client::PESSOA_FISICA ? 'Nome': 'Razão Social'}}</label>

    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

@if($pessoa == \App\Client::PESSOA_JURIDICA)
<div class="form-group{{ $errors->has('name_fantasy') ? ' has-error' : '' }}">
    <label for="name_fantasy" class="col-md-2 control-label">Nome Fantasia</label>

    <div class="col-md-8">
        {!! Form::text('name_fantasy', null, ['class' => 'form-control']) !!}

        @if ($errors->has('name_fantasy'))
            <span class="help-block">
                <strong>{{ $errors->first('name_fantasy') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
    <label for="contact" class="col-md-2 control-label">Contato</label>

    <div class="col-md-4">
        {!! Form::text('contact', null, ['class' => 'form-control']) !!}

        @if ($errors->has('contact'))
            <span class="help-block">
                <strong>{{ $errors->first('contact') }}</strong>
            </span>
        @endif
    </div>
</div>
@endif
<div class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
    <label for="document" class="col-md-2 control-label">{{$pessoa == \App\Client::PESSOA_FISICA ? 'CPF': 'CNPJ'}}</label>

    <div class="col-md-4">
        {!! Form::text('document', null, ['class' => 'form-control']) !!}

        @if ($errors->has('document'))
            <span class="help-block">
                <strong>{{ $errors->first('document') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">Telefone</label>

    <div class="col-md-4">
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}

        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
    <label for="Email" class="col-md-2 control-label">Email</label>

    <div class="col-md-4">
        {!! Form::email('Email', null, ['class' => 'form-control']) !!}

        @if ($errors->has('Email'))
            <span class="help-block">
                <strong>{{ $errors->first('Email') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
    <label for="website" class="col-md-2 control-label">WebSite</label>

    <div class="col-md-4">
        {!! Form::text('website', null, ['class' => 'form-control']) !!}

        @if ($errors->has('website'))
            <span class="help-block">
                <strong>{{ $errors->first('website') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-md-2 control-label">Endereco</label>

    <div class="col-md-8">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}

        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>