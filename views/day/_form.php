<div class="form">
<?php
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'day-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->hiddenField($model, 'routine_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exercise_id'); ?>
        <?php echo $form->dropDownList($model,'exercise_id',CHtml::listData(Exercise::model()->findAll(), 'id','name')); ?>
		<?php echo $form->error($model,'exercise_id'); ?>
	</div>

    <div class="row">
        <?php echo $form->dropDownList($model, 'day', $model->getDayOptions()); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
