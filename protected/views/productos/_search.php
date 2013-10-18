<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sublinea_id'); ?>
		<?php echo $form->textField($model,'sublinea_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad_id'); ?>
		<?php echo $form->textField($model,'unidad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_producto'); ?>
		<?php echo $form->textField($model,'descripcion_producto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ficha_tecnica'); ?>
		<?php echo $form->textField($model,'ficha_tecnica',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vistos'); ?>
		<?php echo $form->textField($model,'vistos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->