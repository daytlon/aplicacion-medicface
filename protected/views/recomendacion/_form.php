<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recomendacion-form',
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
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'asunto'); ?>
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
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div style="display: none">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('value'=>date('H:i:s'))); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
