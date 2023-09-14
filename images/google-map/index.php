<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('conexion.php');
?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php 
      $lat = "-25.510070039116155";
      $lng = "-54.609017105102566";
      $pos = "-25.510070039116155, -54.609017105102566";
    ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      lat = "<?php echo $lat; ?>" ;
      lng = "<?php echo $lng; ?>" ;
      var map;
      function initialize() {
        var myLatlng = new google.maps.LatLng(lat,lng);
        var mapOptions = {
          zoom: 16,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          draggable:true,
          animation: google.maps.Animation.DROP,
          web:"Localización geográfica!",
          icon: "marker.png"
        });
        google.maps.event.addListener(marker, 'dragend', function(event) {
          var myLatLng = event.latLng;
          lat = myLatLng.lat();
          lng = myLatLng.lng();
          tienda = document.getElementsByName("tienda")[0].value;
          document.getElementById('info').innerHTML = [
          lat,
          lng,
          tienda
          ].join(', ');
        });
        marker.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      $("#enviar").click(function() { 
        var url = "cargar.php";
        $("#respuesta").html('<img src="cargando.gif" />');
        $.ajax({
         type: "POST",
         url: url,
         data: 'lat=' + lat + '&lng=' + lng +'&tienda=' + tienda,
         success: function(data)
         {
           $("#respuesta").html(data);
         }
       });
      }); 
    });
</script>

  <div id='info'><?php echo $pos; ?></div>
  <div id='googleMap'></div>
  <input name="tienda" value="1">
  <button type='submit' id='enviar' class='btn btn-alert'>Guardar</button><br>
  <div id='respuesta'></div>

</body>
</html>