 <!DOCTYPE html>
<html>
<head>
	<title>MODI Envases</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8" /> 
	<link rel="stylesheet" type="text/css" href="css/modi.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css">
	</head>
<body class=""> 
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="padding: 0;">
    
    <?php include "include/header-home.html" ?>

    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-1" id="productos">
        <div class="container">
            <div class="col-lg-8 col-sm-8 col-md-12 col-xs-12" id="producto">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="tituproduc">
                    <span class="fuente" style="font-size: 40px;">NUESTROS PRODUCTOS</span>
                </div><!--tituproduc-->
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="textproduc">
                    <p>Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet. Cu usu duis aliquando, nam ne tation primis consulatu. Sed id putent aperiri adipiscing, et nam sonet expetenda. Est eripuit graecis cu. Ea recteque persecuti adolescens nam.</p>
                </div><!--textproduc-->
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="descproduc">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="cuadro">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="producto1">
                            <div class="col-lg-12">
                                <center><img src="img/productos/boto.jpg" class="img-responsive img-produc"></center>
                                <h5 style="text-align: center;color: #E18C24;font-weight: bold;font-size: 13px;">ENVASE GRADO ALIMENTICIO</h5>
                                <span style="text-align: justify;">Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet.</span>
                            </div>
                        </div><!--producto1-->
                    </div><!--producto1-->
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="cuadro">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="producto2">
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <center><img src="img/productos/boto.jpg" class="img-responsive img-produc"></center>
                                <h5 style="text-align: center;color: #232323;font-weight: bold;font-size: 13px;">ENVASE VIRGEN TONOS GRISES</h5>
                                <span style="text-align: justify;">Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet.</span>
                            </div>
                        </div><!--producto2-->
                    </div><!--cuadro-->
                    <div class="col-lg-6" id="cuadro">
                        <div class="col-lg-12" id="producto3">
                            <div class="col-lg-12">
                                <center><img src="img/productos/boto.jpg" class="img-responsive img-produc"></center>
                                <h5 style="text-align: center;color: #B0172E;font-weight: bold;font-size: 13px;">ENVASE SEGUNDA ALTA RESISTENCIA</h5>
                                <span style="text-align: justify;">Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet.</span>
                            </div>
                        </div><!--producto3-->
                    </div><!--cuadro-->
                    <div class="col-lg-6" id="cuadro">
                        <div class="col-lg-12" id="producto4">
                            <div class="col-lg-12">
                                <center><img src="img/productos/boto.jpg" class="img-responsive img-produc"></center>
                                <h5 style="text-align: center;color: #080080;font-weight: bold;font-size: 13px;">ENVASE VIRGEN TONOS AZULES</h5>
                                <span style="text-align: justify;">Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet.</span>
                            </div>
                        </div><!--producto4-->
                    </div><!--cuadro-->
                </div><!--descproduc-->
            </div><!--producto-->


            <div class="col-lg-4" id="formulario">
                <div class="col-lg-12" id="tituform" style="background-color: #080080;">
                    <div class="col-lg-12" style="text-align: center;color: white">
                        <span class="fuente" style="font-size: 40px;">SOLICITAR PRESUPUESTO</span>
                    </div>
                </div><!--tituform-->
                <div class="col-lg-12" id="form">
                    <form class="row" id="row">
                        <div class="form-group">
                            <input class="form-control color-form" name="correo" id="correo" type="text" placeholder="Nombre:" />
                        </div><!--form-group-->
                        <div class="form-group">
                            <input class="form-control color-form" name="correo" id="correo" type="text" placeholder="Email:" />
                        </div><!--form-group-->
                        <div class="form-group">
                            <input class="form-control color-form" name="correo" id="correo" type="text" placeholder="Teléfono:" />
                        </div><!--form-group-->
                        <div class="form-group">
                <select id="s1" class="form-control color form" style="color: #BEBEBE;">
                <option value="select">Tipo de producto</option>
                  <option value="1">Envase grado alimenticio</option>
                  <option value="2">Envase virgen tonos grises</option>
                </select>
                        </div><!--form-group-->
                        <div class="form-group">
                            <textarea class="form-control color-form" rows="5" name="comentario" id="comentario" placeholder="Comentarios:"></textarea>
                        </div><!--form-group-->
                        <div class="form-group" style="text-align: center;">
                            <button class="btnf">Solicitar cotización</button>
                        </div><!--form-group-->
                    </form><!--row-->
                </div><!--form-->
            </div><!--formulario-->
        </div><!--container-->
    </div><!--productos-->


    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-1" id="homenosotros" style="background-color: #080080;padding-right: 0px !important;padding-bottom: 0;">
        <div class="container" style="padding-right: 0px !important;">
            <div class="col-lg-6" id="descnosotros" style="color: #fff;">
                <div class="col-lg-12" id="titunosotros" style="padding-top: 4px;">
                    <span class="fuente" style="font-size: 40px;">NOSTROS</span>
                </div><!--titunostros-->
                <div class="col-lg-12" id="textnosotros" style="text-align: justify;">
                    <span>Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet. Cu usu duis aliquando, nam ne tation primis consulatu. Sed id putent aperiri adipiscing, et nam sonet expetenda. Est eripuit graecis cu. Ea recteque persecuti adolescens nam.</span>
                    <div class="col-lg-12" id="listnosotros" style="">
                        <div class="col-lg-3" id="check" style="padding-top: 20px;">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </div><!--check-->
                        <div class="col-lg-9" id="textcheck" style="margin-left: -65px !important;padding-right: 0px !important;width: 88% !important;padding-top: 20px;">
                            <span>Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet. Cu usu duis aliquando, nam ne tation primis consulatu. Sed id putent aperiri adipiscing, et nam sonet expetenda.</span>
                        </div><!--textcheck-->
                        <div class="col-lg-3" id="check" style="padding-top: 20px;">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </div><!--check-->
                        <div class="col-lg-9" id="textcheck" style="margin-left: -65px !important;padding-right: 0px !important;width: 88% !important;padding-top: 20px;">
                            <span>Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet. Cu usu duis aliquando, nam ne tation primis consulatu. Sed id putent aperiri adipiscing, et nam sonet expetenda.</span>
                        </div><!--textcheck-->
                        <div class="col-lg-3" id="check" style="padding-top: 20px;">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </div><!--check-->
                        <div class="col-lg-9" id="textcheck" style="margin-left: -65px !important;padding-right: 0px !important;width: 88% !important;padding-top: 20px;">
                            <span>Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet. Cu usu duis aliquando, nam ne tation primis consulatu. Sed id putent aperiri adipiscing, et nam sonet expetenda.</span>
                        </div><!--textcheck-->
                    </div><!--listnostros-->
                </div><!--textnosotros-->
            </div><!--descnosotros-->
        <div class="col-lg-6" id="imgnosotros">
            <img src="img/home/galeria3.png" class="img-responsive">
        </div><!--imgnosotros-->
        </div><!--container-->               
    </div><!--nosotros-->


    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-1 paddcero" id="instalaciones">
        <div class="col-lg-12" style="padding-top: 20px;padding-right: 0;padding-left: 0;">
            <div class="col-lg-12" id="tituinsta" style="text-align: center;padding-bottom: 20px;">
                <span class="fuente" style="font-size: 40px;color: #525252;">NUESTRAS INSTALACIONES</span>
            </div><!--tituinsta-->
            <div class="col-lg-12" id="gallery" style="padding-right: 0;padding-left: 0;">
                <div id="quad">
                    <figure>
                    <img src="img/home/galeria1.png">
                    <figcaption>MODI Envases 1</figcaption>
                    </figure>
                    <figure>
                      <img src="img/nosotros/galeria4.jpg">
                      <figcaption>MODI Envases 2</figcaption>
                    </figure>
                    <figure>
                      <img src="img/nosotros/galeria5.jpg">
                      <figcaption>MODI Envases 3</figcaption>
                    </figure>
                    <figure>
                      <img src="img/home/galeria2.png">
                      <figcaption>MODI Envases 4</figcaption>
                    </figure>
                    <figure>
                    <img src="img/home/galeria3.png">
                    <figcaption>MODI Envases 5</figcaption>
                    </figure>
                    <figure>
                      <img src="img/nosotros/galeria6.jpg">
                      <figcaption>MODI Envases 6</figcaption>
                    </figure>
                    <figure>
                      <img src="img/nosotros/galeria7.jpg">
                      <figcaption>MODI Envases 7</figcaption>
                    </figure>
                    <figure>
                      <img src="img/nosotros/galeria8.jpg">
                      <figcaption>MODI Envases 8</figcaption>
                    </figure>
                </div><!--quad-->
            </div><!--gallery-->
        </div><!--container-->
    </div><!--instalaciones-->


    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-1" id="footer" style="background-color: #080080">
        <div class="container" style="padding-top: 50px;padding-bottom: 50px;color: #fff;text-align: left;font-weight: bold;">
            <div class="col-lg-3" id="foot1">
                <div class="col-lg-12">
                    <h5>SOBRE NOSOTROS</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet.Lorem ipsum dolor sit amet, no vis aliquid laboramus expetendis, has ex viris imperdiet.</h5>
                </div>
            </div><!--foot1-->
            <div class="col-lg-3" id="foot2">
                <div class="col-lg-12">
                    <h5>NUESTROS SERVICIOS</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Servicios</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Reparación del motor</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Diagnóstico del ordenador</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Silenciadores</h5>
                </div>
            </div><!--foot2-->
            <div class="col-lg-3" id="foot3">
                <div class="col-lg-12">
                    <h5>ENLACES RÁPIDOS</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Home</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Nosotros</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Productos</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Contacto</h5>
                </div>
            </div><!--foot3-->
            <div class="col-lg-3" id="foot4">
                <div class="col-lg-12">
                    <h5>INFO</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Puede ponerse en contacto con nosotros o visitarnos</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Tel: 228-254-57-59</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Email: info@modienvases.mx</h5>
                </div>
                <div class="col-lg-12">
                    <h5>Horario: 8:00 am - 17:00 pm</h5>
                </div>
            </div><!--foot4-->
        </div><!--container-->
    </div><!--footer-->

    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-1" style="background-color: #741919;text-align: center;color: #FFF;">
            <h4>TODOS LOS DERECHOS RESERVADOS POR MODI ENVASES / <a href="" style="text-decoration: none;color: #fff">AVISO DE PRIVACIDAD</a></h4>
        </div>



</div><!--body-->
</body>
</html>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/material.js"></script>
<script src="js/ripples.min.js"></script>
<script>
    $.material.init();
    var quadimages = document.querySelectorAll("#quad figure");
for(i=0; i<quadimages.length; i++) {
  quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") }); 
}
</script>
