<!DOCTYPE html>
<html lang="en">
<head>
    <title>Qualimentos | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Themelize.me">

    <!-- Bootstrap 4.0.0-alpha.6 CSS via CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <!-- Font Awesome 4.7.0 via CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

    <!-- Plugin: flag icons - http://lipis.github.io/flag-icon-css/ -->
    <link href="assets/site/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- Theme style -->
    <link href="assets/site/css/theme-style.min.css" rel="stylesheet">

    <!--Your custom colour override-->
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- Your custom override -->
    <link href="assets/site/css/custom-style.css" rel="stylesheet">


    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="assets/site/img/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/site/img/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/site/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="assets/site/img/icons/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>
</head>

@yield('content')

<!-- ======== @Region: #footer ======== -->
<footer id="footer" class="p-0 footer-light">
    <div class="container pt-6 pb-5">
        <div class="row">
            <div class="col-md-4">
            <!--@todo: replace with company contact details-->
                <h4 class="text-uppercase text-grey-dark">
                    Contato
                </h4>
                <address>
                    <ul class="list-unstyled">
                        <li>
                            <abbr title="Phone"><i class="fa fa-phone fa-fw"></i></abbr>
                            (19) 3565-4101
                        </li>
                        <li>
                            <abbr title="Email"><i class="fa fa-envelope fa-fw"></i></abbr>
                            contato@qualimentos.com.br
                        </li>
                        <li>
                            <abbr title="Address"><i class="fa fa-home fa-fw"></i></abbr>
                            Av. Duque de Caxias Norte, 225 - Campus USP - Pirassununga - SP
                        </li>
                    </ul>
                </address>
                <a href="/admin">
                    <h5 class="text-uppercase text-grey-dark">
                        Painel Admin
                    </h5>
                </a>
            </div>
        </div>

    </div>
    <hr class="my-0 hr-blank op-2" />
<!--@todo: replace with company copyright details-->
    <div class="bg-grey text-sm py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p class="mb-0">Todos direitos reservados | Copyright 2017 &copy; Qualimentos</p>
                </div>
                <div class="col-md-5">
                    <p class="text-right">2018 começa em: <span class="countdown font-weight-bold" data-countdown="2019/01/01 00:00:01"></span></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--jQuery 1.12.4 via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Tether 1.1.1 via CDN, needed for Bootstrap Tooltips & Popovers -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.1.1/js/tether.min.js"></script>

<!-- Bootstrap 4.0.0-alpha.6 JS via CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

<!--Custom scripts mainly used to trigger libraries/plugins -->
<script src="assets/site/js/script.min.js"></script>
</body>
</html>