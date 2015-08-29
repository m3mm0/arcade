<?php
/* @var $this AvisosController */
/* @var $model Avisos */


$this->menu=array(	
	array('label'=>'Crear Aviso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#avisos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="bs-callout bs-callout-info">
  <?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>

  	<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
	</div><!-- search-form -->  
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'avisos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-striped',
	'columns'=>array(
		array(
			'visible'=>Yii::app()->user->checkAccess('AVISOS'),
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			'buttons'=>array (
		        'update'=> array(
		            'label'=>'',
		            'imageUrl'=>'',
		            'options'=>array( 'class'=>'fa fa-pencil f1' )
		        ),
		        'delete'=> array(
		            'label'=>'',
		            'imageUrl'=>'',
		            'options'=>array( 'class'=>'fa fa-trash-o f1' ),		            
		        ),
	        ),
			'deleteConfirmation'=>"js:'Desea eliminar el aviso #'+$(this).parent().parent().children(':nth-child(2)').text()+' ?'",			
		),
		'ID',
		'TIPO',
		'TEXTO',
		//'HORA',
		//'MINUTO',
		//'DESCOLGAR',		
		'ESTADO',		 
		/*'CREADO_POR',
		'FECHA_CREACION',
		'EDITADO_POR',
		'FECHA_EDICION',
		*/
	),
)); ?>
