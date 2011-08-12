<?php
$this->breadcrumbs=array(
	'Routines'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Routine', 'url'=>array('index')),
	array('label'=>'Create Routine', 'url'=>array('create')),
	array('label'=>'Update Routine', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Routine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Routine', 'url'=>array('admin')),
	array('label'=>'Create Day', 'url'=>array('day/create','rid'=>$model->id)),
);
?>

<h1>View Routine #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
        'type',
        array(
            'label'=>'Username',
            'value'=>$model->creatorUser->username
        ),
		'create_time',
		'update_time',
		'description',
	),
)); 
?>

<br>
<h1>Routine Days</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dayDataProvider,
    'itemView'=>'/day/_view',
));
?>
