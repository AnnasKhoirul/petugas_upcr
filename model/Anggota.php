<?php 
// require_once 'Connection.php';
class Anggota extends Connection
{
	public $table = "tb_siswa";

	public function conn()
	{
		$db = parent::connect();
		return $db;
	}

	function tampil_all()
	{
		$data = mysqli_query($this->conn() , "select * from " . $this->table);
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		if (!isset($hasil)) {
			return false;
		}
		// var_dump($hasil);die;
		return $hasil;
	}

	function tampil_data()
	{
		$id = 0;
		$data = mysqli_query($this->conn() , "select * from " . $this->table . " where id = $id");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}	  	    

	function input($nis, $nama, $gender, $kelas, $role_id)
	{	
		    	// var_dump($role_id);die;
		$password = 'root';
		$pass1 = mysqli_real_escape_string($this->conn(), $password); 
		$usernameCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE nama='$nama'");
	    	// echo "string";die;
	    	// var_dump(mysqli_fetch_assoc($usernameCheck));die;
		if (mysqli_fetch_assoc($usernameCheck)) {
			echo "
			<script>
			alert('Username Sudah Ada!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
			return false;
		}else{
			$convertPas = password_hash($password, PASSWORD_DEFAULT);
			mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (nis, nama, password, gender, kelas_id, role_id) VALUES ('$nis', '$nama', '$convertPas', '$gender', '$kelas', '$role_id')");
			echo "
			<script>
			alert('Berhasil Menambah!');
			location.href = '../view/anggota/anggota-view.php';
			</script>
			";
			return false;
		}
	}

	function hapus($id)
	{
		mysqli_query($this->conn(), "DELETE FROM " . $this->table . " WHERE id='$id'");
	}

	function edit()
	{
		$id = $_GET['id'];
		$data = mysqli_query($this->conn(), "SELECT * FROM " . $this->table . " WHERE id='$id'");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}

	function update($nis, $nama, $gender, $kelas, $role_id, $id)
	{
		mysqli_query($this->conn(), "UPDATE " . $this->table . " SET nis='$nis', nama='$nama', gender='$gender', kelas_id='$kelas', role_id='$role_id' WHERE id='$id'");
		echo "
			<script>
			alert('Sukses Mengedit!');
			location.href = '../view/anggota/anggota-view.php';
			</script>
		";
	}
	function updateA($nis, $nama, $gender, $kelas, $role_id, $id)
	{
		mysqli_query($this->conn(), "UPDATE " . $this->table . " SET nis='$nis', nama='$nama', gender='$gender', kelas_id='$kelas', role_id='$role_id' WHERE id='$id'");
		echo "
			<script>
			alert('Sukses Mengedit!');
			location.href = '../view/admin/admin-view.php';
			</script>
		";
	}
}
	
	// $tampil = new Anggota();
	// var_dump($tampil->tampil_all);die;
?>