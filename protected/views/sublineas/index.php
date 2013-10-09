<?php
/* @var $this SublineasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sublineases',
);

$this->menu=array(
	array('label'=>'Create Sublineas', 'url'=>array('create')),
	array('label'=>'Manage Sublineas', 'url'=>array('admin')),
);
?>

<h1>Sublineases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
