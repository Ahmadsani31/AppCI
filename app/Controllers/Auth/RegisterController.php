<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Config\Services;

class RegisterController extends BaseController
{
	public function index()
	{
		if (session()->get('logged_in')) {
			// maka redirct ke halaman login
			return redirect()->to('/admin/dashboard');
		}

		session();
		$data = [
			'title' => 'Halaman Register',
			'validation' => \Config\Services::validation(),
		];
		return view('auth/register', $data);
	}

	public function store()
	{
		dd($this->request->getVar());


		if (!$this->validate([
			'name' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus diisi',
				]

			],
			'email' => [
				'rules' => 'required|valid_email|is_unique[admin.email,id,{id}]',
				'errors' => [
					'required' => '{field} harus di isi',
					'is_unique' => '{field} sudah terdaftar',

				]


			],
			'username' => [
				'rules' => 'required|is_unique[admin.username]',
				'errors' => [
					'required' => '{field} harus di isi',
					'is_unique' => '{field} sudah terdaftar',

				]

			],
			'nope' => [
				'rules' => 'required|numeric',
				'errors' => [
					'required' => 'no hanphone harus di isi',
					'numeric' => 'No handphone harus berupa angka'
				]
			],
			'password' => [
				'rules' => 'required|min_length[6]|max_length[200]',
				'errors' => [
					'required' => 'password harus di isi',
					'min_length' => 'password minimal 6 karakter',
				]
			],
			'repeat_password' => [
				'rules' => 'matches[password]',
				'errors' => [
					'matches' => 'password tidak sama',
				]
			]
		])) {

			return redirect()->to('/register')->withInput();
		}

		$model = new AdminModel();

		$data = [
			'name'     => ucwords($this->request->getVar('name')),
			'email'     => strtolower($this->request->getVar('email')),
			'username'     => $this->request->getVar('username'),
			'nope'     => $this->request->getVar('nope'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),

		];
		$model->save($data);

		session()->setFlashdata('message', 'Register Berhasil');
		return redirect()->to('/login');


		// session()->setFlashdata('message','Register Berhasil');
		// return redirect()->to('/login');
	}
}
