<?php
/* @var $this WilayahController */
/* @var $data Wilayah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_wilayah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_wilayah), array('view', 'id'=>$data->id_wilayah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kantor')); ?>:</b>
	<?php echo CHtml::encode($data->kantor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wilayah')); ?>:</b>
	<?php echo CHtml::encode($data->wilayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>