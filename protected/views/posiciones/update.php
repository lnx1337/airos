<?php
/* @var $this PosicionesController */
/* @var $model Posiciones */

$this->breadcrumbs=array(
	'Posiciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Posiciones', 'url'=>array('index')),
	array('label'=>'Create Posiciones', 'url'=>array('create')),
	array('label'=>'View Posiciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Posiciones', 'url'=>array('admin')),
);
?>

<h1>Update Posiciones <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>