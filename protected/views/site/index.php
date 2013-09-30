<span class="todos"><a href="productos.html">Ver todos</a> <i class="icon-double-angle-right txt-rojo"></i></span>
<ul class="productos-random">
 <?php $this->widget('zii.widgets.CListView', array(
              'dataProvider'=>$dataProvider,
              'itemView'=>'_viewAll',
              'ajaxUpdate'=>true,

 )); ?>
</ul>
<span class="todos"><a href="productos.html">Ver todos</a> <i class="icon-double-angle-right txt-rojo"></i></span>