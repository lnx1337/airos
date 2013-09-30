<?php
/* @var $this PosicionesController */
/* @var $model Posiciones */

$this->breadcrumbs=array(
	'Posiciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Posiciones', 'url'=>array('index')),
	array('label'=>'Manage Posiciones', 'url'=>array('admin')),
);
?>

<h1>Create Posiciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>