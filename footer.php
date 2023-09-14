
<footer class="col-md-12 col-xs-12">
                <div class="container">             
                  <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <h2>Enlaces del Sitio</h2>
                      <hr>                        
                      <ul class="list-line-footer">            
                        <li><a href="<?php echo $ruta; ?>nosotros/">Nosotros</a></li>
                        <!--<li><a href="<?php echo $ruta; ?>cotizaciones/">Cotizaciones</a></li>-->           
                        <li><a href="<?php echo $ruta; ?>servicios/">Servicios</a></li>
                        <!--<li><a href="<?php echo $ruta; ?>cumplimiento/">Cumplimiento</a></li>-->
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
      $(".loading-prev").css("display","none");
    </script>    
</html>