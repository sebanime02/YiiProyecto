<?php
/* @var $this ActividadController */
/* @var $data Actividad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idactividad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idactividad), array('view', 'id'=>$data->idactividad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('begindate')); ?>:</b>
	<?php echo CHtml::encode($data->begindate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enddate')); ?>:</b>
	<?php echo CHtml::encode($data->enddate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registrationdate')); ?>:</b>
	<?php echo CHtml::encode($data->registrationdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($data->updatedate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idproyecto')); ?>:</b>
	<?php echo CHtml::encode($data->idproyecto); ?>
	<br />

	*/ ?>

</div>