<?php
/* @var $this RecomendacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recomendaciones',
);

if (yii::app()->user->rol == yii::app()->validarRol->esMedico() || yii::app()->user->rol == yii::app()->validarRol->esAdmin()) {
	$this->menu=array(
		array('label'=>'Crear Recomendacion', 'url'=>array('create')),
		array('label'=>'Gestionar Recomendaciones', 'url'=>array('admin')),
	);
}
?>

<h1>Recomendaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
)); ?>
