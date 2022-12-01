<!-- ----- VERSION DEL DOCUMENTO ---------
    VERSION 1.00.0 BUILD 25.07.22
    @autor: ReCkrea StuDios & limonne
    @website: reckreastudios.com
    @webdev: ChrisRCGS & BarbaraB.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenidos - Espressivo </title>
    <?php include_once "includes/header.php"?>
    <style>
        canvas {
            display: block;
            vertical-align: bottom;
        }
        /* Particle container. */
        #particle-container {
            position: absolute;
            width: 100%;
        }
    </style>
</head>
<body>

<?php include_once "includes/nav.php"?>
    <main class="page landing-page">
        <section>
            <div class="container-fluid" style="padding: 0;margin: 0;">
                <div class="row" style="margin: 0;">
                    <div class="col" style="margin: 0px;padding: 0px;">
                        <!-- Start: Simple Slider -->
                        <div class="simple-slider">
                            <!-- Start: Slideshow -->
                            <div class="swiper-container" style="height: 60vh">
                                <!-- Start: Slide Wrapper -->
                                <div class="d-xl-flex align-items-xl-center swiper-wrapper">
                                    <!-- Start: Slide -->
                                    <div class="swiper-slide"
                                         style="background:  url(assets/img/banner1.jpg) top / cover no-repeat;">
                                        <!-- Start: Highlight Clean -->
                                        <div class="text-center d-flex justify-content-center align-items-center highlight-clean"
                                             data-aos="fade"
                                             style="border-style: none;background: rgba(0,0,0,0.1);height: 100%;">
                                            <div>
                                                <!-- Start: Intro -->
                                                <div class="intro">
                                                    <h1 class="text-center text-light mb-3" style="font-weight: bold;">
                                                        Realice eventos <br>
                                                        y espectáculos <br>
                                                        <span class="text-secondary">memorables.</span></h1>
                                                    <a href="./contacto.php" class="btn btn-secondary btn-lg fs-6 fw-bold" data-bss-hover-animate="pulse" type="submit">COTICE SU EVENTO</a>
                                                </div><!-- End: Intro -->
                                            </div>
                                        </div><!-- End: Highlight Clean -->
                                    </div><!-- End: Slide -->
                                    <!-- Start: Slide -->
                                    <div class="swiper-slide"
                                         style="background:  url(assets/img/banner-2.jpg) center / cover no-repeat;">
                                        <!-- Start: Highlight Clean -->
                                        <div class="text-center d-flex justify-content-center align-items-center highlight-clean"
                                             data-aos="fade"
                                             style="border-style: none;background: rgba(0,0,0,0.1);height: 100%;">
                                            <div>
                                                <!-- Start: Intro -->
                                                <div class="intro">
                                                    <h1 class="text-center text-light mb-3" style="font-weight: bold;">
                                                        <span class="text-secondary">Su evento es el protagonista</span>
                                                        <br>
                                                        en nuestro escenario.</h1>
                                                    <a href="contacto.php" class="btn btn-secondary  btn-lg fs-6 fw-bold" data-bss-hover-animate="pulse" type="submit"
                                                            style="">COTICE SU EVENTO</a>
                                                </div><!-- End: Intro -->
                                            </div>
                                        </div><!-- End: Highlight Clean -->
                                    </div><!-- End: Slide -->
                                    <!-- Start: Slide -->
                                    <div class="swiper-slide"
                                         style="background:  url(assets/img/banner-3.jpg) center / cover no-repeat;">
                                        <!-- Start: Highlight Clean -->
                                        <div class="text-center d-flex justify-content-center align-items-center highlight-clean"
                                             data-aos="fade"
                                             style="border-style: none;background: rgba(0,0,0,0.1);height: 100%;">
                                            <div>
                                                <!-- Start: Intro -->
                                                <div class="intro">
                                                    <h1 class="text-center text-light mb-3" style="font-weight: bold;">
                                                        Un espacio que <br>se adapta a
                                                        <span class="text-secondary">todo.</span></h1>
                                                    <a href="contacto.php" class="btn btn-secondary  btn-lg fs-6 fw-bold" data-bss-hover-animate="pulse" type="submit"
                                                       style="">COTICE SU EVENTO</a>
                                                </div><!-- End: Intro -->
                                            </div>
                                        </div><!-- End: Highlight Clean -->
                                    </div><!-- End: Slide -->
                                </div><!-- End: Slide Wrapper -->
                                <!-- Start: Pagination -->
                                <div class="swiper-pagination"></div><!-- End: Pagination -->
                                <!-- Start: Previous -->
                                <div class="swiper-button-prev" style="color: var(--bs-white);z-index: 99;"></div>
                                <!-- End: Previous -->
                                <!-- Start: Next -->
                                <div class="swiper-button-next" style="color: var(--bs-white);z-index: 99;"></div>
                                <!-- End: Next -->
                            </div><!-- End: Slideshow -->
                        </div><!-- End: Simple Slider -->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                    <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 col-xxl-6 text-gray my-5">
                        <img class="w-100" src="./assets/img/logos_grey.svg" alt="Logos eventos">
                    </div>
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <hr class="line-divisor">
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col d-flex align-content-center justify-content-center">

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                    <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 col-xxl-6 text-gray">
                        <img class="w-75" src="./assets/img/logo.svg" alt="Logos eventos">
                    </div>
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                </div>
                <div class="row text-center mb-5">
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                    <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 col-xxl-6 text-gray">
                        <h5 class="lh-sm my-5">EVENTOS IMPECABLES</h5>
                        <p class="mt-3 px-1 px-sm-2 lh-sm">
                            Con más de <strong>20 años de experiencia en producción escénica y de eventos</strong>, en
                            Teatro Espressivo le presentamos: <strong class="text-secondary">Espressivo Events</strong>. La solución todo en uno para
                            sus eventos corporativos, educativos o artísticos. Usamos nuestra expeticia para
                            desarrollar eventos impecables con un toque característico de arte y creatividad.
                        </p>
                    </div>
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                </div>
            </div>
        </section>
        <section>
            <!-- Start: Parallax Background -->
            <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" data-bss-parallax-bg="true"
                 style="background: url(./assets/img/parallax-home.jpg) center / cover;padding: 81px 1px;padding-top: 5em;padding-bottom: 5em;">
                <div id="particle-container"></div>
                <!-- Start: 1 Row 1 Column -->
                <div class="container" style="z-index: 99;">
                    <div class="row text-center text-light">
                        <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 col-xxl-6">
                            <h5 class="fw-bold lh-base">TIPOS DE EVENTOS</h5>
                            <p class="mt-3 px-1 lh-sm">
                                Ofrecemos asesoría personalizada, un espacio amplio completamente equipado y
                                personal altamente capacitado para realizar actividades y eventos espectaculares de
                                forma presencial, híbrida o completamente digital. Usted decide.
                            </p>
                            <a href="./alquiler.php" class=" text-light text-decoration-underline">Conozca más » </a>
                            <div class="row row-cols-1 row-cols-md-3 g-4 my-5 mx-3 m-sm-0">
                                <div class="col" data-bss-hover-animate="pulse">
                                    <div class="row position-relative epresencial">
                                        <div class="position-absolute bottom-0">
                                            <div class="text-center pb-2 pe-4 ps-4 ">
                                                <h5 class="text-light text-center fw-bold events-example">Eventos
                                                    presenciales</h5>
                                            </div>
                                        </div>
                                        <img src="./assets/img/card1.svg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col"  data-bss-hover-animate="pulse">
                                    <div class="row position-relative ehibrido">
                                        <div class="position-absolute bottom-0">
                                            <div class="text-center pb-2 pe-4 ps-4">
                                                <h5 class="text-light text-center fw-bold  events-example">Eventos
                                                    híbridos</h5>
                                            </div>
                                        </div>
                                        <img src="./assets/img/card2.svg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col"  data-bss-hover-animate="pulse">
                                    <div class="row position-relative edigital">
                                        <div class="position-absolute bottom-0">
                                            <div class="text-center pb-2 pe-4 ps-4">
                                                <h5 class="text-light text-center fw-bold  events-example">Eventos digitales</h5>
                                            </div>
                                        </div>
                                        <img src="./assets/img/card3.svg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col  mt-5">
                                    <a href="./contacto.php" class="btn btn-secondary btn-lg" data-bss-hover-animate="pulse" type="submit">REALICE SU EVENTO CON NOSOTROS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                    </div>
                </div><!-- End: 1 Row 1 Column -->
            </div><!-- End: Parallax Background -->
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center mt-5 mb-5">
                    <div class="col-md-6 position-relative d-flex justify-content-center imagine">
                        <img class="mt-5 you-imagine" src="assets/img/our-service.jpg" style="border-radius: 2rem;">
                        <div class="float-card text-violet">
                            <div class="text-center pb-1 pe-4 ps-4">
                                <h3 class=" text-start pt-3">Usted imagine,<br>
                                    nosotros lo hacemos <br>
                                    <strong> realidad</strong>.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-end order-2">
                        <div class="bg-grey"
                             style="background:var(--grey);padding: 2em;margin-top: 2rem; border-radius: 2rem; max-width: 30rem;">
                            <div class="row d-block p-1 p-sm-3 p-xl-5 text-gray">
                                <div class="row text-center">
                                    <h6 class="fw-bold">CONTENIDO PERSONALIZADO</h6>
                                </div>
                                <div class="row">
                                    <h1 class="text-secondary fw-bold">Nuestro arte y creatividad
                                        <span class="text-violet">a su servicio </span></h1>
                                </div>
                                <div class="row">
                                    <p class="">
                                        Complemente sus eventos con
                                        <strong>espectáculos de nuestro catálogo o
                                        con shows creados a su medida</strong>.
                                        Desarrollamos el guión creativo de
                                        acuerdo a sus objetivos empresariales
                                        o institucionales para que su evento
                                        sea una <strong>experiencia inigualable</strong> .
                                    </p>
                                    <a href="./alquiler.php" class=" text-violet">Conozca más »</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="container mt-5">
            <div class="container pt-5">
                <div class="row text-center mt-5">
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                    <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 col-xxl-6 text-gray">
                        <h2 class="text-secondary"><strong>Facilidades para usted</strong></h2>
                        <h6>CONFIANDO EN ESPRESSIVO EVENTS</h6>
                        <div class="row row-cols-2 row-cols-md-3 g-4 mt-3">
                            <div class="col">
                                <div class="card text-white facilidad">
                                  <img src="./assets/img/bg-blue.svg" class="card-img easy-card" alt="...">
                                  <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                                      <p class="text-light fs-5 lh-sm">
                                          Espacio para <br>
                                          <span class="fs-3"><strong>+250</strong></span> <br>
                                          personas
                                      </p>
                                  </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white facilidad">
                                    <a href="https://www.espressivo.cr/events/alimentacion.php"><img src="./assets/img/bg-pink.svg" class="card-img easy-card" alt="..."></a>
                                    <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                                        <h6 class="text-light fs-5 lh-sm">
                                            Opciones de  alimentación  y snacks
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white facilidad">
                                    <img src="./assets/img/bg-blue.svg" class="card-img easy-card" alt="...">
                                    <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                                        <div>
                                            <p class="text-light fs-6 lh-sm mb-0">
                                                Luces y sonido profesional
                                            </p>
                                            <img src="./assets/img/luces.svg" width="75" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white facilidad">
                                    <img src="./assets/img/bg-pink.svg" class="card-img easy-card" alt="...">
                                    <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                                        <div>
                                            <p class="text-light fs-5 lh-sm mb-0">
                                                Boletería en línea
                                            </p>
                                            <img src="./assets/img/boleteria.svg" width="75" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white facilidad">
                                    <img src="./assets/img/bg-violet.svg" class="card-img easy-card" alt="...">
                                    <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                                        <p class="text-light fs-5 lh-sm">
                                            Parqueo<br>
                                            <span class="fs-4"><strong>GRATUITO</strong></span> <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white facilidad">
                                    <img src="./assets/img/bg-orange.svg" class="card-img easy-card" alt="...">
                                    <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                                        <h6 class="text-light fs-5 lh-sm">
                                            Internet
                                            simétrico
                                            de alta
                                            velocidad</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col  mt-5 mb-5">
                                <a href="./contacto.php" class="btn btn-secondary btn-lg" data-bss-hover-animate="pulse" type="submit">REALICE SU EVENTO CON NOSOTROS</a>
                            </div>
                            <a href="./alquiler.php" class=" text-violet">Conozca más detalles»</a>
                        </div>
                        <!--
                        <div class="row mt-5">
                            <a href="#" class=" text-secondary small">Descarga el documento con todas las ventajas técnicas</a>
                        </div>
                        -->
                    </div>
                    <div class="col-0 col-sm-1 col-md-1 col-lg-3 col-xl-3 col-xxl-3"></div>
                </div>
            </div>
        </section>

    </main>
<?php include_once "includes/footer.php"?>
</body>
<?php include_once "includes/js.php"?>
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/my-particles.js"></script>

</html>