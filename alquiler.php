<!-- ----- VERSION DEL DOCUMENTO ---------
    VERSION 1.00.0 BUILD 27.06.22
    @autor: ReCkrea StuDios & limonne
    @website: reckreastudios.com
    @webdev: ChrisRCGS & BarbaraB.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenidos - Espressivo </title>
    <?php include_once "includes/header.php"?>
</head>
<body>

<?php include_once "includes/nav.php"?>
<main class="page landing-page">
    <section class="h-75">
        <!-- Start: Parallax Background -->
        <div class="d-flex justify-content-center align-items-center" data-bss-parallax-bg="true"
             style="background: url(./assets/img/banner-alquiler.jpg) center / cover;padding: 81px 1px;padding-top: 5em;padding-bottom: 5em; height: 750px!important;">
            <!-- Start: 1 Row 1 Column -->
            <div class="container">
                <div class="row text-center text-light">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                    <div class="col-10 col-sm-10 col-md-10 col-lg-6 col-xl-6 col-xxl-6">
                        <h5>ALQUILER DE SALA TEATRAL</h5>
                        <p class="mt-3 pe-5 ps-5">
                            Ponemos a su disposición nuestra sala teatral completamente equipada, con
                            capacidad para más de 250 personas para sus eventos presenciales, grabaciones o
                            transmisiones en vivo.
                        </p>
                        <div class="row">
                            <div class="col  mt-5">
                                <button class="btn btn-secondary btn-lg" data-bss-hover-animate="pulse" type="submit">REALICE SU EVENTO CON NOSOTROS</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                </div>
            </div><!-- End: 1 Row 1 Column -->
        </div><!-- End: Parallax Background -->
    </section>
    <section>
        <div class="container">
            <div class="row pt-5">
                <h5 class="text-center">TIPOS DE EVENTOS</h5>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="card mb-4 container" >
                        <div class="row g-0 tipos-card text-light" style="contain: content;">
                            <div class="media-line position-absolute top-50 start-50 translate-middle"></div>
                            <div class="col-md-6 tipos-card-img" style="
                                    background: url(./assets/img/card-tipo1.jpg) bottom / cover no-repeat, rgb(98,112,119);padding: 0;margin: 0;">
                            </div>
                            <div class="col-md-6 bg-blue">
                                <div class="card-body p-5">
                                    <h3 class="card-title ms-5">Eventos presenciales</h3>
                                    <ul class="ms-5">
                                        <li>Conferencias y talleres</li>
                                        <li>Funciones privadas de obras</li>
                                        <li>Capacitaciones</li>
                                        <li>Celebraciones corporativas</li>
                                        <li>Muestras de academias</li>
                                        <li>Graduaciones</li>
                                    </ul>
                                    <button type="button" class="btn btn-outline-light ms-5">CONTÁCTENOS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 container">
                        <div class="row g-0 tipos-card text-light" style="contain: content;">
                            <div class="media-line position-absolute top-50 start-50 translate-middle"></div>
                            <div class="col-md-6 order-2 order-md-1 bg-violet">
                                <div class="card-body p-5">
                                    <h3 class="card-title ms-5">Eventos híbridos</h3>
                                    <ul class="ms-5">
                                        <li>Conferencias y talleres</li>
                                        <li>Webinars</li>
                                        <li>Eventos corporativos</li>
                                        <li>Reuniones corporativas</li>
                                    </ul>
                                    <button type="button" class="btn btn-outline-light ms-5">CONTÁCTENOS</button>
                                </div>
                            </div>
                            <div class="col-md-6 order-1 order-md-2 tipos-card-img" style="
                                    background: url(./assets/img/card-tipo2.jpg) bottom / cover no-repeat, rgb(98,112,119);padding: 0;margin: 0;">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 container" >
                        <div class="row g-0 tipos-card text-light" style="contain: content;">
                            <div class="media-line position-absolute top-50 start-50 translate-middle"></div>
                            <div class="col-md-6 tipos-card-img" style="
                                    background: url(./assets/img/cart-tipo3.jpg) bottom / cover no-repeat, rgb(98,112,119);padding: 0;margin: 0;">
                            </div>
                            <div class="col-md-6 bg-secondary">
                                <div class="card-body p-5">
                                    <h3 class="card-title ms-5"> Reuniones corporativas</h3>
                                    <ul class="ms-5">
                                        <li>Obras de teatro transmitidas en vivo</li>
                                        <li>Conferencias y webinars</li>
                                        <li>Celebraciones de Aniversario o fin de año</li>
                                        <li>Grabaciones</li>
                                    </ul>
                                    <button type="button" class="btn btn-outline-light ms-5">CONTÁCTENOS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 container" >
                        <div class="row g-0 text-gray tipo-benn py-5  d-flex text-center justify-content-center align-items-center">
                            <div class="col">
                                <h6 class="text-center">COMPLEMENTE SU EVENTO CON</h6>
                                <h1>Contenido artístico</h1>
                                <img src="./assets/img/action.svg" alt=""><br>
                                <a href="#" class=" text-danger">Conozca más </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-flex text-center justify-content-center align-items-center">
                    <h1 class="text-center text-secondary"><strong>Sobre la sala teatral</strong></h1>
                    <button type="button" class="btn btn-outline-secondary w-auto py-3">CONOZCA NUESTRO TEATRO</button>
            </div>
        </div>
    </section>
</main>
<?php include_once "includes/footer.php"?>
</body>
<?php include_once "includes/js.php"?>
</html>