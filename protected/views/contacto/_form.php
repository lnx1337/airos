<?php
/* @var $this ContactoController */
/* @var $model Contacto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="campo">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="campo">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="campo">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="campo">
		<?php echo $form->labelEx($model,'comentarios'); ?>
		<?php echo $form->textArea($model,'comentarios',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comentarios'); ?>
	</div>

     <span class="campo">
		<label class="sel">Me interesa recibir información de:</label>
		<select id="select3" multiple="multiple" class="fancy">
		  <option value="0">-- Puedes elegir varios --</option>
		  <option value="1">Producto 1</option>
		  <option value="2">Producto 2</option>
		  <option value="3">Producto 3</option>
		  <option value="4">Otro(s) Producto(s)</option>
		  </select>
    </span>


	<div class="campo">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textArea($model,'otros',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	<div class="campo buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


