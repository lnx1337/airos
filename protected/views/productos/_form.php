<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>
<div class="edit-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),

)); ?>


	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'clave'); ?>

		<?php echo $form->labelEx($model,'linea_id'); ?>
	    <?php  echo $form->dropDownList($model,'linea_id', CHtml::listData(Lineas::model()->findAll(), 'id', 'descripcion'), array('empty'=>'Seleccion'));  ?>
		<?php echo $form->error($model,'linea_id'); ?>

		<?php echo $form->labelEx($model,'unidad_id'); ?>
	    <?php  echo $form->dropDownList($model,'unidad_id', CHtml::listData(Unidades::model()->findAll(), 'id', 'descripcion'), array('empty'=>'Seleccion'));  ?>
		<?php echo $form->error($model,'unidad_id'); ?>

		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>

		<?php echo $form->labelEx($model,'detalles'); ?>
		<?php echo $form->textField($model,'detalles',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'detalles'); ?>

		<?php echo $form->labelEx($model,'vistos'); ?>
		<?php echo $form->textField($model,'vistos'); ?>
		<?php echo $form->error($model,'vistos'); ?>

		<?php if(isset($model->imagen)){
         echo '<div>Imagen Actual <img src="'.Yii::app()->request->baseUrl.'/PrinprodImages/'.$model->imagen.'"   heigth="100"  width="100" /></div><label>Actualizar Imagen</label>';
         ?>

	    <?php	}else{ 
              echo $form->labelEx($model,'imagen');
	    }?>
	   
		<?php echo $form->fileField($model, 'imagen'); ?>
		<?php echo $form->error($model,'imagen'); ?>

		



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
