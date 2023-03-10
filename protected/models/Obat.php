<?php

/**
 * This is the model class for table "tbl_obat".
 *
 * The followings are the available columns in table 'tbl_obat':
 * @property string $id_obat
 * @property string $name
 * @property string $harga_obat
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class Obat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_obat';
	}
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_obat, nama_obat, harga_obat', 'required'),
			array('id_obat', 'length', 'max' => 10),
			array('nama_obat,kategori, satuan', 'length', 'max' => 255),
			array('harga_obat', 'length', 'max' => 20),
			array('description, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_obat, nama_obat, harga_obat, description, created_at, updated_at', 'safe', 'on' => 'search'),
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
			'id_obat' => 'Id Obat',
			'nama_obat' => 'Nama Obat',
			'harga_obat' => 'harga_obat',
			'satuan' => 'satuan',
			'description' => 'Description',
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

		$criteria->compare('id_obat', $this->id_obat, true);
		$criteria->compare('nama_obat', $this->nama_obat, true);
		$criteria->compare('harga_obat', $this->harga_obat, true);
		$criteria->compare('kategori', $this->description, true);
		$criteria->compare('satuan', $this->descripsatuantion, true);
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
	 * @return Obat the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
