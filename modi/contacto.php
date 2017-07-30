 <?php 
$home="index.php";
$nosotros="nosotros.php";
$productos="productos.php";
$contacto="";
$eslogan="CONTACTO";
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
<body class=""> 
<div class="col-lg-12" style="padding: 0;">
    
    <?php include "include/header.php" ?>

    <!-- Contacto -->
    <div class="col-lg-12">
        <div class="col-lg-offset-1 col-lg-5 contact-form">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Nombre</label>
                    <input type="email" class="form-control name" id="exampleInputEmail3" placeholder="Nombre*">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                    <input type="password" class="form-control email" id="exampleInputPassword3" placeholder="Email*">
                </div>
            </form>
            <form class="text-area">
                <div class="form-group">
                    <textarea type="text" class="form-control" id="exampleInputPassword1" rows="5" placeholder="Mensaje*"></textarea> 
                </div>
                <button type="submit" class="btn btn-contact ">ENVIAR</button>
            </form>
        </div>
        <!-- Contacto -->
        <div class="col-lg-4 contact">
            <p>Puede ponerse en contacto o visítenos en nuestra oficina de lunes a viernes de 08:00 - 17:00</p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="padding">Blvd. industria veracruzana No. 2 corral falso, emiliano zapata</span></p>
            <hr>
            <p><i class="fa fa-phone" aria-hidden="true"></i><span class="padding">(279)834 2000</span></p>
            <p><span class="padding-2">2281777880</span></p>
            <hr>
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="padding">info@envasesmodi.com</span></p>
        </div>     
    </div>
    <div class="col-lg-12" style="padding: 0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59544.884613839225!2d-86.88343054942291!3d21.130288826472224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2bfe37e860b3%3A0x542924d7054fb104!2sPlaza+Las+Am%C3%A9ricas!5e0!3m2!1ses-419!2smx!4v1501045455037" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

<?php include "include/footer.php" ?>

</div><!--body-->
</body>
</html>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/material.js"></script>
<script src="js/ripples.min.js"></script>
