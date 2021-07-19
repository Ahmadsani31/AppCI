<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Faker\Factory;

class AdminController extends BaseController
{

	public function index()
	{
		$data['title'] = 'Home | Dahsboard Admin';
		return view('admin/dashboard', $data);
	}

	public function view()
	{
		$fk = Factory::create();
		// dd($fk->name);
		$data = [
			'title' => 'View Data',
		];

		return view('admin/a_view', $data);
	}

	public function create()
	{
		session();
		$data = [
			'title' => 'Create Data',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/a_create', $data);
	}
}
