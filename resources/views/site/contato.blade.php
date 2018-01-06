@extends('site.layouts.default')

@section('contato_ative')
    Active
@stop

@section('title')
    Contato
@stop

@section('content')

@include('site.layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('message_sucesso'))
                    <div class="alert alert-success">
                        {{ session()->get('message_sucesso') }}
                    </div>
                @endif

                <h2 class="title-divider">
                    <span>Contato</span>
                    <small>Entre em contato conosco</small>
                </h2>
                <!-- The form: submits to itself -->
                {{ Form::open(array('action' => 'ContatoController@postContato', 'role' => 'form')) }}
                    <div class="form-group">
                        <label class="sr-only" for="contact-name">Name</label>
                        {{ Form::text('nome', null, array('placeholder'=>'Nome', 'class'=>'form-control')) }}
                        <small id="contact-name-help" class="form-text text-muted">Primeiro e último nome</small>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="contact-email">Email</label>
                        {{ Form::email('email', null, array('placeholder'=>'Email', 'class'=>'form-control')) }}
                        <small id="contact-name-help" class="form-text text-muted">Seu e-mail para entrarmos em contato</small>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="contact-email">Assunto</label>
                        {{ Form::select('assunto',
                            ['Contato' => 'Contato',
                             'Cotação' => 'Cotação',
                             'Parceiria' => 'Parceiria'], null, array('class'=>'form-control')) }}
                        <small id="contact-email-help" class="form-text text-muted">Informe qual assunto do seu contato)</small>
                    </div>
                    <div class="form-group>">
                        <label class="sr-only" for="contact-message">Message</label>
                        {{ Form::textarea('mensagem', null, array('placeholder'=>'Mensagem', 'class'=>'form-control')) }}
                        <small id="contact-message-help" class="form-text text-muted">Detalhe seu contato</small>
                    </div>

                    {{ Form::submit('Enviar Mensagem', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@stop