<!-- ======== @Region: body ======== -->
<body class="page header-translucent header-ontop header-dark page-index-corporate navbar-layout-default">

<!-- @plugin: page loading indicator, delete to remove loader -->
<div class="page-loader" data-toggle="page-loader"></div>

<a id="#top" href="#content" class="sr-only">Skip to content</a>

<!-- ======== @Region: #header ======== -->
<div id="header">
    <div data-toggle="sticky">
        <!--Header & Branding region-->
        <div class="header">
            <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .flex-first or/and .flex-last classes to make an element show first or last within .header-inner or .headr-block elements -->
            <div class="header-inner container">
                <!--branding/logo -->
                <div class="header-brand flex-first">
                    <a class="header-brand-text" href="/" title="Home">
                        <h1>
                            <span>Qualimentos Jr.</span>
                        </h1>
                    </a>
                    <div class="header-divider hidden-md-down"></div>
                    <div class="header-slogan hidden-md-down">Consultoria de Eng. de Alimentos</div>
                </div>
                <!-- other header content -->
                <div class="header-block flex-last">

                    <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu - data-toggle="overlay" = Overlay Menu -->
                    <a href="#top" class="btn btn-link btn-icon text-white header-btn float-right hidden-lg-up" data-toggle="jpanel-menu" data-target=".navbar-main" data-direction="right"> <i class="fa fa-bars"></i> </a>
                </div>

                <div class="navbar navbar-toggleable-md">
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-main collapse">
                        <!--main navigation-->
                        <ul class="nav navbar-nav navbar-inverse float-lg-right dropdown-effect-fade">
                            <!-- Home -->
                            <li class="nav-item">
                                <a href="/" class="nav-link" id="home" data-hover="dropdown">Home</a>
                            </li>

                            <!-- Quem Somos -->
                            <li class="nav-item @yield('quemsomos_ative')">
                                <a href="/quemsomos" class="nav-link" id="home" data-hover="dropdown">Quem Somos</a>
                            </li>

                            <!-- Portifólio -->
                            <li class="nav-item">
                                <a href="/portifolio" class="nav-link" id="home" data-hover="dropdown">Portifólio</a>
                            </li>

                            <!-- Contato -->
                            <li class="nav-item">
                                <a href="/contato" class="nav-link" id="home" data-hover="dropdown">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>
    </div>
</div>
