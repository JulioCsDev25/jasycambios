<?php
include('boot/dbconfig.php');
include_once('boot/mysql.php');

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
      <!--<meta name="description" content="ZAFRA CAMBIOS S.A. es una Institución cambiaria que ofrece servicios de compra/venta de monedas extranjeras y transferencias nacionales e internacionales. ">
      <meta name="keywords" content="">

      <base href="https://www.zafracambios.com.py/">
      -->
        
      <link rel="shortcut icon" sizes="16x16" href="../assets/img/favicon.ico">
      <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">-->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">      
      <link href="../assets/css/menuzord.css" rel="stylesheet">
      <link href="../assets/css/styles.css" rel="stylesheet">      

      <script src="../assets/js/jquery.min.js"></script>

      <!--[if IE 8]>
          <link href="../assets/css/ie8.css" rel="stylesheet" type="text/css" />
          <link href="ambientes/jquery.galereya.ie.css" rel="stylesheet" >
      <![endif]-->

      <title>Cambios Yrendague S.A. - Cotización de monedas: Dolar, Euro, Real</title>
        <meta name="description" content="La cotización del dólar hoy, Seguí la cotización del dolar minuto a minuto, precio dólar hoy, convertidor de moneda, Real, Peso.">
        <meta name="keywords" content="Dólar hoy, tipo de cambio del dólar, dólar hoy, valor del dólar hoy, tipo de cambio guaraní, cotización del dólar hoy, cambio de moneda en Paraguay">
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ae6b69a2-74c4-4b12-a5b3-0c6f5b81f4c9";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
       
       
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-18M7BY2Q7Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-18M7BY2Q7Z');
</script>

    </head>
    <body>
        <div class="modal fade" id="contactoModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- www.123formbuilder.com script begins here -->
                <script type="text/javascript" defer src="//www.123formbuilder.com/embed/5359901.js" data-role="form" data-default-width="650px"></script>
                <!-- www.123formbuilder.com script ends here -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Enviar</button>                
              </div>
            </div>
          </div>
        </div>
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
                          <li><a href="<?php echo $ruta; ?>cumplimiento/en/">Ingles</a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>cumplimiento/"><b>Español</b></a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>cumplimiento/pt/">Portugues</a></li>
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
                            <li><a href="<?php echo $ruta; ?>">Inicio</a></li>
                            <li><a href="<?php echo $ruta; ?>nosotros/">Nosotros</a></li>                    
                            <li><a href="<?php echo $ruta; ?>cotizaciones/">Cotizaciones</a></li>
                            <li><a href="<?php echo $ruta; ?>servicios/">Servicios</a></li>
                            <li><a href="<?php echo $ruta; ?>cumplimiento/">Cumplimiento</a></li>
                            <li><a href="<?php echo $ruta; ?>sucursales/">Sucursales</a></li>
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
    <div id="nosotros-slider" class="cumplimiento">
        <div class="row">
          <div class="container-fluid">
            <h1 class="center">CUMPLIMIENTO</h1>              
              <br>
            <div class="row">
                <!--<div class="col-md-3">
                    <img src="../images/cumplimiento.jpg" class="img img-responsive" style="border-radius: 25px;" alt="" />
                </div>-->
                <div class="col-md-8 col-md-offset-2 col-xs-12">
                  <p style="text-align: justify;">Desde sus inicios, Cambios Yrendague S.A, asumió su firme compromiso con las políticas y procedimientos para evitar cualquier posibilidad que la empresa sea utilizada para fines delictivos, contribuyendo con los esfuerzos de los reguladores en la aplicación de nuestras leyes. El departamento de Cumplimiento es el responsable por garantizar que esas directrices sean realizadas para cumplir con la legislación actual y evitar cualquier tipo de exposición negativa que pueda damnificar la imagen o la reputación de la empresa. Y para que ese resultado sea posible es fundamental la cooperación de todos los funcionarios que tienen pleno conocimiento sobre la eficacia del sistema de prevención.</p>
                  <p style="text-align: justify;">La empresa posee un Manual de Prevención de Lavado de Activos y financiamiento del Terrorismo, así también, los Manuales de Procedimientos y Funciones y un Código de Ética y Conducta, que contribuyen fundamentalmente para dar cumplimiento a la normativa vigente.</p>
                <h4>Enlaces útiles</h4>
                <ul>
                  <li><a href="http://www.seprelad.gov.py/" target="_blank">www.seprelad.gov.py</a></li>
                  <li><a href="http://www.bcp.gov.py/" target="_blank">www.bcp.gov.py</a></li>
                  <li><a href="http://www.aduana.gov.py/" target="_blank">www.aduana.gov.py</a></li>
                  <li><a href="http://www.ministeriopublico.gov.py/" target="_blank">www.ministeriopublico.gov.py</a></li>
                  <li><a href="www.hacienda.gov.py/web-hacienda/index.php" target="_blank">www.hacienda.gov.py</a></li>
                </ul>
            </div>
            </div>
            <br>
            <br>
          </div>
        </div>
    </div>
        <div class="separador"></div>
      <!--<div id="hm-wu">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                  <div class="col-md-3">
                      <center>
                          <h1 id="anios_con" class="conteo">0</h1>
                          <label class="tit_conteo">Años de Experiencia</label>
                      </center>
                  </div>
                  <div class="col-md-3">
                      <center>
                          <h1 id="sucur_con" class="conteo">0</h1>
                          <label class="tit_conteo">Sucursales y Agencias</label>
                      </center>
                  </div>
                  <div class="col-md-3">
                      <center>
                          <h1 id="oper_con" class="conteo">0</h1>
                          <label class="tit_conteo">Operaciones Compra - Venta - Arbitraje</label>
                      </center>
                  </div>
                  <div class="col-md-3">
                      <center>
                          <h1 id="giros_con" class="conteo">0</h1>
                          <label class="tit_conteo">Giros Nacionales</label>
                      </center>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>     --> 
        
    <div class="boton-app hidden-xs" id="boton-app">
        <ul>
            <li class="azul-limon"><a href="https://www.microsoft.com/es-es/store/apps/cambios-yrendague/9nblggh5kpp8" target="_blank"><span class="fa fa-windows"></span></a></li>
            <li class="verde-limon"><a href="https://play.google.com/store/apps/details?id=com.mobincube.cambios_yrendague.sc_3ZC1IC&amp;hl=es-419" target="_blank"><span class="fa fa-android"></span></a></li>
            <li class="griz-limon"><a href="https://itunes.apple.com/app/id1072154009" target="_blank"><span class="fa fa-apple"></span></a></li>
        </ul>
    </div>

      
    <div class="section-prevencion col-md-12">
        <!-- FOOTER TOP -->
        <div class="row footer-top">
            <div class="container">
                <div class="title-subtile-holder wow fadeIn text_center animated" style="visibility: visible; animation-name: fadeIn;">
                    <h1 class="section-title light_title">PREVENCIÓN DE LAVADO DE DINERO</h1>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-row-1">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4 sidebar-1">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer1-container">
                                        <center>
                                            <ul class="menu">
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/1015.pdf" target="_blank">Ley 1015 - 1997</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2302.pdf" target="_blank">Ley 2302 - 2002</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2298.pdf" target="_blank">Ley 2298 - 2003</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2381.pdf" target="_blank">Ley 2381 - 2004</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2378.pdf" target="_blank">Ley 2378 - 2004</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/3440.pdf" target="_blank">Ley 3440 - 2008</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/3783.pdf" target="_blank">Ley 3783 - 2009</a></li>
                                            </ul>
                                        </center>
                                    </div>
                                </aside>
                            </div>                            
                            <div class="col-md-4 sidebar-4">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer4-container">
                                        <center>
                                            <ul class="menu">
						<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/248.pdf" target="_blank">Resolución 248 - 2020</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/349.pdf" target="_blank">Resolución 349 - 2013</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/9.pdf.pdf" target="_blank">FATF GAFI 9</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/40.pdf" target="_blank">FATF GAFI 40</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/cicad_oea.pdf" target="_blank">CICAD</a></li>
                                            </ul>
                                        </center>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer_80"></div>
            <div class="container">
                <div class="title-subtile-holder wow fadeIn text_center animated" style="visibility: visible; animation-name: fadeIn;">
                    <h1 class="section-title light_title">NÓMINA DE ACCIONISTAS</h1>
                    <h1 class="widget-title">&nbsp;</h1>
                    <div class="section-subtitle light_subtitle">La entidad Cambios Yrendague S.A., comunica al sistema financiero nacional, a sus clientes, inversionistas y público en general, que su composición accionaria a marzo de 2020, se encuentra estructurada de la siguiente manera:</div>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-row-1">
                        <div class="row">
                            <div class="col-md-4 sidebar-1">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer1-container">
                                        <ul class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>ACCIONISTAS</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Lucas Lucio Mereles Paredes</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Miguel Angel Ramirez Rojas</center></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4 sidebar-4">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer4-container">
                                        <ul class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>PARTICIPACIÓN</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>50%</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>50%</center></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4 sidebar-4">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer4-container">
                                        <ul class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>NACIONALIDAD</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Paraguaya</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Paraguaya</center></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-12">
                                <br><br>
                                La presente publicación se realiza a solicitud de la Superintendencia de Bancos, en el marco de lo establecido en el Artículo 34° numeral 9), contenido en el Artículo 1° de la Ley N° 6104/2018 que modifica la Ley N° 489/95 “Orgánica del Banco Central Del Paraguay.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
      <footer>
        <div class="container">             
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <h1>Yrendangue S.A.</h1>
              <hr>          
              <ul class="list-line-footer">            
                <li><a href="<?php echo $ruta; ?>nosotros/">Nosotros</a></li>
                <li><a href="<?php echo $ruta; ?>cotizaciones/">Cotizaciones</a></li>           
                <li><a href="<?php echo $ruta; ?>servicios/">Servicios</a></li>
                <li><a href="<?php echo $ruta; ?>cumplimiento/">Cumplimiento</a></li>
                <li><a href="<?php echo $ruta; ?>sucursales/">Sucursales</a></li>                        

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
              <h1>Sucursales</h1>
              <hr>          
              <ul class="list-footer-sucursales">
                <li>
                  <strong><?php echo utf8_encode($sucursal[0]['DETALLE_SUCURSAL']); ?></strong>
                  <?php echo $sucursal[0]['TELEFONO']; ?>
                </li>
                <li>
                  <strong><?php echo utf8_encode($sucursal[1]['DETALLE_SUCURSAL']); ?></strong>
                  <?php echo $sucursal[1]['TELEFONO']; ?>
                </li>
                <li>
                  <strong><?php echo utf8_encode($sucursal[2]['DETALLE_SUCURSAL']); ?></strong>
                  <?php echo $sucursal[2]['TELEFONO']; ?>
                </li>
                <li>
                  <strong><?php echo utf8_encode($sucursal[5]['DETALLE_SUCURSAL']); ?></strong>
                  <?php echo $sucursal[5]['TELEFONO']; ?>
                </li>
                <li>
                  <strong><?php echo utf8_encode($sucursal[3]['DETALLE_SUCURSAL']); ?></strong>
                  <?php echo $sucursal[3]['TELEFONO']; ?>
                </li>
                <li>
                  <strong><?php echo utf8_encode($sucursal[4]['DETALLE_SUCURSAL']); ?></strong>
                  <?php echo $sucursal[4]['TELEFONO']; ?>
                </li>
                <li>
                  <strong><?php echo utf8_encode($sucursal[6]['DETALLE_SUCURSAL']); ?></strong>
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
                Cambios Yrendague S.A. - Todos los derechos reservados © 2020
              </div>
            </div>

            <div class="col-sm-4">
                <!--<a href="https://www.redalia.es/check/yrendague.com.py/" target="_blank"><img src="https://www.redalia.es/seal/k/yrendague.com.py/" alt="SSL secured by Redalia" class="img-responsive" /></a>-->
                <p>
                    ❤️ <a href="https://variablet.com/" target="_blank" title="Diseñada por Variablet"><img src="../assets/img/variablet.png" width="90px"></a>
                </p>
            </div>
          </div>    
        </div>
      </div>

      <!--<a href="#" class="go-top" style="display: none;"><i class="fa fa-angle-up"></i></a>-->
      <script src="<?php echo $ruta; ?>assets/js/lazysize.min.js" async></script>    
      <script src="../assets/js/menuzord.js"></script>
      <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo $ruta; ?>assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/scripts.js"></script>
      <script src="../assets/js/jquery.animateNumber.min.js"></script>
      <script src="../assets/js/noframework.waypoints.js"></script>
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