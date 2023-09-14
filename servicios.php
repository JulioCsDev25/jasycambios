<?php
require_once("header.php");

$sql="SELECT * FROM sucursales WHERE MOSTRAR = 'SI'";
$sucursal = $db->extraer($sql);
$sql="SELECT * FROM empresa WHERE id=1";
$empresa = $db->extraer($sql);
?>
    <div id="nosotros-slider" class="servicios">
        <div class="row">
          <div class="container" style="margin-top: 50px;">
            <h1 class="center negro">Nuestros Servicios</h1>
            <p style="text-align:center;"> Nos enfocamos en brindar el mejor servicio a nuestros clientes. </p>           
            <div class="row">
                <div class="col-md-3 col-12 text-justify">
                    <img src="<?php echo $ruta; ?>assets/img/service-1.jpg" class="image_servicios img-responsive">
                </div>
                <div class="col-md-9 col-12 text-justify">
                    <br>                    
                    <h2 class="text-justify">Compra y Venta de Monedas Extranjeras.</h2>
                    <hr>
                    <p>Seguridad en la operación al evitar el riesgo de recibir billetes falsos, tan frecuente en operaciones callejeras.</p>
                    <p>Facilidad de ordenar el cargo/abono a una cuenta, por el importe de la operación.</p>                    
                </div>
            </div>
            <br>
            <br>
          </div>
        </div>
    </div>
    <div class="separador">
    </div>
    <div class="servicios">
        <div class="row">
          <div class="container">                      
            <div class="row">
                <div class="col-md-3 col-12 text-justify">
                    <img src="<?php echo $ruta; ?>assets/img/service-2.jpg" class="image_servicios img-responsive">
                </div>
                <div class="col-md-9 col-12 text-justify">
                    <br>                    
                    <h2 class="text-justify">Emision y Recepción de Ordenes de Pago.</h2>
                    <hr>
                    <p>Es una una instrucción entregada por un cliente u ordenante a su banco para que pague una cierta suma de dinero a favor de un tercero o beneficiario en el extranjero.</p>
                    <p>Se puede utilizar para cualquiera de estos fines (entre otros): Antes de la recepción de la mercancía, simultáneamente a la recepción de la mercancía, posterior a la recepción de la mercancía y para fines personales.</p>                    
                    <p>El uso de este medio de pago esta determinado por la confianza entre el ordénate y su beneficiario.</p>
                </div>                
            </div>
            <br>
            <br>
          </div>
        </div>
    </div>
    <div class="separador">
    </div>  
      
    <div style="clear:both;"></div>
      <?php
      require_once("footer.php");