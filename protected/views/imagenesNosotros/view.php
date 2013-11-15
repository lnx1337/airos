<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this ImagenesNosotrosController */
/* @var $model ImagenesNosotros */

$this->breadcrumbs=array(
	'Imagenes Nosotros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ImagenesNosotros', 'url'=>array('index')),
	array('label'=>'Create ImagenesNosotros', 'url'=>array('create')),
	array('label'=>'Update ImagenesNosotros', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ImagenesNosotros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImagenesNosotros', 'url'=>array('admin')),
);
?>

<h1>View ImagenesNosotros #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'imagen',
		'estatus',
	),
)); ?>
