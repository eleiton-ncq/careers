<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>public/img/logo_sin_fondo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>NCQ Technologies | Soluciones tecnológicas</title>

    <!-- Primary Meta Tags -->
    <title>Soluciones tecnológicas para el mercado costarricense</title>
    <meta name="title" content="Soluciones tecnológicas para el mercado costarricense">
    <meta name="description" content="NCQ Technologies está comprometido con el crecimiento de las empresas costarricenses por medio del desarrollo de software y tecnologías de administración y gestión.
    ">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ncq.co.cr">
    <meta property="og:title" content="Soluciones tecnológicas para el mercado costarricense">
    <meta property="og:description" content="NCQ Technologies está comprometido con el crecimiento de las empresas costarricenses por medio del desarrollo de software y tecnologías de administración y gestión.
    ">
    <meta property="og:image" content="https://wvw.qupos.com/hubfs/IMG%20DESTACADA.png">

    <!-- Twitter -->
    <meta property=" twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ncq.co.cr">
    <meta property="twitter:title" content="Soluciones tecnológicas para el mercado costarricense">
    <meta property="twitter:description" content="NCQ Technologies está comprometido con el crecimiento de las empresas costarricenses por medio del desarrollo de software y tecnologías de administración y gestión.
    ">
    <meta property="twitter:image" content="https://wvw.qupos.com/hubfs/IMG%20DESTACADA.png">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }

    .bg-gray-300 {
        background: #F9F9F9 !important;
    }

    /* nav mobile */

    .button_nav {
        position: absolute;
        left: 25px;
        top: 45px;
    }

    .cerrar_menu {
        position: fixed;
        right: 14px;
        top: 17px;
        z-index: 9;
    }

    .menu_mobile {
        position: fixed;
        background: #ffff;
        left: 0;
        top: 0;
        width: 300px;
        height: 100%;
        z-index: 9;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
        transition: all .1s;
        transition-timing-function: ease-in-out;
    }

    .ocultar {
        height: 0;
        visibility: hidden;
        transition-timing-function: ease-in-out;
        transition: all .1s;
    }

    .menu_mobile a {
        padding: 4% 5%;
        display: block;
        font-weight: 400;
        font-size: 15px;
        line-height: 130%;
        color: #1F1E2C;
    }

    .menu_mobile p {
        padding-left: 5%;
        padding-top: 1%;
    }

    .menu_mobile span,
    .menu_mobile p {
        color: #000 !important;
        margin-bottom: 0% !important;
    }

    .menu_mobile .item_footer {
        padding: 5% !important;
    }

    /* section_1 */

    .section_1 {
        background-image: url("<?php echo base_url() ?>public/img/bg_mobile.png");
        background-size: cover;
        background-repeat: no-repeat;
        padding: 9% 5% 5%;
    }

    .section_1__texto {
        margin-top: 76px;
        margin-bottom: 50px;
    }

    .section_1 h1 {
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        color: #FFFFFF;
        margin-bottom: 10%;
    }

    .section_1 p {
        font-weight: 300;
        font-size: 14px;
        line-height: 130%;
        color: #FFFFFF;
        margin-bottom: 10%;
    }

    .section_1__texto a {
        position: relative;
        display: inline-block;
        width: 277px;
        margin: auto;
        font-weight: 500;
        font-size: 15px;
        line-height: 18px;
        text-align: center;
        color: #FFFFFF;
        padding: 12px 37px;
        background: #4aa4f7;
        border-radius: 10px;
        overflow: hidden;
    }

    .section_1__texto a::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: #80c7f9;
        transition: left 0.3s ease;
        /* Transición del desplazamiento */
    }

    .section_1__texto a:hover::before {
        left: 100%;
        /* Mueve el fondo rojo hacia la derecha en hover */
    }



    @media (min-width: 1200px) {
        .section_1 {
            background-image: url("<?php echo base_url() ?>public/img/bg_desktop.png");
            padding: 3% 5% 5%;
        }

        .section_1__texto {
            margin-top: 137px;
            margin-bottom: 73px;
        }

        .items_menu a {
            color: white;
            margin-left: 46px;
            transition: all .3s;
        }

        .items_menu a:hover {
            color: #0380FF;
            transition: all .3s;
        }

        .section_1 h1 {
            font-weight: 700;
            font-size: 36px;
            line-height: 44px;
            margin-bottom: 3%;
        }

        .section_1 p {
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            margin-bottom: 3%;
            width: 791px;
        }

        .section_1__texto a {
            font-weight: 500;
            font-size: 20px;
            line-height: 29px;
            width: 473px;
            padding: 16px 37px;
            margin: unset;
        }
    }

    /* .section_2 */

    .section_2 h2 {
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        color: #171723;
    }

    .section_2 p {
        font-weight: 400;
        font-size: 14px;
        line-height: 140%;
        color: #171723;
        margin-top: 5%;
    }

    .section_2 {
        padding: 5%;
    }

    .section_2__cards h3 {
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        color: #171723;
    }

    .section_2__card_text {
        padding: 6% 4%;
    }

    .section_2__card {
        position: relative;
    }



    .section_2 a {
        position: relative;
        display: inline-block;
        width: 277px;
        margin: auto;
        font-weight: 500;
        font-size: 15px;
        line-height: 18px;
        text-align: center;
        color: #FFFFFF;
        padding: 12px 37px;
        background: #4aa4f7;
        border-radius: 10px;
        overflow: hidden;
    }

    .section_2 a::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: #80c7f9;
        transition: left 0.3s ease;
        /* Transición del desplazamiento */
    }

    .section_2 a:hover::before {
        left: 100%;
        /* Mueve el fondo rojo hacia la derecha en hover */
    }












    .section_2 hr {
        border-color: #2D2D45;
        width: 80%;
        margin: -3% auto 10%;
    }

    @media (min-width: 1200px) {
        .section_2 h2 {
            font-weight: 700;
            font-size: 33px;
            line-height: 130%;
        }

        .section_2 p {
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            margin-top: 3%;
        }

        .section_2 {
            padding: 2% 5%;
        }

        .section_2 a {
            margin: 9% 0;
        }

        .section_2 hr {
            border-color: #2D2D45;
            width: 100%;
            margin: 4% auto 8%;
            opacity: 0.39;
        }

        .section_2__cards h3 {
            font-weight: 700;
            font-size: 30px;
            line-height: 1.2;
        }

        .section_2__card_text {
            padding: 0;
            width: 1495px;
            margin: auto;
        }

        .section_2__card {
            gap: 62px;
        }


        .section_2__cards {
            margin: 5% 0px;
        }

        .section_2 a {
            margin: 5% 0;
            padding: 18px 20px;
            width: 410px;
            font-size: 20px;
        }
    }

    @media (min-width: 1600px) {
        .section_2__cards {
            margin: 5% !important;
        }
    }


    /* section_3 */

    .section_3 h2 {
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        color: #171723;
    }

    .tns-controls {
        display: none;
    }

    .tns-outer [data-action] {
        display: none;
    }


    .tns-nav {
        position: absolute;
        bottom: 0;
        left: 42%;
    }

    .tns-nav button {
        width: 10.76px;
        height: 10.76px;
        background: #D9D9D9;
        border-radius: 50%;
        margin: 0 5px;
    }

    button.tns-nav-active {
        background: #0380FF;
    }

    .section_3__marca {
        background: #F9F9F9;
        border: 0.5px solid #2D2D45;
        border-radius: 20px;
        height: 596px;
        width: 90%;
        margin: auto;
        padding: 11% 6%;
    }

    .section_3__marca__img {
        width: 115px;
        margin: auto;
        height: 80px;
        display: flex;
    }

    .section_3__marca__img img {
        height: auto;
        width: 100%;
        margin: auto;
    }

    .section_3__marca__texto ul li {
        color: #171723;
        font-size: 14px;
        line-height: 130%;
        margin-bottom: 8%;
        background-image: url('<?php echo base_url() ?>public/img/Vector-ubitec.png');
        background-repeat: no-repeat;
        background-size: auto;
        padding-left: 7%;
    }

    .marca_Qupos ul li {
        background-image: url('<?php echo base_url() ?>public/img/Vector-qupos.png');
        background-size: 15px;
    }

    .marca_factun ul li {
        background-image: url('<?php echo base_url() ?>public/img/Vector-factum.png');
        background-size: 15px;
    }

    .section_3__marca__texto ul {
        margin-top: 59px;
    }

    @media (min-width: 1200px) {
        .section_3 h2 {
            font-weight: 700;
            color: #171723;
            font-size: 30px;
            line-height: 47px;
        }

        .section_3__marcas {
            justify-content: center;
            gap: 55px;
            display: flex;
        }

        .section_3__marca {
            width: 391px;
            height: 685px;
        }

        .section_3__marca__texto ul li {
            font-size: 16px;
        }
    }




    /* section_4 */
    .section_4 {
        background: #1F1E2C;
        padding: 10% 5%;
    }

    .section_4__text h2 {
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        color: #FFFFFF;
    }

    .section_4__text p {
        font-weight: 400;
        font-size: 14px;
        line-height: 130%;
        text-align: center;
        color: #0380FF;
    }

    @media (min-width: 1200px) {
        .section_4 {
            background: #1F1E2C;
            padding: 3% 5%;
        }

        .section_4__text h2 {
            font-size: 30px;
            line-height: 35px;
        }

        .section_4__text p {
            margin-top: 2%;
            font-size: 20px;
            line-height: 130%;
        }

        .footer {
            padding: 3% !important;
        }
    }

    .section_4__form {

        margin: 5% auto 0;
        color: #ffff;
    }

    @media (min-width: 768px) {
        .section_4__form {
            margin: 5% auto 0;
            color: #ffff;
            max-width: 1200px;
        }

        form input,
        form select {
            width: 100% !important;
            background: #F5F8FA;
            border: 1px solid #818181;
            border-radius: 5px;
            padding: 11px 13px;
            color: #000 !important;
            margin: 1px 0;
        }

        input.hs-button {
            background: #0380FF;
            border-radius: 20px;
            color: #ffff !important;
            border: unset;
            width: 357px !important;
            padding: 12px 0;
            font-size: 20px;
        }
    }

    form input,
    form select {
        width: 100% !important;
        background: #F5F8FA;
        border: 1px solid #818181;
        border-radius: 5px;
        padding: 6px 13px;
        color: #000 !important;
        margin: 10px 0;
    }



    .actions {
        text-align: center;
        margin: 5% 0 0;
    }

    .form-columns-1 span {
        font-weight: 500;
    }

    input.hs-button {
        background: #0380FF;
        border-radius: 20px;
        color: #ffff !important;
        border: unset;
        padding: 12px 0;
        font-size: 18px;
    }


    .form-columns-1,
    .form-columns-2 {
        max-width: 100% !important;
        margin: 17px 0 !important;
    }


    /* footer */
    .footer {
        background: #171723;
        color: #FFFFFF;
        padding: 5%;
    }

    .item_footer span {
        font-weight: 500;
        font-size: 14px;
        line-height: 130%;
        color: #FFFFFF;
    }

    .item_footer svg {
        width: 14px !important;
        height: auto !important;
    }

    .item_1::after {
        content: "";
        position: absolute;
        width: 1px;
        height: 80px;
        right: -38px;
        z-index: 9;
        background: #ffff;
        top: 7px;
    }

    .blur_bg {
        filter: brightness(0.5);
        background: rgba(0, 0, 0, 0.79);
    }
    </style>

</head>

<body>

    <div class=" menu_mobile md:hidden ocultar" id="menu_mobile">
        <div class="my-10">
            <a href="<?php echo base_url('Careers') ?>">Careers </a>
            <hr>
            <a href="#acerca">Acerca de NCQ.</a>
            <hr>
            <a href="#soluciones">Nuestras soluciones</a>
            <hr>
            <a href="#sobrenosotros">Conozca más sobre nosotros</a>


        </div>

        <div>
            <div class="item_footer py-5">
                <div class="flex items-center gap-1">
                    <div>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.44444 5C9.2963 5 9.16444 4.94667 9.04889 4.84C8.93296 4.7337 8.86574 4.60185 8.84722 4.44444C8.72685 3.58333 8.36352 2.84944 7.75722 2.24278C7.15056 1.63648 6.41667 1.27315 5.55556 1.15278C5.39815 1.13426 5.2663 1.06944 5.16 0.958333C5.05333 0.847222 5 0.712963 5 0.555556C5 0.398148 5.05556 0.266111 5.16667 0.159444C5.27778 0.0531481 5.40741 0.00925923 5.55556 0.0277778C6.72222 0.157407 7.71759 0.634259 8.54167 1.45833C9.36574 2.28241 9.84259 3.27778 9.97222 4.44444C9.99074 4.59259 9.94667 4.72222 9.84 4.83333C9.7337 4.94444 9.60185 5 9.44444 5ZM7.125 5C7.00463 5 6.89815 4.95833 6.80556 4.875C6.71296 4.79167 6.64352 4.68056 6.59722 4.54167C6.52315 4.27315 6.38204 4.03463 6.17389 3.82611C5.96537 3.61796 5.72685 3.47685 5.45833 3.40278C5.31944 3.35648 5.20833 3.28704 5.125 3.19444C5.04167 3.10185 5 2.99074 5 2.86111C5 2.67593 5.06482 2.52537 5.19445 2.40944C5.32407 2.29389 5.46759 2.25463 5.625 2.29167C6.14352 2.41204 6.59037 2.65963 6.96556 3.03444C7.34037 3.40963 7.58796 3.85648 7.70833 4.375C7.74537 4.53241 7.7037 4.67593 7.58333 4.80556C7.46296 4.93519 7.31019 5 7.125 5ZM9.41667 10C8.22222 10 7.05796 9.7337 5.92389 9.20111C4.78944 8.66889 3.78481 7.96519 2.91 7.09C2.03481 6.21519 1.33111 5.21056 0.798889 4.07611C0.266296 2.94204 0 1.77778 0 0.583333C0 0.416667 0.0555555 0.277778 0.166667 0.166667C0.277778 0.0555555 0.416667 0 0.583333 0H2.83333C2.96296 0 3.0787 0.0416666 3.18056 0.125C3.28241 0.208333 3.34259 0.314815 3.36111 0.444444L3.72222 2.38889C3.74074 2.51852 3.73852 2.63648 3.71556 2.74278C3.69222 2.84944 3.63889 2.94444 3.55556 3.02778L2.22222 4.38889C2.61111 5.05556 3.09722 5.68056 3.68056 6.26389C4.26389 6.84722 4.90741 7.35185 5.61111 7.77778L6.91667 6.47222C7 6.38889 7.10889 6.3263 7.24333 6.28444C7.37741 6.24296 7.50926 6.23148 7.63889 6.25L9.55556 6.63889C9.68519 6.66667 9.79167 6.72907 9.875 6.82611C9.95833 6.92352 10 7.03704 10 7.16667V9.41667C10 9.58333 9.94445 9.72222 9.83333 9.83333C9.72222 9.94445 9.58333 10 9.41667 10Z"
                                fill="#1F1E2C" />
                        </svg>

                    </div>
                    <div>
                        <span>
                            Teléfono
                        </span>
                    </div>
                </div>
                <p>+506 2460 3851</p>
            </div>
            <div class="item_footer py-5">
                <div class="flex items-center gap-1">
                    <div>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.034 0.741L4.4715 5.179C4.60278 5.31037 4.77812 5.38836 4.96359 5.39787C5.14907 5.40738 5.33147 5.34775 5.4755 5.2305L5.5325 5.179L9.967 0.744C9.9815 0.799 9.991 0.855 9.996 0.9125L10 1V7C10.0001 7.25229 9.9048 7.49528 9.73325 7.68027C9.56171 7.86526 9.32658 7.97858 9.075 7.9975L9 8H1C0.747712 8.00008 0.504717 7.9048 0.319726 7.73325C0.134735 7.56171 0.0214217 7.32658 0.00250006 7.075L0 7V1C0 0.94 0.00499999 0.882 0.015 0.825L0.034 0.741ZM9 0C9.0605 0 9.12 0.00500007 9.1775 0.0155001L9.2625 0.0350001L5.0025 4.295L0.741 0.0339999C0.796 0.0189999 0.853 0.00899995 0.911 0.00399995L1 0H9Z"
                                fill="#1F1E2C" />
                        </svg>


                    </div>
                    <div>
                        <span>
                            E-mail
                        </span>
                    </div>
                </div>
                <p>info@ncq.co.cr</p>
            </div>

            <div class="item_footer py-5">
                <div class="flex items-center gap-1">
                    <div>
                        <svg width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 5.6051C4.80937 5.6051 5.07431 5.49524 5.29481 5.27552C5.51494 5.05617 5.625 4.79236 5.625 4.48408C5.625 4.1758 5.51494 3.9118 5.29481 3.69208C5.07431 3.47273 4.80937 3.36306 4.5 3.36306C4.19063 3.36306 3.92588 3.47273 3.70575 3.69208C3.48525 3.9118 3.375 4.1758 3.375 4.48408C3.375 4.79236 3.48525 5.05617 3.70575 5.27552C3.92588 5.49524 4.19063 5.6051 4.5 5.6051ZM4.5 11C4.425 11 4.35 10.986 4.275 10.958C4.2 10.9299 4.13438 10.8926 4.07812 10.8459C2.70937 9.64077 1.6875 8.52217 1.0125 7.49009C0.3375 6.45763 0 5.49299 0 4.59618C0 3.1949 0.452438 2.07856 1.35731 1.24713C2.26181 0.415711 3.30938 0 4.5 0C5.69063 0 6.73819 0.415711 7.64269 1.24713C8.54756 2.07856 9 3.1949 9 4.59618C9 5.49299 8.6625 6.45763 7.9875 7.49009C7.3125 8.52217 6.29063 9.64077 4.92188 10.8459C4.86562 10.8926 4.8 10.9299 4.725 10.958C4.65 10.986 4.575 11 4.5 11Z"
                                fill="#1F1E2C" />
                        </svg>


                    </div>
                    <div>
                        <span>
                            Dirección
                        </span>
                    </div>
                </div>
                <p>230 mts este de Mayca, Ciudad Quesada. Contiguo al Ministerio de Trabajo, Ciudad Quesada, <br>
                    Alajuela, CR.</p>
            </div>
        </div>

    </div>
    <div class="md:hidden">
        <button class="cerrar_menu hidden" onclick="cerrarMenu()" id="cerrar">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.575 7.975L1.675 12.875C1.49167 13.0583 1.25833 13.15 0.975 13.15C0.691667 13.15 0.458333 13.0583 0.275 12.875C0.0916663 12.6917 0 12.4583 0 12.175C0 11.8917 0.0916663 11.6583 0.275 11.475L5.175 6.575L0.275 1.675C0.0916663 1.49167 0 1.25833 0 0.975C0 0.691667 0.0916663 0.458333 0.275 0.275C0.458333 0.0916663 0.691667 0 0.975 0C1.25833 0 1.49167 0.0916663 1.675 0.275L6.575 5.175L11.475 0.275C11.6583 0.0916663 11.8917 0 12.175 0C12.4583 0 12.6917 0.0916663 12.875 0.275C13.0583 0.458333 13.15 0.691667 13.15 0.975C13.15 1.25833 13.0583 1.49167 12.875 1.675L7.975 6.575L12.875 11.475C13.0583 11.6583 13.15 11.8917 13.15 12.175C13.15 12.4583 13.0583 12.6917 12.875 12.875C12.6917 13.0583 12.4583 13.15 12.175 13.15C11.8917 13.15 11.6583 13.0583 11.475 12.875L6.575 7.975Z"
                    fill="white" />
            </svg>
        </button>


    </div>

    <div id="contenido">

        <div class="section_1 relative">
            <div class="navbar_mobile md:hidden">
                <div class="flex items-center">
                    <div class="button_nav" id="buton_menu" onclick="openMenu()">
                        <nav>
                            <button>
                                <svg width="23" height="18" viewBox="0 0 23 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 1.5C0 1.10218 0.1475 0.720645 0.410051 0.43934C0.672602 0.158036 1.0287 0 1.4 0H21C21.3713 0 21.7274 0.158036 21.99 0.43934C22.2525 0.720645 22.4 1.10218 22.4 1.5C22.4 1.89782 22.2525 2.27936 21.99 2.56066C21.7274 2.84196 21.3713 3 21 3H1.4C1.0287 3 0.672602 2.84196 0.410051 2.56066C0.1475 2.27936 0 1.89782 0 1.5ZM0 9C0 8.60217 0.1475 8.22064 0.410051 7.93934C0.672602 7.65803 1.0287 7.5 1.4 7.5H21C21.3713 7.5 21.7274 7.65803 21.99 7.93934C22.2525 8.22064 22.4 8.60217 22.4 9C22.4 9.39782 22.2525 9.77935 21.99 10.0607C21.7274 10.342 21.3713 10.5 21 10.5H1.4C1.0287 10.5 0.672602 10.342 0.410051 10.0607C0.1475 9.77935 0 9.39782 0 9ZM0 16.5C0 16.1022 0.1475 15.7206 0.410051 15.4393C0.672602 15.158 1.0287 15 1.4 15H21C21.3713 15 21.7274 15.158 21.99 15.4393C22.2525 15.7206 22.4 16.1022 22.4 16.5C22.4 16.8978 22.2525 17.2794 21.99 17.5607C21.7274 17.842 21.3713 18 21 18H1.4C1.0287 18 0.672602 17.842 0.410051 17.5607C0.1475 17.2794 0 16.8978 0 16.5Z"
                                        fill="white" />
                                </svg>

                            </button>
                        </nav>
                    </div>
                    <div class="m-auto">
                        <img src="<?php echo base_url() ?>public/img/NCQ 1.png" alt="logo">
                    </div>
                </div>
            </div>



            <div class="navbar_desktop hidden md:block">
                <div class="flex items-center justify-between">
                    <div class="logo_menu">
                        <img src="<?php echo base_url() ?>public/img/logo_white.png" alt="NCQ logo">
                    </div>

                    <div class="items_menu">
                        <a href="<?php echo base_url('Careers') ?>">Careers </a>
                        <a href="#acerca">Acerca de NCQ</a>
                        <a href="#soluciones">Nuestras soluciones</a>
                        <a href="#sobrenosotros">Conozca más sobre nosotros</a>

                    </div>
                </div>
            </div>


            <div class="text-center md:text-left text-white  section_1__texto">
                <h1 class="uppercase" data-aos="fade-up">Soluciones tecnológicas <br>
                    para el mercado costarricense</h1>

                <p data-aos="fade-in">En NCQ, nos dedicamos al desarrollo
                    de software, infraestructura en tecnologías de información y soporte técnico para empresas
                    de diversos sectores.</p>

                <a href="#sobrenosotros" data-aos="fade-in">Quiero información
                    sobre las soluciones</a>
            </div>
        </div>


        <div class="section_2 text-center">
            <div class="my-5">
                <h2 id="acerca">Acerca de NCQ</h2>
                <div class="my-2" data-aos="fade-in">
                    <svg class="m-auto" width="50" height="2" viewBox="0 0 50 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="1" x2="49" y2="1" stroke="#2D2D45" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <p data-aos="fade-up">NCQ es una empresa de tecnología y desarrollo de software en Costa Rica, fundada
                    en el
                    año 2005. Desde
                    entonces, atendemos diferentes mercados, brindando acceso a soluciones de calidad con un excelente
                    servicio de soporte, entre ellas, administración comercial, seguimiento vehicular y facturación
                    electrónica.</p>
                <p class="mt-2" data-aos="fade-in">Contamos con la confianza de más de 2500 empresas <br>
                    que operan con alguno de nuestros tres productos: QUPOS, UBITEC y FACTUN.</p>
            </div>
        </div>

        <div class="section_2 text-center md:text-left bg-gray-300 mt-12">
            <div class="my-5  text-center">
                <h2 data-aos="fade-in" id="soluciones">Nuestras soluciones</h2>
                <div class="my-2  " data-aos="fade-in">
                    <svg class="m-auto" width="50" height="2" viewBox="0 0 50 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="1" x2="49" y2="1" stroke="#2D2D45" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
                <p data-aos="fade-in"> Nuestra misión es facilitar las operaciones y el crecimiento de nuestros clientes
                    a
                    través de la
                    tecnología. Para esto, nuestro equipo diseña y desarrolla herramientas de software robustas, con el
                    compromiso de buscar la mejora de forma continua.</p>
            </div>

            <div class="section_2__cards">
                <div class="section_2__card md:flex">
                    <div class="md:w-full">
                        <img src="<?php echo base_url() ?>public/img/Ubitec.png" alt="UBITEC">
                    </div>
                    <div class="section_2__card_text">
                        <h3 data-aos="fade-up">UBITEC</h3>
                        <p data-aos="fade-up">La plataforma de optimización de rutas y rastreo vehicular, diseñada para
                            aumentar la
                            productividad de las rutas de trabajo, optimizando el uso de vehículos, recorridos, uso de
                            combustible, y manejo de personal.</p>
                        <a href="https://ubitecglobal.com/" target="_blank" rel="noopener noreferrer">Conocer más sobre
                            UBITEC</a>
                    </div>

                </div>
                <hr>
                <div class="section_2__card md:flex flex-row-reverse">
                    <div class="md:w-full">
                        <img src="<?php echo base_url() ?>public/img/Qupos.png" alt="QUPOS">
                    </div>
                    <div class="section_2__card_text">
                        <h3 data-aos="fade-up">QUPOS</h3>
                        <p data-aos="fade-up">Qupos se ha convertido en una de los principales software de gestión para
                            comercios, tanto retail
                            como mayoreo. Cuenta con planes de punto de venta, facturación electrónica y ERP que se
                            ajustan
                            a cada sector. Una herramienta que representa una inversión razonable con resultados rápidos
                            y
                            satisfactorios.</p>
                        <a href="https://www.qupos.com/" target="_blank" rel="noopener noreferrer">Conocer más sobre
                            QUPOS</a>
                    </div>

                </div>
                <hr>
                <div class="section_2__card md:flex">
                    <div class="md:w-full">
                        <img src="<?php echo base_url() ?>public/img/Factun.png" alt="Factun">
                    </div>
                    <div class="section_2__card_text">
                        <h3 data-aos="fade-up">FACTUN</h3>
                        <p data-aos="fade-up"> Una herramienta desarrollada para gestionar con facilidad los procesos de
                            facturación electrónica
                            y ahorrar tiempo en la administración de las finanzas en pequeñas empresas y profesionales
                            independientes.</p>
                        <a href="https://factun.com/" target="_blank" rel="noopener noreferrer">Conocer más sobre
                            FACTUN</a>
                    </div>

                </div>
            </div>
        </div>


        <div class="section_3 mb-20 md:my-20">
            <div class="my-5 text-center">
                <h2>Lo que puede lograr con ellas</h2>
                <div class="my-2">
                    <svg class="m-auto" width="50" height="2" viewBox="0 0 50 2" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="1" x2="49" y2="1" stroke="#2D2D45" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
            </div>
            <div class="relative pt-6 pb-12 md:pb-0">

                <div class="section_3__marcas" id="marcas">
                    <div>
                        <div class="section_3__marca marca_ubitec">
                            <div class="section_3__marca__img">
                                <img src="<?php echo base_url() ?>public/img/Ubitec-logo.png" alt="Ubitec logo">
                            </div>
                            <div class="section_3__marca__texto">
                                <ul>
                                    <li>Mejora de la logística de entregas para optimizar costos.</li>
                                    <li>Restricción de eventos no deseados en sus vehículos, como excesos de velocidad,
                                        desvíos
                                        no autorizados, visitas a lugares no autorizados, entre otros.</li>
                                    <li>Medición de la cantidad de infracciones a las políticas de conducción por cada
                                        conductor.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="section_3__marca marca_Qupos">
                            <div class="section_3__marca__img">
                                <img src="<?php echo base_url() ?>public/img/Qupos-logo.png" alt="Qupos logo">
                            </div>
                            <div class="section_3__marca__texto">
                                <ul>
                                    <li>Procesos de gestión estandarizados en las diferentes áreas de operación:
                                        recepción
                                        de mercadería, ventas en cajas o en rutas, control de inventarios, tesorería,
                                        planillas, contabilidad y finanzas.</li>
                                    <li>Control detallado y preciso de todo el inventario.</li>
                                    <li>Control preciso de los ingresos, desde el cobro al cliente final, hasta que el
                                        dinero llega a la cuenta bancaria.</li>
                                    <li>Gestión segura de los flujos de dinero dentro de la empresa.</li>
                                    <li>Flujo óptimo de la información desde la operación hasta la parte
                                        financiero-contable.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="section_3__marca marca_factun">
                            <div class="section_3__marca__img">
                                <img src="<?php echo base_url() ?>public/img/Logo-Factun-350x135 2.png"
                                    alt="Factun logo">
                            </div>
                            <div class="section_3__marca__texto">
                                <ul>
                                    <li>Solventar la regulación de facturación electrónica.</li>
                                    <li>Orden adecuado de sus gastos.</li>
                                    <li>Información ordenada para la declaración de sus impuestos.</li>
                                    <li>Control de la facturación a crédito de sus clientes.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="section_4">
            <div class="section_4__text text-center">
                <h2 id="sobrenosotros">Conozca más sobre nuestras soluciones y servicios</h2>
                <div class="my-2">
                    <svg width="50" height="2" viewBox="0 0 50 2" class="mx-auto" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="1" x2="49" y2="1" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>

                </div>
                <p>Llene el formulario a continuación para recibir información sobre nuestros productos y sistemas.</p>
            </div>

            <div class="section_4__form">
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>

                <script>
                hbspt.forms.create({

                    region: "na1",

                    portalId: "3437647",

                    formId: "ed7f0ce9-91c3-4db2-91b1-3595c0e65d7b"

                });
                </script>
            </div>
        </div>

        <div class="footer md:hidden">
            <div class="item_footer py-5">
                <div class="flex items-center gap-1">
                    <div>
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.44444 5C9.2963 5 9.16444 4.94667 9.04889 4.84C8.93296 4.7337 8.86574 4.60185 8.84722 4.44444C8.72685 3.58333 8.36352 2.84944 7.75722 2.24278C7.15056 1.63648 6.41667 1.27315 5.55556 1.15278C5.39815 1.13426 5.2663 1.06944 5.16 0.958333C5.05333 0.847222 5 0.712963 5 0.555556C5 0.398148 5.05556 0.266111 5.16667 0.159444C5.27778 0.0531481 5.40741 0.00925923 5.55556 0.0277778C6.72222 0.157407 7.71759 0.634259 8.54167 1.45833C9.36574 2.28241 9.84259 3.27778 9.97222 4.44444C9.99074 4.59259 9.94667 4.72222 9.84 4.83333C9.7337 4.94444 9.60185 5 9.44444 5ZM7.125 5C7.00463 5 6.89815 4.95833 6.80556 4.875C6.71296 4.79167 6.64352 4.68056 6.59722 4.54167C6.52315 4.27315 6.38204 4.03463 6.17389 3.82611C5.96537 3.61796 5.72685 3.47685 5.45833 3.40278C5.31944 3.35648 5.20833 3.28704 5.125 3.19444C5.04167 3.10185 5 2.99074 5 2.86111C5 2.67593 5.06482 2.52537 5.19445 2.40944C5.32407 2.29389 5.46759 2.25463 5.625 2.29167C6.14352 2.41204 6.59037 2.65963 6.96556 3.03444C7.34037 3.40963 7.58796 3.85648 7.70833 4.375C7.74537 4.53241 7.7037 4.67593 7.58333 4.80556C7.46296 4.93519 7.31019 5 7.125 5ZM9.41667 10C8.22222 10 7.05796 9.7337 5.92389 9.20111C4.78944 8.66889 3.78481 7.96519 2.91 7.09C2.03481 6.21519 1.33111 5.21056 0.798889 4.07611C0.266296 2.94204 0 1.77778 0 0.583333C0 0.416667 0.0555555 0.277778 0.166667 0.166667C0.277778 0.0555555 0.416667 0 0.583333 0H2.83333C2.96296 0 3.0787 0.0416666 3.18056 0.125C3.28241 0.208333 3.34259 0.314815 3.36111 0.444444L3.72222 2.38889C3.74074 2.51852 3.73852 2.63648 3.71556 2.74278C3.69222 2.84944 3.63889 2.94444 3.55556 3.02778L2.22222 4.38889C2.61111 5.05556 3.09722 5.68056 3.68056 6.26389C4.26389 6.84722 4.90741 7.35185 5.61111 7.77778L6.91667 6.47222C7 6.38889 7.10889 6.3263 7.24333 6.28444C7.37741 6.24296 7.50926 6.23148 7.63889 6.25L9.55556 6.63889C9.68519 6.66667 9.79167 6.72907 9.875 6.82611C9.95833 6.92352 10 7.03704 10 7.16667V9.41667C10 9.58333 9.94445 9.72222 9.83333 9.83333C9.72222 9.94445 9.58333 10 9.41667 10Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div>
                        <span>
                            Teléfono
                        </span>
                    </div>
                </div>
                <p>+506 2460 3851</p>
            </div>
            <div class="item_footer py-5">
                <div class="flex items-center gap-1">
                    <div>
                        <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.034 0.741L4.4715 5.179C4.60278 5.31037 4.77812 5.38836 4.96359 5.39787C5.14907 5.40738 5.33147 5.34775 5.4755 5.2305L5.5325 5.179L9.967 0.744C9.9815 0.799 9.991 0.855 9.996 0.9125L10 1V7C10.0001 7.25229 9.9048 7.49528 9.73325 7.68027C9.56171 7.86526 9.32658 7.97858 9.075 7.9975L9 8H1C0.747712 8.00008 0.504717 7.9048 0.319726 7.73325C0.134735 7.56171 0.0214217 7.32658 0.00250006 7.075L0 7V1C0 0.94 0.00499999 0.882 0.015 0.825L0.034 0.741ZM9 0C9.0605 0 9.12 0.00500007 9.1775 0.0155001L9.2625 0.0350001L5.0025 4.295L0.741 0.0339999C0.796 0.0189999 0.853 0.00899995 0.911 0.00399995L1 0H9Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div>
                        <span>
                            E-mail
                        </span>
                    </div>
                </div>
                <p>info@ncq.co.cr</p>
            </div>

            <div class="item_footer py-5">
                <div class="flex items-center gap-1">
                    <div>
                        <svg width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 5.6051C4.80937 5.6051 5.07431 5.49524 5.29481 5.27552C5.51494 5.05617 5.625 4.79236 5.625 4.48408C5.625 4.1758 5.51494 3.9118 5.29481 3.69208C5.07431 3.47273 4.80937 3.36306 4.5 3.36306C4.19063 3.36306 3.92588 3.47273 3.70575 3.69208C3.48525 3.9118 3.375 4.1758 3.375 4.48408C3.375 4.79236 3.48525 5.05617 3.70575 5.27552C3.92588 5.49524 4.19063 5.6051 4.5 5.6051ZM4.5 11C4.425 11 4.35 10.986 4.275 10.958C4.2 10.9299 4.13438 10.8926 4.07812 10.8459C2.70937 9.64077 1.6875 8.52217 1.0125 7.49009C0.3375 6.45763 0 5.49299 0 4.59618C0 3.1949 0.452438 2.07856 1.35731 1.24713C2.26181 0.415711 3.30938 0 4.5 0C5.69063 0 6.73819 0.415711 7.64269 1.24713C8.54756 2.07856 9 3.1949 9 4.59618C9 5.49299 8.6625 6.45763 7.9875 7.49009C7.3125 8.52217 6.29063 9.64077 4.92188 10.8459C4.86562 10.8926 4.8 10.9299 4.725 10.958C4.65 10.986 4.575 11 4.5 11Z"
                                fill="white" />
                        </svg>

                    </div>
                    <div>
                        <span>
                            Dirección
                        </span>
                    </div>
                </div>
                <p>230 mts este de Mayca, Ciudad Quesada. Contiguo al Ministerio de Trabajo, Ciudad Quesada, <br>
                    Alajuela, CR.</p>
            </div>

        </div>



        <div class="footer md:block hidden">
            <div class="flex items-center">
                <div class="m-auto">
                    <img src="<?php echo base_url() ?>public/img/logo_white.png" alt="">
                </div>
                <div class="flex gap-32 m-auto">
                    <div class="item_footer py-5  item_1 relative">
                        <div class="flex items-center gap-1">
                            <div>
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.44444 5C9.2963 5 9.16444 4.94667 9.04889 4.84C8.93296 4.7337 8.86574 4.60185 8.84722 4.44444C8.72685 3.58333 8.36352 2.84944 7.75722 2.24278C7.15056 1.63648 6.41667 1.27315 5.55556 1.15278C5.39815 1.13426 5.2663 1.06944 5.16 0.958333C5.05333 0.847222 5 0.712963 5 0.555556C5 0.398148 5.05556 0.266111 5.16667 0.159444C5.27778 0.0531481 5.40741 0.00925923 5.55556 0.0277778C6.72222 0.157407 7.71759 0.634259 8.54167 1.45833C9.36574 2.28241 9.84259 3.27778 9.97222 4.44444C9.99074 4.59259 9.94667 4.72222 9.84 4.83333C9.7337 4.94444 9.60185 5 9.44444 5ZM7.125 5C7.00463 5 6.89815 4.95833 6.80556 4.875C6.71296 4.79167 6.64352 4.68056 6.59722 4.54167C6.52315 4.27315 6.38204 4.03463 6.17389 3.82611C5.96537 3.61796 5.72685 3.47685 5.45833 3.40278C5.31944 3.35648 5.20833 3.28704 5.125 3.19444C5.04167 3.10185 5 2.99074 5 2.86111C5 2.67593 5.06482 2.52537 5.19445 2.40944C5.32407 2.29389 5.46759 2.25463 5.625 2.29167C6.14352 2.41204 6.59037 2.65963 6.96556 3.03444C7.34037 3.40963 7.58796 3.85648 7.70833 4.375C7.74537 4.53241 7.7037 4.67593 7.58333 4.80556C7.46296 4.93519 7.31019 5 7.125 5ZM9.41667 10C8.22222 10 7.05796 9.7337 5.92389 9.20111C4.78944 8.66889 3.78481 7.96519 2.91 7.09C2.03481 6.21519 1.33111 5.21056 0.798889 4.07611C0.266296 2.94204 0 1.77778 0 0.583333C0 0.416667 0.0555555 0.277778 0.166667 0.166667C0.277778 0.0555555 0.416667 0 0.583333 0H2.83333C2.96296 0 3.0787 0.0416666 3.18056 0.125C3.28241 0.208333 3.34259 0.314815 3.36111 0.444444L3.72222 2.38889C3.74074 2.51852 3.73852 2.63648 3.71556 2.74278C3.69222 2.84944 3.63889 2.94444 3.55556 3.02778L2.22222 4.38889C2.61111 5.05556 3.09722 5.68056 3.68056 6.26389C4.26389 6.84722 4.90741 7.35185 5.61111 7.77778L6.91667 6.47222C7 6.38889 7.10889 6.3263 7.24333 6.28444C7.37741 6.24296 7.50926 6.23148 7.63889 6.25L9.55556 6.63889C9.68519 6.66667 9.79167 6.72907 9.875 6.82611C9.95833 6.92352 10 7.03704 10 7.16667V9.41667C10 9.58333 9.94445 9.72222 9.83333 9.83333C9.72222 9.94445 9.58333 10 9.41667 10Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div>
                                <span>
                                    Teléfono
                                </span>
                            </div>
                        </div>
                        <p>+506 2460 3851</p>
                    </div>
                    <div class="item_footer py-5  item_1 relative">
                        <div class="flex items-center gap-1">
                            <div>
                                <svg width="10" height="8" viewBox="0 0 10 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.034 0.741L4.4715 5.179C4.60278 5.31037 4.77812 5.38836 4.96359 5.39787C5.14907 5.40738 5.33147 5.34775 5.4755 5.2305L5.5325 5.179L9.967 0.744C9.9815 0.799 9.991 0.855 9.996 0.9125L10 1V7C10.0001 7.25229 9.9048 7.49528 9.73325 7.68027C9.56171 7.86526 9.32658 7.97858 9.075 7.9975L9 8H1C0.747712 8.00008 0.504717 7.9048 0.319726 7.73325C0.134735 7.56171 0.0214217 7.32658 0.00250006 7.075L0 7V1C0 0.94 0.00499999 0.882 0.015 0.825L0.034 0.741ZM9 0C9.0605 0 9.12 0.00500007 9.1775 0.0155001L9.2625 0.0350001L5.0025 4.295L0.741 0.0339999C0.796 0.0189999 0.853 0.00899995 0.911 0.00399995L1 0H9Z"
                                        fill="white" />
                                </svg>

                            </div>
                            <div>
                                <span>
                                    E-mail
                                </span>
                            </div>
                        </div>
                        <p>info@ncq.co.cr</p>
                    </div>

                    <div class="item_footer py-5">
                        <div class="flex items-center gap-1">
                            <div>
                                <svg width="9" height="11" viewBox="0 0 9 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.5 5.6051C4.80937 5.6051 5.07431 5.49524 5.29481 5.27552C5.51494 5.05617 5.625 4.79236 5.625 4.48408C5.625 4.1758 5.51494 3.9118 5.29481 3.69208C5.07431 3.47273 4.80937 3.36306 4.5 3.36306C4.19063 3.36306 3.92588 3.47273 3.70575 3.69208C3.48525 3.9118 3.375 4.1758 3.375 4.48408C3.375 4.79236 3.48525 5.05617 3.70575 5.27552C3.92588 5.49524 4.19063 5.6051 4.5 5.6051ZM4.5 11C4.425 11 4.35 10.986 4.275 10.958C4.2 10.9299 4.13438 10.8926 4.07812 10.8459C2.70937 9.64077 1.6875 8.52217 1.0125 7.49009C0.3375 6.45763 0 5.49299 0 4.59618C0 3.1949 0.452438 2.07856 1.35731 1.24713C2.26181 0.415711 3.30938 0 4.5 0C5.69063 0 6.73819 0.415711 7.64269 1.24713C8.54756 2.07856 9 3.1949 9 4.59618C9 5.49299 8.6625 6.45763 7.9875 7.49009C7.3125 8.52217 6.29063 9.64077 4.92188 10.8459C4.86562 10.8926 4.8 10.9299 4.725 10.958C4.65 10.986 4.575 11 4.5 11Z"
                                        fill="white" />
                                </svg>

                            </div>
                            <div>
                                <span>
                                    Dirección
                                </span>
                            </div>
                        </div>
                        <p>230 mts este de Mayca, Ciudad Quesada. Contiguo al Ministerio de Trabajo, Ciudad Quesada,
                            <br>
                            Alajuela, CR.</p>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script type="module">
    var slider = tns({
        container: '#marcas',
        items: 1,
        speed: 800,
        slideBy: 'page',
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            992: {
                disable: true,
            }
        }
    });
    </script>

    <script>
    function openMenu() {
        button = document.getElementById("buton_menu");
        menu = document.getElementById("menu_mobile");
        cerrar = document.getElementById("cerrar");
        contenido = document.getElementById("contenido");

        menu.classList.remove("ocultar");
        cerrar.classList.remove("hidden");
        cerrar.classList.add("block");

        contenido.classList.add("blur_bg");

    }

    function cerrarMenu() {
        button = document.getElementById("buton_menu");

        menu = document.getElementById("menu_mobile");
        cerrar = document.getElementById("cerrar");
        contenido = document.getElementById("contenido");

        menu.classList.add("ocultar");

        cerrar.classList.add("hidden");
        cerrar.classList.remove("block");

        contenido.classList.remove("blur_bg");
    }
    </script>
</body>

</html>