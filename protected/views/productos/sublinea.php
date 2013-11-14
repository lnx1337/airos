<span class="todos"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos">Ver todos</a> <i class="icon-double-angle-right txt-rojo"></i></span>
<ul class="productos-random">
 <?php $this->widget('zii.widgets.CListView', array(
              'dataProvider'=>$dataProvider,
              'itemView'=>'_viewAllSublinea',
              'ajaxUpdate'=>true,

 )); ?>
</ul>
<span class="todos"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/productos">Ver todos</a> <i class="icon-double-angle-right txt-rojo"></i></span>

        
     