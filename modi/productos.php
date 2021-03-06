 <?php 
$home="index.php";
$nosotros="nosotros.php";
$productos="";
$contacto="contacto.php";
$eslogan="PRODUCTOS";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MODI Envases</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8" /> 
	<link rel="stylesheet" type="text/css" href="css/modi.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css">
	</head>
<body> 
<div class="col-lg-12" style="padding: 0;">
    
<?php include "include/header.php" ?>

    <!-- Contacto -->
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-offset-1 col-lg-3 ">
          <ul class="nav nav-stacked nav-product" role="tablist">
            <li role="presentation" class="title">
              <a href="#">NUESTROS PRODUCTOS </a>
            </li>
            <li role="presentation" class="orange active">
              <a href="#alimenticio" aria-controls="alimenticio" role="tab" data-toggle="tab">ENVASE GRADO ALIMENTICIO <i class="icon-2 fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
            <li role="presentation" class="gray">
              <a href="#grises" aria-controls="grises" role="tab" data-toggle="tab">ENVASE VIRGEN TONOS GRISES <i class="icon fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
            <li role="presentation" class="blue">
              <a href="#azules" aria-controls="azules" role="tab" data-toggle="tab">ENVASE VIRGEN TONOS AZULES <i class="icon fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
            <li role="presentation" class="red">
              <a href="#resistencia" aria-controls="resistencia" role="tab" data-toggle="tab">ENVASE SEGUNDA ALTA RESISTENCIA <i class="icon-3 fa fa-chevron-right" aria-hidden="true"></i></a>
            </li>
          </ul>
          <div class="contact-product hidden-xs">
            <p class="contact-p">CONTACTO </p>
            <p class="text-center">Teléfono </p>
            <p class="telefono text-center"><i class="fa fa-phone icon-contact" aria-hidden="true"></i> 228-254-57-59 </p>
            <p class="email text-center"> E-mail: </p>
            <p class="text-center telefono"><i class="fa fa-envelope icon-contact" aria-hidden="true"></i> info@modienvases.mx </p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="alimenticio">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-orange">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-orange">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-orange">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-orange">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
            </div>


            <div role="tabpanel" class="tab-pane" id="grises">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-gris">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-gris">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-gris">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-gris">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
            </div>



            <div role="tabpanel" class="tab-pane" id="azules">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-azul">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-azul">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-azul">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-azul">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
            </div>


            <div role="tabpanel" class="tab-pane" id="resistencia">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-rojo">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-rojo">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-rojo">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="square">
                  <img src="img/productos/boto.jpg" class="img-responsive">  
                  <p class="title-rojo">Envase grado alimenticio</p>
                  <p class="text-product">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut felis tempor, porta ligula sed, hendrerit felis. </p>
                </div>
              </div>
            </div>
          </div>
        </div>      

        <div class="col-xs-12 visible-xs ">
          <div class="contact-product">
            <p class="contact-p">CONTACTO </p>
            <p class="text-center">Teléfono </p>
            <p class="telefono text-center"><i class="fa fa-phone icon-contact" aria-hidden="true"></i> 228-254-57-59 </p>
            <p class="email text-center"> E-mail: </p>
            <p class="text-center telefono"><i class="fa fa-envelope icon-contact" aria-hidden="true"></i> info@modienvases.mx </p>
          </div>
        </div>
    </div>

<?php include "include/footer.php" ?>

</div><!--body-->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/material.js"></script>
<script src="js/ripples.min.js"></script>
</body>
</html>

