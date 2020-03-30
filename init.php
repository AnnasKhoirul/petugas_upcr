<?php

spl_autoload_register(function($class){
	require_once __DIR__ . '/model/' . $class . '.php';
});
	$anggota= new Anggota();
	$guru 	= new Guru();
	$kelas 	= new Kelas();
	$role 	= new Role();
	$petugas= new Petugas();
	$jabatan= new Jabatan();
	$auth 	= new Auth();