<?php
$this->breadcrumbs=array(
	'Routines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Routine', 'url'=>array('index')),
	array('label'=>'Manage Routine', 'url'=>array('admin')),
);
?>

<h1>Create Routine</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>