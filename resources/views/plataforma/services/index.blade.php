@extends('plataforma.layout.default')

@section('plataforma_title')
    Workshop
@stop

@section('active_services')
    active
@stop

@section('plataforma_content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1><i class="page-header-icon ion-ios-calendar-outline"></i>Serviços</h1>
                </div>

                <hr class="page-wide-block visible-xs visible-sm">

                <div class="col-xs-12 width-md-auto width-lg-auto width-xl-auto pull-md-right">
                    <a href="services/create" class="btn btn-primary btn-block"><span class="btn-label-icon left ion-plus-round"></span>Novo Serviço</a>
                </div>

            </div>
        </div>
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">Lista de Serviços</div>
            </div>
            <div class="panel-body">

                <div class="table-primary">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Nome</th>
                            <th class="text-center" width="180">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($services as $service)
                        <tr class="odd gradeX">
                            <td class="text-center" >{{ $service->id }}</td>
                            <td class="text-center">{{ $service->name }}</td>
                            <td class="text-center">
                                <div>
                                    <a class="btn btn-simple btn-warning btn-icon edit" href="{{ route('services.edit',$service->id) }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['services.destroy', $service->id],'style'=>'display:inline']) !!}
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