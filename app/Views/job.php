<?php
$session = session();
$data = $session->get('data');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo base_url() ?>public/img/logo_fondo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/fonts.css">
    <script type="text/javascript">
    // Desactivar la navegación hacia atrás y adelante
    window.addEventListener("popstate", function(event) {
        history.pushState(null, null, window.location.href);
    });
    </script>
    <!-- Incluir jQuery core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                    data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                    data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px"
                    data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
              
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
                                    <li class="rd-nav-item "><a class="rd-nav-link"
                                            href="<?php echo base_url("Careers") ?>">Inicio</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="<?php echo base_url("acerca") ?>">Nuestra Esencia</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link"
                                            href="<?php echo base_url("jobs") ?>">Empleos</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link"
                                            href="<?php echo base_url("contacto") ?>">Contáctenos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <style>
        /* Agregar espacio entre las columnas */
        .col-spaced {
            margin-right: 15px;
            margin-left: 15px;
        }

        /* Alinear el párrafo a la izquierda */
        .left-aligned {
            text-align: left;
        }
        </style>


        <!-- Hot tours-->
        <section class="section section-sm bg-default" id="vacantesdisponibles">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <!-- Segundo col con texto en párrafo -->
                        <h3 class="oh-desktop"><span
                                class="d-inline-block wow slideInDown"><?php echo $data['position_name'] ?></span></h3>
                        <div style="display: flex;
  flex-direction: column;
  justify-content: space-between;    text-align: left; padding:20px"> <?php echo $data['description'] ?></div>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-5">
                        <?php
         $vacantes_imagenes = array(
          "Asistente Administrativo de Crédito y Cobro" => "public/img/puestos/cxc.png",
          "Asistente de Tesorería" => "public/img/puestos/tesoreria.png",
          "Coordinador de implantaciones" => "public/img/puestos/implantaciones.png",
          "Desarrollador de Software" => "public/img/puestos/psw.png",
          "Implantador II" => "public/img/puestos/implantaciones.png",
          "Ingeniero de Software Intermedio" => "public/img/puestos/psw.png",
          "Practicante PSW" => "public/img/puestos/practicante.png",
          "Recepcionista" => "public/img/puestos/recepcion.png",
          "Soportista" => "public/img/puestos/soportista.png",
          "Técnico en Aseguramiento de Calidad de Software" => "public/img/puestos/QA.png",
          "Técnico en Soporte" => "public/img/puestos/tecnico.png"
      );
 ?>
                        <img src="<?php echo base_url().$vacantes_imagenes[$data['position_name']]  ?>" alt=""
                            width="600" height="366" />
                        <?php  
  ?>




                        <!-- Primer col con formulario -->
                        <form method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate
                            action="<?php echo base_url('aplicar') ?>">
                            <input type="text" hidden name="id" value="<?php echo  $data['id'] ?>">
                            <div class="form-group">
                                <label for="nombre">Nombre completo:</label>
                                <input type="text" class="form-control" id="full_name" name="full_name"
                                    placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="Ingrese su número de celular">
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Ingrese su correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="pdf">Subir PDF:</label>
                                <input type="file" id="fileInput" name="fileInput" accept=".pdf,.docx" />
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>






                    </div>

                </div>
            </div>


        </section>

        <!-- Section Subscribe-->
        <section class="section bg-default text-center offset-top-10">
            <div class="parallax-container" data-parallax-img="<?php echo base_url() ?>public/img/fondocopia.png">
                <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                    <div class="container">
                        <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span
                                class="d-block font-weight-semi-bold">NCQ Technologies</span><span
                                class="d-block font-weight-light">está esperando por usted!</span></h2>
                        <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"> ¡Conviértete
                            en parte de nuestro equipo y ayúdanos a crear soluciones tecnológicas para el mundo!</p><a
                            class="button button-secondary button-pipaluk" href="#">¡Conócenos!</a>
                    </div>
                </div>
            </div>
        </section>
        <!--	Instagrram wondertour-->
        <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
            <div class="container-fluid">
                <br>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2"
                    data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15"
                    data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g1.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g1.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g1.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g2.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g2.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g2.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g3.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g3.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g3.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g4.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g4.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g4.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g5.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g5.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g5.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g6.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g6.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g6.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g7.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g7.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g7.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g8.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g8.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g8.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g9.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g9.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g9.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g10.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g10.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g10.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="<?php echo base_url() ?>public/img/galeria/g3.png"
                                alt="" width="270" height="195" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="<?php echo base_url() ?>public/img/galeria/g3.png" data-lightgallery="item"><img
                                    src="<?php echo base_url() ?>public/img/galeria/g3.png" alt="" width="270"
                                    height="195" /></a>
                        </div>
                    </article>
                    <style>
                    .owl-nav {
                        display: none;
                    }
                    </style>
                </div>
            </div>
        </section>



        <!-- Page Footer
      <a class="banner" href="link" target="_blank"><img src="<?php // echo base_url() ?>public/img/fondo.png" alt=""/></a>-->
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
                                                <div class="unit-body"><a class="link-aemail"
                                                        href="mailto:empleos@ncq.co.cr">empleos@ncq.co.cr</a></div>
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
                                    <!-- Post Minimal 2-->
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
                                    <li><a class="icon fa fa-facebook" target="_blank"
                                            href="https://www.facebook.com/ncqtechnologies"></a></li>


                                    <li><a class="icon fa fa-instagram" target="_blank" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 order-sm-first">
                            <!-- Rights-->
                            <p class="rights"><span>&copy;&nbsp;</span><span
                                    class="copyright-year"></span><span>&nbsp;</span><span>NCQ Technologies</span>.</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script>
    document.getElementById('fileForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];

        if (file) {
            const allowedExtensions = ['pdf', 'docx'];
            const fileExtension = file.name.split('.').pop().toLowerCase();

            if (allowedExtensions.includes(fileExtension)) {
                // Aquí puedes agregar la lógica para subir el archivo al servidor si es necesario.
                document.getElementById('message').innerHTML = 'Archivo válido. Se puede subir al servidor.';
            } else {
                document.getElementById('message').innerHTML =
                    'Formato de archivo no válido. Solo se permiten archivos PDF o Word (DOCX).';
            }
        }
    });
    </script>

    <script src="<?php echo base_url() ?>public/js/core.min.js"></script>
    <script src="<?php echo base_url() ?>public/js/script.js"></script>
    <script src="<?php echo base_url() ?>public/js/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>public/js/owl.carousel.min.js"></script>


</body>

</html>