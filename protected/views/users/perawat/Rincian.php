<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                KLINIK INOVA MEDIKA SOLUSINDO
                <p>Rincian Biaya </p>
            </header>
            <div class="panel-body">
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <a href="" data-toggle="modal" class="btn btn-success"><i class="fa fa-wheelchair"></i>
                            Data Pasien
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
                                        <td width="20%"><b>Alamat Pasien</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['alamat'] ?></i></b></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Kontak Pasien</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['no_hp'] ?></i></b></td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><b>Kontak Darurat</b></td>
                                        <td width="3%"><b>
                                                <center>:</center>
                                            </b></td>
                                        <td><b><i><?= $m['kontak_lain'] ?></i></b></td>
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
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                <p>Rincian Biaya </p>
            </header>
            <div class="panel-body">
                <div class="panel-body table-responsive" id="demo">
                    <table class="datatable table table-bordered  table-hover table-striped">
                        <tbody>
                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <th>Biaya Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($modalKonsul as $p) : ?>
                                            <tr>
                                                <td>
                                                    <?= $p['jenis_tindakan']; ?>
                                                </td>
                                                <td>
                                                    <b><?= $p['harga']; ?></b>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    <table class="datatable table table-bordered  table-hover table-striped">
                        <tbody>
                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <th>Biaya Obat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($modal as $obat) : ?>
                                            <tr>
                                                <td>
                                                    <?= $obat['nama_obat']; ?>
                                                </td>
                                                <td>
                                                    @ <?= $obat['qty']; ?>
                                                </td>
                                                <td>
                                                    <?= $obat['harga_obat']; ?>
                                                </td>
                                                <?php $a = $obat['harga_obat'] * $obat['qty']; ?>
                                                <td>
                                                    <b><?= $a ?></b>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </tbody>
                    </table>
                    <table class="datatable table table-bordered  table-hover table-striped">
                        <tbody>
                            <tr>
                                <td width="20%"><b>TOTAL BIAYA</b></td>
                                <td width="3%"><b>
                                        <center>:</center>
                                    </b></td>
                                <td><b>
                                        <h3><?= $jml ?></h3>
                                    </b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </section>
    </section>
</section>