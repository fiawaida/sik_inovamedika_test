<?php

class UsersController extends Controller
{
	public $layout = '//layouts/column3';
	// public $layout = '//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('dashboard', 'view'),
				'users' => array('*'),
			),
			array(
				'deny',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view'),
				'users' => array('?'),
			),
			array(
				'deny',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DaftarPasien', 'view'),
				'users' => array('?'),
			),
			array(
				'deny',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('CetakPendaftar', 'view'),
				'users' => array('?'),
			),
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DPasien', 'view'),
				'users' => array('*'),
			),
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DaftarKasir', 'view'),
				'users' => array('*'),
			),
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DObat', 'view'),
				'users' => array('*'),
			),
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DWilayah', 'view'),
				'users' => array('*'),
			),
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('create', 'update'),
				'users' => array('@'),
			),
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('InputPas', 'update'),
				'users' => array('@'),
			),
			array(
				'allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
			),
			array(
				'allow',  // deny all users
				'users' => array('*'),
			),
			array(
				'deny',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DaftarBiaya', 'view'),
				'users' => array('?'),
			),

		);
	}

	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	public function actionCreate()
	{
		$model = new Users;

		if (isset($_POST['Users'])) {
			$model->attributes = $_POST['Users'];
			if ($model->save()) {
				Yii::app()->getMessages('Data User Berhasil Ditambahkan');
				return $this->redirect('index');
			} else {
				Yii::app()->getMessages('Data User Gagal Ditambahkan');
			}
		}
		$this->render('inputUser', array(
			'model' => $model,
		));
	}

	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Users'])) {
			$model->attributes = $_POST['Users'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id_user));
		}

		$this->render('update', array(
			'model' => $model,
		));
	}


	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionIndex()
	{
		$user = Users::model()->findAll();
		$this->render('index', ['model' => $user]);
	}

	public function actionDashboard()
	{
		$this->render('dashboard');
	}

	public function actionDataUser()
	{
		$dataProvider = new CActiveDataProvider('Users');
		$this->render('datauser', array(
			'dataProvider' => $dataProvider,
		));
	}
	public function actionInputPas()
	{
		$model = new Pasien;

		if (isset($_POST['Pasien'])) {
			$model->attributes = $_POST['Pasien'];
			if ($model->save()) {
				Yii::app()->user->setFlash('success', 'You have successfully added.');
				return $this->redirect('DPasien');
			} else {
				Yii::app()->getMessages('Data User Gagal Ditambahkan');
			}
		}

		$this->render('pendaftaran_pasien', array(
			'model' => $model,
		));
	}
	public function actionDPasien()
	{
		$pasien = Pasien::model()->findAll();
		$this->render('dataPasien', ['pasien' => $pasien]);
	}

	public function actionDaftarPasien()
	{
		// $pegawai = Yii::app()->db->createCommand()->select('id_pegawai, nama_pegawai')->from('tbl_pegawai')->where('jabatan = "Dokter"')->queryAll();
		// // $arr = $pegawai['id_pegawai'];
		// $json = json_encode($pegawai);
		// die(var_dump($json));
		$model = new Riwayat;

		if (isset($_POST['Riwayat'])) {
			$model->attributes = $_POST['Riwayat'];
			if ($model->save()) {
				Yii::app()->user->setFlash('success', 'You have successfully added.');
				return $this->redirect('CetakPendaftar/' . $model->id_riwayat);
			} else {
				Yii::app()->getMessages('Data User Gagal Ditambahkan');
			}
		}

		$this->render('perawat/pendaftaran', array(
			'model' => $model,
		));
	}

	public function actionCetakPendaftar($id)
	{
		$pendaftar = Yii::app()->db->createCommand()->select('*')->from('tbl_riwayat')->RIGHTJOIN('tbl_pasien', 'tbl_riwayat.id_pasien = tbl_pasien.id_pasien')->where('id_riwayat=' . $id)->queryAll();
		$this->render('perawat/CetakPendaftaran', ['model' => $pendaftar]);
	}


	public function actionDObat()
	{
		$obat = Obat::model()->findAll();
		$this->render('dataObat', ['modal' => $obat]);
	}
	public function actionDWilayah()
	{
		$wil = Wilayah::model()->findAll();
		$this->render('dataWilayah', ['modal' => $wil]);
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Users('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Users']))
			$model->attributes = $_GET['Users'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model = Users::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionDaftarBiaya($id)
	{
		$pendaftar = Yii::app()->db->createCommand()->select('*')->from('tbl_riwayat')->RIGHTJOIN('tbl_pasien', 'tbl_riwayat.id_pasien = tbl_pasien.id_pasien')->where('id_riwayat=' . $id)->queryAll();
		$biaya = Yii::app()->db->createCommand()->SELECT('tbl_riwayat.id_riwayat, tbl_resep.id_obat, tbl_obat.nama_obat,tbl_resep.qty, tbl_obat.harga_obat')
			->FROM('tbl_riwayat')
			->JOIN('tbl_resep', 'tbl_resep.id_riwayat = tbl_riwayat.id_riwayat')
			->JOIN('tbl_obat', 'tbl_resep.id_obat= tbl_obat.id_obat')
			->WHERE('tbl_riwayat.id_riwayat=' . $id)->queryAll();

		$arr_qty = array();
		$arr_hargaobat = array();
		$arr_totalObat = array();
		foreach ($biaya as $g) {
			array_push($arr_qty, $g['qty']);
			array_push($arr_hargaobat, $g['harga_obat']);
			array_push($arr_totalObat, ($g['harga_obat'] * $g['qty']));
		}
		$jumlahBiaya = array_sum($arr_totalObat);
		// die(var_dump($jumlahBiaya));
		$biayaKonsul = Yii::app()->db->createCommand()->SELECT('tbl_riwayat.id_riwayat, tbl_tindakan.jenis_tindakan, tbl_tindakan.harga')
			->FROM('tbl_riwayat')
			->JOIN('tbl_tindakan', 'tbl_riwayat.id_tindakan = tbl_tindakan.id_tindakan')
			->WHERE('tbl_riwayat.id_riwayat=' . $id)->queryAll();


		$this->render('perawat/Rincian', array(
			'model' => $pendaftar,
			'modal' => $biaya,
			'modalKonsul' => $biayaKonsul,
			'jml' => $jumlahBiaya
		));
	}

	public function actionDaftarKasir()
	{
		$pasien = Yii::app()->db->createCommand()->select('*')->from('tbl_riwayat')->RIGHTJOIN('tbl_pasien', 'tbl_riwayat.id_pasien = tbl_pasien.id_pasien')->where('status_pendaftaran="selesai"')->queryAll();
		$this->render('perawat/kasir', ['model' => $pasien]);
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
