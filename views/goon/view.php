<?php
$this->breadcrumbs=array(
	'Goons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Goon', 'url'=>array('index')),
	array('label'=>'Create Goon', 'url'=>array('create')),
	array('label'=>'Update Goon', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Goon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goon', 'url'=>array('admin')),
);
?>

<h1>View Goon #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'username',
		'password',
		'last_login_time',
		'create_time',
		'update_time',
	),
)); ?>
