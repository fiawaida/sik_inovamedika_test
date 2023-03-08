<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                pendaftaran Pasien Baru
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="form-horizontal bucket-form">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'users-form',
                        'enableAjaxValidation' => true,
                    )); ?>

                    <div class="form-group">
                        <?php echo $form->errorSummary($model); ?>

                        <div class="row">
                            <div class="col-sm-3"> <?php echo $form->labelEx($model, 'username'); ?></div>
                            <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255), (['class' => 'form-control'])); ?>
                            <?php echo $form->error($model, 'username'); ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"><?php echo $form->labelEx($model, 'password'); ?></div>
                            <?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50), (['class' => 'form-control'])); ?>
                            <?php echo $form->error($model, 'password'); ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"><?php echo $form->labelEx($model, 'status'); ?></div>
                            <?php echo $form->textField($model, 'status', (['class' => 'form-control'])); ?>
                            <?php echo $form->error($model, 'status'); ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"><?php echo $form->labelEx($model, 'role'); ?></div>
                            <?php echo $form->textField($model, 'role', array('size' => 10, 'maxlength' => 10), (['class' => 'form-control'])); ?>
                            <?php echo $form->error($model, 'role'); ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"><?php echo $form->labelEx($model, 'profile_photo_path'); ?></div>
                            <?php echo $form->textField($model, 'profile_photo_path', array('size' => 60, 'maxlength' => 2048), (['class' => 'form-control'])); ?>
                            <?php echo $form->error($model, 'profile_photo_path'); ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"><?php echo $form->labelEx($model, 'id_pegawai'); ?></div>
                            <?php echo $form->textField($model, 'id_pegawai', array('size' => 10, 'maxlength' => 10), (['class' => 'form-control'])); ?>
                            <?php echo $form->error($model, 'id_pegawai'); ?>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Save'); ?>
                            </div>
                        </div>

                    </div>

                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </section>
    </section>
</section>