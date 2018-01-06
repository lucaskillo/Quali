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
                    <h1><i class="page-header-icon ion-ios-calendar-outline"></i>Usuário</h1>
                </div>

                <hr class="page-wide-block visible-xs visible-sm">

                <div class="col-xs-12 width-md-auto width-lg-auto width-xl-auto pull-md-right">
                    <a href="users/create" class="btn btn-primary btn-block"><span class="btn-label-icon left ion-plus-round"></span>Novo Workshop</a>
                </div>

            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">Lista de Workshops</div>
            </div>
            <div class="panel-body">

                <div class="table-primary">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">Departamento</th>
                            <th class="text-center" width="180">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr class="odd gradeX">
                                <td class="text-center" >{{ $user->id }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->departament }}</td>
                                <td class="text-center">
                                    <div>
                                        <a class="btn btn-simple btn-warning btn-icon edit" href="{{ route('users.edit',$user->id) }}">Editar</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Deletar', ['class' => 'btn btn-simple btn-danger btn-icon remove']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@stop