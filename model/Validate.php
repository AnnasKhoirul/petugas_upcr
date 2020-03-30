<?php 
	include '../init.php';

	$aksi1 = $_GET['aksi1'];
	if ($aksi1 == "tambahUser") {
		$anggota->input($_POST['nis'], $_POST['nama'], $_POST['gender'], $_POST['kelas'], $_POST['role_id']);
		// header("location:../view/auth/login.php");
	}elseif ($aksi1 == "log") {
		$auth->login($_POST['nama'], $_POST['password']);
	}elseif ($aksi1 == "logO1") {
		$auth->logout();
	}elseif ($aksi1 == "logO2") {
		$auth->logoutIndex();
	}elseif ($aksi1 == "hapus") {
		$anggota->hapus($_GET['id']);
		header("location:../view/anggota/anggota-view.php");
	}elseif ($aksi1 == "edit") {
		$anggota->edit($_GET['id']);
	}elseif ($aksi1 == "update") {
		$anggota->update($_POST['nis'], $_POST['nama'], $_POST['gender'], $_POST['kelas'], $_POST['role_id'], $_POST['id']);
	}elseif ($aksi1 == "update") {
		$anggota->update($_POST['nis'], $_POST['nama'], $_POST['gender'], $_POST['kelas'], $_POST['role_id'], $_POST['id']);
	}elseif ($aksi1 == "updateA") {
		$anggota->updateA($_POST['nis'], $_POST['nama'], $_POST['gender'], $_POST['kelas'], $_POST['role_id'], $_POST['id']);
	}elseif ($aksi1 == "tambahKelas") {
		$kelas->input($_POST['kelas']);
	}elseif ($aksi1 == "editK") {
		$kelas->edit($_GET['id']);
	}elseif ($aksi1 == "hapusK") {
		$kelas->hapus($_GET['id']);
		header("location:../view/kelas/kelas-view.php");
	}elseif ($aksi1 == "updateK") {
		$kelas->update($_POST['kelas'], $_POST['id']);
	}elseif ($aksi1 == "tambahGuru") {
		$guru->input($_POST['kd_guru'], $_POST['nama'], $_POST['gender'], $_POST['alamat'], $_POST['no_hp']);
	}elseif ($aksi1 == "editG") {
		die;
	}elseif ($aksi1 == "hapusG") {
		$guru->hapus($_GET['id']);
		header("location:../view/guru/guru-view.php");
	}elseif ($aksi1 == "updateG") {
		$guru->update($_POST['kd_guru'], $_POST['nama'], $_POST['gender'], $_POST['alamat'], $_POST['no_hp'], $_POST['id']);
	}elseif ($aksi1 == "tambahPetugas") {
		$kelas = explode('|',$_POST['kelas']);
		$petugas->input($_POST['nama_upcr'], $_POST['tanggal'], $kelas[0],$kelas[1]);
	}elseif ($aksi1 == "editP") {
		$petugas->edit($_GET['id']);
	}elseif ($aksi1 == "hapusPJ") {
		$petugas->hapus($_GET['id']);
	}elseif ($aksi1 == "updateP") {
		$petugas->update($_POST['nama_upcr'], $_POST['tanggal'], $_POST['kelas'], $_POST['id']);
	}elseif ($aksi1 == "tambahJabatan") {
		$jabatan->input(@$_POST['pembina'], @$_POST['pemimpin'], @$_POST['kompi_1'], @$_POST['kompi_2'], @$_POST['kompi_3'], @$_POST['bendera1'], @$_POST['bendera2'], @$_POST['bendera3'], @$_POST['uud'], @$_POST['pancasila'], @$_POST['protokol'], @$_POST['ajudan'], @$_POST['dirigen'], @$_POST['doa'], @$_POST['tgl']);
	}elseif ($aksi1 == "editJ") {
		$jabatan->edit($_GET['id']);
	}elseif ($aksi1 == "updateJ") {
		$jabatan->update($_POST['petugas_id'], $_POST['pembina'], $_POST['pemimpin'], $_POST['kompi_1'], $_POST['kompi_2'], $_POST['kompi_3'], $_POST['bendera1'], $_POST['bendera2'], $_POST['bendera3'], $_POST['uud'], $_POST['pancasila'], $_POST['protokol'], $_POST['ajudan'], $_POST['dirigen'], $_POST['doa'], $_POST['id']);
	}elseif ($aksi1 == "detail") {
		$jabatan->tampil_data($_GET['id']);
	}

?>