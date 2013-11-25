<?php
/* @var $this AlertasController */
/* @var $data Alertas */
?>

<div class="media">
<?php
$posicion = CHtml::encode($data->id);
if (CHtml::encode($data->prioridad)==1) {
	echo '<div class="alert alert-error">';
}
if (CHtml::encode($data->prioridad)==2) {
	echo '<div class="alert alert-info">';
}
if (CHtml::encode($data->prioridad)==3) {
	echo '<div class="alert alert-success">';
}
?>
<button type="button" class="close" data-dismiss="alert">&times;</button>

	<div style="float: left">
		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		<spam> | </spam>
		<b><?php echo CHtml::encode($data->getAttributeLabel('Paciente_id')); ?>:</b>
		<?php echo CHtml::encode($data->Paciente_id); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dato1')); ?>:</b>
	<?php echo CHtml::encode($data->dato1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dato2')); ?>:</b>
	<?php echo CHtml::encode($data->dato2); ?>
	<br />

	*/ ?>

</div>
