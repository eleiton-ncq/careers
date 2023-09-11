<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Careers</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo base_url() ?>public/img/logo_fondo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/fonts.css">

    <!-- Incluir jQuery core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>


    <div class="page">
        <!-- Page Header<a class="banner banner-top" href="link anuncio" target="_blank"><img src="<?php echo base_url() ?>public/images/intense_02.jpg" alt=""/></a>-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">

                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand ">
                                    <!--Brand--><a class="brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>public/img/logoblanco.png" alt="" height="20" /></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">

                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="<?php echo base_url("Careers") ?>">Inicio</a>
                                    </li>
                                    <li class="rd-nav-item "><a class="rd-nav-link" href="<?php echo base_url("acerca") ?>">Nuestra Esencia</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url("jobs") ?>">Empleos</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo base_url("contacto") ?>">Contáctenos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Swiper-->
        <style>
            /* Estilo para el contenedor del slider */
            .swiper-container {
                width: 100%;
                height: 100vh;
                position: relative;
            }

            /* Estilo para cada diapositiva */
            .swiper-slide {
                position: relative;
                background-size: cover;
                background-position: center;
            }

            /* Estilo para la capa de superposición */
            .swiper-slide-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                opacity: 0.9;
                z-index: 1;
            }

            /* Estilo para el contenido del slide */
            .slide-content {
                position: relative;
                z-index: 2;
                color: white;
                /* Cambia el color del texto según tus necesidades */
                text-align: center;
                /* Ajusta el alineamiento del contenido */
                padding: 20px;
                /* Añade espacio interno al contenido */
            }

            .slide-content h2 {
                color: white;
            }
        </style>
        <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
            <div class="swiper-wrapper text-left">
                <div class="swiper-slide" style="background-image: url('<?php echo base_url() ?>public/img/01Slider/slider1.png');">
                    <div class="swiper-slide-overlay"></div>
                    <div class="slide-content">
                        <p class="textoTop" data-caption-animate="fadeInRight" data-caption-delay="0">Unidos en visión,
                            impulsando el éxito</p>
                        <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                            <span>Nuestro equipo, </span><span class="font-weight-bold">nuestra fortaleza</span>
                        </h2>
                        <a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Ver más</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background-image: url('<?php echo base_url() ?>public/img/01Slider/slider2.png');">
                    <div class="swiper-slide-overlay"></div>
                    <div class="slide-content">
                        <p class="textoTop" data-caption-animate="fadeInRight" data-caption-delay="0">Juntos alcanzamos
                            lo imposible</p>
                        <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                            <span>Trabajo en equipo, </span><span class="font-weight-bold">logros extraordinarios</span>
                        </h2>
                        <a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Ver más</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background-image: url('<?php echo base_url() ?>public/img/01Slider/slider3.png');">
                    <div class="swiper-slide-overlay"></div>
                    <div class="slide-content">
                        <p class="textoTop" data-caption-animate="fadeInRight" data-caption-delay="0">Sumando talentos
                        </p>
                        <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                            <span></span><span class="font-weight-bold">multiplicando éxitos!</span>
                        </h2>
                        <a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </section>
        <!-- Section Box Categories-->
        <!-- <section class="section section-lg section-top-1 bg-gray-4">
            <div class="container offset-negative-1">
                <div class="box-categories cta-box-wrap">
                    <div class="box-categories-content">
                        <div class="row justify-content-center">
                            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a target="_blank" href="https://www.qupos.com/"><img
                                                src="<?php echo base_url() ?>public/img/Qupos.png" alt="" width="368"
                                                height="420" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a target="_blank" href="https://factun.com/"><img
                                                src="<?php echo base_url() ?>public/img/Factun.png" alt="" width="368"
                                                height="420" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                                <ul class="list-marked-2 box-categories-list">
                                    <li><a target="_blank" href="https://ubitecglobal.com/"><img
                                                src="<?php echo base_url() ?>public/img/Ubitec.png" alt="" width="368"
                                                height="420" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
          Owl Carousel
    </div>
    </section> -->
    <!-- Discover New Horizons-->
    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
            <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                <div class="col-lg-6 text-center wow fadeInUp"><img src="<?php echo base_url() ?>public/img/imgoffice-11.png" alt="" width="556" height="382" />
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                    <div class="box-width-lg-470">
                        <h3>Descubre nuevos horizontes</h3>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">Nuestro propósito</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Nuestra visión</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-7-1">
                                    <p>Facilitar la vida de nuestros clientes a través de la tecnología. </p>
                                </div>
                                <div class="tab-pane fade" id="tabs-7-2">
                                    <p>Posicionar nuestros productos de tecnología como líderes a nivel nacional,
                                        con presencia en otros países de la región latinoamericana. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-sm">
        <div class="container">
            <h3>Nuestros Valores</h3>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Valor</a></h5>
                                <p class="box-icon-classic-text">Descripción</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Valor</a></h5>
                                <p class="box-icon-classic-text">Descripción</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Valor</a></h5>
                                <p class="box-icon-classic-text">Descripción</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Valor</a></h5>
                                <p class="box-icon-classic-text">Descripción</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Valor</a></h5>
                                <p class="box-icon-classic-text">Descripción</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">Valor</a></h5>
                                <p class="box-icon-classic-text">Descripción</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-default text-center offset-top-10">
        <div class="parallax-container" data-parallax-img="<?php echo base_url() ?>public/img/fondocopia.png">
            <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                <div class="container">
                    <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">NCQ Technologies</span><span class="d-block font-weight-light">te espera!</span></h2>
                    <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"> ¡Conviértete
                        en parte de nuestro equipo y ayúdanos a crear soluciones tecnológicas para el mundo!</p><a class="button button-secondary button-pipaluk" href="#">¡Conócenos!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-sm section-top-0 section-fluid section-relative ">
        <div class="container-fluid">
            <br>
            <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
                <?php
                $images = array(
                    "g1.png", "g2.png", "g3.png", "g4.png", "g5.png",
                    "g6.png", "g7.png", "g8.png", "g9.png", "g10.png"
                );

                foreach ($images as $image) {
                    $imagePath = base_url() . "public/img/galeria/" . $image;
                ?>
                    <article class="thumbnail">
                        <div class="thumbnail-mary-figure"><img src="<?php echo $imagePath; ?>" alt="" width="270" height="195" /></div>

                    </article>
                <?php
                }
                ?>
            </div>


        </div>
    </section>




    <a class="banner" href="<?php echo base_url() ?>acerca#beneficios" target="_blank"><img src="<?php echo base_url() ?>public/img/fin2.png" alt="" /></a>
    <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
            <div class="container">
                <div class="row row-40 justify-content-lg-between">
                    <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                        <div class="oh-desktop">
                            <div class="wow slideInRight" data-wow-delay="0s">
                                <h6 class="text-spacing-100 text-uppercase">Contáctenos</h6>
                                <ul class="footer-contacts d-inline-block d-sm-block">
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">+506
                                                    2460-3851</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                            <div class="unit-body"><a class="link-aemail" href="mailto:empleos@ncq.co.cr">empleos@ncq.co.cr</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span>
                                            </div>
                                            <div class="unit-body"><a class="link-location" href="#">230 metros este
                                                    de Mayca Ciudad Quesada, Alajuela, Costa Rica</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                        <div class="oh-desktop">
                            <div class="wow slideInDown" data-wow-delay="0s">
                                <h6 class="text-spacing-100 ">¿Quieres formar parte de nosotros?</h6>
                                <article class="post post-minimal-2">
                                    <p class="post-minimal-2-title"><a href="#">Vacantes disponibles</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-corporate-bottom-panel">
            <div class="container">
                <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
                    <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                        <div>
                            <ul class="list-inline list-inline-sm footer-social-list-2">
                                <li><a class="icon fa fa-facebook" target="_blank" href="https://www.facebook.com/ncqtechnologies"></a></li>


                                <li><a class="icon fa fa-instagram" target="_blank" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 order-sm-first">
                        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>NCQ Technologies</span>.</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    </div>

    <div class="snackbars" id="form-output-global"></div>


    <script src="<?php echo base_url() ?>public/js/core.min.js"></script>
    <script src="<?php echo base_url() ?>public/js/script.js"></script>
    <script src="<?php echo base_url() ?>public/js/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>public/js/owl.carousel.min.js"></script>


</body>

</html>