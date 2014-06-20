<?php
/* @var $this AgentController */
/* @var $model Agent */

$this->breadcrumbs=array(
	'Agents'=>array('index'),
	$model->name=>array('view','id'=>$model->agentId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agent', 'url'=>array('index')),
	array('label'=>'Create Agent', 'url'=>array('create')),
	array('label'=>'View Agent', 'url'=>array('view', 'id'=>$model->agentId)),
	array('label'=>'Manage Agent', 'url'=>array('admin')),
);
?>

<h1>Update Agent <?php echo $model->agentId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>