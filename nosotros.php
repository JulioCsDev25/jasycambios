<?php
require_once("header.php");
$sql="SELECT * FROM sucursales WHERE MOSTRAR = 'SI'";
$sucursal = $db->extraer($sql);
$sql="SELECT * FROM empresa WHERE id=1";
$empresa = $db->extraer($sql);
?>
    <div id="nosotros-slider" class="nosotros row">
        <div class="row">
          <div class="container-fluid">
            <h1 class="center">¿Quienes Somos?</h1>
            <div class="row">
              <!--<div class="col-md-3">
                  <img src="images/local1.png" class="img img-responsive border-radius" alt="Foto Cambios Yrendague" />
              </div>-->
              <div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-12 text-justify">

                <p>
                  ZAFRA CAMBIOS S.A.  es una Institución cambiaria que ofrece servicios de compra/venta de monedas extranjeras y transferencias nacionales. <br>
                  Inicio sus actividades en la ciudad de Saltos del Guaira siendo autorizado por el BANCO CENTRAL DEL PARAGUAY para operar como Casa de Cambios, por Resolución Nro. 2, Acta Nro. 66 en fecha 13 de agosto de 2.008.<br>
                  Somos una empresa que tiene como máxima la innovación y la mejora continua de nuestros servicios, por lo que nos esforzamos en adaptarnos al máximo a las necesidades de nuestros clientes. Contamos con Funcionarios  preparados y eficientes para poder brindarles a nuestros clientes una atención  personalizada basada en la excelencia  donde encontrara la mejor cotización del mercado.
                </p>
                
                <h2 class="text-justify"> Política Antilavado</h2>
                <hr>
                
                <p>
                  ZAFRA CAMBIOS S.A. puede ser objeto en forma directa o indirecta como intermediarios en un proceso para ocultar la fuente verdadera de fondos que originalmente provienen de actividades criminales. Esto se denomina lavado de dinero.<br>
                  Incluso la participación involuntaria en actividades criminales representa una gran preocupación para sus Accionistas, el Directorio y su Gerencia, ya que podría perderse la confianza pública debido a esas actividades.
                  <br>
                  Con el objetivo de asegurar que el sistema financiero no sea usado como canal de fondos ilegales, la entidad realiza esfuerzos razonables para determinar la verdadera identidad de todos los clientes y los titulares beneficiarios que solicitan los productos y servicios que brindamos.
                  <br>
                  La entidad opera en cumplimiento con los siguientes principios generales:
                </p>
                
                <ul>
                  <li>Realiza acciones necesarias para determinar la verdadera identidad de todos los clientes y titulares beneficiarios de los productos y servicios de cambios y transferencias.</li>
                  <li>Hace prevalecer el cumplimiento de las normas de administración de riesgo de LD/FT/FP, descriptas en su Manual al logro de las metas comerciales</li>
                  <li>No acepta a sabiendas fondos ni realiza ningún tipo de negocio con clientes que posean activos que nosotros como entidad tengamos certeza que provienen de actividades criminales o se usarán para financiar el terrorismo o la proliferación de armas de destrucción masiva.</li>
                  <li>Evitará brindar soporte o asistencia a clientes que buscan engañar a los organismos encargados de hacer cumplir la ley mediante la entrega de información falsa, alterada o incompleta.</li>
                  <li>Coopera con los organismos regulatorios y encargados de hacer cumplir la ley en la medida que sea posible, conforme a todas las leyes nacionales y extranjeras aplicables.</li>
                </ul>

                <p>
                  Es esencial que todos los empleados comprendan qué acciones pueden ser violaciones de leyes aplicables contra el lavado de dinero, y que informen toda posible violación de la manera estipulada en el programa de prevención de lavado de dinero.<br>
                  Todos los requerimientos de cumplimiento para la prevención de lavado de dinero comprometen y obligan a los empleados en el desempeño de sus actividades diarias.
                </p>

              </div>
            </div>                
            <br>
            <br>
          </div>
        </div>
    </div>
    
      <div id="hm-wu" style="display:none;">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-xs-12 col-sm-12 col-md-offset-1">
              <div class="row">
                  <div class="col-md-4 col-xs-6 col-sm-6">
                      <center>
                          <h1 id="anios_con" class="conteo">0</h1>
                          <label class="tit_conteo">Años de Experiencia</label>
                      </center>
                  </div>
                  <div class="col-md-4 col-xs-6 col-sm-6">
                      <center>
                          <h1 id="sucur_con" class="conteo">0</h1>
                          <label class="tit_conteo">Sucursales y Agencias</label>
                      </center>
                  </div>
                  <div class="col-md-4 col-xs-6 col-sm-6">
                      <center>
                          <h1 id="giros_con" class="conteo">0</h1>
                          <label class="tit_conteo">Servicios</label>
                      </center>
                  </div>
              </div>
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

      
    <div class="section-prevencion col-md-12 col-xs-12 col-sm-12">
        <!-- FOOTER TOP -->
        <div class="row footer-top">
            <div class="container">
                <div class="title-subtile-holder wow fadeIn text_center animated" style="visibility: visible; animation-name: fadeIn;">
                    <h1 class="section-title light_title">PREVENCIÓN DE LAVADO DE DINERO</h1>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 footer-row-1">
                        <div class="row">
                            <div class="col-md-2 col-xs-12 col-sm-12">
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12 sidebar-1">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer1-container">
                                        <center>
                                            <ul class="menu">
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/1015.pdf" target="_blank">Ley 1015 - 1997</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2302.pdf" target="_blank">Ley 2302 - 2002</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2298.pdf" target="_blank">Ley 2298 - 2003</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2381.pdf" target="_blank">Ley 2381 - 2004</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/2378.pdf" target="_blank">Ley 2378 - 2004</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/3440.pdf" target="_blank">Ley 3440 - 2008</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/3783.pdf" target="_blank">Ley 3783 - 2009</a></li>
                                            </ul>
                                        </center>
                                    </div>
                                </aside>
                            </div>                            
                            <div class="col-md-4 col-xs-12 col-sm-12 sidebar-4">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer4-container">
                                        <center>
                                            <ul class="menu">
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/349.pdf" target="_blank">Resolución 349 - 2013</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/9.pdf.pdf" target="_blank">FATF GAFI 9</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/40.pdf" target="_blank">FATF GAFI 40</a></li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="../assets/pdf/cicad_oea.pdf" target="_blank">CICAD</a></li>
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
                    <h1 class="section-title light_title">NÓMINA DE ACCIONISTAS</h1>
                    <h1 class="widget-title">&nbsp;</h1>
                    <!--<div class="section-subtitle light_subtitle">La entidad Cambios Yrendague S.A., comunica al sistema financiero nacional, a sus clientes, inversionistas y público en general, que su composición accionaria a marzo de 2020, se encuentra estructurada de la siguiente manera:</div>-->
                    <div class="section-subtitle light_subtitle">--</div>
                </div>
                <div class="row">
                    <div class="col-md-12 footer-row-1">
                        <div class="row">
                            <div class="col-md-4 col-xs-4 col-sm-4 sidebar-1">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer1-container">
                                        <ul class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>ACCIONISTAS</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Ramon Alberto Rojas Vallejos</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Alfredo Daniel Cuevas Sanchez	</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Julio Cesar Duarte Servian	</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Juan Dario Echague Gonzalez	</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>Cesar Rubén Vera Campuzano	</center></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4 col-xs-4 col-sm-4 sidebar-4">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
                                    <div class="menu-footer4-container">
                                        <ul class="menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>PARTICIPACIÓN</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>38,73%</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>14,90%</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>12,63%</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>25,27%</center></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><center>8,48%</center></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-4 col-xs-4 col-sm-4 sidebar-4">
                                <aside class="widget vc_column_vc_container widget_nav_menu">
                                    <h1 class="widget-title">&nbsp;</h1>
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
                                La presente publicación se realiza a solicitud de la Superintendencia de Bancos, en el marco de lo establecido en el Artículo 34° numeral 9), contenido en el Artículo 1° de la Ley N° 6104/2018 que modifica la Ley N° 489/95 “Orgánica del Banco Central Del Paraguay.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
      <?php
      require_once("footer.php");