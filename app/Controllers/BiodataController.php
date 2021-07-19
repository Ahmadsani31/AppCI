<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Controllers\BaseController;
use Hermawan\DataTables\DataTable;

class BiodataController extends BaseController
{

	public function __construct()
	{
		$this->bio_model = new BiodataModel();
	}

	public function store()
	{
		if (!$this->validate([
			'nik' => [
				'rules' => 'required|is_unique[biodata.nik]',
				'errors' => [
					'required' => '{field} Nik harus di isi',
					'is_unique' => '{field} Nik sudah terdaftar'
				]
			],
			'avatar' => [
				'rules' => 'max_size[avatar,2048]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'Ukuran image terlalu besar',
					'is_image' => 'Yang anda pilih bukan Image',
					'mime_in' => 'yang anda pilih bukan gambar'
				]
			]
		])) {
			// $validation = \Config\Services::validation();
			return redirect()->to('admin/create')->withInput();
		}

		$fileAvatar = $this->request->getFile('avatar');

		if ($fileAvatar->getError() == 4) {
			$fileName = 'default.png';
		} else {
			// $fileType = $fileAvatar->getClientMimeType();
			// $fileName = $fileAvatar->getATime().".".$fileType;
			$fileName = $fileAvatar->getRandomName();
			$fileAvatar->move("images", $fileName);
		}

		$bio = new BiodataModel();

		$data = [
			'nik' 		=> $this->request->getVar('nik'),
			'f_name' 	=> ucwords($this->request->getVar('f_name')),
			'l_name' 	=> ucwords($this->request->getVar('l_name')),
			'email' 	=> strtolower($this->request->getVar('email')),
			'phone' 	=> $this->request->getVar('phone'),
			'tempat'	=> ucwords($this->request->getVar('tempat')),
			'lahir' 	=> $this->request->getVar('lahir'),
			'gender' 	=> $this->request->getVar('gender'),
			'fakultas' 	=> ucwords($this->request->getVar('fakultas')),
			'alamat' 	=> ucwords($this->request->getVar('alamat')),
			'avatar' 	=> $fileName,
		];

		$bio->save($data);
		// dd($this->request->getVar());

		return redirect()->to('/admin/view');
	}
}
