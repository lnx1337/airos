<?php $this->renderPartial('/admin/menu'); ?>


<?php




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('productos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'clave',
		//'sublinea_id',
		//'unidad_id',
		
		'descripcion_producto',
		'ficha_tecnica',
		/*
		'vistos',
		*/
		array(        
          'name'=>'imagen',
          'value'=>'CHtml::image($data->getImage($data->sublinea->linea->clave),"imagen",array(\'width\'=>200, \'height\'=>200))',
          'type'=>'raw',
         ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
