<?php
/* @var $this SublineasController */
/* @var $model Sublineas */

$this->breadcrumbs=array(
	'Sublineases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sublineas', 'url'=>array('index')),
	array('label'=>'Manage Sublineas', 'url'=>array('admin')),
);
?>

<h1>Create Sublineas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>