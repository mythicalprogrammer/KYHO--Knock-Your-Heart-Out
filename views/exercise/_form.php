<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exercise-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preparation'); ?>
		<?php echo $form->textArea($model,'preparation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'preparation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'execution'); ?>
		<?php echo $form->textArea($model,'execution',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'execution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_link'); ?>
		<?php echo $form->textField($model,'video_link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'video_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_link'); ?>
		<?php echo $form->textField($model,'pic_link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic_link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->