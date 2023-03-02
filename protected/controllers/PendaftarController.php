<?php

class PendaftarController extends Controller
{
    public $layout = '//layouts/column4';

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
                'actions' => array('tindakan', 'view'),
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
    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionInputPas()
    {
        $mPasien = new Pasien;

        if (isset($_POST['Pendaftar'])) {
            $mPasien->attributes = $_POST['Pendaftar'];
            if ($mPasien->save())
                $this->redirect(array('pendaftaran_pasien', 'modal' => $mPasien));
        }
        return $this->render('pendaftaran_pasien', array('modal' => $mPasien));
    }
    public function actionTindakan()
    {
        $tindakan = Tindakan::model()->findAll();
        $pengobatan = Obat::model()->findAll();
        $this->render('tindakan', ['modal' => $tindakan, 'obat' => $pengobatan]);
    }
}
