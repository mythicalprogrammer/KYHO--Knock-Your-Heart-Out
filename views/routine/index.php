<?php
$this->breadcrumbs=array(
	'Routines',
);

$this->menu=array(
	array('label'=>'Create Routine', 'url'=>array('create')),
	array('label'=>'Manage Routine', 'url'=>array('admin')),
);
?>

<h1>Routines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
