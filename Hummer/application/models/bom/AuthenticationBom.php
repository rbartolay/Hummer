<?php
class AuthenticationBom implements BusinessObjectModel {
	
	public function isEmailExists($email) {
		$found = true;
		$uDao = new UsersDao();
		
		if($uDao->getUserByEmail($email) == null) {
			$found = false;
		}
		
		return $found;
	}
	
	public function registerJobSeeker($data) {
		$uDao = new UsersDao();
		
		$user = new stdClass();
		$user->email = $data->email;
		$user->password = md5($data->password);
		$user->firstname = $data->firstname;
		$user->lastname = $data->lastname;
		$user->fb_user_id = $data->fb_user_id;
		$user->birthday = $data->birthday;
		$user->gender = $data->gender;
		$user->location_name = $data->location_name;
		$user->location_id = $data->location_id;
		$user->country = $data->country;
		$user->locale = $data->locale;
		$user->date_created = Calendar::getSQLDateTime();
		
		$response = new stdClass();
		$response->success = false;
		$response->message = "Failed to register";
		
		if($uDao->insert($user)) {
			$response->success = true;
			$response->message = "Registration Complete";
		}
		
		return $response;		
	}
	
	public function login($email, $password) {
		
	}
	
}