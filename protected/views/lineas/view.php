<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this LineasController */
/* @var $model Lineas */

$this->breadcrumbs=array(
	'Lineases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lineas', 'url'=>array('index')),
	array('label'=>'Create Lineas', 'url'=>array('create')),
	array('label'=>'Update Lineas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lineas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lineas', 'url'=>array('admin')),
);
?>

<h1>View Lineas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
