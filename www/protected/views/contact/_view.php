<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contactid), array('view', 'id'=>$data->contactid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agentId')); ?>:</b>
	<?php echo CHtml::encode($data->agentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtag')); ?>:</b>
	<?php echo CHtml::encode($data->dtag); ?>
	<br />
	


</div>