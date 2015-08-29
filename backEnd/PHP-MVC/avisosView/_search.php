<?php
/* @var $this AvisosController */
/* @var $model Avisos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'ID',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-2"><?php echo $form->textField($model,'ID',array('maxlength'=>2000,'class'=>'form-control')); ?></div>
	</div>


	<div class="form-group">
		<?php echo $form->label($model,'TIPO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3"><?php echo ZHtml::enumDropDownList( $model,'TIPO',array('class'=>'form-control')); ?></div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'TEXTO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-6"><?php echo $form->textField($model,'TEXTO',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?></div>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'HORA'); ?>
		<?php echo $form->textField($model,'HORA',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MINUTO'); ?>
		<?php echo $form->textField($model,'MINUTO',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCOLGAR'); ?>
		<?php echo $form->textField($model,'DESCOLGAR'); ?>
	</div> -->

	<div class="form-group">
		<?php echo $form->label($model,'ESTADO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-3"><?php echo ZHtml::enumDropDownList( $model,'ESTADO',array('class'=>'form-control')); ?></div>
	</div>

	
	<div class="form-group buttons">
		<div class="col-sm-offset-4 col-sm-3 text-right"><?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-primary')); ?></div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->