<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo base_url() ?>public/img/logo_fondo.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/fonts.css">

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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Incluye Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>

<body>


  <div class="page">
    <!-- Page Header<a class="banner banner-top" href="link anuncio" target="_blank"><img src="<?php echo base_url() ?>public/images/intense_02.jpg" alt=""/></a>-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
          <div class="rd-navbar-aside-outer">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>public/img/logoblanco.png" alt="" height="20" /></a>
                </div>
              </div>
              
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">
               
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item "><a class="rd-nav-link" href="<?php echo base_url("carrers") ?>">Inicio</a>
                  </li>
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="<?php echo base_url("acerca") ?>">Nuestra Esencia</a>
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

    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-10">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Nuestra Esencia</h2>

        </div>
        <div class="box-position" style="background-image: url(<?php echo base_url() ?>public/img/slider1.png);"></div>
      </div>
    </section>
    <style>
      /* Eliminamos el subrayado de los enlaces */
      h6 a {
        text-decoration: none;
      }

      /* Agregamos un espacio entre los iconos */
      h6 a:not(:last-child) {
        margin-right: 5px;
      }
    </style>
    <section class="section section-sm">
      <div class="container">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp" style="visibility: visible; animation-name: slideInUp;">Nuestros Líderes</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/denis.png" alt="" width="118" height="118"></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewBox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name">Denis Umaña</h6>
                <p class="team-modern-status">Comercial</p>
                <h6>
               
                  <a href="https://www.linkedin.com/in/denisum123/" style="padding: 5px;">
                    <img src="<?php echo base_url() ?>public/img/iconos/linkedin.png" alt="LinkedIn" width="15" height="15">
                  </a>
                </h6>

              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/pablo.png" alt="" width="118" height="118"></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewBox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name">Pablo Quirós</h6>
                <p class="team-modern-status">Servicio al Cliente</p>
                <h6>
                  <a href="https://www.linkedin.com/in/tu-perfil-linkedin" style="padding: 5px;">
                    <img src="<?php echo base_url() ?>public/img/iconos/linkedin.png" alt="LinkedIn" width="15" height="15">
                  </a>
                </h6>

              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/jose.png" alt="" width="118" height="118"></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewBox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name">Jose Morera</h6>
                <p class="team-modern-status">Implantaciones</p>
                <h6>
                  <a href="https://www.linkedin.com/in/tu-perfil-linkedin" style="padding: 5px;">
                    <img src="<?php echo base_url() ?>public/img/iconos/linkedin.png" alt="LinkedIn" width="15" height="15">
                  </a>
                </h6>

              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/mainor.png" alt="" width="118" height="118"></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewBox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name">Mainor Morales</h6>
                <p class="team-modern-status">Producción del Software</p>
                <h6>
                  <a href="https://www.linkedin.com/in/tu-perfil-linkedin" style="padding: 5px;">
                    <img src="<?php echo base_url() ?>public/img/iconos/linkedin.png" alt="LinkedIn" width="15" height="15">
                  </a>
                </h6>

              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/ileana.png" alt="" width="118" height="118"></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewBox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name">Ileana Umaña</h6>
                <p class="team-modern-status">Administrativo Financiero</p>
                <h6>
                 <a href="linkedin.com/in/ileana-umaña-saborío-aa77a9207" style="padding: 5px;">
                    <img src="<?php echo base_url() ?>public/img/iconos/linkedin.png" alt="LinkedIn" width="15" height="15">
                  </a>
                </h6>

              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/karol.png" alt="" width="118" height="118"></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewBox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name">Karol Hernández</h6>
                <p class="team-modern-status">Talento Humano</p>
                <h6>
                  <a href="https://www.linkedin.com/in/karol-hernandez/" style="padding: 5px;">
                    <img src="<?php echo base_url() ?>public/img/iconos/linkedin.png" alt="LinkedIn" width="15" height="15">
                  </a>
                </h6>

              </div>
            </article>
          </div>

        </div>
      </div>
    </section>

    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          items: 1,
          autoplay: true,
          autoplayTimeout: 8000, // Modifica el tiempo de cambio aquí (en milisegundos)
          loop: true,
          margin: 10
        });
      });
    </script>

    <!--Counters-->
    <!-- Counter Classic-->
    <section class="section section-sm section-last bg-default">
      <div class="container">

        <h2 class="breadcrumbs-custom-title">¿Qué dicen nuestros colaboradores?</h2>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
          <!-- Quote Lisa-->
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/colaborador1.png" alt="" width="150" height="150" /></a>
              <div class="quote-lisa-text">
                <p class="q">Mi experiencia en NCQ ha sido fundamental para mi crecimiento tanto a nivel personal como profesional. Aunque al principio me resultó un desafío adaptarme y cambiar mi enfoque, finalmente logré comprender el valor que aporto a la empresa. Cada una de mis contribuciones es reconocida y contribuye al desarrollo de esta gran familia. Espero continuar siendo parte de este equipo durante muchos años, ya que aquí he encontrado estabilidad tanto emocional como laboralmente, y estoy emocionado por lo que el futuro pueda deparar.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">Jordan Ramírez</a></h5>
              <p class="quote-lisa-status">Comercial</p>
            </div>
          </article>
          <!-- Quote Lisa-->
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/colaborador2.png" alt="" width="150" height="150" /></a>
              <div class="quote-lisa-text">
                <p class="q">Estoy increíblemente feliz con NCQ Technologies, ya que me brinda un ambiente laboral excepcional. Trabajar en el área de taller de servicios y en gestión de talento humano es mi verdadera pasión, y aquí tengo la oportunidad de crecer profesionalmente mientras disfruto cada día de lo que hago.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">Ever Leitón</a></h5>
              <p class="quote-lisa-status">Talento Humano - Taller de Servicio</p>
            </div>
          </article>
          <!-- Quote Lisa-->
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/colaborador3.png" alt="" width="150" height="150" /></a>
              <div class="quote-lisa-text">
                <p class="q">Aqui va el párrafo de Adrii.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">Adriana Picado</a></h5>
              <p class="quote-lisa-status">Taller de Servicio</p>
            </div>
          </article>
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/colaborador4.png" alt="" width="150" height="150" /></a>
              <div class="quote-lisa-text">
                <p class="q">Aqui va el párrafo de Adrii.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">Anthony Ochoa</a></h5>
              <p class="quote-lisa-status">Taller de Servicio</p>
            </div>
          </article>
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/colaborador5.png" alt="" width="150" height="150" /></a>
              <div class="quote-lisa-text">
                <p class="q">Aqui va el párrafo de Adrii.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">Adriana Picado</a></h5>
              <p class="quote-lisa-status">Taller de Servicio</p>
            </div>
          </article>
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="<?php echo base_url() ?>public/img/resenascolab/colaborador6.png" alt="" width="150" height="150" /></a>
              <div class="quote-lisa-text">
                <p class="q">Aqui va el párrafo de Adrii.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">Adriana Picado</a></h5>
              <p class="quote-lisa-status">Taller de Servicio</p>
            </div>
          </article>
        </div>
      </div>
    </section>



    <style>
      .section section-fluid {
        width: 100%;
        /* Si también quieres que ocupe el 100% del alto, puedes usar height: 100%; */
      }
    </style>





    <section class="section section-fluid bg-default">
      <div class="parallax-container" data-parallax-img="<?php echo base_url() ?>public/img/1700400.png">
        <div class="parallax-content section-xl context-dark bg-overlay-26">
          <br><br><br><br><br>

          <div class="row row-100 justify-content-center ">
            <div class="col-sm-6 col-md-5 col-lg-1">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">1</span>
                </div>
                <h5 class="counter-classic-title">Oficina</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-2">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">62</span>
                </div>
                <h5 class="counter-classic-title">Colaboradores</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-2">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">18</span>
                </div>
                <h5 class="counter-classic-title">años</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-2">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="counter">2</span>
                </div>
                <h5 class="counter-classic-title">Paises</h5>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="symbol">+</span><span class="counter">3000</span>
                </div>
                <h5 class="counter-classic-title">Clientes</h5>
              </div>
            </div>
          </div>
          <br><br><br><br><br>
        </div>
      </div>
    </section>

    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="images/about-1-519x564.jpg" alt="" width="519" height="564"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">¿Por qué escogernos?</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Nuestras Áreas</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Beneficios</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Convenios</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                  <div class="text-center text-sm-left offset-top-30 tab-height">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                      <li>Administrativo Financiero</li>
    <li>Comercial</li>
    <li>Factun</li>
    <li>Implantaciones</li>
    <li>Producción de Software</li>
    <li>Servicio al Cliente</li>
    <li>Talento Humano</li>
    <li>Taller de Servicio</li>
    <li>Qupos</li>
    <li>Ubitec</li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
               
                    <div class="text-center text-sm-left offset-top-30 tab-height">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Ahorro automático</li>
                        <li></li>
                        <li></li>
                        <li></li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p>En NCQ estamos en busca constate de alianzas con comercios, acá podrás encontrar nuestros convenios con empresas de todo tipo con los que tendrás descuentos y otros beneficios al identificarte como colaborador de NCQ, Factun y Ubitec.

</p>
                    <div class="text-center text-sm-left offset-top-30 tab-height">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                      <li>Gimnasio Revolution Fitness SC</li>
                      <li>Restaurante La Bodeguita de Cherepo</li>
                      <li>Fisioterapia Caoba</li>
                      <li>Nutricortés</li>
                      <li>GN Tienda</li>
                      <li>Eligon Gym</li>
                      <li>Valari Dance Studio</li>
                      <li>Restaurante Calipso</li>

                      </ul>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    <style>
      /* Estilos personalizados para el modal */
      .custom-modal {
        background-image: url('<?php echo base_url() ?>public/img/modal.png');
      }

      .custom-modal .modal-content {
        background-color: transparent;
        border: none;
      }

      .custom-modal .modal-body {
        text-align: center;
      }

      .custom-modal .modal-dialog {
        max-width: 90%;
      }

      .custom-modal .modal-dialog img {
        max-height: 70vh;
        max-width: 100%;
        object-fit: contain;
      }

      .custom-modal .modal-dialog .modal-footer {
        justify-content: space-between;
        border: none;
      }

      .custom-modal .modal-dialog .modal-footer button {
        justify-content: space-between;
        background: blue;
        border: none;
        color: #fff;
        font-size: 2em;
      }

      .custom-modal .modal-dialog .modal-footer .close {
        opacity: 1;
        pointer-events: auto;
      }

      .custom-modal .modal-header {
        border: none;
        display: flex;
        justify-content: space-between;
      }

      .custom-modal .modal-title {
        color: #fff;
      }
    </style>

    <section>
      <div class="container mt-5">
        <div class="row" id="gallery">
          <!-- Aquí se generarán las imágenes -->
        </div>
      </div>

      <!-- Modal para mostrar la imagen seleccionada -->
      <div class="modal fade custom-modal" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="imageModalLabel">NCQ Technologies</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeButton">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <img src="" class="img-fluid" id="modalImage" alt="Imagen">
            </div>
            <div class="modal-footer" role="dialog">
              <button type="button" class="btn btn-secondary" id="prevBtn"><i class="fas fa-arrow-left"></i></button>
              <img src="<?php echo base_url() ?>public/img/logoblanco.png" width="150px" alt="Logo" class="img-fluid">
              <button type="button" class="btn btn-secondary" id="nextBtn"><i class="fas fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Incluye Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-10">
      <div class="parallax-container" data-parallax-img="<?php echo base_url() ?>public/img/fondocopia.png">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
          <div class="container">
            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">NCQ Technologies</span><span class="d-block font-weight-light">está esperando por usted!</span></h2>
            <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"> ¡Conviértete en parte de nuestro equipo y ayúdanos a crear soluciones tecnológicas para el mundo!</p><a class="button button-secondary button-pipaluk" href="#">¡Conócenos!</a>
          </div>
        </div>
      </div>
    </section>
  




    <!-- Page Footer
      <a class="banner" href="link" target="_blank"><img src="<?php // echo base_url() 
                                                              ?>public/img/fondo.png" alt=""/></a>-->
   <footer class="section footer-corporate context-dark">
  <div class="footer-corporate-inset">
    <div class="container">
      <div class="row row-40 justify-content-lg-between">

        <!-- Contact Information -->
        <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
          <div class="oh-desktop">
            <div class="wow slideInRight" data-wow-delay="0s">
              <h6 class="text-spacing-100 text-uppercase">Contáctenos</h6>
              <ul class="footer-contacts d-inline-block d-sm-block">
                <li>
                  <div class="unit">
                    <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                    <div class="unit-body"><a class="link-phone" href="tel:#">+506 2460-3851</a></div>
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
                    <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                    <div class="unit-body"><a class="link-location" href="#">230 metros este de Mayca Ciudad Quesada, Alajuela, Costa Rica</a></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Job Opportunities -->
        <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
          <div class="oh-desktop">
            <div class="wow slideInDown" data-wow-delay="0s">
              <h6 class="text-spacing-100 text-uppercase">¿Quieres formar parte de nosotros?</h6>
              <!-- Post Minimal 2-->
              <article class="post post-minimal-2">
                <p class="post-minimal-2-title"><a href="#">Vacantes disponibles</a></p>
              </article>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bottom Panel -->
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
          <!-- Rights -->
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>NCQ Technologies</span>.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

  </div>
  <!-- Global Mailform Output-->
 
  <!-- Javascript-->


  <script src="<?php echo base_url() ?>public/js/core.min.js"></script>
  <script src="<?php echo base_url() ?>public/js/script.js"></script>
  <script src="<?php echo base_url() ?>public/js/owl.carousel.js"></script>
  <script src="<?php echo base_url() ?>public/js/owl.carousel.min.js"></script>



  <script>
    var $image_path = "<?php echo base_url() . 'public/img/galeria/'; ?>";
    var $images = <?php echo json_encode(array('g1.png', 'g2.png', 'g3.png', 'g4.png', 'g5.png', 'g6.png', 'g7.png', 'g8.png', 'g9.png', 'g10.png')); ?>;
    var currentIndex = 0;

    // Función para cargar la galería
    function loadGallery() {
      var galleryHtml = '';
      $images.forEach(function(image, index) {
        galleryHtml += '<div class="col-md-3 col-sm-4 col-xs-6">';
        galleryHtml += '<a href="#" class="gallery-link" data-index="' + index + '">';
        galleryHtml += '<img src="' + $image_path + image + '" class="img-fluid mb-4" alt="Imagen">';
        galleryHtml += '</a>';
        galleryHtml += '</div>';
      });
      $('#gallery').html(galleryHtml);
    }

    // Función para mostrar el modal con la imagen seleccionada
    function showImageModal(index) {
      var image = $image_path + $images[index];
      $('#modalImage').attr('src', image);
      currentIndex = index;
      $('#imageModal').modal('show');
    }

    // Evento de clic en una imagen para abrir el modal
    $(document).on('click', '.gallery-link', function() {
      var index = $(this).data('index');
      showImageModal(index);
    });

    // Evento de clic en el botón "Anterior" del modal
    $('#prevBtn').click(function() {
      currentIndex = (currentIndex - 1 + $images.length) % $images.length;
      showImageModal(currentIndex);
    });

    // Evento de clic en el botón "Siguiente" del modal
    $('#nextBtn').click(function() {
      currentIndex = (currentIndex + 1) % $images.length;
      showImageModal(currentIndex);
    });

    // Carga la galería al cargar la página
    $(document).ready(function() {
      loadGallery();
    });
  </script>
  <script>
    // Variable para controlar si hay una transición en curso
    var isTransitioning = false;

    // Función para mostrar el modal con el efecto de desvanecimiento
    function showImageModalWithFade(index) {
      // Si ya hay una transición en curso, evita ejecutar más acciones
      if (isTransitioning) {
        return;
      }

      // Ocultar la imagen actual
      $('#modalImage').fadeOut('fast', function() {
        var image = $image_path + $images[index];
        // Cambiar la imagen
        $('#modalImage').attr('src', image);
        // Mostrar la nueva imagen
        $('#modalImage').fadeIn('fast', function() {
          isTransitioning = false; // La transición ha terminado
        });
      });

      // Actualizar el índice actual
      currentIndex = index;
      isTransitioning = true; // Iniciar la transición
    }

    // Evento de clic en el botón "Anterior" del modal
    $('#prevBtn').click(function() {
      currentIndex = (currentIndex - 1 + $images.length) % $images.length;
      showImageModalWithFade(currentIndex);
    });

    // Evento de clic en el botón "Siguiente" del modal
    $('#nextBtn').click(function() {
      currentIndex = (currentIndex + 1) % $images.length;
      showImageModalWithFade(currentIndex);
    });
  </script>
  <script>
    // Evento de clic en el botón de cerrar el modal
    $('.close').click(function() {
      // Cierra el modal utilizando el método proporcionado por Bootstrap
      $('#imageModal').modal('hide');
    });
  </script>

</body>

</html>