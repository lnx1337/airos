<?php
/* @var $this SublineasController */
/* @var $model Sublineas */

$this->breadcrumbs=array(
	'Sublineases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sublineas', 'url'=>array('index')),
	array('label'=>'Create Sublineas', 'url'=>array('create')),
	array('label'=>'Update Sublineas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sublineas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sublineas', 'url'=>array('admin')),
);
?>

<h1>View Sublineas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'linea_id',
		'descripcion',
	),
)); ?>
