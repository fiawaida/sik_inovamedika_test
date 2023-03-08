<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>
<div class="form">
	<div class="panel-body">
		<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'users-form',
			'enableAjaxValidation' => true,
		)); ?>

		<div class="form-horizontal bucket-form">

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?php echo $form->errorSummary($model); ?>
			<div class="row">
				<div class="col-sm-3"> <?php echo $form->labelEx($model, 'id_user'); ?></div>
				<?php echo $form->textField($model, 'id_user', array('size' => 60, 'maxlength' => 255)); ?>
				<?php echo $form->error($model, 'id_user'); ?>
			</div>


			<div class="row">
				<div class="col-sm-3"> <?php echo $form->labelEx($model, 'username'); ?></div>
				<?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255)); ?>
				<?php echo $form->error($model, 'username'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'password'); ?></div>
				<?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50)); ?>
				<?php echo $form->error($model, 'password'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'authKey'); ?></div>
				<?php echo $form->textField($model, 'authKey', array('size' => 50, 'maxlength' => 50)); ?>
				<?php echo $form->error($model, 'authKey'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'accessToken'); ?></div>
				<?php echo $form->textField($model, 'accessToken', array('size' => 50, 'maxlength' => 50)); ?>
				<?php echo $form->error($model, 'accessToken'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'status'); ?></div>
				<?php echo $form->textField($model, 'status'); ?>
				<?php echo $form->error($model, 'status'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'role'); ?></div>
				<?php echo $form->textField($model, 'role', array('size' => 10, 'maxlength' => 10)); ?>
				<?php echo $form->error($model, 'role'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'profile_photo_path'); ?></div>
				<?php echo $form->textField($model, 'profile_photo_path', array('size' => 60, 'maxlength' => 2048)); ?>
				<?php echo $form->error($model, 'profile_photo_path'); ?>
			</div>

			<div class="row">
				<div class="col-sm-3"><?php echo $form->labelEx($model, 'id_pegawai'); ?></div>
				<?php echo $form->textField($model, 'id_pegawai', array('size' => 10, 'maxlength' => 10)); ?>
				<?php echo $form->error($model, 'id_pegawai'); ?>
			</div>

			<?php echo $form->labelEx($model, 'created_at'); ?>
			<?php echo $form->textField($model, 'created_at'); ?>
			<?php echo $form->error($model, 'created_at'); ?>

			<div class="row">
				<?php echo $form->labelEx($model, 'updated_at'); ?>
				<?php echo $form->textField($model, 'updated_at'); ?>
				<?php echo $form->error($model, 'updated_at'); ?>
			</div>

			<div class="form-group">
				<div class="col-lg-offset-3 col-lg-6">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>
			</div>

		</div>

		<?php $this->endWidget(); ?>
	</div>
</div>