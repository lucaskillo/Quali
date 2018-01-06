@extends('plataforma.layout.default')

@section('plataforma_title')
    Home
@stop

@section('active_cliente')
    active
@stop

@section('plataforma_content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Clientes</h2>
            <ol class="breadcrumb">
                <li>
                    <a>Clientes</a>
                </li>
                <li class="active">
                    <strong>Index</strong>
                </li>
            </ol>
        </div>

        <div class="col-lg-2" style="margin-top: 2%;">
            <a href="{{ route('clients.create') }}">
                <button type="button"  class="btn btn-w-m btn-primary">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Novo
                </button>
            </a>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <<div id="example">
                            <div id="grid"></div>

                            <script>
                                $(document).ready(function () {
                                    var crudServiceBaseUrl = "https://demos.telerik.com/kendo-ui/service",
                                        dataSource = new kendo.data.DataSource({
                                            transport: {
                                                read:  {
                                                    url: crudServiceBaseUrl + "/Products",
                                                    dataType: "jsonp"
                                                },
                                                update: {
                                                    url: crudServiceBaseUrl + "/Products/Update",
                                                    dataType: "jsonp"
                                                },
                                                destroy: {
                                                    url: crudServiceBaseUrl + "/Products/Destroy",
                                                    dataType: "jsonp"
                                                },
                                                create: {
                                                    url: crudServiceBaseUrl + "/Products/Create",
                                                    dataType: "jsonp"
                                                },
                                                parameterMap: function(options, operation) {
                                                    if (operation !== "read" && options.models) {
                                                        return {models: kendo.stringify(options.models)};
                                                    }
                                                }
                                            },
                                            batch: true,
                                            pageSize: 20,
                                            schema: {
                                                model: {
                                                    id: "ProductID",
                                                    fields: {
                                                        ProductID: { editable: false, nullable: true },
                                                        ProductName: { validation: { required: true } },
                                                        UnitPrice: { type: "number", validation: { required: true, min: 1} },
                                                        Discontinued: { type: "boolean" },
                                                        UnitsInStock: { type: "number", validation: { min: 0, required: true } }
                                                    }
                                                }
                                            }
                                        });

                                    $("#grid").kendoGrid({
                                        dataSource: dataSource,
                                        pageable: true,
                                        height: 550,
                                        toolbar: ["create"],
                                        columns: [
                                            { field:"ProductName", title: "Product Name" },
                                            { field: "UnitPrice", title:"Unit Price", format: "{0:c}", width: "120px" },
                                            { field: "UnitsInStock", title:"Units In Stock", width: "120px" },
                                            { field: "Discontinued", width: "120px", editor: customBoolEditor },
                                            { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }],
                                        editable: "popup"
                                    });
                                });

                                function customBoolEditor(container, options) {
                                    $('<input class="k-checkbox" type="checkbox" name="Discontinued" data-type="boolean" data-bind="checked:Discontinued">').appendTo(container);
                                    $('<label class="k-checkbox-label">​</label>').appendTo(container);
                                }
                            </script>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop