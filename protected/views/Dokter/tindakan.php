<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                KLINIK INOVA MEDIKA SOLUSINDO
            </header>
            <div class="panel-body">
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a href="<?= Yii::app()->request->baseUrl; ?>/dokter/UpdateStatus/<?= $modal->id_riwayat ?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-medkit"></i>
                            Simpan Rekam Medis
                        </a>
                    </div>
                </div>
                <div class="position-center">
                    <div class="panel-body table-responsive" id="demo">
                        <table class="datatable table table-bordered  table-hover table-striped">
                            <tbody>
                                <?php foreach ($model as $m) : ?>
                                    <tr>
                                        <td width="20%"><b>Nomor Pendaftaran</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['no_pendaftaran'] ?></i></b></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Nomor Pasien</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['id_pasien'] ?></i></b></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Nama Pasien</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['nama_pasien'] ?></i></b></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Poliklinik</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['poliklinik'] ?></i></b></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Tanggal</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['tgl_pendaftaran'] ?></i></b></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Catatan Diagnosa Medis
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
                        <?php echo $form->errorSummary($modal); ?>
                        <div class="form-group">
                            <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'bb'); ?></div>
                            <div class="col-lg-4">
                                <?= $form->textField($modal, 'bb', (['class' => 'form-control'])); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'tb'); ?></div>
                            <div class="col-lg-4">
                                <?= $form->textField($modal, 'tb', (['class' => 'form-control'])); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 control-label"><?php echo $form->labelEx($modal, 'alergi'); ?></div>
                            <div class="col-lg-6">
                                <?php echo $form->textField($modal, 'alergi', (['class' => 'form-control'])); ?>
                                <?php echo $form->error($modal, 'alergi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'keluhan'); ?></div>
                            <div class="col-lg-6">
                                <?php echo $form->textField($modal, 'keluhan', (['class' => 'form-control'])); ?>
                                <?php echo $form->error($modal, 'keluhan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'diagnosa'); ?></div>
                            <div class="col-lg-6">
                                <?php echo $form->textField($modal, 'diagnosa', (['class' => 'form-control'])); ?>
                            </div>
                            <?php echo $form->error($modal, 'diagnosa'); ?>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 control-label"> <?php echo $form->labelEx($modal, 'id_tindakan'); ?></div>
                            <div class="col-lg-6">
                                <?= $form->DropDownList($modal, 'id_tindakan', CHtml::listData(Tindakan::model()->findAll(), 'id_tindakan', 'jenis_tindakan'), (['class' => 'form-control'])); ?>
                            </div>
                            <?php echo $form->error($modal, 'id_tindakan'); ?>
                        </div>


                        <div class="col-lg-offset-3 col-lg-6">
                            <?php echo CHtml::submitButton($modal->isNewRecord ? 'Tambah' : 'Save', ["class" => "btn btn-info"]); ?>
                        </div>

                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Resep Pengobatan
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <a href="<?= Yii::app()->request->baseUrl; ?>/dokter/TambahResep/<?= $modal->id_riwayat ?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-medkit"></i>
                                Tambah Resep
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th>Id Resep</th>
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Kategori Obat</th>
                                <th>Qty</th>
                                <th>Satuan</th>
                                <th>Aturan Pakai</th>
                                <th style="width:30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Resep as $p) : ?>
                                <tr>
                                    <td><?= $p['id_resep']; ?></td>
                                    <td><?= $p['id_obat']; ?></span></td>
                                    <td><?= $p['nama_obat']; ?></span></td>
                                    <td><?= $p['kategori']; ?></span></td>
                                    <td><?= $p['qty']; ?></span></td>
                                    <td><?= $p['satuan']; ?></span></td>
                                    <td><?= $p['aturan']; ?></span></td>
                                    <td>
                                        <a href="<?= Yii::app()->request->baseUrl; ?>/dokter/TambahResep<?= $p["id_riwayat"] ?>" data-toggle="modal"><i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
</section>