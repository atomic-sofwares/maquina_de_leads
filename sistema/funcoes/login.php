<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/08/18
 * Time: 15:59
 */
session_start();

$user = strip_tags($_POST["username"]);
$password = strip_tags($_POST["pass"]);
if ( (user != null || user != "") && (pass != null || pass != "") )
{
	//setcookie(name, value, expire, path, domain);
	if( strcmp("somepassword",$password) == 0 )
	{
		//setcookie("compscidata","USERNAME:" . $user ."|DATE:". date("m-d-y"),time()+3600,"/"); //<-- old way of trying to do it.
		$_SESSION["username"] = $user;
		$_SESSION["userloggedon"] = true;
		}else{
		echo "Password is not correct!";
		}
}
?>
