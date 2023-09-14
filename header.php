<?php
include('boot/dbconfig.php');
include_once('boot/mysql.php');

$db = new mysql_class();
$db->connDb($VAR_DB, $VAR_USERDB, $VAR_PASSDB, $VAR_HOST);

function get_ultimocambio($db){
     $val1 = 0;
     $val2 = 0;
     $sql = "SELECT * FROM arbitraje ORDER BY id DESC LIMIT 1 ";
     $datos = $db->extraer($sql);
     if($datos && count($datos)>0){
        $time = strtotime($datos[0]['fecha']);
        $val = date("d/m/Y g:i A", $time);
     }

     $sql="SELECT * FROM cotizacion ORDER BY id DESC LIMIT 1 ";
     $datos = $db->extraer($sql);
     if($datos && count($datos)>0){
        //  $val = $fila['fecha'];
          $time = strtotime($datos[0]['fecha']);
          $val2 = date("d/m/Y g:i A", $time);
    }
    if($val1 >= $val2){ $val = $val1; }
    if($val1 < $val2){ $val = $val2; }
    return $val;
}

function verifica_precio($db, $compra, $venta, $moneda, $sucursal){
    if($moneda<5){
        $sql="SELECT * FROM cotizacion WHERE id_sucursal='$sucursal' AND id_moneda='$moneda' ORDER BY id desc LIMIT 2";
    }else{
        $sql="SELECT * FROM arbitraje WHERE id_sucursal='$sucursal' AND id_moneda='$moneda' ORDER BY id desc LIMIT 2";
    }
    $datos = $db->extraer($sql);
        
    if($datos[0]['p_compra']!=$compra || $datos[0]['p_venta']!=$venta){
        if($moneda<5){
            $sql="INSERT INTO cotizacion (id_sucursal, id_moneda, p_compra, p_venta, fecha) VALUES ('$sucursal', '$moneda', '$compra', '$venta', NOW())";
        }else{
            $sql="INSERT INTO arbitraje (id_sucursal, id_moneda, p_compra, p_venta, fecha) VALUES ('$sucursal', '$moneda', '$compra', '$venta', NOW())";
        }
        $ejec = $db->ejecutar($sql);
        
        if($moneda<5){
            $sql="SELECT * FROM cotizacion WHERE id_sucursal='$sucursal' AND id_moneda='$moneda' ORDER BY id desc LIMIT 2";
        }else{
            $sql="SELECT * FROM arbitraje WHERE id_sucursal='$sucursal' AND id_moneda='$moneda' ORDER BY id desc LIMIT 2";
        }
        $datos = $db->extraer($sql);
    }
    
    if(count($datos)>1){
        if($datos[0]['p_compra']<$datos[1]['p_compra']){
           $est_compra='<i class="fa fa-chevron-down"></i>';
        }else{
            if($datos[0]['p_compra']>$datos[1]['p_compra']){
                $est_compra='<i class="fa fa-chevron-up"></i>';
            }else{
                $est_compra='<span>=</span>';
            }
        }

        if($datos[0]['p_venta']<$datos[1]['p_venta']){
           $est_venta="<i class='fa fa-chevron-down'></i>";
        }else{
            if($datos[0]['p_venta']>$datos[1]['p_venta']){
                $est_venta="<i class='fa fa-chevron-up'></i>";
            }else{
                $est_venta="<span>=</span>";
            }
        }        
    }else{
        $est_compra="<span>=</span>";
        $est_venta="<span>=</span>";
    }
    return $est_compra."_".$est_venta;
}

$ruta="http://localhost/cambios/web2020/";
$ruta="https://jasycambios.com.py/";
?>
<!DOCTYPE html>
<html lang="es">
  <head>        
    <meta charset="utf-8">
    <link rel="shortcut icon" sizes="16x16" href="<?php echo $ruta; ?>assets/img/logos/07.png">
    <link href="<?php echo $ruta; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <meta name="p:domain_verify" content="65af47b1909f59507abeba9371ea3266">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">        
    <title>Jasy Cambios S.A. - Cotización de monedas: Dolar, Euro, Real</title>
    <meta name="description" content="La cotización del dólar hoy, Seguí la cotización del dolar minuto a minuto, precio dólar hoy, convertidor de moneda, Real, Peso.">
    <meta name="keywords" content="Dólar hoy, tipo de cambio del dólar, dólar hoy, valor del dólar hoy, tipo de cambio guaraní, cotización del dólar hoy, cambio de moneda en Paraguay">
    <meta name="viewport" content="initial-scale=1.0,width=device-width">        
    
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Jasy Cambios S.A. | Cotización de monedas: Dolar, Euro, Real" />
    <meta property="og:description" content="La cotización del dólar hoy, Seguí la cotización del dolar minuto a minuto, precio dólar hoy, convertidor de moneda, Real, Peso." />
    <meta property="og:url" content="<?php echo $ruta; ?>" />
    <meta property="og:site_name" content="Jasy Yrendague S.A." />
    <meta property="og:image" content="<?php echo $ruta; ?>/assets/img/yren_portada.png" />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="INICIO" />
    <meta name="twitter:image" content="<?php echo $ruta; ?>/assets/img/yren_portada.png" />
    <meta name="twitter:label1" content="Tiempo de lectura" />
    <meta name="twitter:data1" content="1 minuto" />
    <!-- Shema enrriquecido -->
    <script type='application/ld+json'>
    {
      "@context": "http://www.schema.org",
      "@type": "LocalBusiness",
      "name": "Cambios Yrendague S.A.",
      "url": "<?php echo $ruta; ?>/",
      "logo": "<?php echo $ruta; ?>/assets/img/logo_temporal.png",
      "image": "<?php echo $ruta; ?>/images/sucursales/1.jpg",
      "description": "Cambios Yrendague SA, es una empresa que actúa en el ámbito cambiario paraguayo a más de 20 años. Está autorizada por el Banco Central del Paraguay desde julio de 1998, iniciando su actividad comercial en Ciudad del Este, en donde está ubicada la casa matriz.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Calle Curupayty Nº 17 entre Avda. Adrián Jara y Monseñor Rodríguez",
        "postOfficeBoxNumber": "7000",
        "addressLocality": "Ciudad del Este",
        "addressRegion": "Alto Parana",
        "postalCode": "7000",
        "addressCountry": "Paraguay"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-25.510308",
        "longitude": "-54.613270"
      },
      "openingHours": "Mo, Tu, We, Th, Fr 08:00-16:00 Sa 08:00-12:00",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "(+595 61) 514 920"
      }
    }
    </script>
    <!-- Fin de Shema enrriquecido -->
    
    <style>
        body{
            overflow-x: hidden;
        }
        .loading-prev{
            position: fixed;
            z-index: 99999990;
            background: #fff;
            width: 100vw;
            height: 100vh;                
            text-align: center;
            padding-top: calc(50vh - 25px);
        }            
        .verde-limon{
            border-top-right-radius: 20px!important;
        }
        .boton-app .fa{
            color: #fff!important;
        }
    </style>
  </head>
    
  <body>

        <div class="loading-prev">
            <img src="<?php echo $ruta;?>images/iso_animado_jasy.gif" alt="Cargando página" style="width:50px;">
        </div>
        <?php 
            $sql="SELECT * FROM popup WHERE id = 1 ";
            $popup = $db->extraer($sql);
            if($popup[0]['activo']==1){ ?>
            <!-- Modal Inicio -->
            <div class="modal fade" id="modalInicio" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="well" style="background:#fff;">
                        <div id="owl-help" class="owl-carousel ">
                            <div>
                                <div class="page-header">
                                <img src="<?php echo $ruta;  ?>images/avisos/<?php echo $popup[0]['imagen']; ?>" alt="Aviso" class="img img-responsive" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                    </div>
                </div>
            </div>
            <a id="minicio" data-toggle="modal" data-target="#modalInicio" href="javascript:void(0);"></a>                
        <?php } ?>
        
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
        <div class="row al-cargar" style="">
            <div class="col-md-12 col-sm-12 sin-padding">
              <header>
                <div class="header-bar">
                  <div class="container">
                    <div class="row">
                      <?php
                        $sql="SELECT * FROM info WHERE id=1";
                        $info = $db->extraer($sql);
                      ?>
                      <div class="col-md-5 col-sm-4 text-left">
                        <ul class="list-header-bar">
                          <li class="mw-180"><i class="fa fa-phone"></i> Matriz <strong>+595 61 502 696</strong></li>
                          <li class="mw-180"><a href="mailto:contacto@jasycambios.com.py"><i class="fa fa-envelope"></i> <b>contacto@jasycambios.com.py</b></a></li>
                        </ul>                        
                      </div>
                      
                      <div class="col-md-4 col-sm-4">
                        <ul class="list-header-bar">
                            <li class="mw-180">
                              <a href="<?php echo $ruta ?>contacto/">
                                <i class="fa fa-user"></i> Centro de Atención al Cliente
                              </a>
                            </li>
                        </ul>
                      </div>
                      
                      <div class="col-md-3 col-sm-4">  
                        <ul class="list-header-bar right">
                          <li class=""><a class="idi" href="<?php echo $ruta; ?>en/">English</a></li>
                          <li class="oculta-mobil">|</li>
                          <li class=""><a class="idi" href="<?php echo $ruta; ?>"><b>Español</b></a></li>
                          <li class="oculta-mobil">|</li>
                          <li class=""><a class="idi" href="<?php echo $ruta; ?>pt/">Portugués</a></li>
                        </ul>    
                      </div>
                      <!--<div class="col-md-5 col-sm-4">
                          <div class="info">INFO</div><div class="marque"><marquee class=""><?php echo utf8_encode($info[0]['texto']); ?></marquee></div>
                      </div>-->
                    </div>
                  </div>
                </div>
                
                <div class="header-main">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div id="menuzord2" class="menuzord menuzord-home menuzord-responsive">
                          <a href="<?php echo $ruta; ?>" class="menuzord-brand">
                            <img data-src="<?php echo $ruta; ?>assets/img/logos/01.png" class="lazyload" alt="Logo Jasy">
                          </a>
                          <ul class="menuzord-menu menuzord-right menuzord-indented" style="">
                            <li><a href="<?php echo $ruta; ?>">HOME</a></li>
                            <li><a href="<?php echo $ruta; ?>nosotros/">Jasy CAMBIOS</a></li>                    
                            <li><a href="<?php echo $ruta; ?>servicios/">SERVICIOS</a></li>
                            <li><a href="<?php echo $ruta; ?>sucursales/">SUCURSALES</a></li>
                            <!--<li><a href="<?php echo $ruta; ?>cotizaciones/">Cotizaciones</a></li>
                            <li><a href="<?php echo $ruta; ?>cumplimiento/">Cumplimiento</a></li>
                            <li><a href="<?php echo $ruta; ?>sucursales/">Sucursales</a></li>
                            <li><a href="https://www.facebook.com/Zafra-cambios-364021890736692/"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href="http://instagram.com/zafracambios/"><i class="fa fa-instagram fa-lg"></i></a></li>
                            -->
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <?php
             $fecha_actual = date("d-m-Y");            
             $fecha = date("Y-m-d",strtotime($fecha_actual."- 7 days")); 
             $sql="SELECT * FROM cotizacion WHERE fecha > '$fecha 00:00:00' AND id_moneda = 1 AND id_sucursal = 1 GROUP BY DAY(fecha) ORDER BY fecha ";
             $cotizaciones = $db->extraer($sql);
             $sql="SELECT * FROM arbitraje WHERE fecha > '$fecha 00:00:00' AND id_moneda = 5 AND id_sucursal = 1 GROUP BY DAY(fecha) ORDER BY fecha";
             $dolarreal =$db->extraer($sql);
                  
        $sql="SELECT * FROM monedas WHERE MONEDA < 10";
        $matriz = $db->extraer($sql);

        $sql="SELECT * FROM monedas WHERE MONEDA < 10";
        $san = $db->extraer($sql);

       /* $sql="SELECT * FROM moneda_pjc WHERE MONEDA < 10";
        $san = $db->extraer($sql); */

        $sql="SELECT * FROM moneda_ne WHERE MONEDA < 10";
        $nueva = $db->extraer($sql);
        $sql="SELECT * FROM sucursales WHERE MOSTRAR = 'SI'";
        $sucursal = $db->extraer($sql);
        $sql="SELECT * FROM empresa WHERE id=1";
        $empresa = $db->extraer($sql);
       
        ?>
                <div class="header-sucursales">
                  <div class="">
                    <div class="row">
                      <div class="col-sm 12">
                        <ul class="list-sucursales">
                            <a onclick="ver_sucursal(0)" href="javascript:void(0);"><li class="title"><strong>Todas</strong></li></a>
                            <?php
                            for ($i=0; $i < count($sucursal); $i++) {
                              $tit = explode("-",$sucursal[$i]['DETALLE_SUCURSAL']); ?>
                              <a onclick="ver_sucursal(<?php echo $i+1; ?>)" href="javascript:void(0);"><li><?php echo $tit[1]; ?></li></a>
                              <?php
                            }
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </header> 