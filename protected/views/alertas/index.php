<?php
/* @var $this AlertasController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Alertas',
);
if (yii::app()->user->rol != yii::app()->validarRol->esAmigo()) {
    $this->menu=array(
        array('label'=>'Gestionar Alertas', 'url'=>array('admin')),
    );
}
    $cron = Yii::getPathOfAlias('application.protected.views.alertas');
?>

<h1>Alertas</h1>

<script type="text/javascript">

    function getTimeAJAX() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX
        var time = $.ajax({

            url: 'http://localhost/cron/cron.php', //indicamos la ruta donde se genera la hora
            dataType: 'text',//indicamos que es de tipo texto plano
            async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        if (time == 1) {
             window.location.reload();
        };

    }
    //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
    setInterval(getTimeAJAX,1000);

</script>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
)); ?>
