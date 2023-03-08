<?php class UserCmsIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$user = Users::model()->find('LOWER(username)=?', array(strtolower($this->username)));
		if ($user === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if (!$user->validatePassword($this->password))
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		else {
			$this->_id = $user->id_user;
			$this->username = $user->username;
			// $this->setState('nama_lengkap', $user->nama);
			$this->setState('username', $user->username);
			$this->setState('role', $user->role);
			$this->setState('status', $user->status);
			$this->errorCode = self::ERROR_NONE;
		}
		return $this->errorCode == self::ERROR_NONE;
	}

	public function getId()
	{
		return $this->_id;
	}
}
