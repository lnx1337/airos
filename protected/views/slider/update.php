<?php $this->renderPartial('/admin/menu'); ?>


<h1>Actualizar Slider <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>