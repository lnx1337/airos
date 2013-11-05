<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slider-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	    <?php if(isset($model->imagen)){
         echo '<div>Imagen Actual <img src="'.Yii::app()->request->baseUrl.'/images/'.$model->imagen.'"   heigth="100"  width="100" /></div><label>Actualizar Imagen</label>';
         ?>

	    <?php	}else{ 
              echo $form->labelEx($model,'imagen');
	    }?>
	   
		<?php echo $form->fileField($model, 'imagen'); ?>
		<?php echo $form->error($model,'imagen'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estatus'); ?>
		<?php echo CHtml::dropDownList('Slider[estatus]', 'estatus', array('1'=>'Activo','0'=>'Inactivo',),array('empty' => '(Seleccione)')); ?>
		<?php echo $form->error($model,'estatus'); ?>
	</div>


	    


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->