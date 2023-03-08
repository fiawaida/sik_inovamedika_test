<?php

class DokterController extends Controller
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
                'actions' => array('Tindakan', 'view'),
                'users' => array('?'),
            ),
            array(
                'deny',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('Tindakan', 'update'),
                'users' => array('?'),
            ),
            array(
                'allow',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('TambahResep', 'update'),
                'users' => array('@'),
            ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('TambahCatatan', 'update'),
                'users' => array('@'),
            ),
            array(
                'allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('UpdateStatus', 'update'),
                'users' => array('?'),
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
        $pendaftar = Yii::app()->db->createCommand()->select('*')->from('tbl_riwayat')->RIGHTJOIN('tbl_pasien', 'tbl_riwayat.id_pasien = tbl_pasien.id_pasien')->queryAll();
        $this->render('index', array('model' => $pendaftar));
    }

    public function actionTindakan($id)
    {
        $pendaftar = Yii::app()->db->createCommand()->select('*')->from('tbl_riwayat')->RIGHTJOIN('tbl_pasien', 'tbl_riwayat.id_pasien = tbl_pasien.id_pasien')->where('id_riwayat=' . $id)->queryAll();
        $resep = Yii::app()->db->createCommand()->select('*')->from('tbl_resep')->RIGHTJOIN('tbl_obat', 'tbl_resep.id_obat = tbl_obat.id_obat')->where('id_riwayat=' . $id)->queryAll();
        // die(var_dump($modelObat));
        $model = $this->loadModel($id);
        if (isset($_POST['Riwayat'])) {
            $model->attributes = $_POST['Riwayat'];
            $model->id_pegawai = Yii::app()->user->getState('id_pegawai');
            $model->status_pendaftaran = "proses";
            $model->updated_at = date('Y-m-d H:i:s');
            if ($model->save()) {
                return $this->render('tindakan', array('model' => $pendaftar, 'modal' => $model, 'Resep' => $resep));
            } else {
                Yii::app()->getMessages('Data User Gagal Ditambahkan');
            }
        }
        $this->render('tindakan', array(
            'model' => $pendaftar,
            'modal' => $model,
            'Resep' => $resep
        ));
    }

    public function actionUpdateStatus($id)
    {
        $model = $this->loadModel($id);
        $model->status_pendaftaran = "selesai";
        $model->updated_at = date('Y-m-d H:i:s');
        if ($model->save()) {
            return $this->redirect(array("dokter/index"));;
        } else {
            Yii::app()->getMessages('Data User Gagal Ditambahkan');
        }
    }

    public function loadModel($id)
    {
        $model = Riwayat::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function actionTambahResep($id)
    {
        $obat = new Resep;
        if (isset($_POST['Resep'])) {
            $obat->attributes = $_POST['Resep'];
            $obat->id_riwayat = $id;
            $obat->updated_at = date('Y-m-d H:i:s');
            $obat->updated_at = date('Y-m-d H:i:s');
            if ($obat->save()) {
                return $this->redirect(array('Tindakan', 'id' => $obat->id_riwayat));
            } else {
                Yii::app()->getMessages('Data User Gagal Ditambahkan');
            }
        }
        $this->render('inputObat', array(
            'model' => $obat,
        ));
    }
}
