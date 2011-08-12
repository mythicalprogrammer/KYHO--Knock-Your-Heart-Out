<?php
$this->breadcrumbs=array(
	'Goons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Goon', 'url'=>array('index')),
	array('label'=>'Create Goon', 'url'=>array('create')),
	array('label'=>'View Goon', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Goon', 'url'=>array('admin')),
);
?>

<h1>Update Goon <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>