<?php
require_once("header.php");
$ruta="http://localhost/cambios/web2020/";
$ruta="https://jasycambios.variablet.com/";
?>
<div id="home-slider" class="row">
    <div class="col-md-12 text-center banner-contacto">
        <h2 class="text-white">Contacto</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <form action="<?php echo $ruta; ?>send" class="col-md-12" method="post">
                    <h4>Hable Con Nosotros</h4>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="ciudad" id="ciudad" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="asunto" id="asunto" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="4" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            <input name="newsletter" id="newsletter" type="checkbox" checked>
                            Me gustaría recibir novedades de Jasy Cambios
                        </label>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <button class="btn btn-contacto">Enviar Contacto</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4>Jasy Cambios</h4>
                <p>Monseñor Rodriguez esq. Pampliega CIudad del Este, Paraguay<br>
                    E-mail: <a href="mailto:contacto@zafracambios.com.py">contacto@zafracambios.com.py</a>
                </p>
                <hr>
                <h4>Siganos</h4>
                <p>
                    <a href="https://www.facebook.com/Zafra-cambios-364021890736692/" target="_blank">
                        <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <a href="https://instagram.com/zafracambios/" target="_blank">
                        <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </p>

            </div>
        </div>
    </div>
</div>

<?php
require_once("footer.php");
