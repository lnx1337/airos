<span class="top-title"><h2><?php echo $model->descripcion_producto; ?></h2></span>
<div class="slider-producto col_7">
<ul class="slideshow">

<?php 
$imagen="";

if($model->imagen!=null){
     $imagen=Yii::app()->request->baseUrl."/PrinprodImages/".$model->imagen;
}else {?>

     <?php  if(file_exists(getcwd().'/lineasImages/'.$model->sublinea->linea->clave.'.jpg')){ ?> 
                   <?php $imagen=Yii::app()->request->baseUrl.'/lineasImages/'.$model->sublinea->linea->clave.'.jpg'; ?>
     <?php }else { ?>
                   <?php $imagen=Yii::app()->request->baseUrl.'/lineasImages/default.png'; ?>
     <?php } ?>
<?php } ?>

<li><img src="<?php echo $imagen; ?>" width="600" height="400" /></li>
</ul>
</div>
<div class="detalle-producto col_5">
<h3>Ficha Técnica y detalles</h3>
<article>
<p>Linea: <?php echo $model->sublinea->linea->descripcion; ?><br>Sublinea: <?php echo $model->sublinea->descripcion; ?><br>Clave: <?php echo $model->clave; ?><br> Nombre del Producto: <?php echo $model->producto; ?></p><br><?php echo $model->ficha_tecnica; ?>
<span>
<!--<i class="icon-info-sign"> pza/kg/metro</i>-->
</span>
</article>
</div>
<div class="tabla-detalles">
<table cellspacing="0" cellpadding="0" class="striped">
  <thead><tr class="alt first last">
    <th>Item1</th>
    <th>Item2</th>
    <th>Item3</th>
  </tr></thead>
  <tbody><tr class="first">
    <td>Item1</td>
    <td>Item2</td>
    <td>Item3</td>
  </tr><tr class="alt">
    <td>Item1</td>
    <td>Item2</td>
    <td>Item3</td>
  </tr><tr>
    <td>Item1</td>
    <td>Item2</td>
    <td>Item3</td>
  </tr><tr class="alt last">
    <td>Item1</td>
    <td>Item2</td>
    <td>Item3</td>
  </tr></tbody>
  </table>
</div>
</div>
<div class="relacionados">
<span class="top-title left"><h2>Productos Relacionados</h2></span>
<ul><!--maximo 12 elementos-->


<?php 

$count=1;
  foreach ($modelRelacionados as $key => $value) { ?>

<?php 
$imagen="";

if($model->imagen!=null){
     $imagen=Yii::app()->request->baseUrl."/PrinprodImages/".$model->imagen;
}else {?>

     <?php  if(file_exists(getcwd().'/lineasImages/'.$model->sublinea->linea->clave.'.jpg')){ ?> 
                   <?php $imagen=Yii::app()->request->baseUrl.'/lineasImages/'.$model->sublinea->linea->clave.'.jpg'; ?>
     <?php }else { ?>
                   <?php $imagen=Yii::app()->request->baseUrl.'/lineasImages/default.png'; ?>
     <?php } ?>
<?php } ?>


<li><span class="span-rel"><?php echo $value->descripcion_producto; ?></span><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/view/<?php echo $value->id;?>"><img src="<?php echo $imagen; ?>" width="150" height="150" alt="relacionado"></a></li>


<?php   if($count>6){ break; }
          $count++;

 } ?>

</ul>

</div>
</div>
</div><!-- END GRID-->
</div>




                             
