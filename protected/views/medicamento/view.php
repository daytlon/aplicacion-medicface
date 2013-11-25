<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->id,
);

if (yii::app()->user->rol == yii::app()->validarRol->esMedico() || yii::app()->user->rol == yii::app()->validarRol->esAdmin()) {
	$this->menu=array(
		array('label'=>'Listar Medicamentos', 'url'=>array('index')),
		array('label'=>'Crear Medicamento', 'url'=>array('create')),
		array('label'=>'Actualizar Medicamento', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Medicamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Gestionar Medicamentos', 'url'=>array('admin')),
	);
}else{
	$this->menu=array(
		array('label'=>'Listar Medicamentos', 'url'=>array('index'))
	);
}
?>

<h1>Ver Medicamento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'Paciente_id',
		'usuario_id',
		'fecha_agregado',
		'nombre',
		'dosis',
		'descripcion',
	),
)); ?>
