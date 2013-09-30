<?php
/* @var $this SeccionCmsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seccion Cms',
);

$this->menu=array(
	array('label'=>'Create SeccionCms', 'url'=>array('create')),
	array('label'=>'Manage SeccionCms', 'url'=>array('admin')),
);
?>

<h1>Seccion Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
