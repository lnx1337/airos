<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Aceros Soria</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Gilberto Alonso Caballero Trujano">
    
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
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  
</head>

<body>

<!-- ===================================== END HEADER ===================================== -->




<!-- ===================================== HEADER-NAVIGATION ===================================== -->
<header>
<div class="sticky_navigation">
<div class="datos">
<span class="col_6 telefono"><i class="icon-phone"></i> <small>Atención a clientes: (55)-5692-1000</small></span>
<span class="buscador col_6">
 <a href="#resultados"><i class="icon-search right" style="color:#fff!important;"></i></a><input id="search" type="search" class="auto" placeholder="Buscar Producto..." style="width:93%;" /></span></div>
<div class="menu-soria">
<ul>
<li class="logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-top.png" alt="logo"></a></li>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/index" class="blanco"><li><i class="icon-home red"></i><small>Inicio</small></li></a>
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

$lineas=array('PA'=>'Alambres','PF'=>'Fierro','PE'=>'Estructurales','PTU'=>'Tuberias','PTA'=>'Tableros','PTI'=>'Tiras','PL'=>'Laminas','PMA'=>'Mallas','PME'=>'Metales','PR'=>'Regillas','PPE'=>'Perfiles','PPL'=>'Placas','PPTR'=>'PTR','PC'=>'Construcción');
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


<?php 


if(Yii::app()->controller->id.Yii::app()->controller->action->id=='siteindex') {?>
<!--este slider será administrable y aparecerán productos random (Maximo 5 elementos)-->
<div id="slider">
<ul class="slideshow">
	<?php 

    $modelSlider=Slider::model()->findAll();
	foreach($modelSlider as $key => $value) { ?>
       <li><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $value->imagen; ?>" width="960" height="600" /></a></li>

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
