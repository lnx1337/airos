<?php
/* @var $this SeccionCmsController */
/* @var $model SeccionCms */
/* @var $form CActiveForm */
?>

<div class="edit-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seccion-cms-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'seccion'); ?>
		<?php echo $form->textField($model,'seccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'seccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->