<?php 
// require_once 'Connection.php';
class Guru extends Connection
{
	public $table = "tb_guru";

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
		// var_dump($hasil);die;
		if (!isset($hasil)) {
			return false;
		}else{
			return $hasil;
		}
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

	function input($kd_guru, $nama, $gender, $alamat, $no_hp)
	{ 
		$kdCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE kd_guru='$kd_guru'");
	    	// echo "string";die;
	    	// var_dump(mysqli_fetch_assoc($usernameCheck));die;
		if (mysqli_fetch_assoc($kdCheck)) {
			echo "
			<script>
			alert('Kode Guru Sudah Ada!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
			return false;
		}else{
		    	// var_dump($date);die;
			mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (kd_guru, nama, gender, alamat, no_hp) VALUES ('$kd_guru', '$nama', '$gender', '$alamat', '$no_hp')");
			echo "
			<script>
			alert('Berhasil');
			location.href = '../view/guru/guru-view.php';
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

	function update($kd_guru, $nama, $gender, $alamat, $no_hp, $id)
	{
		$up = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET kd_guru='$kd_guru', nama='$nama', gender='$gender', alamat='$alamat', no_hp='$no_hp' WHERE id='$id'");
		if (isset($up)) {
			echo "
			<script>
			alert('Sukses Mengedit!');
			location.href = '../view/guru/guru-view.php';
			</script>
			";
			return false;
		}

		

	}
}

	// $tampil = new Guru();
	// var_dump($tampil->tampil_all());die;
?>