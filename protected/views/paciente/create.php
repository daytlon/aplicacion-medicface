<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Pacientes', 'url'=>array('index')),
	array('label'=>'Gestionar Pacientes', 'url'=>array('admin')),
);
?>

<h1>Crear Paciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
