<?php
$this->breadcrumbs=array(
	'Days'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Day', 'url'=>array('index')),
	array('label'=>'Create Day', 'url'=>array('create')),
	array('label'=>'View Day', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Day', 'url'=>array('admin')),
);
?>

<h1>Update Day <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>