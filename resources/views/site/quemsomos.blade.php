@extends('site.layouts.default')

@section('quemsomos_ative')
    active
@stop

@section('title')
    Quem somos
@stop

@section('content')

    @include('site.layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                <h2 class="title-divider">
                    <span>Quem Somos</span>
                    <small>Conheça um pouco da história da Qualimentos Junior.</small>
                </h2>
                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-7">
                        <p class="text-justify">A Qualimentos Jr., empresa júnior do curso de Engenharia de Alimentos, com sede na Faculdade de Zootecnia
                            e Engenharia de Alimentos da Universidade de São Paulo (FZEA/USP), atua, há mais de 12 anos, na prestação
                            de serviços e no desenvolvimento de projetos na área de Consultoria em Engenharia de Alimentos.
                            Apresentando participação ativa no Movimento Empresa Junior (MEJ), através da filiação ao Núcleo
                            de Empresas Juniores da Universidade de São Paulo (USP Júnior) e federação à Federação de Empresas
                            Juniores do Estado de São Paulo (FEJESP).</p>

                        <p class="text-justify">Trata – se de uma empresa sem fins lucrativos que tem como princípio fornecer soluções eficientes e
                            de custo reduzido. Para tal fim, a empresa conta com a infraestrutura disponibilizada pela Faculdade
                            de Zootecnia e Engenharia de Alimentos (FZEA), campus da Universidade de São Paulo localizado na
                            cidade de Pirassununga – SP, e ainda, com o apoio dos docentes e da grade curricular do curso de
                            Engenharia de Alimentos. A Qualimentos Jr. considera essencial a valorização de seus clientes e
                            trabalha com excelência em seus projetos através de um atendimento de qualidade e do comprometimento
                            em seus serviços.</p>

                        <p class="text-justify">Buscando o investimento constante na atualização e na capacitação de seus membros, bem como o incentivo
                            a liderança e ao empreendedorismo dos mesmos, a Qualimentos Jr. promove visitas técnicas em empresas
                            relacionadas à grande área da Engenharia de Alimentos. Além de projetos sociais em instituições
                            localizadas na cidade de Pirassununga, participação em eventos e treinamentos promovidos pelo MEJ e,
                            ainda, realiza Workshops e outros eventos internos destinados a comunidade acadêmica da FZEA,
                            onde oferece a oportunidade de contato entre profissionais especializados em diferentes áreas do
                            conhecimento e alunos e docentes da FZEA.</p>
                    </div>
                    <!-- Slideshow banner -->
                    <div class="col-md-5">
                        <!-- List Accordion -->
                        <div class="card-accordion card-accordion-list-style card-accordion-icons-left" id="list-accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseOne" class="panel-title collapsed">Nossa Missão</a> </div>
                                <div id="collapseOne" class="collapse">
                                    <div class="card-block text-justify">Capacitamos nossos membros no âmbito profissional e social, garantindo inovação e solução empreendedora para nossos clientes na área de alimentos.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseTwo" class="panel-title collapsed">Nossos Processos</a> </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-block text-justify">Ad iustum odio premo refoveo sino ymo. Adipiscing cogo commoveo hendrerit importunus loquor patria roto.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseThree" class="panel-title collapsed">Como Trabalhamos</a> </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-block text-justify">Ad cogo loquor luptatum neo nisl saluto singularis valde. Bene lucidus ludus refero saluto.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseFour" class="panel-title collapsed">O que fazemos</a> </div>
                                <div id="collapseFour" class="collapse">
                                    <div class="card-block text-justify">Defui imputo iustum jus te. Enim eros saluto sit. Augue eros luctus probo turpis.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Nossos <span class="font-weight-normal text-muted">Valores</span></span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Trabalho com Qualidade
                                </h4>
                                Duis jus pagus torqueo. Praemitto scisco ymo.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Baixo Custo
                                </h4>
                                Diam fere illum in pneum typicus usitas valde validus venio.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Comprometimento com o Cliente
                                </h4>
                                Decet et lucidus nunc oppeto saepius venio.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Timeline -->
                <h3 class="title-divider mt-4">
                    <span>Company <span class="font-weight-normal text-muted">History</span></span>
                </h3>
                <div class="timeline timeline-left">
                    <div class="timeline-marker"></div>
                    <!--Timeline item 1-->
                    <div class="timeline-item timeline-item-first animated fadeIn de-02">
                        <div class="timeline-item-date">Feb 2011</div>
                        <h5 class="timeline-item-title">
                            Company founders meet for first time
                        </h5>
                        <p class="timeline-item-description">Autem importunus saepius ulciscor. Autem exerci iustum jus mos nobis odio olim probo.</p>
                    </div>
                    <!--Timeline item 2 - NOTE: .highlight class-->
                    <div class="timeline-item highlight animated fadeIn de-04">
                        <div class="timeline-item-date">April 2011</div>
                        <h5 class="timeline-item-title">
                            The company was born
                        </h5>
                        <p class="timeline-item-description">Consectetuer erat luctus mauris meus paulatim plaga scisco vindico. Cui huic ideo immitto importunus secundum tum veniam virtus.</p>
                    </div>
                    <!--Timeline item 3 -->
                    <div class="timeline-item animated fadeIn de-06">
                        <div class="timeline-item-date">Sept 2011</div>
                        <h5 class="timeline-item-title">
                            The company lands first major contract
                        </h5>
                        <p class="timeline-item-description">Ideo paulatim quidne suscipere utrum vulpes. Causa fere pagus vereor virtus.</p>
                    </div>
                    <!--Timeline item 4-->
                    <div class="timeline-item timeline-item-last animated fadeIn de-08">
                        <div class="timeline-item-date">Dec 2014</div>
                        <h5 class="timeline-item-title">
                            Company sold for $1 million
                        </h5>
                        <p class="timeline-item-description">Abigo cogo et ille nibh paulatim utinam vero voco. Acsi natu quibus uxor virtus.</p>
                    </div>
                    <div class="timeline-marker timeline-marker-bottom"></div>
                </div>
            </div>
        </div>
    </div>
@stop