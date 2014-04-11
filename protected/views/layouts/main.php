<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Aceros Soria SA de CV :: La Fortaleza de un gran Servicio</title>
<META NAME="description" CONTENT="Aceros Soria venta de materiales de acero, piezas de acero, accesorios, ferretería, materiales para construcción y mucho más.">
<META NAME="keywords" CONTENT="aceros soria, soria, figueroa, aceros, varillas, acero, paneles, panel w, tablaroca, perfiles, ptr, tubos, herreria, metales, construccion, materiales, material de metal, flecha perfiles, ptr, fierro, placa, lamina, tuberias, tuberia, pvc, galvanizado, tornillos, tuercas, cobre, canal, irving, viga, vigas, tubos de metal, tubos de cobre, iztapalapa, aceros iztapalapa, df, envios de acero mexico, envios gratis, acero barato, acero gratis, ventas de acero, chatarra, metales pesados, plomeria, soldadura, mascarillas, segurindad, industria, ladrillos, plastico granulado,pasamanos, soleras, perforada, tee, fierro estructural, canal,pintado perfil, estructural, zintro, placas, placa,plana, laminas pintro, acanalada, lamina, galvanizada,policarbonato, mallas, tiras, tableros, rejas, paneles de metal, mosquiteros">
<META NAME="robot" CONTENT="index,follow">
<META NAME="copyright" CONTENT="Copyright © 2014 Aceros Soria SA de CV. ">
<META NAME="author" CONTENT="Alonso Caballero  // Jair Peña">
<META NAME="language" CONTENT="es">
<META NAME="revisit-after" CONTENT="2">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- Stylesheets -->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="all" /> 
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
 <script>
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
 </script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48737916-1', 'acerossoria.com');
  ga('send', 'pageview');

</script>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  
</head>

<body>

<!-- ===================================== END HEADER ===================================== -->




<!-- ===================================== HEADER-NAVIGATION ===================================== -->
<header>
<div class="sticky_navigation">
<div class="datos">
<span class="col_6 telefono"><i class="icon-phone"></i> <small>Atención a clientes: (55)-5692-1000</small>
<small class="email_header">ventas@acerossoria.com</small>
</span>
<span class="buscador col_6">
 <a href="#resultados"><i class="icon-search right" style="color:#fff!important;"></i></a><input id="search" type="search" class="auto" placeholder="Buscar Producto..." style="width:93%;" /></span></div>
<div class="menu-soria">
<ul>
<li class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-top.png" alt="logo"></a></li>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index" class="blanco"><li><i class="icon-home red"></i><small>Inicio</small></li></a>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Productos" class="blanco"><li><i class="icon-shopping-cart red"></i><small>Productos</small></li></a>

<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/nosotros" class="blanco"><li><i class="icon-briefcase red"></i><small>Nosotros</small></li></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/contacto" class="blanco"><li><i class="icon-envelope-alt red"></i><small>Contacto</small></li></a>
<li class="social-buttons"><span class="social">
<a href="https://twitter.com/acerossoria" target="_blank"><i class="social-img">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twtt.png"></i></a>
<a href="https://www.facebook.com/acerossoria" target="_blank"><i class="social-img">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/feis.png"></i></a>
<a href="https://plus.google.com/114038653456290361525/posts" target="_blank"><i class="social-img">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gogole.png"></i></a>
</span></li>
</ul>

<span class="garantia"><i class="icon-truck"></i><small> Garantía de entrega: <strong>En el transcurso de 24hrs</strong></small></span>
</div>
<div class="container-nav">


<?php $modelLineas= Lineas::model()->findAll(array('order'=>'descripcion','condition'=>'descripcion in ("CUADRADOS","Angulos","Lamina","Perfil","PTR","REDONDOS","SOLDADURA MAQUINAS PARA SOLDAR","SOLERAS","TABLERO","TUBERIA","VARILLA","VIGA")')); 


$lista=array();
foreach ($modelLineas as $key => $valueLineas) {
		foreach ($valueLineas->sublineas as $key => $valueSublinea) { 
			     if(!isset($lista[$valueLineas->descripcion])){
                      $lista[$valueLineas->descripcion]=array('linea_id'=>$valueLineas->id,'descripcion'=>$valueLineas->descripcion);
			     }
                 $lista[$valueLineas->descripcion]['sublineas'][]=array('descripcion' =>$valueSublinea->descripcion,'sublinea_id'=>$valueSublinea->id,'linea_id'=>$valueSublinea->linea_id);               
		}	
}

?>

<!--Maximo 10 categorias-->
<a class="toggleMenu blanco" href="#">Categorías</a>
<ul class="nav-li">

<?php

$lineas=array('PA'=>'Alambres','PF'=>'Fierro','PE'=>'Estructurales','PTU'=>'Tuberias','PTA'=>'Tableros','PTI'=>'Tiras','PL'=>'Laminas','PMA'=>'Mallas','PME'=>'Metales','PR'=>'Rejillas','PPE'=>'Perfiles','PPL'=>'Placas','PPTR'=>'PTR','PC'=>'Construcción');
$lista=null;
$i=1;
foreach ($lineas as $key => $value) {
       $lista=Yii::app()->db->createCommand('select * from tbl_lineas where clave like "'.$key.'%"')->queryAll();
       echo '<li class="test" ><a href="#">'.$value.'</a>';
	   echo '<ul>';
		foreach ($lista as $key => $valueLinea) {	
			echo '<li><a href="'.Yii::app()->request->baseUrl.'/index.php/Productos/Linea/'.$valueLinea['id'].'"  >'.$valueLinea['descripcion'].'</a></li>';
		}
     echo "</ul></li>";		
   if($i>=15){
   	break;
   } 
     $i++; 
}


 ?>
	
</ul>
</div>

</div>
</header>
<!-- ===================================== HEADER-NAVIGATION ===================================== -->


<!-- ===================================== SLIDER ===================================== -->
<!--este slider será administrable y aparecerán productos random (Maximo 5 elementos)-->

<?php 


if(Yii::app()->controller->id.Yii::app()->controller->action->id=='siteindex') {?>

<div id="slider">
<ul class="slideshow">
	<?php 

    $modelSlider=Slider::model()->findAll(array('condition'=>'estatus=1'));
	foreach($modelSlider as $key => $value) { ?>
       <li><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $value->imagen; ?>" width="960" height="500" /></a></li>

	<?php } ?>
</ul>
</div>

<?php } ?>

<!-- ===================================== SLIDER ===================================== -->



<div class="content shadow">
<div class="grid">
<div class="content-productos" id="resultados">
<div class="col_12">

 <?php echo $content; ?>

</div>
</div>
</div><!-- END GRID-->
</div>






<!-- ===================================== START FOOTER ===================================== -->
<footer>
<div class="col_12">
<span class="copyright">Aceros Soria S.A de C.V 2013 ⎪ Todos los derechos reservados</span>
<span class="menu-footer">
<ul>
<li><a href="privacy.html">Políticas de Privacidad </a><i>⎪</i></li>
<li><a href="terminos.html">Términos y Condicionesa</a><i>⎪</i></li>
<li><a href="bolsadetrabajo.html">Bolsa de Trabajo</a></li>
</ul>
</span>
</div>
</footer>

<?php 
Yii::app()->clientScript->registerPackage('jquery'); 
?>

<!-- ===================================== END FOOTER ===================================== -->

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/kickstart.js"></script>  
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/stickybar.js"></script>  
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/search.js"></script>    
</body></html>
