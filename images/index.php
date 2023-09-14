<?php # Iniciando la variable que va a indentificar si tenemos que exibir el modal o no
 $exibirModal = false;
 # Verificando si no existe uma cookie
 if(!isset($_COOKIE["modal"]))
 {
  # Caso no exista entra aqui.
  # Vamos a crear la cookie con duracion de 1 dia</pre>
  $diasparaexpirar = 1;
  setcookie('modal', 'SIM', (time() + ($diasparaexpirar * 24  * 3600)));

  # controle la cookie con TRUE (verdadero)
  $exibirModal = true;
 } ?>
<?php include 'funciones/funciones.php';
get_arbitraje_auto();
get_cotizacion_auto();
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cambios Yrendague</title>
    <meta name="description" content="Cambios Yrendague, cotización de monedas, compra y venta de divisas">
    <meta name="keywords" content="casa, cambios, yrendague, compra, venta, monedas, cotización, divisas, precio, dolar">
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo PATH; ?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo PATH; ?>css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo PATH; ?>images/favicon.ico" />
  <!-- Important Owl stylesheet -->
<link rel="stylesheet" href="<?php echo PATH; ?>owl-carousel/owl.carousel.css">

<!-- Default Theme -->
<link rel="stylesheet" href="<?php echo PATH; ?>owl-carousel/owl.theme.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
<link rel="stylesheet" href="<?php echo PATH; ?>css/estilo.css" type="text/css" charset="utf-8">
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<link rel="stylesheet" href="<?php echo PATH; ?>css/bootstrap-datepicker3.css" media="screen" title="no title" charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo PATH; ?>js/bootstrap-datepicker.js"> </script>
<script src="<?php echo PATH; ?>js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>

<!-- <script type="text/javascript"> Shadowbox.init({ language: "es", players:  ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'] }); </script> -->
<script type="text/javascript">
// $(document).ready(function(){
// 	setTimeout(function() {
// 	    Shadowbox.open({
//     	    content:    '<div>   <iframe src="http://www.yrendague.com.py/v3/prueba.php" width="auto" border height="auto" style="overflow:hidden;" frameborder="0"></iframe></div>',
//     	    player:     "html",
//     	    title:      "Bienvenidos a nuestra nueva página web",
//     	    width:      492,
//     	    height:     397
//
//     	});
// 	}, 0);
// });
</script>



  <style>
    .aviso {

      visibility: hidden;
      border-top:  solid 2px #333;
      text-align: center;
      margin: 20px;
      padding: 10px;

    }

    .aviso p {
      font-weight: 400;
      font-size: 1.5em;
      color:#2A2365;
    }

    .visible {
      visibility: visible;
    }

    .aviso img {
     width: 160px;

     margin: 5px auto;
    }
    .boton-app { position: fixed; top:200px; z-index: 9999999; display: table; width: 70px;}
    .boton-app a{ color:#fff; display: block;}
    .boton-app ul { margin: 0; padding: 0;}
    .azul-limon {background: #658FD7; width: 90%; text-align: center; font-size: 21px; height: 30px; color: #fff; display: table; padding:5px; margin:2px 0;}
    .verde-limon {background: #7FBA00; width: 90%; text-align: center; font-size: 21px; height: 30px; color: #fff; display: table; padding:5px; margin:2px 0;}
    .griz-limon {background: #39424D; width: 90%; text-align: center; font-size: 21px; height: 30px; color: #fff; display: table; padding:5px; margin:2px 0;}
    .azul-limon:hover, .verde-limon:hover, .griz-limon:hover {
      width: 100%;
    }
    .esconder { visibility: hidden;}
  </style>
  </head>
  <body>
<div class="boton-app" id="boton-app">
    <ul>
      <li class="azul-limon"><a href="https://www.microsoft.com/es-es/store/apps/cambios-yrendague/9nblggh5kpp8" target="_blank"><span class="fa fa-windows"></span></a></li>
      <li class="verde-limon"><a href="https://play.google.com/store/apps/details?id=com.mobincube.cambios_yrendague.sc_3ZC1IC&hl=es-419" target="_blank"><span class="fa fa-android"></span></a></li>
      <li class="griz-limon"><a href="https://itunes.apple.com/app/id1072154009" target="_blank"><span class="fa fa-apple"></span></a></li>
    </ul>
</div>
      <?php include 'includes/nav.php'; ?>


        <div class="container fluid">
          <div class="row">
            <div class="col-md-12 hidden-xs">

              <?php include 'includes/slider.php'; ?>
            </div>
          </div>
          <div class="clear"></div>
        <div class="row well">
          <div class="col-md-4">
            <?php include 'includes/inc.cotizacion.dia.php'; ?>

          </div>

          <div class="col-md-4">
              <?php include 'includes/inc.arbitraje.php'; ?>

          </div>
          <div class="col-md-4">
              <?php include 'includes/inc.calculadora.php'; ?>
              <hr>
              <p class="hidden-xs">
                <a href="<?php echo PATH ?>cotizaciones"><img src="images/banner_wiget.png" class="image img-responsive" alt="Obtener widget" /></a>
                ¿Quieres mostrar las cotizaciones de las monedas en tu página web?, <a href="<?php echo PATH ?>cotizaciones"><strong> Inserta nuestro widget de cotizaciones</strong>.</a>
              </p>

          </div>
          <div class="clear"> </div>
          <div class="col-md-12 text-center"><p> <strong>Cotizaciones de carácter informativo y sujeto a cambios, ultima actualización <?php echo  get_ultimocambio(); ?></strong></p></div>
        </div>

          <div class="clear"></div>
        <div class="row">
          <div class="col-md-12">
            <?php include 'includes/grafico.php'; ?>
          </div>
        </div>
        <div class="row hidden-xs">
            <?php include 'includes/servicios.php'; ?>
         </div>

        </div> <!-- /container -->
        <div id="aviso" class="row aviso">
          <p>Descarga nuestra aplicación móvil</p>

          <a href="https://play.google.com/store/apps/details?id=com.mobincube.cambios_yrendague.sc_3ZC1IC&hl=es-419" target="_blank"><img  src="images/google-play.png" class="img img-responsive" alt="Descargar App Yrendague para Dispositivos Android" /></a>
          <a href="https://itunes.apple.com/app/id1072154009" target="_blank"><img  src="images/app-store.png" class="img img-responsive" alt="Descargar App Yrendague para Dispositivos Apple" /></a>
          <a href="https://www.microsoft.com/es-es/store/apps/cambios-yrendague/9nblggh5kpp8" target="_blank"><img  src="images/windows-store.png" class="img img-responsive" alt="Descargar App Yrendague para Windows Phone" /></a>
        </div>
        <?php include 'includes/footer.php'; ?>

        <!-- Modal Inicio -->
         <div class="modal fade" id="modalInicio" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="well" style="background:#fff;">
                      <div id="owl-help" class="owl-carousel ">
                              <div>
                                <div class="page-header">
                                      <!-- <h2>Cambios Yrendague S.A. <br><small>Bienvenidos a nuestra nueva página web</small></h2>

                                      <p>
                                        Renovamos completamente para ofrecerles un mejor servicio de información.
                                        <br>Conozca las mejoras que preparamos para usted.

                                      </p> -->
                                      <img src="images/avisos/aefadd3e-16a7-4fe8-a9f5-b6a30e6a6def.jpg" alt="Aviso" class="img img-responsive" />
                                </div>


                              </div>
                              <!-- <div>
                                <div class="page-header">
                                      <p><img class="img-responsive" src="images/avisos/ayuda1.jpg" alt="" /><br>
                                        <strong>Cotizaciones por sucursal</strong><br>
                                        Ahora usted podrá ver las cotizaciones y arbitrajes de todas nuestras sucursales.
                                      </p>
                                </div>


                              </div> -->
                              <!-- <div>
                                <div class="page-header">
                                      <p><img class="img-responsive" src="images/ayuda/ayuda2.jpg" alt="" /><br>
                                        <strong>Histórico de las cotizaciones</strong><br>
                                        Puede ver el histórico de las cotizaciones de todas las monedas por rango de fechas.
                                      </p>
                                </div>


                              </div> -->

                              <!-- <div>
                                <div class="img-responsive" class="page-header">
                                      <p><img class="img-responsive" src="images/ayuda/ayuda3.jpg" alt="" /><br>
                                        <strong>Calcular cotización</strong><br>
                                        Podrá calcular el monto que desee cambiar, utilizando nuestra calculadora.
                                      </p>
                                </div>


                              </div> -->

                              <!-- <div>
                                <div class="page-header">
                                      <p><img class="img-responsive" src="images/ayuda/ayuda4.jpg" alt="" /><br>
                                        <strong>Cotización en su página web</strong><br>
                                        Facilitamos a los usuarios widget exclusivos para que puedan mostrar la cotización en su página web de forma gratuita.
                                      </p>
                                </div>


                              </div> -->

                              <!-- <div>
                                <div class="page-header">
                                      <p><img class="img-responsive" src="images/ayuda/ayuda5.png" alt="" /><br>
                                        <strong>Diseño Adaptable</strong><br>
                                        Ahora la página se adapta al dispositivo de la cual esté accediento.
                                      </p>
                                </div>


                              </div> -->


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                    </div>
                </div>
              </div>



<!-- Include js plugin -->
<script src="owl-carousel/owl.carousel.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">



    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        navigation:false,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,

      });

  });
      $(document).ready(function() {

        $("#owl-help").owlCarousel({
          autoPlay : 10000,
          stopOnHover : true,
          navigation:false,
          paginationSpeed : 1000,
          goToFirstSpeed : 5000,
          singleItem : true,
          autoHeight : true,

        });

    });





</script>


<?php if($exibirModal === true) : ?>
 <script>
  $(document).ready(function()
  {
  $("#modalInicio").modal("show");
  });
 </script>
 <?php endif;?>


 <script type="text/javascript">
     var dispositivo = navigator.userAgent.toLowerCase();
       if(dispositivo.search(/iphone|ipod|ipad|android/) > -1 ){

        $("#aviso").addClass("visible");
        $("#boton-app").addClass("esconder");


     } else {
        console.log("desktop");
     }

  $(document).ready(function(){
    var dis = navigator.userAgent.toLowerCase();
  //  console.log("dis");
  });


   </script>

</body>
</html>
