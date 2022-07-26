<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contenido artístico - Expreesivo </title>
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
            height: 100%;
        }
    </style>
</head>
<body>

<?php include_once "includes/nav.php"?>
<main class="page landing-page">
    <section>
        <div class="position-relative" style="background: url(./assets/img/bg-vip.jpg) top center no-repeat;
        background-size: cover; height: 75vh;" >
            <div id="particle-container"></div>
            <div class="container-fluid">
                <div class="container position-relative">
                    <div class="row up-wabe-2">
                        <div class="row m-0 align-items-center mb-5">
                            <div class="col-12  col-sm-12 col-md-6  col-lg-6 order-2 order-md-1 p-0  d-flex justify-content-center justify-content-sm-end ">
                                <div class="imgBx contenedorIMG imagine">
                                    <img class=" m-1 m-md-0 m-xl-5 d-none d-sm-none d-md-block shadow imagenAjustada img" height="550" src="assets/img/vip-sala.jpg" style="border-radius: 2rem; z-index: 1;">
                                </div>
                            </div>
                            <div class="col-12  col-sm-12 col-md-6  col-lg-6  order-1 order-md-2  d-flex flex-column bd-highlight mb-3">
                                <div class="row text-light p-2" style="z-index: 2;">
                                    <div class="col-12 d-block">
                                        <h6><strong>SALA VIP</strong></h6>
                                        <h1 class="pe-5">Reuniones exitosas con equipo de primera</h1>
                                        <p class="py-3">
                                            Un espacio complementario y altamente
                                            equipado para sus eventos empresariales.
                                        </p>
                                        <a  href="contacto.php" type="button" class="btn btn-outline-light">SOLICITE SU COTIZACIÓN</a>

                                    </div>
                                </div>
                                <div class="row row-cols-3 row-cols-md-3 g-3 pt-5">
                                    <div class="col">
                                        <div class="card vip-specific tree" data-bss-hover-animate="pulse">
                                            <img class="img-responsive shadow p-1 p-sm-1 p-md-2 p-xl-3 bg-body vip-specific" src="./assets/img/vip1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card vip-specific tree" data-bss-hover-animate="pulse">
                                            <img class="img-responsive shadow p-1 p-sm-1 p-md-2 p-xl-3 bg-body vip-specific" src="./assets/img/vip2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card vip-specific tree" data-bss-hover-animate="pulse">
                                            <img class="img-responsive shadow p-1 p-sm-1 p-md-2 p-xl-3 bg-body vip-specific" src="./assets/img/vip3.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 " style=" width: 100%; z-index: 1;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L80,202.7C160,181,320,139,480,144C640,149,800,203,960,208C1120,213,1280,171,1360,149.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid position-relative pb-5 mt-5">
            <div class="container mb-5 mt-5">
                <div class="row">
                    <div class="col d-block d-sm-block d-md-none"">
                    <div class="card vip-specific">
                        <img class="img-responsive shadow bg-body vip-specific" src="assets/img/vip-sala.jpg" alt="">
                    </div>
                </div>
                </div>
                <div class="row mt-5">
                    <div class="col-0 col-md-1"></div>
                    <div class="col-12 col-md-7 text-gray">
                        <h4 class="p-5 fw-bold">Equipamiento de la sala</h4>
                        <div class="row fst-normal">
                            <div class="col">
                                <ul class="ms-5">
                                    <li>Capacidad para 18 personas</li>
                                    <li>Equipo de proyección</li>
                                    <li>Equipo para videoconferencias
                                        (cámaras y micrófonos)</li>
                                    <li>3 Pantallas de proyección</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="ms-5">
                                    <li>Impresora láser a color</li>
                                    <li>Aire acondicionado</li>
                                    <li>Tomas eléctricas</li>
                                    <li>Internet de alta velocidad</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col ps-5 pb-5 mt-5">
                                <a href="./contacto.php" class="btn btn-secondary btn-lg" data-bss-hover-animate="pulse" type="submit">
                                    CONTÁCTENOS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-0 col-md-4">
                        <div class="position-relative">
                            <img class="position-absolute computers" src="./assets/img/divices.svg" width="450" alt=""
                                 style="z-index: -1;">
                        </div>
                    </div>
                </div>
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