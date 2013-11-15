<?php $this->renderPartial('/admin/menu'); ?>

<?php

$this->menu=array(
	array('label'=>'Listar ImagenesNosotros', 'url'=>array('index')),
	array('label'=>'Crear ImagenesNosotros', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('imagenes-nosotros-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Imagenes Nosotros</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imagenes-nosotros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
       array(        
          'name'=>'imagen',
          'value'=>'CHtml::image(Yii::app()->request->baseUrl."/imagesNosotros/".$data->imagen,"imagen",array(\'width\'=>200, \'height\'=>200))',
          'type'=>'raw',
       ),		'estatus',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
