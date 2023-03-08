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
                    <?php $form = $this->beginWidget('CActiveForm', array('id' => 'pendaftar-form')); ?>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'nik'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'nik', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'nama_pasien'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'nama_pasien', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'jenis_kelamin'); ?></div>
                        <div class="col-lg-2 ">
                            <?= $form->dropDownList($model, 'jenis_kelamin', $items = ['P' => 'Pria', 'W' => 'Wanita'], $options = [], (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'tempat_lahir'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->textField($model, 'tempat_lahir', (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'tanggal_lahir'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->dateField($model, 'tanggal_lahir', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'no_hp'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'no_hp', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'alamat'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'alamat', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'kontak_lain'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'kontak_lain', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">

                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
                            <?= CHtml::submitButton($model->isNewRecord ? 'simpan data' : 'Save', ["class" => "btn btn-primary"]); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </section>
    </section>
</section>