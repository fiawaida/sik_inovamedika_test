<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                KLINIK INOVA MEDIKA SOLUSINDO
            </header>
            <div class="panel-body">
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