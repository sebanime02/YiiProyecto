<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Proyecto', 'url'=>array('index')),
	array('label'=>'Create Proyecto', 'url'=>array('create')),
	array('label'=>'Update Proyecto', 'url'=>array('update', 'id'=>$model->idproyecto)),
	array('label'=>'Delete Proyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproyecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyecto', 'url'=>array('admin')),
);
?>

<h1>View Proyecto #<?php echo $model->idproyecto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproyecto',
		'name',
		'description',
		'begindate',
		'enddate',
		'manager',
		'registrationdate',
		'updatedate',
	),
)); ?>
