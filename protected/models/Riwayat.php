<?php

/**
 * This is the model class for table "tbl_riwayat".
 *
 * The followings are the available columns in table 'tbl_riwayat':
 * @property string $id_riwayat
 * @property string $no_pendaftaran
 * @property string $id_pasien
 * @property string $tgl_pendaftaran
 * @property string $keluhan
 * @property double $bb
 * @property double $tb
 * @property string $poliklinik
 * @property string $jenis_layanan
 * @property integer $id_pegawai
 * @property string $status_pendaftaran
 * @property string $created_at
 * @property string $updated_at
 */
class Riwayat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_riwayat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pasien, keluhan, bb, tb', 'required'),
			array('id_pegawai,id_tindakan', 'numerical', 'integerOnly' => true),
			array('bb, tb', 'numerical'),
			array('no_pendaftaran', 'length', 'max' => 50),
			array('id_pasien', 'length', 'max' => 10),
			array('keluhan,diagnosa,alergi', 'length', 'max' => 255),
			array('poliklinik', 'length', 'max' => 9),
			array('jenis_layanan, status_pendaftaran', 'length', 'max' => 8),
			array('tgl_pendaftaran, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_riwayat, no_pendaftaran, id_pasien, tgl_pendaftaran, keluhan, bb, tb, poliklinik, jenis_layanan, id_pegawai, status_pendaftaran, created_at, updated_at', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_riwayat' => 'Id Riwayat',
			'no_pendaftaran' => 'No Pendaftaran',
			'id_pasien' => 'Id Pasien',
			'tgl_pendaftaran' => 'Tgl Pendaftaran',
			'keluhan' => 'Keluhan',
			'bb' => 'Bb',
			'tb' => 'Tb',
			'alergi' => 'Alergi',
			'poliklinik' => 'Poliklinik',
			'jenis_layanan' => 'Jenis Layanan',
			'id_pegawai' => 'Id Pegawai',
			'status_pendaftaran' => 'Status Pendaftaran',
			'diagnosa' => 'Diagnosa',
			'id_tindakan' => 'Tindakan',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id_riwayat', $this->id_riwayat, true);
		$criteria->compare('no_pendaftaran', $this->no_pendaftaran, true);
		$criteria->compare('id_pasien', $this->id_pasien, true);
		$criteria->compare('tgl_pendaftaran', $this->tgl_pendaftaran, true);
		$criteria->compare('keluhan', $this->keluhan, true);
		$criteria->compare('bb', $this->bb);
		$criteria->compare('tb', $this->tb);
		$criteria->compare('alergi', $this->alergi);
		$criteria->compare('poliklinik', $this->poliklinik, true);
		$criteria->compare('jenis_layanan', $this->jenis_layanan, true);
		$criteria->compare('id_pegawai', $this->id_pegawai);
		$criteria->compare('status_pendaftaran', $this->status_pendaftaran, true);
		$criteria->compare('diagnosa', $this->diagnosa, true);
		$criteria->compare('id_tindakan', $this->id_tindakan, true);
		$criteria->compare('created_at', $this->created_at, true);
		$criteria->compare('updated_at', $this->updated_at, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Riwayat the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
