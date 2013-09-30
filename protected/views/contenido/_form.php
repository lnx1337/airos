<?php
/* @var $this ContenidoController */
/* @var $model Contenido */
/* @var $form CActiveForm */
?>

<div class="edit-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contenido-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contenido'); ?>

		<?php echo $form->labelEx($model,'posiciones_id'); ?>
		<?php echo $form->textField($model,'posiciones_id'); ?>
		<?php echo $form->error($model,'posiciones_id'); ?>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->