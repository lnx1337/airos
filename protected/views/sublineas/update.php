<?php
/* @var $this SublineasController */
/* @var $model Sublineas */

$this->breadcrumbs=array(
	'Sublineases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sublineas', 'url'=>array('index')),
	array('label'=>'Create Sublineas', 'url'=>array('create')),
	array('label'=>'View Sublineas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sublineas', 'url'=>array('admin')),
);
?>

<h1>Update Sublineas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>