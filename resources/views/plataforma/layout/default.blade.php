<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Qualimentos | @yield('plataforma_title')</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">

    <!-- Core stylesheets -->
    <link href="/assets/plataforma/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/plataforma/css/pixeladmin.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/plataforma/css/widgets.min.css" rel="stylesheet" type="text/css">

    <link href="/assets/plataforma/css/themes/candy-cyan.min.css" rel="stylesheet" type="text/css">

    <!-- Demo assets -->
    <script>_pxDemo_loadStylesheet('assets/plataforma/demo/demo.css');</script>
    <!-- / Demo assets -->

    <script src="/assets/plataforma/pace/pace.min.js"></script>

    <!-- holder.js -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/holder/2.9.0/holder.js"></script>

    <!-- Pace.js -->
    <script src="/assets/plataforma/pace/pace.min.js"></script>

    <script src="/assets/plataforma/demo/demo.js"></script>

</head>
<body>
<nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">QUALIMENTOS</span>
    </button>

    <ul class="px-nav-content">

        <li class="px-nav-item">
            <a href="{!! url('/admin') !!}"><i class="px-nav-icon ion-home"></i><span class="px-nav-label">Home</span></a>
        </li>

        <li class="px-nav-item">
            <a href="{!! url('/admin/workshops') !!}"><i class="px-nav-icon ion-ios-calendar-outline"></i><span class="px-nav-label">Workshops</span></a>
        </li>

        <li class="px-nav-item">
            <a href="{!! url('/admin/selective_process') !!}"><i class="px-nav-icon ion-ios-copy"></i><span class="px-nav-label">Processo Seletivo</span></a>
        </li>

        <li class="px-nav-item px-nav-dropdown">
            <a href="#" class="bg-primary text-white b-a-0"><i class="px-nav-icon ion-settings"></i><span class="px-nav-label">Configurações</span></a>

            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item bg-primary text-white b-a-0"><a href="{!! url('/admin/users') !!}"><span class="px-nav-label">Usuários</span></a></li>
            </ul>
        </li>

        <li class="px-nav-item px-nav-dropdown">
            <a href="#" class="bg-primary text-white b-a-0"><i class="px-nav-icon ion-settings"></i><span class="px-nav-label">WebSite</span></a>

            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item bg-primary text-white b-a-0"><a href="{!! url('/admin/services') !!}"><span class="px-nav-label">Serviços</span></a></li>
            </ul>

            <ul class="px-nav-dropdown-menu">
                <li class="px-nav-item bg-primary text-white b-a-0"><a href="{!! url('/admin/website_general') !!}"><span class="px-nav-label">Site Geral</span></a></li>
            </ul>
        </li>

    </ul>
</nav>

<nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
        <a class="navbar-brand" href="{!! url('admin') !!}">QUALIMENTOS JR.</a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md">
                        Nome Usuário
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="pages-signin-v1.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

@yield('plataforma_content')

<footer class="px-footer px-footer-bottom">
    <strong>Qualimentos Jr.</strong> - Consultoria de Alimentos &copy; 2014 - 2017</span>
</footer>
<!-- ==============================================================================
|
|  SCRIPTS
|
=============================================================================== -->

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="/assets/plataforma/js/bootstrap.min.js"></script>
<script src="/assets/plataforma/js/pixeladmin.min.js"></script>

<script>
    // -------------------------------------------------------------------------
    // Initialize DEMO sidebar

    $(function() {
        pxDemo.initializeDemoSidebar();

        $('#px-demo-sidebar').pxSidebar();
        pxDemo.initializeDemo();
    });
</script>

<script type="text/javascript">
    // -------------------------------------------------------------------------
    // Initialize DEMO

    $(function() {
        var file = String(document.location).split('/').pop();

        // Remove unnecessary file parts
        file = file.replace(/(\.html).*/i, '$1');

        if (!/.html$/i.test(file)) {
            file = 'index.html';
        }

        // Activate current nav item
        $('body > .px-nav')
            .find('.px-nav-item > a[href="' + file + '"]')
            .parent()
            .addClass('active');

        $('body > .px-nav').pxNav();
        $('body > .px-footer').pxFooter();

        $('#navbar-notifications').perfectScrollbar();
        $('#navbar-messages').perfectScrollbar();
    });
</script>

<script>
    $(function() {
        $('#datatables').dataTable();
        $('#datatables_wrapper .table-caption').text('');
        $('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Buscar...');
    });
</script>


<script>
    $(function() {
        $('#datepicker').datepicker();
    });
</script>

<script>
    $(function() {
        $('#summernote-base').summernote({
            height: 200,
            toolbar: [
                ['parastyle', ['style']],
                ['fontstyle', ['fontname', 'fontsize']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture', 'link', 'video', 'table', 'hr']],
                ['history', ['undo', 'redo']],
                ['misc', ['codeview', 'fullscreen']],
                ['help', ['help']]
            ],
        });
    });
</script>

</body>
</html>
