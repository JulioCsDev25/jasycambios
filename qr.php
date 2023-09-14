<?php
//$ruta="http://localhost/cambios/";
$ruta="https://www.yrendague.com.py/";
?>
<!DOCTYPE html>
<html lang="es">
    <head>        
        <meta charset="utf-8">
        <link rel="shortcut icon" sizes="16x16" href="<?php echo $ruta; ?>assets/img/favicon.ico">
        <link href="<?php echo $ruta; ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <meta name="p:domain_verify" content="65af47b1909f59507abeba9371ea3266">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <title>Cambios Yrendague S.A. - Cotización de monedas: Dolar, Euro, Real</title>
        <meta name="description" content="La cotización del dólar hoy, Seguí la cotización del dolar minuto a minuto, precio dólar hoy, convertidor de moneda, Real, Peso.">
        <meta name="keywords" content="Dólar hoy, tipo de cambio del dólar, dólar hoy, valor del dólar hoy, tipo de cambio guaraní, cotización del dólar hoy, cambio de moneda en Paraguay">
        <meta name="viewport" content="initial-scale=1.0,width=device-width">
        <style>
            body{
                overflow-x: hidden;
                font-family: "Courier New", Courier, monospace;
            }            
            .loading-prev{
                position: fixed;
                z-index: 99999990;
                background: #fff;
                width: 100vw;
                height: 100vh;                
                text-align: center;
                padding-top: calc(50vh - 80px);
            }
            .desc{
                text-align: center;
            }
            .content{
                max-width: 1020px;
                margin: auto;
            }
            hr{
                border-color: #000;
                margin-top: 8px;
                margin-bottom: 0px;                
            }
            .content{
                padding-top: 10vh;
            }
            #img_logo{
                height: 150px;
            }
            .a-center{
                text-align: center;
            }
            .sep_left{
                line-height: 22px;
                color:#444444;
                padding-left: 40px;
            }
            .footer-credits img{
                width: 150px;
                margin: auto;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            @media only screen and (max-width: 768px) {
                h2{
                    font-size: 1.6rem;
                    font-weight: 600;
                    text-align: center;                    
                }
                h4{
                    text-align: center;
                    font-size: 1.4rem;
                    font-weight: 600;
                }
                .sep_left{
                    padding-left: 0px;
                }
                hr{
                    margin-left: 5%;
                    margin-right: 5%;
                }
                .content{
                    padding-top: 5vh;
                }
                .p-mobil{
                    padding-left: 10%;
                    padding-right: 10%;
                }
                #img_logo{
                    height: 100px;
                }
                .footer-credits img{
                    width: 150px;
                    margin: auto;
                    margin-top: 10px;
                    margin-bottom: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div class="loading-prev">
            <img src="<?php echo $ruta;?>assets/img/loading.gif" style="width:150px;">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-1">
                </div>
                <div class="col-md-10 col-sm-10 col-10">                
                    <div class="row">
                        <div class="col-md-3 col-3 col-sm-3 a-center">
                            <img src="" id="img_logo">
                        </div>
                        <div class="col-md-7 col-7 col-sm-7">
                            <h2>DETALLE DE TRANSFERENCIA</h2>
                            <h2>N° <span id="nro_op"></span></h2>
                        </div>
                        <div class="col-md-12 col-12 col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12 col-sm-12">
                            <h4><b>INFORMACION DEL IMPORTADOR</b></h4>
                        </div>
                        <div class="col-md-1 col-1 col-sm-1">                    
                        </div>
                        <div class="col-md-10 col-10 col-sm-10 p-mobil">
                            <span class="sep_left">ID.OP: <span id="id_op"></span></span><br>
                            <span class="sep_left">Nro. Cuenta Pagador: <span id="nro_cuenta"></span></span><br>
                            <span class="sep_left">TIPO DOC.: <span id="tipo_doc"></span></span><br>
                            <span class="sep_left">NRO DOC.: <span id="nro_doc"></span></span><br>
                            <span class="sep_left">NOMBRE: <span id="nombre"></span></span><br>
                            <span class="sep_left">DIRECCIÓN: <span id="direccion"></span></span><br>
                        </div>
                        <div class="col-md-12 col-12 col-sm-12">                            
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12 col-sm-12">
                            <h4><b>DATOS DE LA OPERACIÓN</b></h4>
                        </div>
                        <div class="col-md-1 col-1 col-sm-1">                    
                        </div>
                        <div class="col-md-10 col-10 col-sm-10 p-mobil">
                            <b>32A: FECHA VALOR</b><br>
                            <span class="sep_left" id="fecha_valor"></span><br>
                            <b>33B: MONEDA/IMPORTE</b><br>
                            <span class="sep_left" id="moneda_importe"></span><br>
                            <b>57A: CUENTA CON LA INSTITUCION</b><br>
                            <span class="sep_left" id="cuenta_insti"></span><br>
                            <span class="sep_left" id="nombre_insti"></span><br>
                            <span class="sep_left" id="direc_insti"></span><br>
                            <span class="sep_left" id="ciudad_insti"></span><br>
                            <b>59F: CLIENTE BENEFICIARIO</b><br>
                            <span class="sep_left" id="cuenta_benef"></span><br>
                            <span class="sep_left" id="nombre_benef"></span><br>
                            <span class="sep_left" id="direc_benef"></span><br>
                            <span class="sep_left" id="ciudad_benef"></span><br>
                            <b>70: OBS DEL REMITENTE</b><br>
                            <span class="sep_left" id="obs_rem"></span><br>
                        </div>
                        <div class="col-md-12 col-12 col-sm-12">                            
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="footer-credits">
                <div class="container">
                  <div class="row">                      
                      <!--<div class="col-sm-8 col-md-8 col-8">
                        <div class="desc">
                            Cambios Yrendague S.A. - Todos los derechos reservados © 2020
                        </div>
                      </div>-->
                    <div class="col-sm-12 col-md-12 col-12">
                        <a href="https://www.redalia.es/check/yrendague.com.py/" target="_blank"><img src="https://www.redalia.es/seal/k/yrendague.com.py/" alt="SSL secured by Redalia" class="img-responsive" /></a>
                    </div>
                  </div>    
                </div>
              </div>
              <!--<a href="#" class="go-top" style="display: none;"><i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <input type="hidden" id="id_sofia" value="<?php echo $_GET['id_sofia']; ?>">
    </body>
    <script src="<?php echo $ruta; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $ruta; ?>assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                method: "GET",
                url: "<?php echo $ruta;?>api/bcp/post.php",
                data: {            
                    id_sofia: $('#id_sofia').val()
                }
            })
            .done(function( res ){
                //console.log(res);
                $('#img_logo').attr('src',res.logo);
                $('#nro_op').html(res.nro_op_entidad);
                $('#id_op').html(res.id_op);
                $('#nombre').html(res.cliente);
                $('#tipo_doc').html(res.tipo_doc_rtte);
                $('#nro_cuenta').html(res.nrocta_rtte);
                $('#direccion').html(res.direccion);
                $('#nro_doc').html(res.nro_doc_rtte2);
                
                $('#fecha_valor').html(res.fecha_in);
                $('#moneda_importe').html(res.moneda+' / '+res.valor_transf);
                $('#obs_rem').html(res.rtte_info);
                $('#cuenta_benef').html(res.nro_cta_benef);
                $('#nombre_benef').html(res.nomb_benef);
                $('#direc_benef').html(res.benef_direccion);
                $('#ciudad_benef').html(res.ciudad_benef);
                
                $('#cuenta_insti').html(res.swift);
                $('#direc_insti').html(res.banco_direccion_dest);
                $('#ciudad_insti').html(res.ciudad_bco_dest);
                $('#nombre_insti').html(res.nomb_bco_dest);
                
                setTimeout(function(){                                    
                    $('.loading-prev').hide();
                },3000);
            });
        });
    </script>
</html>