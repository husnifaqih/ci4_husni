<?php

namespace App\Controllers;

class MenuController extends BaseController
{
	//Controller untuk Menu
	public function home()
	{
		$data = [
			'title' => 'Home - SIBIM'
		];
		return view('beranda', $data);
	}

	public function infoKegiatan()
	{
		$data = [
			'title' => 'Info Kegiatan - SIBIM'
		];
		return view('info-kegiatan', $data);
	}

	public function dataSiswa()
	{
		$data = [
			'title' => 'Data Siswa - SIBIM'
		];
		return view('siswa', $data);
	}
}
