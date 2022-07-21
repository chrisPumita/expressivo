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
                                        <button type="button" class="btn btn-outline-light">SOLICITE SU COTIZACIÓN</button>

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
                                <button class="btn btn-secondary btn-lg" data-bss-hover-animate="pulse" type="submit">
                                    CONTÁCTENOS</button>
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
<script>
    /* ---- particles.js config ---- */

    particlesJS("particle-container", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 1000
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#FFFFFF"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 200,
                    "height": 200
                }
            },
            "opacity": {
                "value": 0.1,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 20,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 10,
                    "size_min": 0.1,
                    "sync": true
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
</html>