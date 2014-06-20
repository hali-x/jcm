<?php
/* @var $this AgentController */
/* @var $data Agent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('agentId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->agentId), array('view', 'id'=>$data->agentId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('defaultcontact')); ?>:</b>
	<?php echo CHtml::encode($data->defaultcontact); ?>
	<br />


</div>