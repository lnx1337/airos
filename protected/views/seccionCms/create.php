<?php
/* @var $this SeccionCmsController */
/* @var $model SeccionCms */

$this->breadcrumbs=array(
	'Seccion Cms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeccionCms', 'url'=>array('index')),
	array('label'=>'Manage SeccionCms', 'url'=>array('admin')),
);
?>

<h1>Create SeccionCms</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>