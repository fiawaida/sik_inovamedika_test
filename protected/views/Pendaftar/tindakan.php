<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Resep Obat Pasien
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <form role="form" class="form-horizontal bucket-form">
                    <?php $form = $this->beginWidget('CActiveForm', array('id' => 'pendaftar-form',)); ?>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'id_Pasien'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'id_pasien', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'layanan'); ?></div>
                        <div class="col-lg-6">
                            <?= $form->textField($modal, 'layanan', (['class' => 'form-control'])); ?>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'layanan'); ?></div>
                        <div class="col-lg-2 ">
                            <?= $form->dropDownList($modal, 'jenis_kelamin', $items = ['0' => 'Pemeriksaan', '1' => 'operasi'], $options = [], (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'harga'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->textField($modal, 'harga', (['class' => 'form-control'])); ?>
                        </div>
                        <div class="col-sm-2 control-label"> <?php echo $form->labelEx($modal, 'tanggal_lahir'); ?></div>
                        <div class="col-lg-2">
                            <?= $form->dateField($modal, 'tanggal_lahir', (['class' => 'form-control'])); ?>
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