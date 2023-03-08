<section id="main-content">
    <section class="wrapper">
        <section class="wrapper">
            <div class="table-agile-info">
                <!---728x90--->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kasir
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>No. Pendaftaran</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Nama Pasien</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Poliklinik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($model as $p) : ?>
                                    <tr>
                                        <td>
                                            <a href="<?= Yii::app()->request->baseUrl; ?>/users/DaftarBiaya/<?= $p['id_riwayat'] ?>" data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus-square"></i>
                                                <?= $p['no_pendaftaran']; ?>
                                            </a>
                                        </td>
                                        <td><?= $p['tgl_pendaftaran']; ?></span></td>
                                        <td><?= $p['nama_pasien']; ?></td>
                                        <td><?= $p['tempat_lahir']; ?>/<?= $p['tanggal_lahir']; ?></span></td>
                                        <td><?= $p['poliklinik']; ?></span></td>
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