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
                <form role="form" class="form-horizontal bucket-form">
                    <?php $form = $this->beginWidget('CActiveForm', array('id' => 'pendaftar-form',)); ?>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'nik'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'nik', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'nama_pasien'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'nama_pasien', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'jenis_kelamin'); ?></div>
                        <div class="col-lg-2 ">
                            <?= $form->dropDownList($modal, 'jenis_kelamin', $items = ['P' => 'Pria', 'W' => 'Wanita'], $options = [], (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'tempat_lahir'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->textField($modal, 'tempat_lahir', (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'tanggal_lahir'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->dateField($modal, 'tanggal_lahir', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'no_hp'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'no_hp', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'alamat'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'alamat', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'kontak_lain'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'kontak_lain', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'poliklinik'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->dropDownList($modal, 'poliklinik', $items = ['umum' => 'Umum', 'gigi' => 'Gigi', 'bedah' => 'Bedah'], $options = [], (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'jenis_layanan'); ?></div>
                        <div class="col-lg-3">
                            <?= $form->dropDownList($modal, 'jenis_layanan', $items = ['umum' => 'Umum', 'BPJS' => 'BPJS', 'Asuransi' => 'Asuransi'], $options = [], (['class' => 'dropdown-menu'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">

                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
                            <?= CHtml::submitButton("simpan data", ["class" => "btn btn-primary"]); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </form>
            </div>
        </section>
    </section>
</section>