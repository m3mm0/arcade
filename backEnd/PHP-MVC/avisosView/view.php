<?php
/* @var $this AvisosController */
/* @var $model Avisos */

$this->breadcrumbs=array(
	'Avisoses'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Avisos', 'url'=>array('index')),
	array('label'=>'Create Avisos', 'url'=>array('create')),
	array('label'=>'Update Avisos', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Avisos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Avisos', 'url'=>array('admin')),
);
?>

<h1>View Avisos #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'TIPO',
		'TEXTO',
		'HORA',
		'MINUTO',
		'DESCOLGAR',
		'ESTADO',
		'CREADO_POR',
		'FECHA_CREACION',
		'EDITADO_POR',
		'FECHA_EDICION',
	),
)); ?>
