<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */

$this->breadcrumbs=array(
	'Recomendaciones'=>array('index'),
	$model->id,
);

if (yii::app()->user->rol == yii::app()->validarRol->esMedico() || yii::app()->user->rol == yii::app()->validarRol->esAdmin()) {
	$this->menu=array(
		array('label'=>'Listar Recomendaciones', 'url'=>array('index')),
		array('label'=>'Crear Recomendacion', 'url'=>array('create')),
		array('label'=>'Actualizar Recomendacion', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Eliminar Recomendacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Gestionar Recomendaciones', 'url'=>array('admin')),
	);
}else{
	$this->menu=array(
		array('label'=>'Listar Recomendaciones', 'url'=>array('index'))
	);
}
?>

<h1>Ver Recomendacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'Paciente_id',
		'usuario_id',
		'descripcion',
		'fecha',
		'hora',
		'asunto',
	),
)); ?>
