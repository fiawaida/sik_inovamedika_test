<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                pendaftaran Pemeriksaan
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="form-horizontal bucket-form">
                    <?php $form = $this->beginWidget('CActiveForm', array('id' => 'pendaftar-form')); ?>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'no_pendaftaran'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'no_pendaftaran', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'id_pasien'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'id_pasien', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'tgl_pendaftaran'); ?></div>
                        <div class="col-lg-6 ">
                            <?= $form->dateField($model, 'tgl_pendaftaran', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'tempat_lahir'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($model, 'keluhan', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'bb'); ?></div>
                        <div class="col-lg-4">
                            <?= $form->textField($model, 'bb', (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'tb'); ?></div>
                        <div class="col-lg-4">
                            <?= $form->textField($model, 'tb', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($model, 'poliklinik'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->dropDownList($model, 'poliklinik', $items = ['umum' => 'Umum', 'gigi' => 'Gigi', 'bedah' => 'Bedah'], $options = [], (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'jenis_layanan'); ?></div>
                        <div class="col-lg-3">
                            <?= $form->dropDownList($model, 'jenis_layanan', $items = ['umum' => 'Umum', 'BPJS' => 'BPJS', 'Asuransi' => 'Asuransi'], $options = [], (['class' => 'dropdown-menu'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($model, 'status_pendaftaran'); ?></div>
                        <div class="col-lg-3">
                            <?= $form->dropDownList($model, 'status_pendaftaran', $items = ['menunggu' => 'Menunggu', 'proses' => 'Proses', 'selesai' => 'Selesai'], $options = [], (['class' => 'dropdown-menu'])); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
                            <?= CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Save', ["class" => "btn btn-primary"]); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </section>
    </section>
</section>