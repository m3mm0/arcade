<?php
/* @var $this AvisosController */
/* @var $model Avisos */


$this->menu=array(
	array('label'=>'Gestionar Avisos', 'url'=>array('admin')),
);
?>


<div class="panel panel-default">
  <div class="panel-heading">Crear Aviso</div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>
