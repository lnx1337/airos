<?php $this->renderPartial('/admin/menu'); ?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'contenido',
		'posiciones_id',
	),
)); ?>
