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
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view'),
				'users' => array('*'),
			),
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('DPasien', 'view'),
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
				'allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
			),
			array(
				'allow',  // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Users'])) {
			$model->attributes = $_POST['Users'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id_user));
		}

		$this->render('create', array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
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

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
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
		// $this->render('hello-world', ['model' => $user]);
		// $dataProvider = new CActiveDataProvider('Users');
		// $this->render('index', array(
		// 	'dataProvider' => $dataProvider,
		// ));
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

	public function actionDPasien()
	{
		$pasien = Pasien::model()->findAll();
		$this->render('dataPasien', ['pasien' => $pasien]);
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

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
