<div class="element">
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Productos/Linea/<?php echo $data->id; ?>"> 
	<?php if($data->imagen!=null){ ?>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/lineasImages/<?php echo $data->imagen; ?>" alt=""/>
	 <?php }else{  ?>
		<img src="http://placehold.it/250x180" alt=""/>
	 <?php } ?>
         <div class="pcap">
              <p><?php echo CHtml::encode($data->descripcion); ?></p>
         </div>
    </a>
</div>