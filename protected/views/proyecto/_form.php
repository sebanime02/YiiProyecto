<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyecto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'begindate'); ?>
		<?php echo $form->textField($model,'begindate'); ?>
		<?php echo $form->error($model,'begindate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enddate'); ?>
		<?php echo $form->textField($model,'enddate'); ?>
		<?php echo $form->error($model,'enddate'); ?>
	</div>

	<div class="row">
		<?php
		
		$user=User::model()->find("username=?",array(Yii::app()->User->id));
        $model->manager=$user->iduser;
		echo $form->labelEx($model,'manager'); ?>
		<?php echo $form->textField($model,'manager'); ?>
		<?php echo $form->error($model,'manager'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->textField($model,'registrationdate'); ?>
		<?php echo $form->error($model,'registrationdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedate'); ?>
		<?php echo $form->textField($model,'updatedate'); ?>
		<?php echo $form->error($model,'updatedate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->