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

	<div id="holder">
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<div class="logo">CANADA JOBS GO</div></td>
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
		<br>		
			<ul id="mainmenu">
                <li><a href="<?php echo Configuration::getURLPath(); ?>" title="Home">Home</a></li>
                <li><a href="<?php echo Configuration::getURLPath() . "/companies";?>" title="Companies">Companies</a></li>
                <li><a href="<?php echo Configuration::getURLPath() . "/search"; ?>" title="Mac">Search</a></li>
                <li><a href="<?php echo Configuration::getURLPath(); ?>" title="Support">About Us</a></li>
            </ul>

		<div class="content">

