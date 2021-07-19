<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
	public function index()
	{
		if (session()->get('logged_in')) {
			// maka redirct ke halaman login
			return redirect()->to('/admin/dashboard');
		}
		$tittle['judul'] = 'Halaman Login';

		return view('auth/login', $tittle);
	}

	public function store()
	{
		// dd($this->request->getVar());

		$session = session();
		$model = new AdminModel();
		$user = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$data = $model->where('username', $user)->first();
		if ($data) {
			$pass = $data['password'];
			$verify_pass = password_verify($password, $pass);
			if ($verify_pass) {
				$ses_data = [
					'id'       => $data['id'],
					'name'     => $data['name'],
					'email'    => $data['email'],
					'role'     => $data['role'],
					'logged_in'     => TRUE
				];
				$session->set($ses_data);
				return redirect()->to('/admin/dashboard');
			} else {
				$session->setFlashdata('message', 'Wrong Password');
				return redirect()->to('/login');
			}
		} else {
			$session->setFlashdata('message', 'Username not Found');
			return redirect()->to('/login');
		}
	}

	public function save()
	{
		dd($this->request->getVar());
	}

	public function singout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/login');
	}
}
