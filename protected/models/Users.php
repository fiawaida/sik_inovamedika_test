<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property string $id_user
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property integer $status
 * @property string $role
 * @property string $profile_photo_path
 * @property string $id_pegawai
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends CActiveRecord
{
	public function tableName()
	{
		return 'tbl_users';
	}

	public function rules()
	{
		return array(
			array('username, password, id_pegawai', 'required'),
			array('status', 'numerical', 'integerOnly' => true),
			array('username', 'length', 'max' => 255),
			array('password', 'length', 'max' => 50),
			array('role, id_pegawai', 'length', 'max' => 10),
			array('profile_photo_path', 'length', 'max' => 2048),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, username, status, profile_photo_path, id_pegawai', 'safe', 'on' => 'search'),
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
			'id_user' => 'Id User',
			'username' => 'Username',
			'password' => 'Password',
			'status' => 'Status',
			'profile_photo_path' => 'Profile Photo Path',
			'role' => 'Role',
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

		$criteria->compare('id_user', $this->id_user, true);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('status', $this->status);
		$criteria->compare('profile_photo_path', $this->profile_photo_path, true);
		$criteria->compare('role', $this->role, true);
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
	 * @return Users the static model class
	 */

	public function validatePassword($password)
	{
		return $this->password === sha1($password);
	}

	// public function hashPassword($password)
	// {
	// 	return crypt($password, $this->generateSalt());
	// }

	// public function generateSalt($cost = 10)
	// {
	// 	if (!is_numeric($cost) || $cost < 4 || $cost > 31) {
	// 		throw new CException('Cost parameter must be between 4 and 31.');
	// 	}
	// 	// Get some pseudo-random data from mt_rand().
	// 	$rand = '';
	// 	for ($i = 0; $i < 8; ++$i)
	// 		$rand .= pack('S', mt_rand(0, 0xffff));
	// 	// Add the microtime for a little more entropy.
	// 	$rand .= microtime();
	// 	// Mix the bits cryptographically.
	// 	$rand = sha1($rand, true);
	// 	// Form the prefix that specifies hash algorithm type and cost parameter.
	// 	$salt = '$2a$' . str_pad((int)$cost, 2, '0', STR_PAD_RIGHT) . '$';
	// 	// Append the random salt string in the required base64 format.
	// 	$salt .= strtr(substr(base64_encode($rand), 0, 22), array('+' => '.'));
	// 	return $salt;
	// }

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
