<?php
/* @var $this PosicionesController */
/* @var $model Posiciones */
/* @var $form CActiveForm */
?>

<div class="edit-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posiciones-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seccion_cms_id'); ?>
		<?php echo $form->textField($model,'seccion_cms_id'); ?>
		<?php echo $form->error($model,'seccion_cms_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->