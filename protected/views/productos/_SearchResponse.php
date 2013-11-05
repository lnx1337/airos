<?php



$this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewAll',
        'ajaxUpdate'=>true,
        'ajaxUrl'=>$this->createUrl('Productos/search')


        ));


?>