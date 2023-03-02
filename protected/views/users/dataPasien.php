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
                            <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Bulk action</option>
                                <option value="1">Delete selected</option>
                                <option value="2">Bulk edit</option>
                                <option value="3">Export</option>
                            </select>
                            <button class="btn btn-sm btn-default">Apply</button>
                        </div>
                        <div class="col-sm-4">
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
                                    <th>Id Pasien</th>
                                    <th>NIK</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Poliklinik</th>
                                    <th>Jenis Layanan</th>
                                    <th>Kontak Darurat</th>
                                    <th style="width:30px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $p) : ?>
                                    <tr>
                                        <td><?= $p['id_pasien'] ?></td>
                                        <td><?= $p['nik']; ?></td>
                                        <td><?= $p['nama_pasien']; ?></span></td>
                                        <td><?= $p['jenis_kelamin']; ?></span></td>
                                        <td><?= $p['tempat_lahir']; ?> / <?= $p['tanggal_lahir'] ?></span></td>
                                        <td><?= $p['no_hp']; ?></span></td>
                                        <td><?= $p['alamat']; ?></span></td>
                                        <td><?= $p['poliklinik']; ?></span></td>
                                        <td><?= $p['jenis_layanan']; ?></span></td>
                                        <td><?= $p['kontak_lain']; ?></span></td>
                                        <td>
                                            <a href="#" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
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