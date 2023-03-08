<?php

/**
 * This is the model class for table "tbl_tindakan".
 *
 * The followings are the available columns in table 'tbl_tindakan':
 * @property string $id_tindakan
 * @property string $id_pasien
 * @property string $harga
 * @property string $layanan
 * @property string $created_at
 * @property string $updated_at
 */
class Tindakan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tindakan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('harga', 'required'),
			array('jenis_tindakan', 'length', 'max' => 255),
			array('harga', 'length', 'max' => 20),
			array('jeniis_tindakan, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tindakan, harga, jenis_tindakan, created_at, updated_at', 'safe', 'on' => 'search'),
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
			'id_tindakan' => 'Id Tindakan',
			'jenis_tindakan' => 'Tindakan',
			'harga' => 'Harga',
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

		$criteria->compare('id_tindakan', $this->id_tindakan, true);
		$criteria->compare('harga', $this->harga, true);
		$criteria->compare('jenis_tindakan', $this->jenis_tindakan, true);
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
	 * @return Tindakan the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
