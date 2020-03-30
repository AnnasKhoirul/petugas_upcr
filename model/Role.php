<?php 
// require_once 'Connection.php';
class Role extends Connection
{
	public $table = "role";

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

	function tampil_roleU()
	{
		$data = mysqli_query($this->conn() , "select id,role from tb_siswa  inner join role on tb_siswa.role_id = role.id");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}
}
	// $tampil = new Kelas();
	// var_dump($tampil->tampil_all());die;
?>