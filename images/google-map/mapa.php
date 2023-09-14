<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <link href="styles.css" rel="stylesheet">
  <script type="text/javascript">
  function load() {
    <?php 
      include ("conexion.php");
      $sql = mysqli_query($con,"SELECT * FROM reg");
      $row = mysqli_fetch_array($sql);
    ?>
    var map = new google.maps.Map(document.getElementById("map"), {
      center: new google.maps.LatLng(<?php echo $row['Pos']; ?>),
      zoom: 16,
      mapTypeId: 'roadmap'
    });
    


    downloadUrl("markers.php", function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName("marker");
      for (var i = 0; i < markers.length; i++) {
         var contentString = '<?php echo $row['detalles']; ?>';

          var pos = i;
          var infowindow  = new google.maps.InfoWindow({
              content: contentString
          });

        var point = new google.maps.LatLng(
          parseFloat(markers[i].getAttribute("lat")),
          parseFloat(markers[i].getAttribute("lng")));
        var icon = 'http://www.gnumux.com/mabu.com.py/images/marker.png';
        var marker = new google.maps.Marker({
          map: map,
          position: point,
          icon: icon,
          title: markers[i].getAttribute("tit") + pos,
          content: contentString

        });
         google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });


      }
    });
  }

  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;
    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };
    request.open('GET', url, true);
    request.send(null);
  }
  function doNothing() {}
  </script>
</head>
<body onload="load()">
  <div id="map"></div>
</body>
</html>