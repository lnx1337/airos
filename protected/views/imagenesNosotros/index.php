<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this ImagenesNosotrosController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Crear ImagenesNosotros', 'url'=>array('create')),
	array('label'=>'Administrar ImagenesNosotros', 'url'=>array('admin')),
);
?>

<h1>Imagenes Nosotros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
