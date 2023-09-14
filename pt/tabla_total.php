<?php
include('../boot/dbconfig.php');
include_once('../boot/mysql.php');

$widget = 'completo';

$db = new mysql_class();
$db->connDb($VAR_DB, $VAR_USERDB, $VAR_PASSDB, $VAR_HOST);
$ruta="http://localhost/cambios/web2020/";
$ruta="https://www.yrendague.com.py/";
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" sizes="16x16" href="<?php echo $ruta; ?>/img/favicon.ico">
      <link href="<?php echo $ruta; ?>assets/css/bootstrap.min.css" rel="stylesheet">      
      <!--[if IE 8]>
          <link href="<?php echo $ruta; ?>assets/css/ie8.css" rel="stylesheet" type="text/css" />
          <link href="ambientes/jquery.galereya.ie.css" rel="stylesheet" >
      <![endif]-->
      <title>Cambios Yrendangue S.A.</title>
      <link href="<?php echo $ruta; ?>assets/css/bandeiras.css" rel="stylesheet" async>
      <meta name="viewport" content="initial-scale=1.0,width=device-width">        
    </head>
    <body>                 
        <?php
        $sql="SELECT * FROM monedas WHERE MONEDA < 10";
        $matriz = $db->extraer($sql);        
        $sql="SELECT * FROM sucursales";
        $sucursal = $db->extraer($sql);
        $sql="SELECT * FROM empresa WHERE id=1";
        $empresa = $db->extraer($sql);

        $arr = explode("-",$sucursal[0]['DETALLE_SUCURSAL']);
        $tit1 = utf8_encode($arr[1]);        
        ?>                      
        <div class="cotacao-box">
          <div class="title" style="">
              <h3>Cotización y Arbitraje</h3>
          </div>
          <div class="conteudo">
            <table class="table-cotacao">
              <thead>
                <tr>
                  <th width="70%">Moeda</th>
                  <th width="15%">Compra</th>
                  <th width="15%">Venda</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    $cant=0;
                    foreach($matriz as $fila){
                        $cant++;
                        $img = 'euro';
                        if($cant<5 && ($widget=='completo' || $widget=='cotizacion')){
                            if($fila['SIMBOLOS']=='USD'){
                                $img = 'dolarUs';
                            }
                            if($fila['SIMBOLOS']=='BRL'){
                                $img = 'real';
                            }
                            if($fila['SIMBOLOS']=='ARS'){
                                $img = 'pesoAr';
                            }
                            if($fila['SIMBOLOS']=='EUR'){
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
                            <td class="num"><?php echo intval($fila['COMPRA']); ?></td>
                            <td class="num"><?php echo intval($fila['VENTA']); ?></td>
                        </tr>
                      <?php }else if(($widget=='completo' || $widget=='arbitraje')){
                            $arr = explode("-",$fila['SIMBOLOS']);
                            $img2="real";
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
                            <td class="num"><?php echo round($fila['COMPRA'],2); ?></td>
                            <td class="num"><?php echo round($fila['VENTA'],2); ?></td>
                        </tr>
                  <?php
                        }
                    } ?>
                </tbody>
              </table>
            </div>  
            <div class="footer">
                <img src="<?php echo $ruta; ?>assets/img/logob.png" class="logob">
            </div>
          </div>                
    </body>    
    <link href="<?php echo $ruta; ?>assets/css/menuzord.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/styles.css" rel="stylesheet" async>    
    <link href="<?php echo $ruta; ?>assets/css/animate.css" rel="stylesheet" async>
    <link href="<?php echo $ruta; ?>assets/css/font-awesome.min.css" rel="stylesheet" async>
    <script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/lazysize.min.js" async></script>   
    <style>        
        .cotacao-box .title{
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .cotacao-box .footer{
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            padding-top: 10px;
            background: rgb(30, 30, 30);
            padding-bottom: 10px;
            text-align: center;            
        }
        .logob{
            height: 20px;
        }
        .cotacao-box h3{
            font-size: 18px;
            color: #fff;
        }
        .cotacao-box .conteudo {
            padding: 0px;
        }
        .cotacao-box{
            width: 100%;
            margin-left: 0px;
            font-size: 12px;
        }
        .num{
            font-size: 12px;
        }
    </style>
</html>