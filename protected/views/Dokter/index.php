<section id="main-content">
    <section class="wrapper">
        <section class="wrapper">
            <div class="table-agile-info">
                <!---728x90--->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tindakan Pasien
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>No. Pendaftaran</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Layanan</th>
                                    <th>Poli</th>
                                    <th>Status</th>
                                    <th style="width:30px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($model as $p) : ?>
                                    <tr>
                                        <td><?= $p['no_pendaftaran']; ?></td>
                                        <td><?= $p['tgl_pendaftaran']; ?></span></td>
                                        <td><?= $p['nama_pasien']; ?></td>
                                        <td><?= $p['jenis_layanan']; ?></span></td>
                                        <td><?= $p['poliklinik']; ?></span></td>
                                        <?php if ($p['status_pendaftaran'] == "menunggu") { ?>
                                            <td><span class="label label-danger"><?= $p['status_pendaftaran']; ?></span></td>
                                        <?php } else if ($p['status_pendaftaran'] == "proses") { ?>
                                            <td><span class="label label-warning"><?= $p['status_pendaftaran']; ?></span></td>
                                        <?php } else if ($p['status_pendaftaran'] == "selesai") { ?>
                                            <td><span class="label label-success"><?= $p['status_pendaftaran']; ?></span></td>
                                        <?php } ?>


                                        <td>
                                            <a href="<?= Yii::app()->request->baseUrl; ?>/Dokter/Tindakan/<?= $p['id_riwayat'] ?>" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus-square"></i>
                                                Tindakan
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">

                            <div class="col-sm-5 text-center">
                                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                            </div>
                            <div class="col-sm-7 text-right text-center-xs">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
                <!---728x90--->
            </div>
        </section>
    </section>

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Form Tittle</h4>
                </div>
                <div class="modal-body">

                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile3">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>