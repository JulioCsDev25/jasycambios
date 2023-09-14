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
      <!--<meta name="description" content="ZAFRA CAMBIOS S.A. es una Institución cambiaria que ofrece servicios de compra/venta de monedas extranjeras y transferencias nacionales e internacionales. ">
      <meta name="keywords" content="">

      <base href="https://www.zafracambios.com.py/">
      -->
        
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
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161440115-1"></script>
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
                          <li><a href="<?php echo $ruta; ?>cumplimiento/en/"><b>Ingles</b></a></li>
                          <li class="oculta-mobil">|</li>
                          <li><a href="<?php echo $ruta; ?>cumplimiento/">Español</a></li>
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
    <div id="nosotros-slider" class="cumplimiento">
        <div class="row">
          <div class="container">
            <h1 class="center">COMPLIANCE</h1>              
              <br>
            <div class="row">
                <!--<div class="col-md-3">
                    <img src="../images/cumplimiento.jpg" class="img img-responsive" style="border-radius: 25px;" alt="" />
                </div>-->
                <div class="col-md-8 col-md-offset-2">
                  <p style="text-align: justify;">Since its inception, Cambios Yrendague SA, has been firmly committed to policies and procedures to prevent any possibility of the company being used for criminal purposes, contributing to the efforts of regulators in the application of our laws. The Compliance Department is responsible for ensuring that these guidelines are issued to comply with current legislation and avoid any negative exposure that could damage the company’s image or reputation. The cooperation of all officials who are fully aware of the effectiveness of the prevention system is essential for such an outcome to be possible.</p>
                  <p style="text-align: justify;">The company has a manual on the prevention of Money Laundering and the financing of terrorism, as well as the Manuals on Procedures and Function, and a Code of Ethics and Conduct, which contribute mainly to compliance with current regulations.</p>

                <h4>Utils links</h4>
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
                            <h1 class="section-title light_title">PREVENTION OF MONEY LAUNDERING</h1>
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
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/1015.pdf" target="_blank">Law 1015 - 1997</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2302.pdf" target="_blank">Law 2302 - 2002</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2298.pdf" target="_blank">Law 2298 - 2003</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2381.pdf" target="_blank">Law 2381 - 2004</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2378.pdf" target="_blank">Law 2378 - 2004</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/3440.pdf" target="_blank">Law 3440 - 2008</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/3783.pdf" target="_blank">Law 3783 - 2009</a></li>
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
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/349.pdf" target="_blank">Resolution 349 - 2013</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/9.pdf.pdf" target="_blank">FATF GAFI 9</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/40.pdf" target="_blank">FATF GAFI 40</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/cicad_oea.pdf" target="_blank">CICAD</a></li>
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
                            <h1 class="section-title light_title">SHAREHOLDERS LIST</h1>
                            <h1 class="widget-title">&nbsp;</h1>
                            <div class="section-subtitle light_subtitle">The entity Cambios Yrendague S.A., communicates to the national financial system, its clients, investors and the general public, that its shareholder composition as of March 2020, is structured as follows:</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 footer-row-1">
                                <div class="row">
                                    <div class="col-md-4 sidebar-1">
                                        <aside class="widget vc_column_vc_container widget_nav_menu">
                                            <h1 class="widget-title">&nbsp;</h1>
                                            <div class="menu-footer1-container">
                                                <ul class="menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>SHAREHOLDERS</center></li>
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
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>PARTICIPATION PERCENTAGE</center></li>
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
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>NATIONALITY / COUNTRY OF THE CONSTITUTION</center></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Paraguayan</center></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Paraguayan</center></li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                    <div class="col-md-12">
                                        <br><br>
                                        <div class="section-subtitle light_subtitle">This publication is made at the request of the Superintendency of Banks, within the framework of the provisions of Article 34, number 9), contained in Article 1 of Law No. 6104/2018, which modifies Law No. 489 / 95 “Organic of the Central Bank of Paraguay.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
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