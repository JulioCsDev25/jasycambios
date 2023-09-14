<?php
include('../boot/dbconfig.php');
include_once('../boot/mysql.php');

$db = new mysql_class();
$db->connDb($VAR_DB, $VAR_USERDB, $VAR_PASSDB, $VAR_HOST);
$ruta="http://localhost/cambios/web2020/";
$ruta="https://www.yrendague.com.py/";
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" sizes="16x16" href="<?php echo $ruta; ?>assets/img/favicon.ico">
      <link href="<?php echo $ruta; ?>assets/css/bootstrap.min.css" rel="stylesheet">
      <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">-->      
      <!--[if IE 8]>
          <link href="<?php echo $ruta; ?>assets/css/ie8.css" rel="stylesheet" type="text/css" />
          <link href="ambientes/jquery.galereya.ie.css" rel="stylesheet" >
      <![endif]-->
      <title>Cambios Yrendague S.A. - Quote of currencies: Dollar, Euro, Real</title>
        <meta name="description" content="The best service in buying and selling currencies, safety deposit boxes, import payments, currency converter, historical data and graphics.">
        <meta name="keywords" content="Quotation of the dollar in Paraguay, Paraguayan dollar, changes, yrendague, price of the Paraguayan dollar, price of the Paraguayan euro, price of the Paraguayan dollar, py dollar, Paraguay dollar, today's dollar in Paraguay, dollar in Ciudad del Este, dollar in Asuncion, Ciudad del dollar this, dollar asuncion, dollar yrendague, price, dollar">            
      <meta name="viewport" content="width=700, initial-scale=1, maximum-scale=1">
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ae6b69a2-74c4-4b12-a5b3-0c6f5b81f4c9";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161440115-1"></script>
    </head>
    <body>
        
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-161440115-1');
    </script>
      <header>
        <div class="header-bar">
                  <div class="container">
                    <div class="row">
                      <?php
                        $sql="SELECT * FROM info WHERE id=1";
                        $info = $db->extraer($sql);
                      ?>
                      <div class="col-sm-6">
                        <ul class="list-header-bar">
                          <li><i class="fa fa-phone"></i> Matriz <strong>+595 61 514 920</strong></li>
                          <li class="mw-180"><a id="contacto" data-toggle="modal" data-target="#contactoModal" href="javascript:void(0);"><i class="fa fa-envelope"></i> <b>Enviar E-Mail</b></a></li>
                        </ul>                        
                      </div>
                      <div class="col-sm-6">  
                        <ul class="list-header-bar right">
                          <li><a href="<?php echo $ruta; ?>cotizaciones/en/"><b>Ingles</b></a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>cotizaciones/">Español</a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>cotizaciones/pt/">Portugues</a></li>
                        </ul>    
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="header-main">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div id="menuzord2" class="menuzord menuzord-home menuzord-responsive">
                          <a href="<?php echo $ruta; ?>" class="menuzord-brand"><img data-src="<?php echo $ruta; ?>assets/img/logo.png" class="lazyload" alt="Logo Yrendague"></a>
                          <ul class="menuzord-menu menuzord-right menuzord-indented" style="">
                            <li><a href="<?php echo $ruta; ?>en/">Home</a></li>
                            <li><a href="<?php echo $ruta; ?>nosotros/en/">Who are we?</a></li>                    
                            <li><a href="<?php echo $ruta; ?>cotizaciones/en/">Quotes</a></li>
                            <li><a href="<?php echo $ruta; ?>servicios/en/">Our services</a></li>
                            <li><a href="<?php echo $ruta; ?>cumplimiento/en/">Compliance</a></li>
                            <li><a href="<?php echo $ruta; ?>sucursales/en/">Our agencies</a></li>
                            <li><a href="https://www.facebook.com/yrendaguecambios"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href="https://www.instagram.com/yrendaguecambios"><i class="fa fa-instagram fa-lg"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>          
<?php
$sql="SELECT * FROM sucursales WHERE MOSTRAR = 'SI'";
$sucursal = $db->extraer($sql);
$sql="SELECT * FROM empresa WHERE id=1";
$empresa = $db->extraer($sql);
          
$arr = explode("-",$sucursal[0]['DETALLE_SUCURSAL']);
$tit1 = utf8_encode($arr[1]);
$arr = explode("-",$sucursal[1]['DETALLE_SUCURSAL']);
$tit2 = utf8_encode($arr[1]);
$arr = explode("-",$sucursal[2]['DETALLE_SUCURSAL']);
$tit3 = utf8_encode($arr[1]);
$arr = explode("-",$sucursal[3]['DETALLE_SUCURSAL']);
$tit4 = utf8_encode($arr[1]);
$arr = explode("-",$sucursal[4]['DETALLE_SUCURSAL']);
$tit5 = utf8_encode($arr[1]);
$arr = explode("-",$sucursal[5]['DETALLE_SUCURSAL']);
$tit6 = utf8_encode($arr[1]);
$arr = explode("-",$sucursal[6]['DETALLE_SUCURSAL']);
$tit6 = utf8_encode($arr[1]);
?>        
      </header>
        <?php 
            $fecha_actual = date("d-m-Y");            
            $fecha = date("Y-m-d",strtotime($fecha_actual."- 7 days")); 
            $sql="SELECT * FROM cotizacion WHERE fecha > '$fecha 00:00:00' AND id_moneda=1 AND id_sucursal=1 GROUP BY DAY(fecha) ";
            $cotizaciones = $db->extraer($sql);
            $sql="SELECT * FROM arbitraje WHERE fecha > '$fecha 00:00:00' AND id_moneda=5 AND id_sucursal=1 GROUP BY DAY(fecha) ";
            $dolarreal =$db->extraer($sql);
      ?>
      <div id="hm-depoimentos" class="cotizaciones">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
                <br><br>
                <h1 class="center">QUOTES HISTORY</h1>
                <br><br>
                <div class="col-md-12 col-sm-12 col-12">
                    <center>
                        <?php
                        $fecha_actual = date("d/m/Y");
                        $fecha = date("Y-m-d");
                        $fecha = date("d/m/Y",strtotime($fecha."- 7 days")); 
                        ?>
                        <input type="text" class="form-control fecha" id="fecha_desde" name="fecha_desde" value="<?php echo $fecha; ?>">
                        <input type="text" class="form-control fecha" id="fecha_hasta" name="fecha_hasta" value="<?php echo $fecha_actual; ?>">
                        <select class="form-control" name="grafico" id="grafico">                            
                            <option value="1">USD x PYG</option>
                            <option value="2">BRL x PYG</option>
                            <option value="3">ARS x PYG</option>
                            <option value="4">EUR x PYG</option>
                            <option value="5">USD x BRL</option>
                            <option value="6">USD x ARS</option>
                            <option value="7">EUR x BRL</option>
                            <option value="8">ARS x BRL</option>
                            <option value="9">EUR x USD</option>      
                        </select>
                        <input type="submit" class="form-control" value="Consult" onclick="cargar_torneos();">
                    </center>
                </div>
                <div class="col-md-12 oculta-mobil">                    
                    <canvas id="Grafica" style="width:100%;height:300px;"></canvas>
                    <br><br>
                </div>                                    
            </div>            
            <div class="col-sm-12">                
                <br><br>
                <h1 class="center">INSERT INTO WEB PAGE</h1>
                <br><br>
                <div class="mw-360 col-md-4 col-sm-12 col-xs-12">
                    <!--<iframe src="<?php echo $ruta; ?>tabla_total/"></iframe>-->
                   <iframe src="<?php echo $ruta; ?>tabla_total/en/" width="360" border height="490" style="overflow:hidden;" frameborder="0"></iframe>
                    <label class="copiar" onclick="copyToClipboard(document.getElementById('ins_total'));">Copy</label>
                    <textarea rows="4" style="margin-top:5px;width:360px;font-size:12px;" name="ins_total" id="ins_total">&lt;iframe src=&quot;<?php echo $ruta; ?>tabla_total/en/&quot; width=&quot;360"&quot; border height=&quot;490&quot; style=&quot;overflow:hidden;&quot; frameborder=&quot;0&quot;&gt;&lambda;/iframe&gt;</textarea>
                </div>
                <div class="mw-360 col-md-4 col-sm-12 col-xs-12">
                    <iframe src="<?php echo $ruta; ?>tabla_cotiza/en/" width="360" border height="300" style="overflow:hidden;" frameborder="0"></iframe>
                    <label class="copiar" onclick="copyToClipboard(document.getElementById('ins_cotiza'));">Copy</label>
                    <textarea rows="4" style="margin-top:5px;width:360px;font-size:12px;" name="ins_cotiza" id="ins_cotiza">&lt;iframe src=&quot;<?php echo $ruta; ?>tabla_cotiza/en/&quot; width=&quot;360"&quot; border height=&quot;300&quot; style=&quot;overflow:hidden;&quot; frameborder=&quot;0&quot;&gt;&lambda;/iframe&gt;</textarea>
                </div>
                <div class="mw-360 col-md-4 col-sm-12 col-xs-12">
                    <iframe src="<?php echo $ruta; ?>tabla_arbitraje/en/" width="360" border height="340" style="overflow:hidden;" frameborder="0"></iframe>
                    <label class="copiar" onclick="copyToClipboard(document.getElementById('ins_arbitraje'));">Copy</label>
                    <textarea rows="4" style="margin-top:5px;width:360px;font-size:12px;" name="ins_arbitraje" id="ins_arbitraje">&lt;iframe src=&quot;<?php echo $ruta; ?>tabla_arbitraje/en/&quot; width=&quot;360"&quot; border height=&quot;340&quot; style=&quot;overflow:hidden;&quot; frameborder=&quot;0&quot;&gt;&lambda;/iframe&gt;</textarea>
                </div>                                           
            </div>
          </div>
        </div>
      </div>
        
    <div class="boton-app hidden-xs" id="boton-app">
        <ul>
            <li class="azul-limon"><a href="https://www.microsoft.com/es-es/store/apps/cambios-yrendague/9nblggh5kpp8" target="_blank"><span class="fa fa-windows"></span></a></li>
            <li class="verde-limon"><a href="https://play.google.com/store/apps/details?id=com.mobincube.cambios_yrendague.sc_3ZC1IC&amp;hl=es-419" target="_blank"><span class="fa fa-android"></span></a></li>
            <li class="griz-limon"><a href="https://itunes.apple.com/app/id1072154009" target="_blank"><span class="fa fa-apple"></span></a></li>
        </ul>
    </div>

      <footer class="col-md-12 col-xs-12">
                <div class="container">             
                  <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <h1>Yrendangue S.A.</h1>
                      <hr>                        
                      <ul class="list-line-footer">            
                        <li><a href="<?php echo $ruta; ?>nosotros/en/">Who are we?</a></li>
                        <li><a href="<?php echo $ruta; ?>cotizaciones/en/">Quotes</a></li>           
                        <li><a href="<?php echo $ruta; ?>servicios/en/">Services</a></li>
                        <li><a href="<?php echo $ruta; ?>cumplimiento/en/">Compliance</a></li>
                        <li><a href="<?php echo $ruta; ?>sucursales/en/">Our agencies</a></li>                        

                        <li>
                          <a href="https://www.facebook.com/yrendaguecambios" target="_blank">
                            <span class="fa-stack">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          <a href="https://www.instagram.com/yrendaguecambios" target="_blank">
                            <span class="fa-stack">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>  
                        </li>
                      </ul>          
                    </div>  
                    <div class="col-sm-6 col-md-8">
                      <h1>Branch offices</h1>
                      <hr>          
                      <ul class="list-footer-sucursales">
                        <li>
                          <strong><?php echo utf8_encode($sucursal[0]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[0]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[1]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[1]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[2]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[2]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[5]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[5]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[3]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[3]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[4]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[4]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[6]['DETALLE_SUCURSAL_EN']); ?></strong>
                          <?php echo $sucursal[6]['TELEFONO']; ?>
                        </li>
                      </ul>
                    </div> 
                      
                  </div>
                </div>
              </footer>

              <div class="footer-credits">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="desc">
                        Cambios Yrendague S.A. - All rights reserved © 2020
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <!--<a href="https://www.redalia.es/check/yrendague.com.py/" target="_blank"><img src="https://www.redalia.es/seal/k/yrendague.com.py/" alt="SSL secured by Redalia" class="img-responsive" /></a>-->
                        <p>
                               ❤️ <a href="https://variablet.com/" target="_blank" title="Designed by Variablet"><img src="https://www.yrendague.com.py/assets/img/variablet.png" width="90px"></a>
                        </p>
                    </div>
                  </div>    
                </div>
              </div>
                

      <!--<a href="#" class="go-top" style="display: none;"><i class="fa fa-angle-up"></i></a>-->
    </body>    
    <link href="<?php echo $ruta; ?>assets/css/menuzord.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/styles.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/bandeiras.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/animate.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/font-awesome.min.css" rel="stylesheet" async>
    <script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/menuzord.js" async></script>    
    <script src="<?php echo $ruta; ?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/noframework.waypoints.js"></script>    
    <script src="<?php echo $ruta; ?>assets/js/moment.min.js"></script>      
    <script src="<?php echo $ruta; ?>assets/js/Chart.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/lazysize.min.js" async></script>      
    <!--<script src="<?php echo $ruta; ?>assets/js/scripts.js" async></script>-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
      $.datepicker.regional['es'] = {
         closeText: 'Cerrar',
         prevText: '< Ant',
         nextText: 'Sig >',
         currentText: 'Hoy',
         monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
         dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
         dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
         dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
         weekHeader: 'Sm',
         dateFormat: 'dd/mm/yy',
         firstDay: 1,
         isRTL: false,
         showMonthAfterYear: false,
         yearSuffix: ''
     };
     $.datepicker.setDefaults($.datepicker.regional['es']);
     $( function() {
            $( ".fecha" ).datepicker();
     });
  </script>
    <script>        
        function cargar_torneos(){
            $.ajax({
                method: "POST",
                url: "<?php echo $ruta; ?>datos.php",
                data: {
                    action: "get_cotizaciones",
                    fecha_desde: $('#fecha_desde').val(),
                    fecha_hasta: $('#fecha_hasta').val(),
                    idmoneda: $('#grafico').val()
                }
            })
            .done(function( res ) { 
                var datos=res.datos;
                var ctx = document.getElementById('Grafica').getContext('2d');
                var l1=[];
                var l2=[];
                for(var i=0; i<datos.length; i++){
                    var d=datos[i];
                    if(d.p_compra!=0 && d.p_venta!=0){                                        
                        l1.push({
                            x: d.fecha,
                            y: d.p_compra
                        });
                        l2.push({
                            x: d.fecha,
                            y: d.p_venta
                        });
                    }
                }
                var stackedLine = new Chart(ctx, {
                    type: 'line',
                    //data: data,
                    data: {
                        datasets: [{
                            label: 'Purchase',
                            data: l1,
                            backgroundColor: 'rgba(43,41,101,0.04)',
                            pointBackgroundColor: 'rgba(43,41,101,0.8)',
                            borderColor: 'rgb(43,41,101)',
                            borderWidth: 2,
                        }, {
                            label: 'Sale',
                            data: l2,
                            backgroundColor: 'rgba(245,134,52,0.04)',
                            pointBackgroundColor: 'rgba(245,134,52,0.8)',
                            borderColor: 'rgb(245,134,52)',
                            borderWidth: 2,
                            // Changes this dataset to become a line
                            type: 'line'
                        }],
                        //labels: ['January', 'February', 'March', 'April']
                    },
                    options: {
                        scales: {
                            xAxes: [{
                                type: 'time',
                                time: {
                                    unit: 'day',
                                    unitStepSize: 1,
                                    round: 'day',
                                    tooltipFormat: "MMM D",
                                    distribution: 'series',
                                    displayFormats: {
                                      day: 'MMM D'
                                    }
                                },                                
                            }],
                            yAxes: [{
                                ticks: {                                                                        
                                    stepSize: 500
                                }
                            }]
                        }
                    }
                });
            });
        }        
        function dolar_guarani(){                                    
            var ctx = document.getElementById('Grafica').getContext('2d');
            var l1=[];
            var l2=[];
            <?php if($cotizaciones && count($cotizaciones)>0){
                for($i=0; $i<count($cotizaciones);$i++){ 
                    if($cotizaciones[$i]['p_compra']!=0 && $cotizaciones[$i]['p_venta']!=0){
                    ?>                        
                        l1.push({
                            x: '<?php echo $cotizaciones[$i]['fecha']; ?>',
                            y: <?php echo $cotizaciones[$i]['p_compra']; ?>
                        });
                        l2.push({
                            x: '<?php echo $cotizaciones[$i]['fecha']; ?>',
                            y: <?php echo $cotizaciones[$i]['p_venta']; ?>
                        });
                    <?php }
                }
            }   ?>
            var stackedLine = new Chart(ctx, {
                type: 'line',
                //data: data,
                data: {
                    datasets: [{
                        label: 'Purchase',
                        data: l1,
                        backgroundColor: 'rgba(43,41,101,0.04)',
                        pointBackgroundColor: 'rgba(43,41,101,0.8)',
                        borderColor: 'rgb(43,41,101)',
                        borderWidth: 2,
                    }, {
                        label: 'Sale',
                        data: l2,
                        backgroundColor: 'rgba(245,134,52,0.04)',
                        pointBackgroundColor: 'rgba(245,134,52,0.8)',
                        borderColor: 'rgb(245,134,52)',
                        borderWidth: 2,
                        // Changes this dataset to become a line
                        type: 'line'
                    }],
                    //labels: ['January', 'February', 'March', 'April']
                },
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'day',
                                unitStepSize: 0.5,
                                round: 'day',
                                tooltipFormat: "MMM D",
                                displayFormats: {
                                  day: 'MMM D'
                                }
                            },
                            distribution: 'series',
                        }],
                        yAxes: [{
                            ticks: {                                                                        
                                stepSize: 500
                            }
                        }]
                    }
                }
            });
        }        

function copyToClipboard(elem) {
          // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
          succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
      $(document).ready(function(){        
        /*var waypoint = new Waypoint({
          element: document.getElementById('hm-wu'),
          handler: function() {            
          },
            offset: '75%'
        });*/        
        dolar_guarani();        
      });
    </script>    
</html>