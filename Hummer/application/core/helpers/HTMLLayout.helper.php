<?php 
class HTMLLayout {
	public static function pagination($pages, $current_page = 1) {
				
		$html = "<ul id='pagination'>";
		foreach($pages as $page) {
			$current = $current_page == $page->page ? "class='current'" : "";
			$html.= "<li><a href='". $page->url ."' ". $current .">". $page->page ."</a></li>";
		}
		$html.= "</ul>";
		
		return $html;
	}
	
	public static function signIn() {
		
		$html = '<script type="text/javascript">';
		$html.= '$(document).ready(function() {';
		$html.= '$(".signin").click(function(e) {';
		$html.= 'e.preventDefault();';
		$html.= '$("fieldset#signin_menu").toggle();';
		$html.= '$(".signin").toggleClass("menu-open");';
		$html.= '});';
		$html.= '$("fieldset#signin_menu").mouseup(function() {';
		$html.= 'return false';
		$html.= '});';
		$html.= '$(document).mouseup(function(e) {';
		$html.= 'if($(e.target).parent("a.signin").length==0) {';
		$html.= '$(".signin").removeClass("menu-open");';
		$html.= '$("fieldset#signin_menu").hide();';
		$html.= '}';
		$html.= '});';
		$html.= '});';
		$html.= '</script>';
		$html.= '<div id="sign_in_container">';
		$html.= '<div id="topnav" class="topnav"><a href="login" class="signin"><span>Sign In</span></a> </div>';
		$html.= '<fieldset id="signin_menu">';
		$html.= '<form method="post" id="signin" action="https://twitter.com/sessions">';
		$html.= '<label for="username">Username or email</label>';
		$html.= '<input id="username" name="username" value=""title="username" tabindex="4" type="text">';
		$html.= '</p>';
		$html.= '<p>';
		$html.= '<label for="password">Password</label>';
		$html.= '<input id="password" name="password" value="" title="password" tabindex="5" type="password">';
		$html.= '</p>';
		$html.= '<p class="remember">';
		$html.= '<input class="button" value="Sign in" tabindex="6" type="submit">';
		$html.= '<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">';
		$html.= '<label for="remember">Remember me</label>';
		$html.= '</p>';
		$html.= '<p class="forgot"> <a href="#"id="resend_password_link">Forgot your password?</a> </p>';
		$html.= '<p class="forgot-username">';
		$html.= '<A id="forgot_username_link" title="If you remember your password, try logging in with your email" href="#">Forgot your username?</A>'; 
		$html.= '</p>';
		$html.= '</form>';
		$html.= '</fieldset>';
		$html.= '</div>';
		return $html;
	}
}
?>