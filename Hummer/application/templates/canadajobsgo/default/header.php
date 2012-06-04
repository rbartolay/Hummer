<?php
global $loading_time;
$loading_time = Core_Utilities::startTimer();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<title>Hammer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel="image_src"
			href="<?php echo Configuration::getImagePath() . "logo.jpg"; ?>" />
		<meta property="og:image"
			content="<?php echo Configuration::getImagePath() . "logo.jpg"; ?>" />
		<link href="/cm_files/30251_2670.ico" rel="shortcut icon"
			type="image/x-icon" />
		<link rel="stylesheet"
			href="<?php echo Configuration::getCSSPath() . "canadajobsgo.css"; ?>" />
	</head>
<body class="bodyCandidate">
	<a style="display: none;" class="registration-act"
		href="javascript: void(0)"></a>

	<div id="holder" class="indexTpl holder_main">
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<div class="logo">CANADA JOBS GO<br>
						<a href="/" title="Logo"><img
							src="<?php echo Configuration::getImagePath() . "logo.jpg"; ?>"
							alt="Logo" title="Logo" width="159" />
						</a>
					</div></td>
				<td align="center"></td>
				<td><div class="top-r-buts">
						<div class="sw-top-but candSw">
							<a href="/cm/candidates/join_now">Job Seeker</a>
						</div>
						<div class="sw-top-but_act emplSw">
							<a href="/cm/clients/advertise_jobs">Employer</a>&nbsp;&nbsp;
						</div>
					</div>
				</td>

			</tr>

		</table>

		<div class="clear"></div>

		<div class="top"
			style="background: url(/imglib/bg-top.png) top left no-repeat;">

			<ul id="dropdown-menu">
				<li class="tMenuCount_1 tMenuItem_home"><a href="/"
					class="act-first" title="Home"> Home </a></li>
				<li class="tMenuCount_1 tMenuItem_job_search"><a
					href="/cm/candidate/search_jobs" title=""> Job search </a></li>
				<li class="tMenuCount_1 tMenuItem_join_now"><a
					href="/cm/candidates/join_now" title=""> Join now </a></li>
				<li class="tMenuCount_1 tMenuItem_30050"><a href="/employer/list"
					title=""> Employers directory </a></li>
				<li class="tMenuCount_1 tMenuItem_30190"><a
					href="/candidate/employer_search/advanced" title=""> Employer search </a></li>
				<li class="tMenuCount_1 tMenuItem_29213"><a href="/cm/about_us"
					title=""> About us </a></li>
				<li class="tMenuCount_1 tMenuItem_contact_us"><a
					href="/main/sendform/4/18/3472" title=""> Contact us </a></li>
			</ul>

			<div class="privateZone">

				<div class="login">
					<form id="loginForm0" class="left-form"
						onkeypress="submitFormOnEnter(event, function(){doAjaxSubmit('validate', 'loginForm0');});"
						action="/main/login" method="post">

						<p class="flineLog">
							<span id="loginForm0.errors" class="errmsg"></span> <input
								id="email-loginForm0" class="txt" type="text" maxlength="256"
								value="Email"
								onblur="if(this.value=='')this.value='Email'; this.style.color='#999'"
								onfocus="if(this.value=='Email')this.value=''; this.style.color='#000'"
								tabindex="100" name="email" />

						</p>

						<p class="flineLog">

							<input id="password-loginForm0" class="txt" type="password"
								maxlength="256" value="password" tabindex="100"
								onblur="if(this.value=='')this.value='password'; this.style.color='#999'"
								onfocus="if(this.value=='password')this.value=''; this.style.color='#000'"
								name="password" />

						</p>



						<p class="flineLog">

							<img src="/imglib/default/but-signin.gif" alt="" class="over"
								onclick="doAjaxSubmit('validate', 'loginForm0');" />

						</p>

					</form>

					<div class="sign_links">



						<p class="flineLog txt">
							<a class="inline-act registration-act"
								href="javascript: void(0);" title="Create account">Sign up</a>&nbsp;
							| &nbsp;<a href="javascript: void(0);"
								class="inline-act forgot-act" title="Forgot password">Forgot
								password</a>
						</p>





					</div>
				</div>
				<div class="sign_options">

					<div class="sbs">Login with existing account:</div>

					<a class="linkedin_connect_act" href="javascript: void(0);"
						onclick="location.href='/main/oauth/authenticate?id=linkedin&entityId=2&action=LOGIN&formId=applyLoginForm3'"
						title="Connect with Linkedin"></a> <a class="facebook_connect_act"
						href="javascript:void(0)"
						onclick="location.href='/main/oauth/authenticate?id=facebook&entityId=2&action=LOGIN&formId=applyLoginForm3'"
						title="Connect with Facebook"></a>



				</div>

			</div>

		</div>

		<div class="content">

		</div>