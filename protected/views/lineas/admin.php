<?php $this->renderPartial('/admin/menu'); ?>

<h1>Admin Lineas</h1>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lineas-grid', {
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
	'id'=>'lineas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'clave',
		'descripcion',
		 array(        
          'name'=>'imagen',
          'value'=>'CHtml::image($data->getImage($data->clave),"imagen",array(\'width\'=>200, \'height\'=>200))',
          'type'=>'raw',
       ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
