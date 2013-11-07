<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Contacto', 'url'=>array('index')),
	array('label'=>'Create Contacto', 'url'=>array('create')),
	array('label'=>'Update Contacto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contacto', 'url'=>array('admin')),
);
?>

<h1>Ver Contacto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'email',
		'telefono',
		'comentarios',
		'otros',
		 array(
        'name' => 'Productos',
        'value' => $model->getProductos($model),
        'id' => 'column_id',
        'type'=>'html',
       )
	),
)); ?>
