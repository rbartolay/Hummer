<?php
class RegistrationController extends Controller {
	
	private $FACEBOOK_APP_ID = '132703346866636';
	private $FACEBOOK_SECRET = '51237709340f9a81313d9e4300e47429';
	
	public function index() {
		$template = new Core_Template("default", "registration", "jobseeker");
	}
	
	public function processFBRegistration() {
		
		$authBom = new AuthenticationBom();
		if ($_REQUEST) {
			$data = FacebookUtilities::parse_signed_request($_REQUEST['signed_request'], $this->FACEBOOK_SECRET);
			
			$user = new stdClass();
			$user->email = $data['registration']['email'];
			$user->password = $data['registration']['password'];
			$user->firstname = $data['registration']['first_name'];
			$user->lastname = $data['registration']['last_name'];
			$user->birthday = date('Y-m-d', strtotime($data['registration']['birthday']));
			$user->gender = $data['registration']['gender'];
			$user->location_name = $data['registration']['location']['name'];
			$user->location_id = $data['registration']['location']['id'];
			$user->country = $data['user']['country'];
			$user->locale = $data['user']['locale'];
			$user->fb_user_id = $data['user_id'];
			
			if($authBom->isEmailExists($user->email)) {
				header("Location: " . Configuration::getURLPath() . "/default/login?message=Email+already+exists.");
				return;
			}
			
			$response = $authBom->registerJobSeeker($user);
			var_dump($response);
			if($response->success) {
				print_r($response);
			}
		}
	}
	
	public function employer() {
		$template = new Core_Template("default", "registration", "employer");
	}
}