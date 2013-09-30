<?php
/* @var $this PosicionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posiciones',
);

$this->menu=array(
	array('label'=>'Create Posiciones', 'url'=>array('create')),
	array('label'=>'Manage Posiciones', 'url'=>array('admin')),
);
?>

<h1>Posiciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
