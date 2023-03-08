<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Pemberian Resep Obat
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="form-horizontal bucket-form">
                    <?php $form = $this->beginWidget('CActiveForm', array()); ?>
                    <?php echo $form->errorSummary($model); ?>

                    <div class="form-group has-success">
                        <div class="col-sm-3"><?= $form->labelEx($model, 'nama_obat'); ?></div>
                        <div class="col-lg-3">
                            <?= $form->DropDownList($model, 'id_obat', CHtml::listData(Obat::model()->findAll(), 'id_obat', 'nama_obat'), (['class' => 'form-control'])); ?>
                        </div>
                        <?php echo $form->error($model, 'id_obat'); ?>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3"><?= $form->labelEx($model, 'qty'); ?></div>
                        <div class="col-lg-3">
                            <?= $form->textField($model, 'qty', (['class' => 'form-control'])); ?>
                        </div>
                        <?php echo $form->error($model, 'qty'); ?>
                    </div>
                    <div class="form-group has-success">
                        <div class="col-sm-3"><?= $form->labelEx($model, 'aturan'); ?></div>
                        <div class="col-lg-3">
                            <?= $form->textField($model, 'aturan', (['class' => 'form-control'])); ?>
                        </div>
                        <?php echo $form->error($model, 'aturan'); ?>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-6">
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah Resep' : 'Save'); ?>
                        </div>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </section>
    </section>