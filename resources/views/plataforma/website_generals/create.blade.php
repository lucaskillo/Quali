@extends('plataforma.layout.default')

@section('plataforma_title')
    Workshop
@stop

@section('active_website_generals')
    active
@stop

@section('plataforma_content')
<div class="px-content">
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="page-header">
        <div class="row">
            <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                <h1><i class="page-header-icon ion-ios-calendar-outline"></i>Nova Configuração</h1>
            </div>
            <hr class="page-wide-block visible-xs visible-sm">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    {!! Form::open(['route' => 'website_generals.store', 'class' => 'form-horizontal']) !!}

                    @include('plataforma.website_generals._form')

                    <div class="form-group">
                        <label class="col-md-2"></label>
                        <div class="col-md-9">
                            {!! Button::primary('<i class="fa fa-check"></i> Adicionar')->submit() !!}
                            {!! Button::danger('<i class="fa fa-check"></i> Cancelar')->asLinkTo(route('website_generals.index')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@stop