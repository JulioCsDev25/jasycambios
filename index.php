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
                              <a href="<?php echo $ruta; ?>contacto/">
                                <i class="fa fa-user"></i> Centro de Atención al Cliente
                              </a>
                            </li>
                        </ul>
                      </div>
                      
                      <div class="col-md-3 col-sm-4">  
                        <ul class="list-header-bar right">
                          <li class=""><a class="idi" href="<?php echo $ruta; ?>en/">English</a></li>
                          <li class="oculta-mobil">|</li>
                          <li class=""><a class="idi" href="<?php echo $ruta; ?>"><b class="selected">Español</b></a></li>
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
                            <!--
                            <li><a href="<?php echo $ruta; ?>contacto/">CONTACTO</a></li>
                            <li><a href="<?php echo $ruta; ?>cotizaciones/">Cotizaciones</a></li>
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
                  
        $sql="SELECT * FROM moneda_cde WHERE MONEDA < 10";
        //$sql="SELECT * FROM moneda_cde LIMIT 10";
        $matriz = $db->extraer($sql);

        $sql="SELECT * FROM monedas WHERE MONEDA < 10";
        $san = $db->extraer($sql);

        $sql="SELECT * FROM moneda_pjc WHERE MONEDA < 10";
        $san_2 = $db->extraer($sql);

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
                              <a onclick="ver_sucursal(<?php echo $i+1; ?>)" href="javascript:void(0);"><li><?php echo utf8_encode($tit[1]); ?></li></a>
                              <?php
                            }
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </header> 

            <div id="home-slider" class="row">
              <div class="row">
                <div class="container">                                      
                  <div class="col-md-12 col-sm-12 hidden">   
                      <h1 class="center negro">Cotizaciones de Monedas - Real, Dólar, Pesos Arg. Euros</h1>                       
                      <div class="col-md-12 col-xs-12 col-sm-12 text-center"><h2> Cotizaciones de carácter informativo y sujeto a cambios, última actualización <?php echo  get_ultimocambio($db); ?></h2></div>
                      <br>
                                            
                  </div>
                  <div class="">
                    <?php
                    for ($i=0; $i < count($sucursal); $i++) {
                      $sql="SELECT * FROM cotizacion WHERE id_sucursal = ".$sucursal[$i]['SUCURSAL']." GROUP BY DAY(fecha) ORDER BY fecha LIMIT 1";
                      $cotizaciones = $db->extraer($sql);
                      ?>
                    <div class="img-bg col-md-6 col-xs-12 col-sm-6" id="suc_<?php echo $i+1; ?>">
                      <div class="cotacao-box">
                        <div class="conteudo">
                        <div class="title-2 text-center">
                            <h2 style="font-weight:600;color:#fff;font-size: 22px;">
                              <?php echo utf8_encode($sucursal[$i]['DETALLE_SUCURSAL']); ?>
                            </h2>
                            <p style="font-size: 16px;margin-bottom:15px;"><?php echo utf8_encode($sucursal[$i]['DIRECCION'])." - ".utf8_encode($sucursal[$i]['CIUDAD']); ?></p>
                            <p style="font-size: 16px;">ACTUALIZADO AL: <?php
                            if (isset($cotizaciones[0])) {
                              echo $cotizaciones[0]['fecha'];
                            }else{
                              echo "00/00/0000 00:00";
                            }
                            ?></p>
                          </div>
                          <table class="table-cotacao">
                            <thead>
                              <tr>
                                <th width="70%">Moneda</th>
                                <th class="aright" width="15%">Compra</th>
                                <th class="aright" width="15%">Venta</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $usd="";
                                $brl="";
                                $ars="";
                                $eur="";
                                $usdc="";
                                $brlc="";
                                $arsc="";
                                $eurc="";
                              
                                $usdbrl="0";
                                $usdars="0";
                                $eurbrl="0";
                                $arsbrl="0";
                                $eurusd="0";

                                $usdbrlc="0";
                                $usdarsc="0";
                                $eurbrlc="0";
                                $arsbrlc="0";
                                $eurusdc="0";
                              
                                $cant=0;
                                foreach($matriz as $fila){
                                    $class = verifica_precio($db, $fila['COMPRA'], $fila['VENTA'], $fila['MONEDA'], 1);
                                    $arrclass = explode("_",$class);
                                    $cant++;
                                    $img = 'euro';
                                    if($cant<5){
                                        if($fila['SIMBOLOS']=='USD'){
                                            $usd=$fila['VENTA'];
                                            $usdc=$fila['COMPRA'];
                                            $img = 'dolarUs';
                                        }
                                        if($fila['SIMBOLOS']=='BRL'){
                                            $brl=$fila['VENTA'];
                                            $brlc=$fila['COMPRA'];
                                            $img = 'real';
                                        }
                                        if($fila['SIMBOLOS']=='ARS'){
                                            $ars=$fila['VENTA'];
                                            $arsc=$fila['COMPRA'];
                                            $img = 'pesoAr';
                                        }
                                        if($fila['SIMBOLOS']=='EUR'){
                                            $eur=$fila['VENTA'];
                                            $eurc=$fila['COMPRA'];
                                            $img = 'euro';
                                        }
                                      ?>
                                    <tr>
                                      <td>
                                        <div class="pais1" style="width:40%; float:left">
                                          <i class="moneda <?php echo $img; ?>"></i> <?php echo $fila['SIMBOLOS']; ?> </div> x
                                        <div class="pais1" style="width:40%; float:right">
                                          <i class="moneda guarani"></i> PYG</div>
                                        </td>
                                        <td class="num"><?php echo number_format($fila['COMPRA'], 0, ',', '.').$arrclass[0]; ?></td>
                                        <td class="num"><?php echo number_format($fila['VENTA'], 0, ',', '.').$arrclass[1]; ?></td>
                                    </tr>
                                  <?php }else{
                                        $class = verifica_precio($db, $fila['COMPRA'], $fila['VENTA'], $fila['MONEDA'], 1);
                                        $arrclass = explode("_",$class);
                                        
                                        $arr = explode("-",$fila['SIMBOLOS']);
                                        $img2="real";                          
                                        
                                        if($fila['SIMBOLOS']=='USD-BRL'){                                                
                                            $usdbrl  = round($fila['VENTA'],3);                                                
                                            $usdbrlc = round($fila['COMPRA'],3);
                                        }
                                        if($fila['SIMBOLOS']=='USD-ARS'){                                                
                                            $usdars  = round($fila['VENTA'],3);
                                            $usdarsc = round($fila['COMPRA'],3);
                                        }                                            
                                        if($fila['SIMBOLOS']=='EUR-BRL'){                                                
                                            $eurbrl  = round($fila['VENTA'],3);
                                            $eurbrlc = round($fila['COMPRA'],3);
                                        }
                                        if($fila['SIMBOLOS']=='ARS-BRL'){                                                
                                            $arsbrl  = round($fila['VENTA'],3);
                                            $arsbrlc = round($fila['COMPRA'],3);
                                        }
                                        if($fila['SIMBOLOS']=='EUR-USD'){                                                
                                            $eurusd  = round($fila['VENTA'],3);
                                            $eurusdc = round($fila['COMPRA'],3);
                                        }
                                        
                                        if($arr[0]=='USD'){
                                            $img = 'dolarUs';
                                        }
                                        if($arr[0]=='BRL'){
                                            $img = 'real';
                                        }
                                        if($arr[0]=='ARS'){
                                            $img = 'pesoAr';
                                        }
                                        if($arr[0]=='EUR'){
                                            $img = 'euro';
                                        }
                                        if($arr[1]=='USD'){
                                            $img2 = 'dolarUs';
                                        }
                                        if($arr[1]=='BRL'){
                                            $img2 = 'real';
                                        }
                                        if($arr[1]=='ARS'){
                                            $img2 = 'pesoAr';
                                        }
                                        if($arr[1]=='EUR'){
                                            $img2 = 'euro';
                                        }
                                    ?>
                                        <tr>
                                      <td>
                                        <div class="pais1" style="width:40%; float:left">
                                          <i class="moneda <?php echo $img; ?>"></i> <?php echo $arr[0]; ?> </div> x
                                        <div class="pais1" style="width:40%; float:right">
                                          <i class="moneda <?php echo $img2; ?>"></i> <?php echo $arr[1]; ?></div>
                                        </td>
                                        <td class="num"><?php echo number_format($fila['COMPRA'], 3, ',', '.').$arrclass[0]; ?></td>
                                        <td class="num"><?php echo number_format($fila['VENTA'], 3, ',', '.').$arrclass[1]; ?></td>
                                    </tr>
                              <?php
                                    }
                                } ?>
                            </tbody>
                          </table>
                          <div class="infos">
                            <div class="row">
                              
                              <div class="col-md-6 col-xs-12 col-sm-12 px-0">
                                <div class="ico">
                                    <img class="lazyload" data-src="<?php echo $ruta; ?>assets/img/ico-clock2.png" alt="Horario">
                                    <!--<img class="lazyload" data-src="<?php echo $ruta; ?>assets/img/ico-clock2.png" alt="Horario">-->
                                </div>
                                <div class="desc">
                                  <p>
                                    <strong>Horario de Atención:</strong><br>
                                    <?php echo utf8_encode($sucursal[$i]['HORARIOS']); ?>  
                                  </p>
                                </div>
                              </div>
                              <div class="col-md-6 col-xs-12 col-sm-12 pr-0">
                                <div class="ico">                                                                            
                                  <img class="lazyload" data-src="<?php echo $ruta; ?>assets/img/ico-phone2.png" alt="Telefono">
                                </div>
                                <div class="desc">
                                  <p>
                                    <strong>Teléfonos:</strong><br>
                                    <?php echo $sucursal[$i]['TELEFONO_APP']; ?>
                                  </p>
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>
                      </div>
                      
                    </div>
                    <?php
                    }
                    ?>
                  </div>

                  <br>
                  <br>
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
                
              ?>
              <div id="hm-depoimentos">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                        <h2 class="center">Histórico de Cotizaciones </h2>  
			             
                        <div class="col-md-12 col-12">
                            <center>
				<small>A continuación puedes ver y comparar el gráfico del histórico de las monedas.</small> 
                                <h2>DOLAR X GUARANIES</h2>

                                <!--<select class="form-control" name="grafico" id="grafico" onchange="cambiar(this);">
                                    <option value="1">Dolar x Guarani</option>
                                    <option value="2">Dolar x Real</option>
                                </select>-->
                            </center>
                        </div>
                        <div class="col-md-12">
                            <canvas id="Grafica" style="width:100%;height:300px;"></canvas>
                        </div>
                        
                        <div class="col-md-12 col-12">
                          <center>
                            <br>
                            <h2>REAL X DOLAR</h2>
                          </center>
                        </div>
                        <div class="col-md-12">
                            <canvas id="Grafica2" style="width:100%;height:300px;"></canvas>
                        </div>                
                    </div>
                  </div>
                </div>
              </div>

            <div id="hm-wu" style="display:none!important;">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="row">
                          <div class="col-md-4">
                              <center>
                                  <h2 id="anios_con" class="conteo">0</h2>
                                  <label class="tit_conteo">Años de Experiencia</label>
                              </center>
                          </div>
                          <div class="col-md-4">
                              <center>
                                  <h2 id="sucur_con" class="conteo">0</h2>
                                  <label class="tit_conteo">Sucursales y Agencias</label>
                              </center>
                          </div>
                          <div class="col-md-4">
                              <center>
                                  <h2 id="giros_con" class="conteo">0</h2>
                                  <label class="tit_conteo">Servicios</label>
                              </center>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="servicios">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12">
                     <!-- <h2 class="center">Conoce nuestros servicios</h2> -->
                     <center> <label class="tit_conteo" style="color:black;" >Conoce nuestros servicios</label> </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-4 col-md-offset-2" id="img-ser-1">
                      <div class="m_servicios">
                        <img data-src="<?php echo $ruta; ?>assets/img/compra_y_venta_divisas.jpg" class="lazyload image_servicios img-responsive thumbnail" alt="Compra y Venta de Divisas">
                        <h2> <b> Compra y Venta de Monedas Extranjeras. </b> </h2>
                        <p> 
                          Seguridad en la operación al evitar el riesgo de recibir billetes falsos, tan frecuente en operaciones callejeras.<br>
                          Facilidad de ordenar el cargo/abono a una cuenta, por el importe de la operación.
                        </p>
                      </div>
                  </div>
                  <div class="col-md-4" id="img-ser-2">
                      <div class="m_servicios">
                        <img data-src="<?php echo $ruta; ?>assets/img/transferencia_bancaria.jpg" class="lazyload image_servicios img-responsive thumbnail" alt="Giros y Transferencias">
                        <h2> <b>Emision y Recepción de Ordenes de Pago.</b> </h2>
                        <p>
                          Es una una instrucción entregada por un cliente u ordenante a su banco para que pague una cierta suma de dinero a favor de un tercero o beneficiario en el extranjero.
                          <br>
                          Se puede utilizar para cualquiera de estos fines (entre otros): Antes de la recepción de la mercancía, simultáneamente a la recepción de la mercancía, posterior a la recepción de la mercancía y para fines personales.
                          <br>
                          El uso de este medio de pago esta determinado por la confianza entre el ordénate y su beneficiario.
                        </p>
                      </div>
                  </div>
                  <div class="col-md-4 hidden" id="img-ser-3">
                      <div class="m_servicios">
                        <img data-src="<?php echo $ruta; ?>assets/img/cajas_seguridad.jpg" class="lazyload image_servicios img-responsive thumbnail" alt="Cajas De Seguridad Empresarial y Familiar ">
                        <h2> <b>Cajas De Seguridad Empresarial y Familiar </b> </h2>
                        <p>Ofrecemos servicios de alquiler de Cajas de Seguridad. la misma está diseñada con el propósito de almacenar y proteger artículos de valor o gran importancia.</p>    
                      </div>
                  </div>          
                  <br>
                </div>
              </div>  

            <div class="boton-app" id="boton-app">
                <ul>
                    <!--<li class="azul-limon"><a href="https://www.microsoft.com/es-es/store/apps/cambios-yrendague/9nblggh5kpp8" target="_blank"><span class="fa fa-windows"></span></a></li>-->
                    <li class="verde-limon"><a href="#" target="_blank"><span class="fa fa-android"></span></a></li>
                    <li class="griz-limon"><a href="#" target="_blank"><span class="fa fa-apple"></span></a></li>
                </ul>
            </div>
                
            <div class="calculadora-app hidden-xs" title="Click para fijarlo" id="calculadora-app">
                <div class="boton-calc" id="boton-calc"><i class="fa fa-calculator"></i></div>
                <div class="">
                    <table>
                        <tr>
                            <td colspan="2">CONVERSOR DE MONEDAS</td>                            
                        </tr>
                        <tr>
                            <td><input type="text" class="money" id="valor1" placeholder="0,00" onkeyup="formatear1(event);"></td>
                            <td>
                                <select id="moneda1" onchange="cambia_combo(1);">
                                    <option value="PYG">PYG</option>
                                    <option value="USD">USD</option>
                                    <option value="BRL">BRL</option>
                                    <option value="EUR">EUR</option>
                                    <option value="ARS">ARS</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" id="valor2"></td>
                            <td>
                                <select id="moneda2" onchange="cambia_combo(2);">
                                    <option value="PYG">PYG</option>
                                    <option value="USD" selected>USD</option>
                                    <option value="BRL">BRL</option>
                                    <option value="EUR">EUR</option>
                                    <option value="ARS">ARS</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <script>                
                function formatMoney(amount, decimalCount = 2, decimal = ",", thousands = ".") {
                  try {
                    decimalCount = Math.abs(decimalCount);
                    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                    const negativeSign = amount < 0 ? "-" : "";

                    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                    let j = (i.length > 3) ? i.length % 3 : 0;

                    return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
                  } catch (e) {
                    console.log(e)
                  }
                };                
                function formatear1(e){                    
                    /*var temp = $('#valor1').val();
                    temp = temp.replace(".","");
                    temp = temp.replace(".","");
                    temp = temp.replace(".","");
                    temp = temp.replace(".","");
                    temp = temp.replace(",",".");
                    var fix = parseFloat(temp);
                    fix = fix.toFixed(3);
                    fix = formatMoney(fix, 2);
                    $('#valor1').val(fix);*/
                    calcula();                    
                }
                function calcula(){
                    var val1 = $('#valor1').val();                                  
                    val1 = val1.replace(".","");
                    val1 = val1.replace(".","");
                    val1 = val1.replace(".","");
                    val1 = val1.replace(".","");
                    val1 = val1.replace(",",".");                    
                    val1 = parseFloat(val1);                    
                    val1 = val1.toFixed(2);
                    
                    var moneda1=$('#moneda1').val();
                    var moneda2=$('#moneda2').val();                    
                    
                    var eurv=<?php echo $eur; ?>;
                    var arsv=<?php echo $ars; ?>;
                    var brlv=<?php echo $brl; ?>;
                    var usdv=<?php echo $usd; ?>;
                    
                    var eurc=<?php echo $eurc; ?>;
                    var arsc=<?php echo $arsc; ?>;
                    var brlc=<?php echo $brlc; ?>;
                    var usdc=<?php echo $usdc; ?>;
                    
                    var usdbrl = <?php echo $usdbrl; ?>;                    
                    var usdars = <?php echo $usdars; ?>;
                    var eurbrl = <?php echo $eurbrl; ?>;
                    var arsbrl = <?php echo $arsbrl; ?>;
                    var eurusd = <?php echo $eurusd; ?>;
                    
                    var usdbrlc = <?php echo $usdbrlc; ?>;
                    var usdarsc = <?php echo $usdarsc; ?>;
                    var eurbrlc = <?php echo $eurbrlc; ?>;
                    var arsbrlc = <?php echo $arsbrlc; ?>;
                    var eurusdc = <?php echo $eurusdc; ?>;
                    
                    var temp = "0";
                    if(moneda1=='PYG'){
                        if(moneda2=='PYG'){
                            temp = val1;
                        }
                        if(moneda2=='USD'){
                            temp = val1/usdv;
                        }
                        if(moneda2=='BRL'){
                            temp = val1/brlv;
                        }
                        if(moneda2=='EUR'){
                            temp = val1/eurv;
                        }
                        if(moneda2=='ARS'){
                            temp = val1/arsv;
                        }
                    }
                    if(moneda1=='USD'){                        
                        if(moneda2=='PYG'){
                            temp = usdc * val1;                            
                        }
                        if(moneda2=='USD'){
                            temp = val1;
                        }
                        if(moneda2=='BRL'){                            
                            temp = val1 * usdbrlc;
                        }
                        if(moneda2=='EUR'){
                            temp = val1 / eurusd;
                        }
                        if(moneda2=='ARS'){
                            temp = val1 * usdarsc;
                        }
                    }
                    if(moneda1=='BRL'){
                        if(moneda2=='PYG'){
                            temp = brlc * val1;
                        }
                        if(moneda2=='USD'){
                            temp = val1 / usdbrl;
                        }
                        if(moneda2=='BRL'){
                            temp = val1;
                        }
                        if(moneda2=='EUR'){
                            temp = val1 / eurbrl;
                        }
                        if(moneda2=='ARS'){
                            temp = val1 / arsbrl;
                        }
                    }
                    if(moneda1=='EUR'){
                        if(moneda2=='PYG'){
                            temp = eurc * val1;
                        }
                        if(moneda2=='USD'){
                            temp = val1 / eurusd;
                        }
                        if(moneda2=='BRL'){
                            temp = val1 * eurbrlc;
                        }
                        if(moneda2=='EUR'){
                            temp = val1;
                        }
                        if(moneda2=='ARS'){
                            //temp = val1 / usdars;
                        }   
                    }
                    if(moneda1=='ARS'){
                        if(moneda2=='PYG'){
                            temp = arsc * val1;
                        }
                        if(moneda2=='USD'){
                            temp = val1 / usdars;
                        }
                        if(moneda2=='BRL'){
                            temp = val1 * arsbrlc;
                        }
                        if(moneda2=='EUR'){
                            //temp = val1 / usdars;
                        }
                        if(moneda2=='ARS'){
                            temp = val1;
                        }
                    }                
                    var fix = parseFloat(temp);
                    fix = fix.toFixed(3);
                    fix = formatMoney(fix, 3)
                    $('#valor2').val(fix);
                }
                function cambia_combo(val){
                    if(val==1){
                        var moneda1=$('#moneda1').val();
                        if(moneda1=='USD'){
                            $('#moneda2 option[value="BRL"]').prop("selected", true);
                        }
                        if(moneda1=='BRL'){
                            $('#moneda2 option[value="USD"]').prop("selected", true);
                        }
                    }
                    calcula();
                }
            </script>


            <!--<div class="bt-whatsapp-api">
              <a href="https://api.whatsapp.com/send?phone=123456" target="_blank">   
                <div class="ballon-whatsapp-api">Chatear en línea</div>
                <div class="icon-whatsapp"> <i class="fa fa-whatsapp"></i></div>
              </a>
            </div>-->
            <div class="section-prevencion col-md-12" style="display:none;">
                <!-- FOOTER TOP -->
                <div class="row footer-top">
                    <div class="container">
                        <div class="title-subtile-holder wow fadeIn text_center animated" style="visibility: visible; animation-name: fadeIn;">
                           <!-- <h2 class="section-title light_title">PREVENCIÓN DE LAVADO DE DINERO</h2> -->
                           <center> <label class="tit_conteo" style="color:white;">PREVENCIÓN DE LAVADO DE DINERO</label> </center>
                        </div>
                        <div class="row">
                            <div class="col-md-12 footer-row-1">
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-4 sidebar-1">
                                        <aside class="widget vc_column_vc_container widget_nav_menu">
                                            <h2 class="widget-title">&nbsp;</h2>
                                            <div class="menu-footer1-container">
                                                <center>
                                                    <ul class="menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/1015.pdf" target="_blank">Ley 1015 - 1997</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2302.pdf" target="_blank">Ley 2302 - 2002</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2298.pdf" target="_blank">Ley 2298 - 2003</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2381.pdf" target="_blank">Ley 2381 - 2004</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/2378.pdf" target="_blank">Ley 2378 - 2004</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/3440.pdf" target="_blank">Ley 3440 - 2008</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/3783.pdf" target="_blank">Ley 3783 - 2009</a></li>
                                                    </ul>
                                                </center>
                                            </div>
                                        </aside>
                                    </div>                            
                                    <div class="col-md-4 sidebar-4">
                                        <aside class="widget vc_column_vc_container widget_nav_menu">
                                            <h2 class="widget-title">&nbsp;</h2>
                                            <div class="menu-footer4-container">
                                                <center>
                                                    <ul class="menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/248-2020.pdf" target="_blank">Resolución 248 - 2020</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/9.pdf.pdf" target="_blank">FATF GAFI 9</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/40.pdf" target="_blank">FATF GAFI 40</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/cicad_oea.pdf" target="_blank">CICAD</a></li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo $ruta; ?>assets/pdf/NORMATIVAS_SOBRE_PREVENCION_DE_LA.pdf" target="_blank">REF. INTER. Y NORMATIVAS SOBRE PREVENCIÓN DE LA/FT</a></li>
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
                            <!-- <h2 class="section-title light_title">NÓMINA DE ACCIONISTAS</h2> -->
                             <center> <label class="tit_conteo" style="color:white;"> ACCIONISTAS </label> </center>
                            <h2 class="widget-title">&nbsp;</h2>
                            <div class="section-subtitle light_subtitle">La entidad Cambios Yrendague S.A., comunica al sistema financiero nacional, a sus clientes, inversionistas y público en general, que su composición accionaria a marzo de 2020, se encuentra estructurada de la siguiente manera:</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 footer-row-1">
                                <div class="row">
                                    <div class="col-md-4 sidebar-1">
                                        <aside class="widget vc_column_vc_container widget_nav_menu">
                                            <h2 class="widget-title">&nbsp;</h2>
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
                                            <h2 class="widget-title">&nbsp;</h2>
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
                                            <h2 class="widget-title">&nbsp;</h2>
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
                                        <div class="section-subtitle light_subtitle">La presente publicación se realiza a solicitud de la Superintendencia de Bancos, en el marco de lo establecido en el Artículo 34° numeral 9), contenido en el Artículo 1° de la Ley N° 6104/2018 que modifica la Ley N° 489/95 “Orgánica del Banco Central Del Paraguay.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
              <footer class="col-md-12 col-xs-12">
                <div class="container">             
                  <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <h2>Enlaces del Sitio</h2>
                      <hr>                        
                      <ul class="list-line-footer">            
                        <li><a href="<?php echo $ruta; ?>nosotros/">Nosotros</a></li>
                        <li><a href="<?php echo $ruta; ?>servicios/">Servicios</a></li>
                        <li><a href="<?php echo $ruta; ?>sucursales/">Sucursales</a></li>                        

                        <li>
                          <a href="https://www.facebook.com/Zafra-cambios-364021890736692/" target="_blank">
                            <span class="fa-stack">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          <a href="http://instagram.com/zafracambios/" target="_blank">
                            <span class="fa-stack">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>  
                        </li>
                      </ul>          
                    </div>  
                    <div class="col-sm-6 col-md-8">
                      <h2>Sucursales</h2>
                      <hr>          
                      <ul class="list-footer-sucursales">
                        <?php
                        for ($i=0; $i < count($sucursal); $i++) { ?>
                        <li>
                          <strong><?php echo utf8_encode($sucursal[$i]['DETALLE_SUCURSAL']); ?></strong>
                          <?php echo $sucursal[$i]['TELEFONO']; ?>
                        </li>
                        <?php
                        } 
                         ?>
                        
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
                        Jasy Cambios S.A. - Todos los derechos reservados © 2022
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <!--<a href="https://www.redalia.es/check/yrendague.com.py/" target="_blank"><img src="https://www.redalia.es/seal/k/yrendague.com.py/" alt="SSL secured by Redalia" class="img-responsive" /></a>-->
                        <p>
                            By <a href="https://variablet.com/" target="_blank" alt="Desarrollador" title="Página Web Desarrollado por Variablet">  <img src="https://www.variablet.com/assets/img/variablet.png" width="90px"></a>
                        </p>
                    </div>
                  </div>    
                </div>
              </div>

              <!--<a href="#" class="go-top" style="display: none;"><i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
    </body>    
    <link href="<?php echo $ruta; ?>assets/css/menuzord.css?ver=<?php echo rand(99,999); ?>" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/styles.css?ver=<?php echo rand(9,999); ?>" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/bandeiras.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/animate.css" rel="stylesheet" async>    
    <link href="<?php echo $ruta; ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/menuzord.js" async></script>    
    <script src="<?php echo $ruta; ?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/noframework.waypoints.js"></script>    
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>-->
    <script type="text/javascript" src="<?php echo $ruta; ?>assets/js/jquery-mask.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/moment.min.js"></script>      
    <script src="<?php echo $ruta; ?>assets/js/Chart.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/lazysize.min.js" async></script>
    <script src="<?php echo $ruta; ?>assets/js/scripts.js?ver=<?php echo rand(99,999); ?>" async></script>
    <!--[if IE]>
        <style>
            .container{
                margin-left: inherit;
                margin-right: inherit;
            }
        </style>
    <![endif]-->        
    <script>
        var init=0;
      $(document).ready(function(){        
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        var waypoint = new Waypoint({
          element: document.getElementById('hm-wu'),
          handler: function() {
              if(init==0){
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
                $('#giros_con').animateNumber({
                    number: <?php echo $empresa[0]['giros']; ?> 
                },
                {
                    easing: 'swing',
                    duration: 3000
                });
                  init++;
              }
          },
            offset: '75%'
        });
        function dolar_guarani(){                                    
            var ctx = document.getElementById('Grafica').getContext('2d');
            var l1=[];
            var l2=[];
            <?php if($cotizaciones && count($cotizaciones)>0){
                for($i=0; $i<count($cotizaciones);$i++){ 
                    if($cotizaciones[$i]['p_compra']!=0 && $cotizaciones[$i]['p_venta']!=0){
                        $ftemp=$cotizaciones[$i]['fecha'];
                        $ctemp=$cotizaciones[$i]['p_compra'];
                        $vtemp=$cotizaciones[$i]['p_venta'];
                    ?>                        
                        l1.push({
                            x: '<?php echo $cotizaciones[$i]['fecha']; ?>',
                            y: <?php echo $cotizaciones[$i]['p_compra']; ?>
                        });
                        l2.push({
                            x: '<?php echo $cotizaciones[$i]['fecha']; ?>',
                            y: <?php echo $cotizaciones[$i]['p_venta']; ?>
                        });
                    <?php }else{
                        
                        ?>                        
                        l1.push({
                            x: '<?php echo $ftemp; ?>',
                            y: <?php echo $ctemp; ?>
                        });
                        l2.push({
                            x: '<?php echo $ftemp;; ?>',
                            y: <?php echo $vtemp; ?>
                        });                    
                    <?php }
                }
            }   ?>
            var stackedLine = new Chart(ctx, {
                type: 'line',
                //data: data,
                data: {
                    datasets: [{
                        label: 'Compra',
                        data: l1,
                        backgroundColor: 'rgba(43,41,101,0.04)',
                        pointBackgroundColor: 'rgba(43,41,101,0.8)',
                        borderColor: 'rgb(43,41,101)',
                        borderWidth: 2,
                    }, {
                        label: 'Venta',
                        data: l2,
                        backgroundColor: 'rgba(245,134,52,0.04)',
                        pointBackgroundColor: 'rgba(245,134,52,0.8)',
                        borderColor: 'rgb(245,134,52)',
                        borderWidth: 2,
                        // Changes this dataset to become a line
                        type: 'line'
                    }],
                    //labels: ['January', 'February', 'March', 'April']
                },
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'day',
                                unitStepSize: 0.5,
                                round: 'day',
                                tooltipFormat: "MMM D",
                                displayFormats: {
                                  day: 'MMM D'
                                }
                            },
                            distribution: 'series',
                        }],
                        yAxes: [{
                            ticks: {                                                                        
                                stepSize: 500
                            }
                        }]
                    }
                }
            });
        }
        function dolar_real(){                                    
            var ctx = document.getElementById('Grafica2').getContext('2d');
            var l1=[];
            var l2=[];
            <?php if($dolarreal && count($dolarreal)>0){
                for($i=0; $i<count($dolarreal);$i++){ 
                    if($dolarreal[$i]['p_compra']!=0 && $dolarreal[$i]['p_venta']!=0){
                        $ftemp=$dolarreal[$i]['fecha'];
                        $ctemp=$dolarreal[$i]['p_compra'];
                        $vtemp=$dolarreal[$i]['p_venta'];
                    ?>                        
                        l1.push({
                            x: '<?php echo $dolarreal[$i]['fecha']; ?>',
                            y: <?php echo $dolarreal[$i]['p_compra']; ?>
                        });
                        l2.push({
                            x: '<?php echo $dolarreal[$i]['fecha']; ?>',
                            y: <?php echo $dolarreal[$i]['p_venta']; ?>
                        });
                    <?php }else{
                        ?>                        
                        l1.push({
                            x: '<?php echo $ftemp; ?>',
                            y: <?php echo $ctemp; ?>
                        });
                        l2.push({
                            x: '<?php echo $ftemp;; ?>',
                            y: <?php echo $vtemp; ?>
                        });   
                    <?php }
                }
            }   ?>
          var stackedLine = new Chart(ctx, {
                type: 'line',
                //data: data,
                data: {
                    datasets: [{
                        label: 'Compra',
                        data: l1,
                        backgroundColor: 'rgba(43,41,101,0.04)',
                        pointBackgroundColor: 'rgba(43,41,101,0.8)',
                        borderColor: 'rgb(43,41,101)',
                        borderWidth: 2,
                    }, {
                        label: 'Venta',
                        data: l2,
                        backgroundColor: 'rgba(245,134,52,0.04)',
                        pointBackgroundColor: 'rgba(245,134,52,0.8)',
                        borderColor: 'rgb(245,134,52)',
                        borderWidth: 2,
                        // Changes this dataset to become a line
                        type: 'line'
                    }],
                    //labels: ['January', 'February', 'March', 'April']
                },
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'day',
                                unitStepSize: 0.5,
                                round: 'day',
                                tooltipFormat: "MMM D",
                                displayFormats: {
                                  day: 'MMM D'
                                }
                            },
                            distribution: 'series',
                        }],
                        yAxes: [{
                            ticks: {                                                                        
                                stepSize: 500
                            }
                        }]
                    }
                }
            });
        }
        dolar_guarani();
        dolar_real();           
          $('.loading-prev').hide();
          $('.al-cargar').show();
          $('#minicio').click();
          $('#boton-calc').on('click', function(){
                if($('#calculadora-app').hasClass('active')){
                    console.log('inac');
                    $('#calculadora-app').removeClass('active');
                    $('#calculadora-app i').removeClass('fa-close');
                    $('#calculadora-app i').addClass('fa-calculator');                    
                    $('#calculadora-app').attr('style','');
                }else{
                    console.log('ac');
                    $('#calculadora-app').addClass('active');
                    $('#calculadora-app').css('width','320px');
                    $('#calculadora-app').css('margin-right','20px');
                    $('#calculadora-app i').removeClass('fa-calculator');
                    $('#calculadora-app i').addClass('fa-close');
                }
            });
      });
    </script>    
</html>