<?php 
session_start();
class Auth extends Connection
{
	public $table = "tb_siswa";

	public function conn()
	{
		$db = parent::connect();
		return $db;
	}

	public function login($nama, $password)
	{
		$find = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE nama='$nama'");
		$row = mysqli_fetch_assoc($find);
		// $cek = password_verify($password, $row['password']);
		// var_dump($password);die;
		if (mysqli_num_rows($find) == 1) {
			if (password_verify($password, $row['password']) == true) {
				$_SESSION["user"] = $row;
				$_SESSION["login"] = true;
				echo "
				<script>
				alert('Hello $nama!');
				location.href ='../dashboard.php';
				</script>
				";
				exit;
			}else{
				echo "
				<script>
				alert('Password anda tidak cocok!');
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
			}
		}else{
			echo "
			<script>
			alert('Nama Anda Tidak Terdaftar!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
			exit;
		}
		return $row;		    		
	}

	public function logout()
	{
		$_SESSION = [];
		session_unset();
		session_destroy();
		header("location:../view/auth/login-view.php");
	}

	public function logoutIndex()
	{
		$id = $_SESSION['user']['id'];
		$_SESSION = [];
		session_unset();
		session_destroy();
		header("location:../view/auth/login-view.php");
	}
}

?>