<?php
/* @var $this SeccionCmsController */
/* @var $model SeccionCms */

$this->breadcrumbs=array(
	'Seccion Cms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeccionCms', 'url'=>array('index')),
	array('label'=>'Create SeccionCms', 'url'=>array('create')),
	array('label'=>'View SeccionCms', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SeccionCms', 'url'=>array('admin')),
);
?>

<h1>Update SeccionCms <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>