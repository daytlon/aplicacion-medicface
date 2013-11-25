<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Medicamentos', 'url'=>array('index')),
	array('label'=>'Crear Medicamentos', 'url'=>array('create')),
	array('label'=>'Ver Medicamento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Medicamentos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Medicamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
