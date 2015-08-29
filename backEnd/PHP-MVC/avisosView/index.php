<?php
/* @var $this AvisosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Avisoses',
);

$this->menu=array(
	array('label'=>'Create Avisos', 'url'=>array('create')),
	array('label'=>'Manage Avisos', 'url'=>array('admin')),
);
?>

<h1>Avisoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
