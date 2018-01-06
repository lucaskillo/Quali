@extends('site.layouts.default')

@section('portifolio_ative')
    active
@stop

@section('title')
    Portifólio
@stop

@section('content')

    @include('site.layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                <h2 class="title-divider">
                    <span>Portifólio</span>
                    <small>Conheça nossos serviços</small>
                </h2>
                <p>Segue abaixo nosso portifólio de serviços:</p>

                <div class="mt-4 owl-dots-center" data-toggle="owl-carousel" data-owl-carousel-settings='{"responsive":{"0":{"items":1}, "1040":{"items":3}}, "margin":30, "dots":true}'>
                    @foreach ($services as $service)
                    <div>
                        <div class="card bg-shadow text-center rounded">
                            <p class="price-banner border-grey card-body-overlap">
                                <span class="price-digits">{{ $service->name }}</span>
                            </p>
                            <div class="card-body" style="padding: 1.25rem;">
                                <ul class="list-unstyled list-border-dots">
                                    <li>{{ $service->description }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <hr>
                <h3>
                    Testemunhos de Clientes
                </h3>
                <div class="mt-4 owl-dots-center owl-nav-over" data-toggle="owl-carousel" data-owl-carousel-settings='{"responsive":{"0":{"items":1}, "600":{"items":1, "stagePadding":90, "margin":90}}, "center":true, "dots":true, "autoHeight":true}'>

                    <!--Testimonial 1-->
                    <blockquote class="blockquote-bubble">
                        <p class="blockquote-bubble-content">"Appellatio Camur Consectetuer Duis Et Euismod Huic Imputo Inhibeo Iriure Iusto Molior Nisl Nutus Occuro Olim Praesent Quibus Refero Rusticus Sagaciter Similis Turpis Valetudo Veniam Virtus"</p>
                        <small>
                            <img src="assets/img/site/team/bono.jpg" alt="Picture of Dave" class="img-circle d-inline-block" />
                            Alex <span class="text-primary font-weight-bold">/</span> <a href="#">@erin</a>
                        </small>
                    </blockquote>

                    <!--Testimonial 2-->
                    <blockquote class="blockquote-bubble">
                        <p class="blockquote-bubble-content">"Capto Defui Dolore Eligo Elit Esse Ideo Immitto Ludus Luptatum Meus Pecus Persto Praemitto Praesent Qui Quibus Saluto Sudo Suscipere Te Vereor"</p>
                        <small>
                            <img src="assets/img/site/team/jimi.jpg" alt="Picture of Jo" class="img-circle d-inline-block" />
                            Tom <span class="text-primary font-weight-bold">/</span> <a href="#">@joe</a>
                        </small>
                    </blockquote>

                    <!--Testimonial 3-->
                    <blockquote class="blockquote-bubble">
                        <p class="blockquote-bubble-content">"Abluo At Commodo Dolore Duis Eligo Esse Fere Gilvus Ibidem Ideo Illum Iusto Lobortis Luptatum Meus Nimis Nobis Nostrud Oppeto Paulatim Probo Quia Roto Suscipere Suscipit Tamen Tincidunt Tum Valetudo Vero Voco"</p>
                        <small>
                            <img src="assets/img/site/team/obama.jpg" alt="Picture of Jo" class="img-circle d-inline-block" />
                            Joe <span class="text-primary font-weight-bold">/</span> <a href="#">@erin</a>
                        </small>
                    </blockquote>

                    <!--Testimonial 4-->
                    <blockquote class="blockquote-bubble">
                        <p class="blockquote-bubble-content">"Amet Antehabeo Caecus Cogo Commodo Consectetuer Diam Eum Exputo Facilisis Fere Gilvus Humo Ibidem Importunus Interdico Iriure Iusto Iustum Jus Laoreet Nutus Obruo Quidem Ratis Scisco Tation Te Vel Venio Vicis"</p>
                        <small>
                            <img src="assets/img/site/team/steve.jpg" alt="Picture of Dave" class="img-circle d-inline-block" />
                            Dave <span class="text-primary font-weight-bold">/</span> <a href="#">@joe</a>
                        </small>
                    </blockquote>

                    <!--Testimonial 5-->
                    <blockquote class="blockquote-bubble">
                        <p class="blockquote-bubble-content">"Abico Autem Causa Commoveo Dolore Fere Iriure Molior Nisl Occuro Probo Quis Refoveo Roto Vereor Vindico"</p>
                        <small>
                            <img src="assets/img/site/team/obama.jpg" alt="Picture of Erin" class="img-circle d-inline-block" />
                            Erin <span class="text-primary font-weight-bold">/</span> <a href="#">@joe</a>
                        </small>
                    </blockquote>

                    <!--Testimonial 6-->
                    <blockquote class="blockquote-bubble">
                        <p class="blockquote-bubble-content">"Amet At Capto Conventio Diam Dignissim Erat Esca Ibidem Imputo Inhibeo Jugis Lenis Lobortis Melior Meus Molior Neo Nulla Paratus Persto Pertineo Pneum Praesent Premo Quibus Ratis Rusticus Saepius Suscipere Tamen Tation Tincidunt Tum Volutpat"</p>
                        <small>
                            <img src="assets/img/site/team/steve.jpg" alt="Picture of Tom" class="img-circle d-inline-block" />
                            Alex <span class="text-primary font-weight-bold">/</span> <a href="#">@alex</a>
                        </small>
                    </blockquote>
                </div>

            </div>
        </div>
    </div>
@stop