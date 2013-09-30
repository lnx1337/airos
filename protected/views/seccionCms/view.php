<?php
/* @var $this SeccionCmsController */
/* @var $model SeccionCms */

$this->breadcrumbs=array(
	'Seccion Cms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SeccionCms', 'url'=>array('index')),
	array('label'=>'Create SeccionCms', 'url'=>array('create')),
	array('label'=>'Update SeccionCms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SeccionCms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeccionCms', 'url'=>array('admin')),
);
?>

<h1>View SeccionCms #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'seccion',
	),
)); ?>
