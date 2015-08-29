<?php
/* @var $this AvisosController */
/* @var $model Avisos */
/* @var $form CActiveForm */

date_default_timezone_set('America/Argentina/San_Luis');
$meses = array("Meses","Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"); 
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avisos-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group" >
		<?php echo $form->labelEx($model,'TIPO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-2"><?php echo ZHtml::enumDropDownList( $model,'TIPO', array('onchange'=>'avisoTipo(); return false;', 'empty'=>'Seleccionar...', 'class'=>'form-control') ); ?></div>
		<?php echo $form->error($model,'TIPO'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TEXTO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-6">
		<?php
			$attribute='TEXTO';
			$this->widget('ext.redactor.ERedactorWidget',array(
			    'model'=>$model,
			    'attribute'=>$attribute,
			    /*'options'=>array(
			        'fileUpload'=>Yii::app()->createUrl('noticias/fileUpload',array(
			            'attr'=>$attribute
			        )),
			        'fileUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			        'imageUpload'=>Yii::app()->createUrl('noticias/imageUpload',array(
			            'attr'=>$attribute
			        )),
			        'imageGetJson'=>Yii::app()->createUrl('noticias/imageList',array(
			            'attr'=>$attribute
			        )),
			        'imageUploadErrorCallback'=>new CJavaScriptExpression(
			            'function(obj,json) { alert(json.error); }'
			        ),
			    
			    ),*/
			));
		?>
		</div>
		<?php echo $form->error($model,'TEXTO'); ?>
	</div>


	<div class="form-group" id="avisoTipo">
		
		<?php echo $form->labelEx($model,'HORA/MINUTO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-6 form-inline">
			<?php if($model->isNewRecord) {?>	
				<?php echo ZHtml::enumDropDownList( $model,'HORA', array('class'=>'form-control')); ?>		
				<?php echo ZHtml::enumDropDownList( $model,'MINUTO', array('class'=>'form-control')); ?>
			<?php } else { ?>
				<?php echo ZHtml::enumDropDownList( $model,'HORA', array('class'=>'form-control')); ?>		
				<?php echo ZHtml::enumDropDownList( $model,'MINUTO', array('class'=>'form-control')); ?>
			<?php }?>	

			<?php echo $form->error($model,'HORA', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'MINUTO', array('class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'DESCOLGAR_SN',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-2"><?php echo ZHtml::enumDropDownList( $model,'DESCOLGAR_SN', array('onchange'=>'avisoDescolgarSn(); return false;', 'class'=>'form-control') ); ?></div>
		<?php echo $form->error($model,'DESCOLGAR_SN'); ?>
	</div>

	<div class="form-group none" id="avisoDescolgar">
		<?php echo $form->labelEx($model,'DESCOLGAR',array('class'=>'col-sm-2 control-label')); ?>

		<div class="form-inline col-sm-10">
			<?php if($model->isNewRecord) {?>
				<input type="text" style="width:45px;" class="field_dia form-control" id="DESCOLGAR_DIA" name="DESCOLGAR_DIA" value="<?php echo date('d'); ?>"> de 
				
				<select id="DESCOLGAR_MES" name="DESCOLGAR_MES" class="form-control">
				<?php for ($i=1; $i < 12; $i++) { ?>			
					<option value="<?php echo $i; ?>" <?php echo (date('n') == $i)? 'selected' : ''; ?> ><?php echo $meses[ $i ].' ('.str_pad($i, 2 , "0", STR_PAD_LEFT).')'; ?> </option>
				<?php } ?>	
				</select> de 

				<input type="text" style="width:60px;" class="field_anio form-control" id="DESCOLGAR_AÑO" name="DESCOLGAR_AÑO" value="<?php echo date('Y'); ?>"> |  
				<input type="text" style="width:45px;" class="field_hora form-control" id="DESCOLGAR_HORA" name="DESCOLGAR_HORA" value="<?php echo date('H'); ?>"> : 
				<input type="text" style="width:45px;" class="field_min form-control" id="DESCOLGAR_MIN" name="DESCOLGAR_MIN" value="<?php echo date('i'); ?>">


			<?php } else { ?>

				<?php  $fecha = explode("-", $model->DESCOLGAR);?>
				<input type="text" class="field_dia" id="DESCOLGAR_DIA" name="DESCOLGAR_DIA" value="<?php echo $fecha[2]; ?>"> de 
				
				<select id="DESCOLGAR_MES" name="DESCOLGAR_MES">
				<?php for ($i=1; $i < 12; $i++) { ?>			
					<option value="<?php echo $i; ?>" <?php echo ($fecha[1] == $i)? 'selected' : ''; ?> ><?php echo str_pad($i, 2 , "0", STR_PAD_LEFT).'-'.$meses[ $i ]; ?> </option>
				<?php } ?>	
				</select> de 

				<input type="text" class="field_anio" id="DESCOLGAR_AÑO" name="DESCOLGAR_AÑO" value="<?php echo $fecha[0]; ?>"> |  
				<input type="text" class="field_hora" id="DESCOLGAR_HORA" name="DESCOLGAR_HORA" value="<?php echo $fecha[3]; ?>"> : 
				<input type="text" class="field_min" id="DESCOLGAR_MIN" name="DESCOLGAR_MIN" value="<?php echo $fecha[4]; ?>">
			<?php }?>
		</div>			
		<?php echo $form->error($model,'DESCOLGAR'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ESTADO',array('class'=>'col-sm-2 control-label')); ?>
		<div class="col-sm-2"><?php echo ZHtml::enumDropDownList( $model,'ESTADO',array('class'=>'form-control') ); ?></div>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="form-group buttons">
		<div class="col-sm-offset-1 col-sm-4 text-right"><?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Aviso' : 'Guardar Aviso',array('class'=>'btn btn-primary')); ?></div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
function avisoTipo(){
	var valor = $('#Avisos_TIPO').val()
	switch (valor) { 
	   	case 'Hace Instantes': 
	   		$('#avisoTipo').removeClass('none');
	   		$('#avisoTipo').fadeIn();	   		
	      	break 
	   	default: 
	   		$('#avisoTipo').fadeOut();	
	} 
}
function avisoDescolgarSn(){
	var valor = $('#Avisos_DESCOLGAR_SN').val()
	switch (valor) { 
	   	case 'SI': 
	   		$('#avisoDescolgar').removeClass('none');
	   		$('#avisoDescolgar').fadeIn();	   		
	      	break 
	    case 'NO':   		   	
	   		$('#avisoDescolgar').fadeOut();	
	   	default: 
	   		'';	
	} 
}
$(function($) {
	avisoTipo()	
	avisoDescolgarSn();
});
</script>