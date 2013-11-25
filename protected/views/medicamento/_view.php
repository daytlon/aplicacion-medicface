<?php
/* @var $this MedicamentoController */
/* @var $data Medicamento */
?>

<div class="media">
	<div class="alert alert-info">
		<div style="float: left">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			<spam> | </spam>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Paciente_id')); ?>:</b>
			<?php echo CHtml::encode($data->Paciente_id); ?>
			<spam> | </spam>
			<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
			<?php echo CHtml::encode($data->usuario_id); ?>
		</div>
		<br />
		<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
		<?php echo CHtml::encode($data->nombre); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('dosis')); ?>:</b>
		<?php echo CHtml::encode($data->dosis); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
		<?php echo CHtml::encode($data->descripcion); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_agregado')); ?>:</b>
		<?php echo CHtml::encode($data->fecha_agregado); ?>
		<br />
	</div>
</div>
