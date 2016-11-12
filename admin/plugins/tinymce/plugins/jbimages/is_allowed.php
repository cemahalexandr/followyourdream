<?php
function is_allowed()
{
	global $_COOKIE, $_SERVER;

	$allow_login = "root";
	$allow_pass = "";

	$ip = $_SERVER["http://localhost"];

	if
	(
		isset($_COOKIE["login"], $_COOKIE["passhash"]) and
		$_COOKIE["login"] == $allow_login and
		$_COOKIE["passhash"] == md5(md5($ip).md5($allow_pass))
	)
	{
		return TRUE;
	}

	return true;
}
?>