<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */

$this->breadcrumbs=array(
	'Recomendaciones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Recomendaciones', 'url'=>array('index')),
	array('label'=>'Gestionar Recomendaciones', 'url'=>array('admin')),
);
?>

<h1>Crear Recomendacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
