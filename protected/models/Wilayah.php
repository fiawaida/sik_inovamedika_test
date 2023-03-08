<?php

/**
 * This is the model class for table "tbl_wilayah".
 *
 * The followings are the available columns in table 'tbl_wilayah':
 * @property string $id_wilayah
 * @property string $kantor
 * @property string $wilayah
 * @property string $created_at
 * @property string $updated_at
 */
class Wilayah extends CActiveRecord
{
	public function tableName()
	{
		return 'tbl_wilayah';
	}

	public function rules()
	{
		return array(
			array('kantor, wilayah', 'required'),
			array('kantor', 'length', 'max' => 100),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wilayah, kantor, wilayah, created_at, updated_at', 'safe', 'on' => 'search'),
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
			'id_wilayah' => 'Id Wilayah',
			'kantor' => 'Kantor',
			'wilayah' => 'Wilayah',
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

		$criteria->compare('id_wilayah', $this->id_wilayah, true);
		$criteria->compare('kantor', $this->kantor, true);
		$criteria->compare('wilayah', $this->wilayah, true);
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
	 * @return Wilayah the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
