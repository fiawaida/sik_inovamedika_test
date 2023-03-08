<?php

class DashboardController extends Controller
{
	public $layout = '//layouts/column3';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view'),
				'users' => array('*'),
			)
		);
	}

	public function actionIndex()
	{
		$bulanan_start = (array_key_exists('bulanan_start', $_SESSION) ? $_SESSION['bulanan_start'] : date('m'));
		$bulanan_end = (array_key_exists('bulanan_end', $_SESSION) ? $_SESSION['bulanan_end'] : date('m'));
		$bulanan_tahun = (array_key_exists('bulanan_tahun', $_SESSION) ? $_SESSION['bulanan_tahun'] : date('Y'));

		$in_date = '';
		for ($i = (int)$bulanan_start; $i <= $bulanan_end; $i++) {
			if ($i < 10) {
				$i = '0' . $i;
			}
			if (empty($in_date)) {
				$in_date = '"' . $bulanan_tahun . '-' . $i . '"';
			} else {
				$in_date .= ',"' . $bulanan_tahun . '-' . $i . '"';
			}
		}

		$graph = Yii::app()->db->createCommand('SELECT count(id_riwayat) as jumlah_pasien, SUBSTRING(created_at,6,2) as bulan FROM `tbl_riwayat` WHERE SUBSTRING(created_at,1,7) in (' . $in_date . ') group by SUBSTRING(created_at,1,7)')->queryAll();

		// die(var_dump($graph));
		$arr_date = array();
		$arr_total = array();
		foreach ($graph as $g) {
			array_push($arr_date, $this->Bulan($g['bulan'] - 1));
			array_push($arr_total, (int) $g['jumlah_pasien']);
		}

		$this->render('index', array(
			'arr_da' => $arr_date,
			'arr_to' => $arr_total
		));
	}

	public function actionSet()
	{
		$_SESSION['bulanan_start'] = $_POST['bulanan_start'];
		$_SESSION['bulanan_end'] = $_POST['bulanan_end'];
		$_SESSION['bulanan_tahun'] = $_POST['bulanan_tahun'];

		$this->redirect(array("dashboard/index"));
	}

	protected function Bulan($bulan)
	{
		$list_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		return ($list_bulan[$bulan]);
	}
}
