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
        
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiSznpLvAhssxs0vnRcwsmZUgDr7O9rig&callback=inicializaGoogleMaps"></script>
      
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
                          <li><a href="<?php echo $ruta; ?>sucursales/en/"><b>Ingles</b></a></li>
                          <li><a href="<?php echo $ruta; ?>sucursales/">Español</a></li>
                          <li><a href="<?php echo $ruta; ?>sucursales/pt/">Portugues</a></li>
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
$sql="SELECT * FROM sucursales WHERE mostrar = 'SI' ORDER BY POSICION";
$sucursal = $db->extraer($sql);
$sql="SELECT * FROM empresa WHERE id=1";
$empresa = $db->extraer($sql);
?>
    <div id="nosotros-slider" class="sucursales">
        <div class="row">
          <div class="">
              <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
                <h1 class="center">OUR AGENCIES</h1>     
                <br>
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12"><hr style="border: 2px solid #f2f2f6; border-radius: 300px/3px; height: 0px; text-align: center;"> </div>
                    <?php foreach($sucursal as $fila) { ?>
                      <div class="col-md-2 col-xs-12 col-sm-12">                      
                          <img src="<?php echo $ruta; ?>images/sucursales/<?php echo $fila['IMAGEN'];?>" style="margin-bottom:20px;margin-top:0px; border-radius:15px;" class="image img-responsive" alt="<?php echo $fila['DETALLE_SUCURSAL']; ?>" />
                      </div>
                      <div class="col-md-5 col-xs-12 col-sm-12 text-justify">
                        <h4 class="text-left"><?php echo utf8_encode($fila['DETALLE_SUCURSAL_EN']);?></h4>
                        <p>
                          <strong>Opening Hours:</strong>  <?php echo utf8_encode($fila['HORARIOS_EN']);?> <br>
                          <strong>Address:</strong> <?php echo utf8_encode($fila['DIRECCION_EN']);?> <br>
                          <strong>Phone:</strong><?php echo $fila['TELEFONO'];?> <br>
                          <?php echo utf8_encode($fila['CIUDAD_EN']);?>
                        </p>
                      </div>
                      <div class="col-md-5 col-xs-12 col-sm-12">
                      <div id="capa-mapa-<?php echo $fila['SUCURSAL'];?>" style="width:100%;height:200px;border-radius:5px;"></div>
                      <script type="text/javascript">
                      var misPuntos = [
                          ["<?php echo $fila['DETALLE_SUCURSAL'];?>", "<?php echo $fila['LATITUD'];?>", "<?php echo $fila['LONGITUD'];?>", "icon1", "<div height:200px;><img src=<?php echo $ruta; ?>images/sucursales/<?php echo $fila['IMAGEN'];?> style=display:table;  /><br><hr><strong><?php $fila['DETALLE_SUCURSAL_EN'];?></div>"],
                    ];
              function inicializaGoogleMaps() {
                  // Coordenadas del centro de nuestro recuadro principal
                  var x =<?php echo $fila['LATITUD'];?>;
                  var y = <?php echo $fila['LONGITUD'];?>;

                  var mapOptions = {
                      zoom: 18,                  
                      center: new google.maps.LatLng(x, y),
                      mapTypeId: google.maps.MapTypeId.ROADMAP,
                      styles: [
                          {
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#212121"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.icon",
                            "stylers": [
                              {
                                "visibility": "off"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              {
                                "color": "#212121"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.country",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#9e9e9e"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.land_parcel",
                            "stylers": [
                              {
                                "visibility": "off"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.locality",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#bdbdbd"
                              }
                            ]
                          },
                          {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#181818"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#616161"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              {
                                "color": "#1b1b1b"
                              }
                            ]
                          },
                          {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                              {
                                "color": "#2c2c2c"
                              }
                            ]
                          },
                          {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#8a8a8a"
                              }
                            ]
                          },
                          {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#373737"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#3c3c3c"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway.controlled_access",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#4e4e4e"
                              }
                            ]
                          },
                          {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#616161"
                              }
                            ]
                          },
                          {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#000000"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#3d3d3d"
                              }
                            ]
                          }
                        ]
                  }

                  var map = new google.maps.Map(document.getElementById("capa-mapa-<?php echo $fila['SUCURSAL'];?>"), mapOptions);
                  setGoogleMarkers(map, misPuntos);
              }

              var markers = Array();
              var infowindowActivo = false;
              function setGoogleMarkers(map, locations) {
                  // Definimos los iconos a utilizar con sus medidas
                  var icon1 = new google.maps.MarkerImage(
                    "<?php echo $ruta; ?>images/marcador.png",
                    new google.maps.Size(47, 68)
                  );


                  for(var i=0; i<locations.length; i++) {
                      var elPunto = locations[i];
                      var myLatLng = new google.maps.LatLng(elPunto[1], elPunto[2]);

                      markers[i]=new google.maps.Marker({
                          position: myLatLng,
                          map: map,
                          icon: eval(elPunto[3]),
                          title: elPunto[0]
                      });
                      markers[i].infoWindow=new google.maps.InfoWindow({
                          content: elPunto[4]
                      });
                      google.maps.event.addListener(markers[i], "click", function(){
                          if(infowindowActivo)
                              infowindowActivo.close();
                          infowindowActivo = this.infoWindow;
                          infowindowActivo.open(map, this);
                      });
                  }
              }

              inicializaGoogleMaps();
              </script>

            </div>

              <div class="col-md-12 col-xs-12 col-sm-12"><hr style="border: 2px solid #f2f2f6; border-radius: 300px/3px; height: 0px; text-align: center;"> </div>
            <?php } ?>
                </div>                
                <br>
                <br>
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
          /*$(document).ready(function(){              
              var waypoint = new Waypoint({
                  element: document.getElementById('hm-wu'),
                  handler: function() {
                    
                  },
                    offset: '75%'
                });
          });*/
      </script>
    </body>
</html>