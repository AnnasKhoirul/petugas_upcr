<?php 
class Checked
{
	function __construct()
	{
		if (!isset($_SESSION["login"])) {
			header("location:../auth/login-view.php");
		}
	}
}
$checked = new Checked();

?>