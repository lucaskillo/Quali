@extends('plataforma.layout.default')

@section('plataforma_title')
    Cliente
@stop

@section('active_cliente')
    active
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        @if (Session::has('message'))
            <div class="alert alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="col-lg-10">
            <h2>Novo Cliente</h2>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::open(['route' => 'clients.store', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        @include('plataforma.clients._form')

                        <div class="form-group">
                            <label class="col-md-2"></label>
                            <div class="col-md-9">
                                {!! Button::primary('<i class="fa fa-check"></i> Adicionar')->submit() !!}
                                {!! Button::danger('<i class="fa fa-check"></i> Cancelar')->asLinkTo(route('users.index')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop