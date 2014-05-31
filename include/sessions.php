<?php
session_start();
if (!function_exists("COOKIE")) {
	function COOKIE($cookie, $value = false, $time = 300000, $redirect = false, $URL = false)
	{
		if ($value) {
			setcookie($cookie, filter($value), time() + $time, "/");
		
			if ($redirect) {
				redirect(isset($URL) ? $URL : _get("webBase"));		
			}
		} else {	
			return isset($_COOKIE[$cookie]) ? filter($_COOKIE[$cookie]) : false;
		}
	}
}

if (!function_exists("createLoginSessions")) {
	function createLoginSessions($data, $redirect = true)
	{
		if (is_array($data)) {
			SESSION("ZanUserServiceID", isset($data["ID_Service"]) ? (int) $data["ID_Service"] : false);
			SESSION("ZanUser", $data["Username"]);
			SESSION("ZanUserName", $data["Name"]);
			SESSION("ZanUserPrivilegeID", (int) $data["ID_Privilege"]);

			if ($redirect) {						
				redirect(SESSION("lastURL"));
			}
		} else {
			redirect();
		}	

		return true;
	}
}

if (!function_exists("SESSION")) { 
	function SESSION($session, $value = false)
	{
		if (!$value) {
			return isset($_SESSION[$session]) ? $_SESSION[$session] : false;			
		} else {
			$_SESSION[$session] = $value;
		}
		
		return true;
	}
}

if (!function_exists("isAdmin")) {
	function isAdmin()
	{
		if (SESSION("ZanUserPrivilegeID") != 1) {
			return false;
		}

		return true;
	}
}

if (!function_exists("isConnected")) {
	function isConnected($URL = NULL)
	{
		if (!SESSION("ZanUser")) {
			var_dump($_SESSION);
			if (!is_null($URL)) {
				redirect(($URL !== false) ? $URL : path("login.php?return_to=". urlencode(getURL())));
			}
			return false;
		} 

		return true;
	}
}

if (!function_exists("unsetCookie")) {
	function unsetCookie($cookie, $URL = false)
	{
		setcookie($cookie);
		redirect($URL);
	}
}

if (!function_exists("unsetSessions")) {
	function unsetSessions($URL = false)
	{
		$lastURL = SESSION("lastURL");
		session_unset();
		session_destroy();
		redirect(($URL) ? $URL : $lastURL);	
	}
}