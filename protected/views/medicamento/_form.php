<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicamento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div style="display: none">
		<?php echo $form->labelEx($model,'Paciente_id'); ?>
		<?php echo $form->dropDownList($model,'Paciente_id', CHtml::listData(Paciente::model()->findAll(),'id','id')); ?>
		<?php echo $form->error($model,'Paciente_id'); ?>
	</div>


	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'dosis'); ?>
		<?php echo $form->textField($model,'dosis'); ?>
		<?php echo $form->error($model,'dosis'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div style="display: none">
		<?php echo $form->labelEx($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('value'=>yii::app()->user->id)); ?>
		<?php echo $form->error($model,'usuario_id'); ?>
	</div>

	<div style="display: none">
		<?php echo $form->labelEx($model,'fecha_agregado'); ?>
		<?php echo $form->textField($model,'fecha_agregado',array('value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'fecha_agregado'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
