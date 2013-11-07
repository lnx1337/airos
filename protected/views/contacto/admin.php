<?php $this->renderPartial('/admin/menu'); ?>


<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Contactos', 'url'=>array('index')),
);


?>

<h1>Administrar Contactos</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contacto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'email',
		'telefono',
		'comentarios',
		'otros',
		 array(
        'header' => 'Productos',
        'value' => '$data->getProductos($data)',
        'id' => 'column_id',
        'type'=>'html',
       ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
