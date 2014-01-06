<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this LineasController */
/* @var $model Lineas */

$this->breadcrumbs=array(
	'Lineases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lineas', 'url'=>array('index')),
	array('label'=>'Create Lineas', 'url'=>array('create')),
	array('label'=>'View Lineas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lineas', 'url'=>array('admin')),
);
?>

<h1>Update Lineas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>