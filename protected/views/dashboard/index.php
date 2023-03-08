<section id="main-content">
    <section class="wrapper">

        <h1>Grafik Kunjungan Bulanan </h1>
        <div class="market-updates">
            <div class="container-fluid" id="content-area">

                <div class="row-fluid">

                    <form method="post" action="<?php echo Yii::app()->baseUrl; ?>/dashboard/set">
                        <div class="span4">
                            Start :
                            <select name="bulanan_start">
                                <?php $this->widget('SelectOpBulan', array('id_select' => (array_key_exists('bulanan_start', $_SESSION) ? $_SESSION['bulanan_start'] : date('m')))); ?>
                            </select>
                        </div>

                        <div class="span4">
                            End :
                            <select name="bulanan_end">
                                <?php $this->widget('SelectOpBulan', array('id_select' => (array_key_exists('bulanan_end', $_SESSION) ? $_SESSION['bulanan_end'] : date('m')))); ?>
                            </select>
                        </div>

                        <div class="span4">
                            Year :
                            <select name="bulanan_tahun">
                                <?php $this->widget('SelectOpTahun', array('id_select' => (array_key_exists('bulanan_tahun', $_SESSION) ? $_SESSION['bulanan_tahun'] : date('Y')))); ?>
                            </select>
                        </div>

                        <div class="span3 pull-right">
                            <input type="submit" class="btn btn-warning pull-right" value="Lihat Grafik">
                        </div>
                    </form>

                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <?php
                        $this->Widget('ext.highcharts.HighchartsWidget', array(
                            'options' => array(
                                'title' => array('text' => 'Grafik Kunjungan'),
                                'xAxis' => array(
                                    'categories' => $arr_da,
                                    'title' => array('text' => 'Bulan')
                                ),
                                'yAxis' => array(
                                    'title' => array('text' => 'Jumlah Pasien')
                                ),
                                'series' => array(
                                    array('name' => 'Jumlah Pasien', 'data' => array(2, 6, 7))
                                )
                            )
                        ));
                        ?>
                    </div>
                </div>
                <div class="row-fluid">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                                datasets: [{
                                    label: '# Jumlah Pasien',
                                    data: [0, 0, 3, 0, 0, 0],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>

    </section>
</section>