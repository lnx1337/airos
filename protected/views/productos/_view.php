<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea_id')); ?>:</b>
	<?php echo CHtml::encode($data->linea_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_id')); ?>:</b>
	<?php echo CHtml::encode($data->unidad_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalles')); ?>:</b>
	<?php echo CHtml::encode($data->detalles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vistos')); ?>:</b>
	<?php echo CHtml::encode($data->vistos); ?>
	<br />


</div>