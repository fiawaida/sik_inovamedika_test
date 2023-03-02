<?php

/**
 * This is the model class for table "tbl_pasien".
 *
 * The followings are the available columns in table 'tbl_pasien':
 * @property string $id_pasien
 * @property string $nik
 * @property string $nama_pasien
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $no_hp
 * @property string $alamat
 * @property string $kontak_lain
 * @property string $poliklinik
 * @property integer $id_dokter
 * @property string $jenis_layanan
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblPegawai $idDokter
 */
class Pasien extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nik, nama_pasien, tempat_lahir, tanggal_lahir, no_hp, alamat, kontak_lain, poliklinik, id_dokter, jenis_layanan', 'required'),
			array('id_dokter', 'numerical', 'integerOnly' => true),
			array('nik', 'length', 'max' => 17),
			array('nama_pasien', 'length', 'max' => 255),
			array('jenis_kelamin', 'length', 'max' => 1),
			array('tempat_lahir', 'length', 'max' => 100),
			array('no_hp, kontak_lain', 'length', 'max' => 13),
			array('poliklinik, jenis_layanan', 'length', 'max' => 50),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pasien, nik, nama_pasien, jenis_kelamin, tempat_lahir, tanggal_lahir, no_hp, alamat, kontak_lain, poliklinik, id_dokter, jenis_layanan, created_at, updated_at', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idDokter' => array(self::BELONGS_TO, 'TblPegawai', 'id_dokter'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pasien' => 'Id Pasien',
			'nik' => 'Nik',
			'nama_pasien' => 'Nama Pasien',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'no_hp' => 'No Hp',
			'alamat' => 'Alamat',
			'kontak_lain' => 'Kontak Lain',
			'poliklinik' => 'Poliklinik',
			'id_dokter' => 'Id Dokter',
			'jenis_layanan' => 'Jenis Layanan',
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

		$criteria->compare('id_pasien', $this->id_pasien, true);
		$criteria->compare('nik', $this->nik, true);
		$criteria->compare('nama_pasien', $this->nama_pasien, true);
		$criteria->compare('jenis_kelamin', $this->jenis_kelamin, true);
		$criteria->compare('tempat_lahir', $this->tempat_lahir, true);
		$criteria->compare('tanggal_lahir', $this->tanggal_lahir, true);
		$criteria->compare('no_hp', $this->no_hp, true);
		$criteria->compare('alamat', $this->alamat, true);
		$criteria->compare('kontak_lain', $this->kontak_lain, true);
		$criteria->compare('poliklinik', $this->poliklinik, true);
		$criteria->compare('id_dokter', $this->id_dokter);
		$criteria->compare('jenis_layanan', $this->jenis_layanan, true);
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
	 * @return Pasien the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
