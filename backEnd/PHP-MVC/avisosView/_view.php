<?php
/* @var $this AvisosController */
/* @var $data Avisos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEXTO')); ?>:</b>
	<?php echo CHtml::encode($data->TEXTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORA')); ?>:</b>
	<?php echo CHtml::encode($data->HORA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MINUTO')); ?>:</b>
	<?php echo CHtml::encode($data->MINUTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCOLGAR')); ?>:</b>
	<?php echo CHtml::encode($data->DESCOLGAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CREADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->CREADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_CREACION')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_CREACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDITADO_POR')); ?>:</b>
	<?php echo CHtml::encode($data->EDITADO_POR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_EDICION')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_EDICION); ?>
	<br />

	*/ ?>

</div>