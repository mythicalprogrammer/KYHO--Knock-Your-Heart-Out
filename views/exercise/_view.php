<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preparation')); ?>:</b>
	<?php echo CHtml::encode($data->preparation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('execution')); ?>:</b>
	<?php echo CHtml::encode($data->execution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_link')); ?>:</b>
	<?php echo CHtml::encode($data->video_link); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_link')); ?>:</b>
	<?php echo CHtml::encode($data->pic_link); ?>
	<br />

	*/ ?>

</div>