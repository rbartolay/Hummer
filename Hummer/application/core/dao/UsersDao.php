<?php
class UsersDao extends DataAccessObject {
	
	public function insert($user) {
		return $this->Connection->insert("users", $user);
	}
	
	public function getUserByEmail($email) {
		$sql = "select * from users where email = '". $email ."'";
		return $this->Connection->getResultSet($sql);
	}
}