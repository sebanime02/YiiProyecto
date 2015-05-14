<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcomentario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcomentario), array('view', 'id'=>$data->idcomentario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registrationdate')); ?>:</b>
	<?php echo CHtml::encode($data->registrationdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idactividad')); ?>:</b>
	<?php echo CHtml::encode($data->idactividad); ?>
	<br />


</div>