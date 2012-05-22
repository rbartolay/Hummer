<?php
	global $loading_time;
	$loading_time = Core_Utilities::startTimer();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Hammer</title>
		<link rel="stylesheet" href="<?php echo Configuration::getCSSPath() . "default.css"; ?>" />
		<script type="text/javascript" src="<?php echo Configuration::getJSPath(); ?>jquery-1.7.2.js"></script>
	</head>
<body>