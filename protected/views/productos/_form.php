<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),

)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<br>
<label>Lineas</label>
 <?php echo CHtml::dropDownList('Lineas[id]', 'id', CHtml::listData(Lineas::model()->findAll(), 'id', 'descripcion'),array('empty' => 'Lineas','ajax' => array(
			           'type'=>'POST',
			           'url'=>CController::createUrl('Lineas/Sublineas'),
			            //'update'=>'#scroll3',
			           'success'=>'function(data) {
			                  var json= JSON.parse(data);
			                   $("#Productos_sublinea_id").html(json.Sublineas);

			            }',
			           ))); ?>

<br>
		<?php echo $form->labelEx($model,'sublinea_id'); ?>
	    <?php echo $form->dropDownList($model,'sublinea_id', CHtml::listData(Sublineas::model()->findAll(), 'id', 'descripcion'), array('empty'=>'Seleccion'));  ?>
		<?php echo $form->error($model,'sublinea_id'); ?>
<br>
		<?php echo $form->labelEx($model,'unidad_id'); ?>
	    <?php  echo $form->dropDownList($model,'unidad_id', CHtml::listData(Unidades::model()->findAll(), 'id', 'descripcion'), array('empty'=>'Seleccion'));  ?>
		<?php echo $form->error($model,'unidad_id'); ?>
<br>
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'clave'); ?>

<br>
		<?php echo $form->labelEx($model,'descripcion_producto'); ?>
		<?php echo $form->textField($model,'descripcion_producto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion_producto'); ?>

<br>
		<?php echo $form->labelEx($model,'producto'); ?>
		<?php echo $form->textField($model,'producto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'producto'); ?>

<br>
		<?php echo $form->labelEx($model,'ficha_tecnica'); ?>
		<?php echo $form->textArea($model,'ficha_tecnica',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ficha_tecnica'); ?>

<br>
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->fileField($model,'imagen',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'imagen'); ?>

        <?php if(isset($model->imagen)){
         echo '<div>Imagen Actual <img src="'.Yii::app()->request->baseUrl.'/PrinprodImages/'.$model->imagen.'"   heigth="100"  width="100" /></div><label>Actualizar Imagen</label>';
        ?>

	    <?php	}else{ 
              echo $form->labelEx($model,'imagen');
	    }?>
<br>
		<?php echo $form->labelEx($model,'vistos'); ?>
		<?php echo $form->textField($model,'vistos'); ?>
		<?php echo $form->error($model,'vistos'); ?>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->



