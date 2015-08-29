<?php
/* @var $this AvisosController */
/* @var $model Avisos */

$this->menu=array(
	array('label'=>'Gestionar Avisos', 'url'=>array('admin')),
	//array('label'=>'Crear Aviso', 'url'=>array('create')),
	array('label'=>'Eliminar Aviso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Desea eliminar este aviso?')),
);
?>


<div class="panel panel-default">
  <div class="panel-heading">Detalle Aviso N° <?php echo $model->ID; ?></div>
  <div class="panel-body">
    	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>