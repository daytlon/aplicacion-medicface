<?php
/* @var $this AlertasController */
/* @var $model Alertas */

$this->breadcrumbs=array(
	'Alertas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Alertas', 'url'=>array('index')),
	array('label'=>'Gestionar Alertas', 'url'=>array('admin')),
);
?>

<h1>Ver Alerta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'Paciente_id',
		'asunto',
		'descripcion',
		'fecha',
		'hora',
		'prioridad',
		'dato1',
		'dato2',
	),
)); ?>
