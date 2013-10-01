<li class="item col_4">
<span class="foto-producto"><img src="<?php echo Yii::app()->request->baseUrl; ?>/lineasImages/<?php echo $data->clave.'.jpg'; ?>" alt="producto" width="300" heigth="180" ></span>
<small class="footer-producto gris">
<h6><?php echo $data->clave; ?></h6>
<h5><?php echo  $data->descripcion; ?></h5>
<p><!--máximo 150 caracteres-->
</p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos/view/<?php echo $data->id;?>"><button class="icon-tags small b-details">Ver detalles</button></a>
</small>


</li>