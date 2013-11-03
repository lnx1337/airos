<li class="item col_4">
<span class="foto-producto">






<?php 
$imagen="";

if($data->imagen!=null){
     $imagen=Yii::app()->request->baseUrl."/PrinprodImages/".$data->imagen;
}else {?>

     <?php  if(file_exists(getcwd().'/lineasImages/'.$data->sublinea->linea->clave.'.jpg')){ ?> 
                   <?php $imagen=Yii::app()->request->baseUrl.'/lineasImages/'.$data->sublinea->linea->clave.'.jpg'; ?>
     <?php }else { ?>
                   <?php $imagen="http://placehold.it/300x180"; ?>
     <?php } ?>
<?php } ?>
<img class="productosimg" src="<?php echo  $imagen; ?>" alt="producto" width="300" height="180" />
</span>
<small class="footer-producto gris">
<h6><?php echo $data->sublinea->linea->descripcion; ?></h6>
<h5><?php echo  $data->descripcion_producto; ?></h5>

<p><!--máximo 150 caracteres-->
<?php echo  $data->producto; ?>
</p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/view/<?php echo $data->id;?>"><button class="icon-tags small b-details">Ver detalles</button></a>
</small>


</li>


