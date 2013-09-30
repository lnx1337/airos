<div id="otro">
<?php

$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_viewAll',
));

 ?>
</div>