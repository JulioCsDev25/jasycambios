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

      <title>Cambios Yrendague S.A. - Cotação de moedas: Dolar, Euro, Real</title>
        <meta name="description" content="Dólar Comercial: Confira a cotação de hoje no paraguai, veja gráficos, tabelas e histórico de cotações. Conheça também o conversor de moedas.">
        <meta name="keywords" content="Dólar hoje, cambio dolar, dolar hoje, valor dólar hoje, câmbio guarani, dólar hoje cotacao, casa de câmbio em Paraguai">      
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ae6b69a2-74c4-4b12-a5b3-0c6f5b81f4c9";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
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
                  <li><a href="<?php echo $ruta; ?>servicios/en/">Ingles</a></li>
                  <li class="oculta-mobil">|</li>
                  <li><a href="<?php echo $ruta; ?>servicios/">Español</a></li>
                  <li class="oculta-mobil">|</li>
                  <li><a href="<?php echo $ruta; ?>servicios/pt/"><b>Portugues</b></a></li>
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
                    <li><a href="<?php echo $ruta; ?>pt/">Inicio</a></li>
                    <li><a href="<?php echo $ruta; ?>nosotros/pt/">Quem somos</a></li>
                    <li><a href="<?php echo $ruta; ?>cotizaciones/pt/">Cotações</a></li>
                    <li><a href="<?php echo $ruta; ?>servicios/pt/">Serviços</a></li>
                    <li><a href="<?php echo $ruta; ?>cumplimiento/pt/">Compliance</a></li>
                    <li><a href="<?php echo $ruta; ?>sucursales/pt/">Nossas agências</a></li>
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
                    <h2 class="text-justify"> Câmbio de moeda</h2>
                    <hr>
                    <p>Não precisa sair de casa, nem do seu escritório de trabalho!</p>
                    <p>Realize sua cotação de compra ou venda de moeda estrangeira. Entre em contato com um de nossos assessores, nós garantimos excelência no atendimento e a melhor cotação do dia!
                    </p>
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
                    <h2 class="text-justify"> Pagamento de fretes e de mercadorias</h2>
                    <hr>
                    <p>Aos importadores:</p>
                    <p>Oferecemos o serviço de transferências para o pagamento de frete ou de sua importação de mercadoría. Converse com nosso assessor ou compliance para obter mais informações.</p>                    
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
                    <h2 class="text-justify"> Caixas de segurança</h2>
                    <hr>                    
                    <p>Durma tranquilo, nós cuidaremos de seus pertences valiosos!</p>
                    <p>Outro de nossos serviços é a locação de Caixas de segurança. Estão desenhadas para resguardar seus objetos de valor financeiro ou sentimental em um lugar totalmente seguro e confiável.</p>
                    <p>Oferecemos o melhor serviço e a melhor qualidade em gavetas de metal sólido, de diversos tamanhos e de acordo com a sua necessidade.</p>
                    <p>Utilizamos tecnologia de ponta, que garantem uma identificação segura com sistemas biométricos e no mais absoluto sigilo. </p>
                    <p>Peça já seu orçamento! Converse com nossos assessores e agende sua visita sem compromisso. </p>
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
                    <!--
                    <div class="col-md-12 col-12">
                        <p> </p><p> </p><br>
                        <h2>Ideales para resguardar</h2>

                        <ul class="per">
                            <li>Backups informáticos </li>
                             <li>Documentos (títulos, acciones, pólizas, bonos, pagarés, etc.).</li>
                             <li>Datos confidenciales (cartera de clientes, proveedores).</li>
                             <li>Objetos de importancia o valor monetario y/o sentimental (joyas, testamentos, etc.) difíciles o imposibles de reemplazar.</li>
                        </ul>
                    </div>        -->            
                    <!--
                    <div class="col-md-12">
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
                        <li><a href="<?php echo $ruta; ?>nosotros/pt/">Quem Somos</a></li>
                        <li><a href="<?php echo $ruta; ?>cotizaciones/pt/">Cotações</a></li>           
                        <li><a href="<?php echo $ruta; ?>servicios/pt/">Serviços</a></li>
                        <li><a href="<?php echo $ruta; ?>cumplimiento/pt/">Compliance</a></li>
                        <li><a href="<?php echo $ruta; ?>sucursales/pt/">Nossas agências</a></li>                        

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
                      <h1>FILIAIS</h1>
                      <hr>          
                      <ul class="list-footer-sucursales">
                        <li>
                          <strong><?php echo utf8_encode($sucursal[0]['DETALLE_SUCURSAL_PT']); ?></strong>
                          <?php echo $sucursal[0]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[1]['DETALLE_SUCURSAL_PT']); ?></strong>
                          <?php echo $sucursal[1]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[2]['DETALLE_SUCURSAL_PT']); ?></strong>
                          <?php echo $sucursal[2]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[5]['DETALLE_SUCURSAL_PT']); ?></strong>
                          <?php echo $sucursal[5]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[3]['DETALLE_SUCURSAL_PT']); ?></strong>
                          <?php echo $sucursal[3]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[4]['DETALLE_SUCURSAL_PT']); ?></strong>
                          <?php echo $sucursal[4]['TELEFONO']; ?>
                        </li>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[6]['DETALLE_SUCURSAL_PT']); ?></strong>
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
                        Cambios Yrendague S.A. - Todos os direitos reservados © 2020
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <!--<a href="https://www.redalia.es/check/yrendague.com.py/" target="_blank"><img src="https://www.redalia.es/seal/k/yrendague.com.py/" alt="SSL secured by Redalia" class="img-responsive" /></a>-->
                        <p>
                             ❤️ <a href="https://variablet.com/" target="_blank" title="Desenhado por Variablet"><img src="https://www.yrendague.com.py/assets/img/variablet.png" width="90px"></a>
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