<?php

/**
 * This is the model class for table "tbl_pegawai".
 *
 * The followings are the available columns in table 'tbl_pegawai':
 * @property integer $id_pegawai
 * @property string $nama_pegawai
 * @property string $alamat_pegawai
 * @property string $wilayah_id
 * @property string $jenis_kelamin
 * @property string $pendidikan_terakhir
 * @property string $photo
 * @property string $jabatan
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblWilayah $wilayah
 */
class Pegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_pegawai, alamat_pegawai, wilayah_id, jenis_kelamin, pendidikan_terakhir, photo, jabatan', 'required'),
			array('nama_pegawai, jenis_kelamin, pendidikan_terakhir, photo, jabatan', 'length', 'max'=>255),
			array('wilayah_id', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pegawai, nama_pegawai, alamat_pegawai, wilayah_id, jenis_kelamin, pendidikan_terakhir, photo, jabatan, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'wilayah' => array(self::BELONGS_TO, 'TblWilayah', 'wilayah_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pegawai' => 'Id Pegawai',
			'nama_pegawai' => 'Nama Pegawai',
			'alamat_pegawai' => 'Alamat Pegawai',
			'wilayah_id' => 'Wilayah',
			'jenis_kelamin' => 'Jenis Kelamin',
			'pendidikan_terakhir' => 'Pendidikan Terakhir',
			'photo' => 'Photo',
			'jabatan' => 'Jabatan',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('nama_pegawai',$this->nama_pegawai,true);
		$criteria->compare('alamat_pegawai',$this->alamat_pegawai,true);
		$criteria->compare('wilayah_id',$this->wilayah_id,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('pendidikan_terakhir',$this->pendidikan_terakhir,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
