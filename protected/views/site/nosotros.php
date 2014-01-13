<ul class="productos-random">

</ul>
<div id="borra">
<span class="top-title"><h2>¿Quiénes somos?</h2></span>
<div class="grid">
<h2>Historia</h2>
<article class="historia">
	 <p>  <?php    

	 if(isset($modelContenido[0]))
	     echo $modelContenido[0]->contenido; 
	  ?>  

	 </p>
</article>
<h2>Nosotros</h2>

<article class="nosotros">
       <p><?php 
       	 if(isset($modelContenido[1]))
              echo $modelContenido[1]->contenido; ?>
      </p>



<span class="col_12 mision">
  <h2>Misión</h2>
       <p><?php  if(isset($modelContenido[2]))
                       echo $modelContenido[2]->contenido; ?>
       </p>

</span>


<span class="col_12 vision">
  <h2>Visión</h2>
       <p><?php   	if(isset($modelContenido[3]))
                            echo $modelContenido[3]->contenido; ?>
          </p>

</span>
</article>

</div>

<!-- Gallery -->
<div class="gallery center">
  <?php foreach ($modelImagesNosotros as $key => $value) { ?>
  <a href="<?php echo Yii::app()->request->baseUrl; ?>/imagesNosotros/<?php echo $value->imagen; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/imagesNosotros/<?php echo $value->imagen; ?>" width="100" height="100" /></a>
  <?php } ?>

</div>
</div>