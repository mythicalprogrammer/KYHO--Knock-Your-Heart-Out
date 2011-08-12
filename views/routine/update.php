<?php
$this->breadcrumbs=array(
	'Routines'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Routine', 'url'=>array('index')),
	array('label'=>'Create Routine', 'url'=>array('create')),
	array('label'=>'View Routine', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Routine', 'url'=>array('admin')),
);
?>

<h1>Update Routine <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>