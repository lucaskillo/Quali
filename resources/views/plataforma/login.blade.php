<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Sign In v1 - Pages - PixelAdmin: Responsive Bootstrap Template</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- DEMO ONLY: Function for the proper stylesheet loading according to the demo settings -->
    <script>function _pxDemo_loadStylesheet(a,b,c){var c=c||decodeURIComponent((new RegExp(";\\s*"+encodeURIComponent("px-demo-theme")+"\\s*=\\s*([^;]+)\\s*;","g").exec(";"+document.cookie+";")||[])[1]||"clean"),d="rtl"===document.getElementsByTagName("html")[0].getAttribute("dir");document.write(a.replace(/^(.*?)((?:\.min)?\.css)$/,'<link href="$1'+(c.indexOf("dark")!==-1&&a.indexOf("/css/")!==-1&&a.indexOf("/themes/")===-1?"-dark":"")+(!d||0!==a.indexOf("assets/plataforma//css")&&0!==a.indexOf("assets/plataforma//demo")?"":".rtl")+'$2" rel="stylesheet" type="text/css"'+(b?'class="'+b+'"':"")+">"))}</script>

    <!-- DEMO ONLY: Set RTL direction -->
    <script>"ltr"!==document.getElementsByTagName("html")[0].getAttribute("dir")&&"1"===decodeURIComponent((new RegExp(";\\s*"+encodeURIComponent("px-demo-rtl")+"\\s*=\\s*([^;]+)\\s*;","g").exec(";"+document.cookie+";")||[])[1]||"0")&&document.getElementsByTagName("html")[0].setAttribute("dir","rtl");</script>

    <!-- DEMO ONLY: Load PixelAdmin core stylesheets -->
    <script>
        _pxDemo_loadStylesheet('assets/plataforma//css/bootstrap.min.css', 'px-demo-stylesheet-bs');
        _pxDemo_loadStylesheet('assets/plataforma//css/pixeladmin.min.css', 'px-demo-stylesheet-core');
    </script>

    <!-- DEMO ONLY: Load theme -->
    <script>
        function _pxDemo_loadTheme(a){var b=decodeURIComponent((new RegExp(";\\s*"+encodeURIComponent("px-demo-theme")+"\\s*=\\s*([^;]+)\\s*;","g").exec(";"+document.cookie+";")||[])[1]||"clean");_pxDemo_loadStylesheet(a+b+".min.css","px-demo-stylesheet-theme",b)}
        _pxDemo_loadTheme('assets/plataforma//css/themes/');
    </script>

    <!-- Demo assets/plataforma/ -->
    <script>_pxDemo_loadStylesheet('assets/plataforma//demo/demo.css');</script>
    <!-- / Demo assets/plataforma/ -->

    <!-- Pace.js -->
    <script src="assets/plataforma//pace/pace.min.js"></script>

    <script src="assets/plataforma//demo/demo.js"></script>

    <!-- Custom styling -->
    <style>
        .page-signin-modal {
            position: relative;
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            z-index: 1;
            display: block;
        }

        .page-signin-form-group { position: relative; }

        .page-signin-icon {
            position: absolute;
            line-height: 21px;
            width: 36px;
            border-color: rgba(0, 0, 0, .14);
            border-right-width: 1px;
            border-right-style: solid;
            left: 1px;
            top: 9px;
            text-align: center;
            font-size: 15px;
        }

        html[dir="rtl"] .page-signin-icon {
            border-right: 0;
            border-left-width: 1px;
            border-left-style: solid;
            left: auto;
            right: 1px;
        }

        html:not([dir="rtl"]) .page-signin-icon + .page-signin-form-control { padding-left: 50px; }
        html[dir="rtl"] .page-signin-icon + .page-signin-form-control { padding-right: 50px; }

        #page-signin-forgot-form {
            display: none;
        }

        /* Margins */

        .page-signin-modal > .modal-dialog { margin: 30px 10px; }

        @media (min-width: 544px) {
            .page-signin-modal > .modal-dialog { margin: 60px auto; }
        }
    </style>
    <!-- / Custom styling -->
</head>
<body>
<div class="page-signin-modal modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="box m-a-0">
                <div class="box-row">

                    <div class="box-cell col-md-5 bg-primary p-a-4">
                        <div class="text-xs-center text-md-left">
                            <a class="px-demo-brand px-demo-brand-lg" href="#"><span class="px-demo-logo bg-primary m-t-0"><span class="px-demo-logo-1"></span><span class="px-demo-logo-2"></span><span class="px-demo-logo-3"></span><span class="px-demo-logo-4"></span><span class="px-demo-logo-5"></span><span class="px-demo-logo-6"></span><span class="px-demo-logo-7"></span><span class="px-demo-logo-8"></span><span class="px-demo-logo-9"></span></span><span class="font-size-20 line-height-1">Qualimentos Jr.</span></a>
                            <div class="font-size-15 m-t-1 line-height-1">Painel Administrativo.</div>
                        </div>
                    </div>

                    <div class="box-cell col-md-7">
                        <form method="POST" action="{{ url('/login') }}" class="p-a-4" id="page-signin-form">
                            {{ csrf_field() }}
                            <h4 class="m-t-0 m-b-4 text-xs-center font-weight-semibold">Login</h4>

                            <fieldset class="page-signin-form-group form-group form-group-lg">
                                <div class="page-signin-icon text-muted"><i class="ion-person"></i></div>
                                <input name="email" id="email" type="email" class="page-signin-form-control form-control" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                @endif

                            </fieldset>

                            <fieldset class="page-signin-form-group form-group form-group-lg">
                                <div class="page-signin-icon text-muted"><i class="ion-asterisk"></i></div>
                                <input name="password" id="password" type="password" class="page-signin-form-control form-control" value="{{ old('password') }}" placeholder="Senha" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                                @endif
                            </fieldset>

                            <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">Entrar</button>
                        </form>

                        <!-- / Sign In form -->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ==============================================================================
|
|  SCRIPTS
|
=============================================================================== -->

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="assets/plataforma//js/bootstrap.min.js"></script>
<script src="assets/plataforma//js/pixeladmin.min.js"></script>

</body>
</html>
