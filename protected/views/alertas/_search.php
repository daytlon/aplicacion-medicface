<?php
/* @var $this AlertasController */
/* @var $model Alertas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Paciente_id'); ?>
		<?php echo $form->textField($model,'Paciente_id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'dato1'); ?>
		<?php echo $form->textField($model,'dato1',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'dato2'); ?>
		<?php echo $form->textField($model,'dato2',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
