<?php 
// require_once 'Connection.php';
class Kelas extends Connection
{
	public $table = "tb_kelas";

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
		return $hasil;
	}

	function tampil_kelasU($kelas_id = 0)
	{
		$where = '';
		if(!empty($kelas_id))
		{
			$where = ' WHERE tb_siswa.kelas_id = '.$kelas_id;
		}
		$data = mysqli_query($this->conn() , "select tb_siswa.id,role_id,nama,nis,kelas,kelas_id from tb_siswa  inner join tb_kelas on tb_siswa.kelas_id = tb_kelas.id {$where}");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
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

	function input($kelas)
	{ 
		$usernameCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE kelas='$kelas'");
	    	// echo "string";die;
	    	// var_dump(mysqli_fetch_assoc($usernameCheck));die;
		if (mysqli_fetch_assoc($usernameCheck)) {
			echo "
			<script>
			alert('Kelas Sudah Ada!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
			return false;
		}else{
		    	// var_dump($date);die;
			mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (kelas) VALUES ('$kelas')");
			echo "
			<script>
			alert('Berhasil');
			location.href = '{$_SERVER['HTTP_REFERER']}';
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

	function update($kelas, $id)
	{
		$up = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET kelas='$kelas' WHERE id='$id'");
		if (isset($up)) {
			echo "
			<script>
			alert('Sukses Mengedit!');
			location.href = '../view/kelas/kelas-view.php';
			</script>
			";
		}
	}
}
	// $tampil = new Kelas();
	// var_dump($tampil->tampil_kelasU());die;
?>