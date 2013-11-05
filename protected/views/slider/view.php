<?php $this->renderPartial('/admin/menu'); ?>


<h1>Slider #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'imagen',
		'estatus',
	),
)); ?>
