<?php
/* @var $this PosicionesController */
/* @var $data Posiciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seccion_cms_id')); ?>:</b>
	<?php echo CHtml::encode($data->seccion_cms_id); ?>
	<br />


</div>