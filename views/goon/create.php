<?php
$this->breadcrumbs=array(
	'Goons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Goon', 'url'=>array('index')),
	array('label'=>'Manage Goon', 'url'=>array('admin')),
);
?>

<h1>Create Goon</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>