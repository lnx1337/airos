<?php
/* @var $this LineasController */
/* @var $model Lineas */
/* @var $form CActiveForm */
?>

<div class="edit-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lineas-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),

)); ?>


	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'clave'); ?>
        <br>
        <br>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	    <br>
        <br>
	<?php if(isset($model->imagen)){
         echo '<div>Imagen Actual <img src="'.Yii::app()->request->baseUrl.'/lineasImages/'.$model->imagen.'"   heigth="100"  width="100" /></div><label>Actualizar Imagen</label>';
         ?>

	    <?php	}else{ 
              echo $form->labelEx($model,'imagen');
	    }?>
	   
		<?php echo $form->fileField($model, 'imagen'); ?>
		<?php echo $form->error($model,'imagen'); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->