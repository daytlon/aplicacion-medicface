<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>


	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ciudad_id'); ?>
		<?php echo $form->dropDownList($model,'ciudad_id', CHtml::listData(Ciudad::model()->findAll(),'id','nombre'),array('empty'=>'Seleccione la ciudad')); ?>
		<?php echo $form->error($model,'ciudad_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php #echo $form->textField($model,'fecha_nacimiento');
		$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model' => $model,
					'attribute' => 'fecha_nacimiento',
					'language' => 'es',
					'options' => array(
						'dateFormat' => 'yy-mm-dd',
						'constrainInput' => 'false',
						'duration' => 'fast',
						'showAnim' => 'slide',
						'changeMonth' => 'true',
						'changeYear' => 'true',
						'yearRange'=>'1913:2060',
						),
				)
			);
		?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->dropDownList($model,'genero',array(''=>'','M'=>'Masculino','F'=>'Femenino')); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'peso'); ?>
		<?php echo $form->textField($model,'peso'); ?>
		<?php echo $form->error($model,'peso'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'estatura'); ?>
		<?php echo $form->textField($model,'estatura'); ?>
		<?php echo $form->error($model,'estatura'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'grupo_sanguineo'); ?>
		<?php echo $form->dropDownList($model,'grupo_sanguineo',array(''=>'','O-'=>'O-','O+'=>'O+','A-'=>'A-','A+'=>'A+','B-'=>'B-','B+'=>'B+','AB-'=>'AB-','AB+'=>'AB+')); ?>
		<?php echo $form->error($model,'grupo_sanguineo'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
