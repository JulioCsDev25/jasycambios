<?php
require_once("header.php");
?>
<script src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiSznpLvAhssxs0vnRcwsmZUgDr7O9rig&amp;callback=inicializaGoogleMaps"></script>
<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/map.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/marker.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/infowindow.js"></script><link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin=""><link href="https://client.crisp.chat" rel="preconnect" crossorigin=""><script src="https://client.crisp.chat/static/javascripts/client.js?5537635" type="text/javascript" async=""></script><link href="https://client.crisp.chat/static/stylesheets/client_default.css?5537635" type="text/css" rel="stylesheet"><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/2/controls.js"></script>
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
                <h1 class="center">Nuestras Sucursales</h1> 
                <p style="text-align:center;" > Conocé nuestras principales agencias y sucursales en Paraguay. </p>    
                <br>
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12"><hr style="border: 2px solid #c3c3c3; border-radius: 300px/3px; height: 0px; text-align: center;"> </div>
                    <?php foreach($sucursal as $fila) { ?>
                      <div class="col-md-2 col-xs-12 col-sm-12">                      
                          <img src="<?php echo $ruta; ?>images/sucursales/<?php echo $fila['IMAGEN'];?>" style="margin-bottom:20px;margin-top:0px; border-radius:15px;" class="image img-responsive" alt="<?php echo $fila['DETALLE_SUCURSAL']; ?>" />
                      </div>
                      <div class="col-md-5 col-xs-12 col-sm-12 text-justify">
                        <h4 class="text-left"><?php echo utf8_encode($fila['DETALLE_SUCURSAL']);?></h4>
                        <p>
                          <strong>Horarios de Atención:</strong>  <?php echo utf8_encode($fila['HORARIOS']);?> <br>
                          <strong>Dirección:</strong> <?php echo utf8_encode($fila['DIRECCION']);?> <br>
                          <strong>Teléfono:</strong><?php echo $fila['TELEFONO'];?> <br>
                          <?php echo utf8_encode($fila['CIUDAD']);?>
                        </p>
                      </div>
                      <div class="col-md-5 col-xs-12 col-sm-12">
                      <div id="capa-mapa-<?php echo $fila['SUCURSAL'];?>" style="width:100%;height:200px;border-radius:5px;border:solid #c4c4c4;"></div>
                      <script type="text/javascript">
                      var misPuntos = [
                          ["<?php echo $fila['DETALLE_SUCURSAL'];?>", "<?php echo $fila['LATITUD'];?>", "<?php echo $fila['LONGITUD'];?>", "icon1", "<div height:200px;><img src=<?php echo $ruta; ?>images/sucursales/<?php echo $fila['IMAGEN'];?> style=display:table;  /><br><hr><strong><?php $fila['DETALLE_SUCURSAL'];?></div>"],
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
                      /*    {
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#c3c3c3"
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
                                "color": "#ccc"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              {
                                "color": "#0e0e0e"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#ccc"
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
                                "color": "#ff4"
                              }
                            ]
                          },
                          {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#ccc"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#f4f4f4"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#f4f4f4"
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
                                "color": "#c3c3c3"
                              }
                            ]
                          },
                          {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#f4f4f4"
                              }
                            ]
                          },
                          {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#ccc"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#3a3a3a"
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
                          }*/
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

              <div class="col-md-12 col-xs-12 col-sm-12"><hr style="border: 2px solid #c3c3c3; border-radius: 300px/3px; height: 0px; text-align: center;"> </div>
            <?php } ?>
                </div>                
                <br>
                <br>
              </div>
          </div>
        </div>
    </div>
          
    <?php 
    require_once("footer.php");
    /*
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
                Jasy Cambios S.A. - Todos los derechos reservados © 2021
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
        $(".loading-prev").css("display","none");
          /*$(document).ready(function(){              
              var waypoint = new Waypoint({
                  element: document.getElementById('hm-wu'),
                  handler: function() {
                    
                  },
                    offset: '75%'
                });
          });*/
      /*</script>
    </body>
</html>*/