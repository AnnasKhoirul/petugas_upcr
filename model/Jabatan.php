<?php 
// require_once 'Connection.php';
class Jabatan extends Connection
{
	public $table = "tb_jabatan";

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

	function tampil_data($date = '')
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}else{
			$tgl = $date;
			$data1 = mysqli_query($this->conn() , "select * from petugas where tanggal='$tgl'");
			$dats1 = mysqli_fetch_array($data1);
			$id=$dats1['id'];
		}
		$data = mysqli_query($this->conn(), "SELECT * FROM " . $this->table . " WHERE petugas_id='$id'");
		$hasil = [];
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}  	    

	function input($pembina, $pemimpin, $kompi_1, $kompi_2, $kompi_3, $bendera1, $bendera2, $bendera3, $uud, $pancasila, $protokol, $ajudan, $dirigen, $doa, $tgl)
	{
		$data1 = mysqli_query($this->conn() , "select * from petugas where tanggal='$tgl'");
		$dats1 = mysqli_fetch_array($data1);
		$id=$dats1['id'];
		$data2 = mysqli_query($this->conn() , "select * from " . $this->table . " WHERE petugas_id=$id");
		$dats2 = mysqli_fetch_array($data2);
		if ($dats2 == null) {
			$res = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (petugas_id, pembina, pemimpin, kompi_1, kompi_2, kompi_3, bendera1, bendera2, bendera3, uud, pancasila, protokol, ajudan, dirigen, doa) VALUES ('$id', '$pembina', '$pemimpin', '$kompi_1', '$kompi_2', '$kompi_3', '$bendera1', '$bendera2', '$bendera3', '$uud', '$pancasila', '$protokol', '$ajudan', '$dirigen', '$doa')");
			echo "
				<script>
				location.href = '../view/petugas/createJabatan2-view.php?tgl=$tgl';
				</script>
			";
		}else{
			if (isset($pembina)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET pembina='$pembina' WHERE petugas_id=$id");
			}elseif (isset($pemimpin)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET pemimpin='$pemimpin' WHERE petugas_id=$id");
			}elseif (isset($kompi_1)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET kompi_1='$kompi_1' WHERE petugas_id=$id");
			}elseif (isset($kompi_2)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET kompi_2='$kompi_2' WHERE petugas_id=$id");
			}elseif (isset($kompi_3)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET kompi_3='$kompi_3' WHERE petugas_id=$id");
			}elseif (isset($bendera1)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET bendera1='$bendera1' WHERE petugas_id=$id");
			}elseif (isset($bendera2)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET bendera2='$bendera2' WHERE petugas_id=$id");
			}elseif (isset($bendera3)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET bendera3='$bendera3' WHERE petugas_id=$id");
			}elseif (isset($uud)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET uud='$uud' WHERE petugas_id=$id");
			}elseif (isset($pancasila)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET pancasila='$pancasila' WHERE petugas_id=$id");
			}elseif (isset($protokol)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET protokol='$protokol' WHERE petugas_id=$id");
			}elseif (isset($ajudan)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET ajudan='$ajudan' WHERE petugas_id=$id");
			}elseif (isset($dirigen)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET dirigen='$dirigen' WHERE petugas_id=$id");
			}elseif (isset($doa)) {
				$res = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET doa='$doa' WHERE petugas_id=$id");
			}
			echo "
				<script>
				location.href = '../view/petugas/createJabatan2-view.php?tgl=$tgl';
				</script>
			";
		}
			
	}

	function select()
	{
		$tgl = $_GET['tgl'];
		$data1 = mysqli_query($this->conn() , "select * from petugas where tanggal='$tgl'");
		$dats1 = mysqli_fetch_array($data1);
		$id=$dats1['id'];
		$data2 = mysqli_query($this->conn() , "select * from " . $this->table . " WHERE petugas_id=$id");
		$dats2 = mysqli_fetch_array($data2);
		$desk =  array([$dats2['pembina']], [$dats2['pemimpin']], [$dats2['kompi_1']], [$dats2['kompi_2']], [$dats2['kompi_3']], 
		[$dats2['bendera1']], [$dats2['bendera2']], [$dats2['bendera3']], [$dats2['uud']], [$dats2['pancasila']], [$dats2['protokol']], 
		[$dats2['ajudan']], [$dats2['dirigen']], [$dats2['doa']]);
		return $desk;
	}	

	function hapus($id)
	{
		mysqli_query($this->conn(), "DELETE FROM " . $this->table . " WHERE petugas_id='$id'");
	}

	function edit($id)
	{
		$id = 0;
		$data = mysqli_query($this->conn(), "SELECT * FROM " . $this->table . " WHERE petugas_id='$id'");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}

	function update($pembina, $pemimpin, $kompi_1, $kompi_2, $kompi_3, $bendera1, $bendera2, $bendera3, $uud, $pancasila, $protokol, $ajudan, $dirigen, $doa)
	{
		$id = 0;
		$up = mysqli_query($this->conn(), "UPDATE " . $this->table . " SET pembina='$pembina', pemimpin;='$pemimpin', kompi_1='$kompi_1', kompi_2='$kompi_2', kompi_3='$kompi_3', bendera1='$bendera1', bendera2='$bendera2', bendera3='$bendera3', uud='$uud', pancasila='$pancasila', protokol='$protokol', ajudan='$ajudan', dirigen='$dirigen,' doa='$doa',' WHERE petugas_id='$id'");
		if (isset($up)) {
			echo "
			<script>
			alert('Sukses Mengedit!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
		}

		

	}
}
	// $tampil = new Jabatan();
	// var_dump($tampil->select());die;
?>