<?php 
// require_once 'Connection.php';
class Petugas extends Connection
{
	public $table = "petugas";

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
	function tampil_dataP()
	{
		$tgl = date("Y-m-d");
		$data = mysqli_query($this->conn() , "select * from " . $this->table . " where tanggal = '$tgl'");
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

	function input($nama_upcr, $tanggal, $kelas, $kelas_id)
	{ 
		$tanggalCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE tanggal='$tanggal'");
		$kelasCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE kelas_id='$kelas_id'");
	    	// echo "string";die;
	    	// var_dump(mysqli_fetch_assoc($usernameCheck));die;
		if (mysqli_fetch_assoc($tanggalCheck)) {
			echo "
			<script>
			alert('Tanggal Itu Sudah Ada!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
		}elseif (mysqli_fetch_assoc($kelasCheck)) {
			echo "
			<script>
			alert('Kelas Sudah Ada!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
		}else{
		    	// var_dump($date);die;
			$res = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (nama_upcr, tanggal, kelas) VALUES ('$nama_upcr', '$tanggal', '$kelas')");
			$_SESSION['kel'] = null;
			$_SESSION['kel'] = $kelas; 
			$_SESSION['kel_id'] = null;
			$_SESSION['kel_id'] = $kelas_id; 
			header("location:../view/petugas/createJabatan2-view.php?tgl=$tanggal");
		}
	}

	function hapus()
	{
		$id = $_GET['id'];
		mysqli_query($this->conn(), "DELETE FROM " . $this->table . " WHERE id='$id'");
		header("location:../view/petugas/petugas-view.php");
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

	function update($nama_upcr, $tanggal, $kelas, $id)
	{
		// var_dump($hari);die;
		$up = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET nama_upcr='$nama_upcr', tanggal='$tanggal', kelas='$kelas' WHERE id='$id'");
		if (isset($up)) {
			echo "
			<script>
			alert('Sukses Mengedit!');
			location.href = '../view/petugas/petugas-view.php';
			</script>
			";
		}

		

	}
}
	
?>