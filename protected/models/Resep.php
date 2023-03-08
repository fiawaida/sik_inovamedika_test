<?php

/**
 * This is the model class for table "tbl_resep".
 *
 * The followings are the available columns in table 'tbl_resep':
 * @property string $id_resep
 * @property string $id_riwayat
 * @property string $id_obat
 * @property string $qty
 * @property string $aturan
 * @property string $created_at
 * @property string $updated_at
 */
class Resep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_resep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_riwayat, id_obat, qty, aturan', 'required'),
			array('id_riwayat, id_obat, qty', 'length', 'max'=>10),
			array('aturan', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_resep, id_riwayat, id_obat, qty, aturan, created_at, updated_at', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_resep' => 'Id Resep',
			'id_riwayat' => 'Id Riwayat',
			'id_obat' => 'Id Obat',
			'qty' => 'Qty',
			'aturan' => 'Aturan',
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

		$criteria->compare('id_resep',$this->id_resep,true);
		$criteria->compare('id_riwayat',$this->id_riwayat,true);
		$criteria->compare('id_obat',$this->id_obat,true);
		$criteria->compare('qty',$this->qty,true);
		$criteria->compare('aturan',$this->aturan,true);
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
	 * @return Resep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
