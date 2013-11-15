<?php $this->renderPartial('/admin/menu'); ?>

<?php
/* @var $this ImagenesNosotrosController */
/* @var $model ImagenesNosotros */


$this->menu=array(
	array('label'=>'Listar ImagenesNosotros', 'url'=>array('index')),
	array('label'=>'Crear ImagenesNosotros', 'url'=>array('create')),
	array('label'=>'Ver ImagenesNosotros', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ImagenesNosotros', 'url'=>array('admin')),
);
?>

<h1>Actualizar ImagenesNosotros <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>