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
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>

<?php include_once "includes/nav.php"?>
<main class="page landing-page">
    <section class="h-75">
        <!-- Start: Parallax Background -->
        <div class="d-flex justify-content-center align-items-center" data-bss-parallax-bg="true"
             style="background: url(./assets/img/contact-header.jpg) center / cover;
             padding: 81px 1px;padding-top: 5em;padding-bottom: 5em; height: 40vh!important;">
            <!-- Start: 1 Row 1 Column -->
            <div class="container">
                <div class="row text-center text-light d-flex align-items-center">
                    <div class="col-12  col-sm-12  col-md-6  col-lg-7">
                        <img class="w-100" src="./assets/img/logos-negative.svg" alt="Logos eventos">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="intro">
                            <h1 class="text-center text-md-start text-light mb-3" style="font-weight: bold;">
                                Somos expertos  en provocar  aplausos
                                <span class="text-secondary">.</span></h1>
                        </div>
                    </div>
                </div>
            </div><!-- End: 1 Row 1 Column -->
        </div><!-- End: Parallax Background -->
    </section>
    <section>
        <div class="container mt-5 py-5">
            <div class="container justify-content-center align-items-center">
                <div class="row container-headers py-5">
                    <div class="col-12 col-md-6">
                        <h2 class="text-primary py-3 fw-bold text-secondary">Contáctenos</h2>
                        <p class="text-texto py-3 text-gray"">
                        Háblenos de su proyecto o idea y nuestro equipo
                        especializado se pondrá en contacto con usted para
                        brindarle la información que necesite.
                        </p>
                        <div class="row pt-5">
                            <div class="col">
                                <form class="my-form" id="frm-contacto">
                                    <ul class="ps-0">
                                        <li>
                                            <div class="grid grid-1">
                                                <input class="form-input" type="email" id="email" name="email" placeholder="Correo electrónico*" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grid grid-1">
                                                <input class="form-input" type="text" id="name" name="name" placeholder="Nombre y apellido*" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grid grid-1">
                                                <input class="form-input" type="text" id="institucion" name="institucion" placeholder="Empresa o institución*" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grid grid-1">
                                                <input class="form-input" type="tel" id="telefono" name="telefono" placeholder="Teléfono*" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grid grid-1">
                                                <input class="form-input" type="tel" id="telefono2" name="telefono2" placeholder="Teléfono 2 (opcional)">
                                            </div>
                                        </li>
                                        <li>
                                            <label for="pais" class="form-label text-grey">Servicio de interés:</label>
                                            <div class="form-check">
                                                <input class="form-input" class="form-check-input" type="checkbox" value="" id="option_1">
                                                <label class="form-check-label" for="option_1">
                                                    Alquiler de sala teatral
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-input" class="form-check-input" type="checkbox" value="" id="option_2">
                                                <label class="form-check-label" for="option_2">
                                                    Espectáculos y contenido artístico
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="option_3">
                                                <label class="form-check-label" for="option_3">
                                                    Sala VIP para reuniones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="option_4">
                                                <label class="form-check-label" for="option_4">
                                                    Servicios de alimentación
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="option_5">
                                                <label class="form-check-label" for="option_5">
                                                    Otro
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <textarea name="comentario" id="comentario"  placeholder="Comentarios (opcional)"></textarea>
                                        </li>
                                        <li>
                                            <input class="tems" type="checkbox" id="terms" required>
                                            <label for="terms" class="form-label text-grey">He leído y acepto
                                                <a class="text-link" href=""  data-bs-toggle="modal" data-bs-target="#modal-terms">términos y condiciones.</a>
                                            </label>
                                        </li>
                                        <li>
                                            <div class="grid grid-3" >
                                                <div class="required-msg">Requerido</div>
                                                <button class="btn btn-grid bg-primary text-light" type="submit" disabled>
                                                <span class="back">
                                                    <i class="fas fa-paper-plane"></i>
                                                </span>
                                                    <span class="front">Enviar</span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                                <span id="actionSend" ></span>
                            </div>
                        </div>
                    </div>
                    <div  class="col-12 col-md-6 p-5">
                        <p class="text-texto py-3 m-sm-5 text-gray"">
                        También puede contactarnos directamente
                        en nuestros canales adicionales.
                        </p>
                        <div class="col m-auto text-center py-sm-5">
                            <div class="row">
                                <!-- 50663609158 -->
                                <a href="https://api.whatsapp.com/send?phone=50663609158" target="_blank">
                                    <button class="learn-more mt-5">
                                    <span class="circle whatsapp-btn" aria-hidden="true">
                                        <span class="icon arrow"></span>
                                    </span>
                                        <span class="button-text"> <i class="fab fa-whatsapp"></i> &nbsp;WhatsApp Bussines</span>
                                    </button>
                                </a>
                                <p class="ms-2 py-3 pb-5 text-gray"">
                                T. (+506) 6360 9158
                                </p>
                            </div>
                            <div class="row">
                                <a href="mailto:ventas@espressivo.cr">
                                    <button class="learn-more mt-5">
                                        <span class="circle mail-btn" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text"><i class="far fa-envelope"></i>&nbsp;e-mail</span>
                                    </button>
                                </a>
                                <p class="ms-2 py-3 pb-5 text-gray"">
                                ventas@espressivo.cr
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include_once "includes/footer.php"?>
</body>

<script type="text/javascript">
    const checkbox = document.querySelector('.my-form .tems');
    const btns = document.querySelectorAll(".my-form button");

    checkbox.addEventListener("change", function() {
        const checked = this.checked;
        for (const btn of btns) {
            checked ? (btn.disabled = false) : (btn.disabled = true);
        }
    });

</script>
<?php include_once "includes/js.php"?>
</html>