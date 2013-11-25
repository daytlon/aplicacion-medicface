<?php
/* @var $this RecomendacionController */
/* @var $data Recomendacion */
?>

<div class="media">
	<div class="alert alert-block">
		<div style="float: left">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
			<spam> | </spam>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Paciente_id')); ?>:</b>
			<?php echo CHtml::encode($data->Paciente_id); ?>
			<spam> | </spam>
			<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
			<?php echo CHtml::encode($data->usuario_id); ?>
			<br />
		</div>

		<div class="right">
			<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
			<?php echo CHtml::encode($data->fecha); ?>
			<spam> | </spam>
			<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
			<?php echo CHtml::encode($data->hora); ?>
			<br />
		</div>

		<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
		<?php echo CHtml::encode($data->asunto); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
		<?php echo CHtml::encode($data->descripcion); ?>
		<br />


	</div>
</div>
