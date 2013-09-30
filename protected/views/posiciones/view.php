<?php
/* @var $this PosicionesController */
/* @var $model Posiciones */

$this->breadcrumbs=array(
	'Posiciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Posiciones', 'url'=>array('index')),
	array('label'=>'Create Posiciones', 'url'=>array('create')),
	array('label'=>'Update Posiciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Posiciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posiciones', 'url'=>array('admin')),
);
?>

<h1>View Posiciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
		'seccion_cms_id',
	),
)); ?>
