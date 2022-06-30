<!-- ----- VERSION DEL DOCUMENTO ---------
    VERSION 1.00.0 BUILD 27.06.22
    @autor: ReCkrea StuDios & limonne
    @website: reckreastudios.com
    @webdev: ChrisRCGS & BarbaraB.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contenido artístico - Expreesivo </title>
    <?php include_once "includes/header.php"?>
</head>
<body>

<?php include_once "includes/nav.php"?>
<main class="page landing-page">
    <section>
        <div class="position-relative" style="background: url(./assets/img/bg-vip.jpg) top center no-repeat;background-size: cover; height: 75vh;">
            <div class="position-absolute bottom-0 " style=" width: 100%; z-index: 1;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L80,202.7C160,181,320,139,480,144C640,149,800,203,960,208C1120,213,1280,171,1360,149.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        </div>
    </section>
    <section>
        <div class="container up-wabe-2">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 position-relative d-flex justify-content-center imagine">
                    <img class=" m-5" width="400" src="assets/img/vip-sala.jpg" style="border-radius: 2rem; z-index: 99;">
                </div>
                <div class="col-md-6 align-center d-flex ">
                    <div class="text-light" style="padding: 2em;margin-top: 0rem; border-radius: 2rem; z-index: 2;">
                        <div class="row d-block">
                            <div class="row">
                                <h6><strong>SALA VIP</strong></h6>
                                <h1 class="pe-5">Reuniones
                                    exitosas
                                    con equipo
                                    de primera</h1>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="py-3">
                                        Un espacio complementario y altamente
                                        equipado para sus eventos empresariales.
                                    </p>
                                    <button type="button" class="btn btn-outline-light">SOLICITE SU COTIZACIÓN</button>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-12 col-md-4" >
                                    <img class="img-responsive shadow p-3 mb-5 bg-body vip-specific" src="./assets/img/vip1.svg" alt="">
                                </div>
                                <div class="col-12 col-md-4" >
                                    <img class="img-responsive shadow p-3 mb-5 bg-body vip-specific" src="./assets/img/vip2.svg" alt="">
                                </div>
                                <div class="col-12 col-md-4" >
                                    <img class="img-responsive shadow p-3 mb-5 bg-body vip-specific" src="./assets/img/vip3.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid position-relative pb-5">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-0 col-md-1"></div>
                    <div class="col-12 col-md-7">
                        <h1 class="p-5">Equipamiento de la sala</h1>
                        <div class="row">
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
                                <button class="btn btn-secondary btn-lg" data-bss-hover-animate="pulse" type="submit">
                                    CONTÁCTENOS</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-0 col-md-4">
                        <div class="position-relative">
                            <img class="position-absolute computers" src="./assets/img/divices.svg" width="450" alt="">
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
</html>