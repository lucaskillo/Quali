@extends('plataforma.layout.default')

@section('plataforma_title')
    Workshop
@stop

@section('active_users')
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
                    <h1><i class="page-header-icon ion-ios-calendar-outline"></i>Editar Usuário</h1>
                </div>
                <hr class="page-wide-block visible-xs visible-sm">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($user,[
                                   'route' => ['users.update', 'users' => $user->id]
                                   , 'class' => 'form-horizontal', 'method' => 'PUT'])!!}
                        {{ csrf_field() }}

                        @include('plataforma.users._form')

                        <div class="form-group">
                            <label class="col-md-2"></label>
                            <div class="col-md-9">
                                {!! Button::primary('<i class="fa fa-check"></i> Atualizar')->submit() !!}
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