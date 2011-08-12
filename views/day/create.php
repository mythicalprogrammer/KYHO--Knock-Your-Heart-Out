<?php
$this->breadcrumbs=array(
	'Days'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Day', 'url'=>array('index')),
	array('label'=>'Manage Day', 'url'=>array('admin')),
);
?>

<h1>Create Day</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>