<?php
/* @var $this RecomendacionController */
/* @var $model Recomendacion */

$this->breadcrumbs=array(
	'Recomendaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Recomendaciones', 'url'=>array('index')),
	array('label'=>'Crear Recomendacion', 'url'=>array('create')),
	array('label'=>'Ver Recomendacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gestionar Recomendaciones', 'url'=>array('admin')),
);
?>

<h1>Update Recomendacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
