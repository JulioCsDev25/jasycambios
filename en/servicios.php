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
      <meta name="viewport" content="initial-scale=1.0,width=device-width">      
        
      <link rel="shortcut icon" sizes="16x16" href="<?php echo $ruta;?>assets/img/favicon.ico">
      
      <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">-->
      <link href="<?php echo $ruta;?>assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">      
      <link href="<?php echo $ruta;?>assets/css/menuzord.css" rel="stylesheet">
      <link href="<?php echo $ruta;?>assets/css/styles.css" rel="stylesheet">      

      <script src="<?php echo $ruta;?>assets/js/jquery.min.js"></script>

      <!--[if IE 8]>
          <link href="<?php echo $ruta;?>assets/css/ie8.css" rel="stylesheet" type="text/css" />
          <link href="ambientes/jquery.galereya.ie.css" rel="stylesheet" >
      <![endif]-->

      <title>Cambios Yrendague S.A. - Quote of currencies: Dollar, Euro, Real</title>
        <meta name="description" content="The best service in buying and selling currencies, safety deposit boxes, import payments, currency converter, historical data and graphics.">
        <meta name="keywords" content="Quotation of the dollar in Paraguay, Paraguayan dollar, changes, yrendague, price of the Paraguayan dollar, price of the Paraguayan euro, price of the Paraguayan dollar, py dollar, Paraguay dollar, today's dollar in Paraguay, dollar in Ciudad del Este, dollar in Asuncion, Ciudad del dollar this, dollar asuncion, dollar yrendague, price, dollar">            
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ae6b69a2-74c4-4b12-a5b3-0c6f5b81f4c9";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
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
                          <li><a href="<?php echo $ruta; ?>servicios/en/"><b>Ingles</b></a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>servicios/">Español</a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>servicios/pt/">Portugues</a></li>
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
    </header>
<?php
$sql="SELECT * FROM sucursales WHERE MOSTRAR = 'SI'";
$sucursal = $db->extraer($sql);
$sql="SELECT * FROM empresa WHERE id=1";
$empresa = $db->extraer($sql);
?>
    <div id="nosotros-slider" class="servicios">
        <div class="row">
          <div class="container">
            <!--<h1 class="center negro">Nuestros Servicios</h1> -->             
            <div class="row">
                <div class="col-md-3 col-12 text-justify">
                    <img src="<?php echo $ruta; ?>images/servicios/dolar.jpg" class="image_servicios img-responsive">
                </div>
                <div class="col-md-9 col-12 text-justify">
                    <br>                    
                    <h2 class="text-justify"> Exchange of currency</h2>
                    <hr>
                    <p>You don’t need to leave your home or your office!</p>
                    <p>Make your quotation for the purchase or sale of foreign currency. Contact one of our operators, we guarantee excellence in care and the best quote of the day.</p>
                </div>
            </div>
            <br>
            <br>
          </div>
        </div>
    </div>
    <div class="separador">
    </div>
    <div id="nosotros-slider" class="servicios">
        <div class="row">
          <div class="container">                      
            <div class="row">
                <div class="col-md-3 col-12 text-justify">
                    <img src="<?php echo $ruta; ?>images/servicios/transferencias.jpg" class="image_servicios img-responsive">
                </div>
                <div class="col-md-9 col-12 text-justify">
                    <br>                    
                    <h2 class="text-justify"> Transport and goods payments</h2>
                    <hr>
                    <p>To importers, we offer the transfer service of paying for the transport or import of their goods. Talk to an advisor or Compliance Officer for more information.</p>
                </div>                
            </div>
            <br>
            <br>
          </div>
        </div>
    </div>
    <div class="separador">
    </div>
    <div id="nosotros-slider" class="servicios">
        <div class="row">
          <div class="container">                    
            <div class="row">
                <div class="col-md-3 col-12 text-justify">
                    <img src="<?php echo $ruta; ?>images/servicios/cajasdeseguridad.jpg" class="image_servicios img-responsive">
                </div>
                <div class="col-md-9 col-12 text-justify">
                    <br>
                    <h2 class="text-justify"> Safes</h2>
                    <hr>                    
                    <p>Rest peacefully, we’ll take care of your most valuable belongings!</p>
                    <p>Another of our services is the rental of safety deposit boxes. They are designed to protect your items of financial or sentimental value in a totally safe and reliable place.</p>
                    <p>We offer the best service and quality in solid metal drawers, of different sizes, according to your need.</p>
                    <p>We use latest generation technology, which ensures safe identification with biometric systems and with the utmost discretion.
                    </p>
                </div>
                <div class="col-md-3 col-12 text-justify">                    
                </div>
                <div class="col-md-9 col-12 text-justify">
                    <div class="col-md-12 col-12">
                        <iframe width="100%" height="480" src="https://www.youtube.com/embed/Nr2XGNpIEk8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-6 col-6">
                        <img src="<?php echo $ruta; ?>images/seguridad_art1.jpg" class="img-responsive">
                    </div>                    
                    <div class="col-md-6 col-6">
                        <img src="<?php echo $ruta; ?>images/seguridad_art2.jpg" class="img-responsive">
                    </div>
                    <!--<div class="col-md-12 col-12">
                        <p> </p><p> </p><br>
                        <h2>Ideales para resguardar</h2>

                        <ul class="per">
                            <li>Backups informáticos </li>
                             <li>Documentos (títulos, acciones, pólizas, bonos, pagarés, etc.).</li>
                             <li>Datos confidenciales (cartera de clientes, proveedores).</li>
                             <li>Objetos de importancia o valor monetario y/o sentimental (joyas, testamentos, etc.) difíciles o imposibles de reemplazar.</li>
                        </ul>
                    </div>-->
                    <!--<div class="col-md-12">
                        <br>
                        <h2>Seguridad de las cajas</h2>
                        <ul class="per">
                          <li>Ambiente reservado y cómodo.</li>
                          <li>Sistema de seguridad del edilicio, electrónico y    biométrico que se ajusta a las normas internacionales con 
                          (sensores de ruido, volumétricos y de humo).</li>
                          <li>Confidencialidad, ya que el contenido de su caja es absolutamente reservado, por lo  que podrá guardar objetos propios que sólo Ud. Conoce.</li>
                          <li>Disponibilidad inmediata del servicio. </li>
                          <li>Tecnología e innovación a su alcance y disposición, 
                            con  cuatro tamaños de cajas  que se adecuan a la medida de su necesidad.</li>
                        </ul>
                        <br>
                        <table border="0" cellpadding="0" cellspacing="0" width="300">
                          <tbody>
                           <tr>
                              <td colspan="2"><h2>Tamaños</h2></td>
                            </tr>
                            <tr>
                              <td>Pequeña</td>
                              <td>10 x 25 x 50 cm</td>
                            </tr>
                            <tr>
                              <td>Intermedia</td>
                              <td>15 x 25 x 50 cm</td>
                            </tr>
                            <tr>
                              <td>Mediana</td>
                              <td>20 x 25 x 50 cm</td>
                            </tr>
                            <tr>
                              <td>Grande</td>
                              <td>30 x 25 x 50 cm</td>
                            </tr>
                          </tbody>
                        </table>                        
                        <br>
                        <h2>Solicite un asesor</h2>
                        <p style="color:#88cc00;font-weight:600;">Comuníquese  al Tel: (595 61) 514 920 Int. 110, y hable con nuestro asesor quien le  brindará toda la información necesaria sin compromiso alguno, o si prefiere  acérquese a nuestra <strong>casa matriz </strong>a conocer nuestras instalaciones</p>
                    </div>-->
                </div>
            </div>
            <br>
            <br>
          </div>
        </div>
    </div>    
      
    <div style="clear:both;"></div>
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
      <script src="<?php echo $ruta; ?>assets/js/lazysize.min.js" async></script>      
      <script src="<?php echo $ruta;?>assets/js/menuzord.js"></script>
      <script src="<?php echo $ruta;?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo $ruta; ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo $ruta;?>assets/js/scripts.js"></script>
      <script src="<?php echo $ruta;?>assets/js/jquery.animateNumber.min.js"></script>
      <script src="<?php echo $ruta;?>assets/js/noframework.waypoints.js"></script>
      <script>
          $(document).ready(function(){              
              var waypoint = new Waypoint({
                  element: document.getElementById('hm-wu'),
                  handler: function() {
                    $('#anios_con').animateNumber({
                        number: <?php echo $empresa[0]['anios']; ?> 
                    },
                    {
                        easing: 'swing',
                        duration: 2000
                    });
                    $('#sucur_con').animateNumber({
                        number: <?php echo $empresa[0]['sucursales']; ?> 
                    },
                    {
                        easing: 'swing',
                        duration: 1500
                    });
                    $('#oper_con').animateNumber({
                        number: <?php echo $empresa[0]['operaciones']; ?> 
                    },
                    {
                        easing: 'swing',
                        duration: 4000
                    });
                    $('#giros_con').animateNumber({
                        number: <?php echo $empresa[0]['giros']; ?> 
                    },
                    {
                        easing: 'swing',
                        duration: 3000
                    });
                  },
                    offset: '75%'
                });
          });
      </script>
    </body>
</html>