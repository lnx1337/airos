<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this ImagenesNosotrosController */
/* @var $model ImagenesNosotros */



$this->menu=array(
	array('label'=>'Listar ImagenesNosotros', 'url'=>array('index')),
	array('label'=>'Administrar ImagenesNosotros', 'url'=>array('admin')),
);
?>

<h1>Crear ImagenesNosotros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>