<section id="main-content">
    <section class="wrapper">
        <section class="wrapper">
            <div class="table-agile-info">
                <!---728x90--->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Data Pasien
                    </div>

                    <div class="row w3-res-tb">
                        <div class="col-sm-5 m-b-xs">
                            <a href="<?= Yii::app()->request->baseUrl; ?>/users/InputPas" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus-square"></i>
                                Tambah Pasien Baru
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Pasien</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Kontak Darurat</th>
                                    <th style="width:30px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $p) : ?>
                                    <tr>
                                        <td><?= $p['nik']; ?></td>
                                        <td><?= $p['nama_pasien']; ?></span></td>
                                        <td><?= $p['tempat_lahir']; ?> / <?= $p['tanggal_lahir'] ?></span></td>
                                        <td><?= $p['no_hp']; ?></span></td>
                                        <td><?= $p['alamat']; ?></span></td>
                                        <td><?= $p['kontak_lain']; ?></span></td>
                                        <!-- <td>
                                            <a href="<?= Yii::app()->request->baseUrl; ?>/users/InputPas" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus-square"></i>
                                                Daftar
                                            </a>
                                        </td> -->
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