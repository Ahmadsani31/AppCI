<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BiodataModel;
use App\Models\DataModel;
use Config\Services;

class Datatable extends BaseController
{

	public $user_data;

	public function __construct()
	{
		$this->user_model = new DataModel();
		$this->bio_model = new BiodataModel();
	}

	public function index()
	{
		$data = [
			'title' => 'View Data',
		];
		return view('admin/a_data', $data);
	}

	public function getdata()
	{
		$user_model = $this->user_model;
		$where = ['id !=' => 0];
		$column_order   = array('', 'nama', 'email', 'alamat');
		$column_search  = array('nama', 'alamat');
		$order = array('nama' => 'ASC');
		$list = $user_model->get_datatables('datas', $column_order, $column_search, $order, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $lists) {

			$btn = "<button type='button' id='" . $lists->id . "' data-id='" . $lists->id . "' class='btn btn-info btn-sm btn_view' onclick='edit_modal()'>Edit</button>&nbsp;
			<button type='button' id='" . $lists->id . "' class='btn btn-danger btn-sm'>delete</button>";
			$no++;
			$row    = array();
			$row[]  = $no;
			$row[]  = $lists->nama;
			$row[]  = $lists->email;
			$row[]  = $lists->alamat;
			$row[]  = $btn;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $user_model->count_all('datas', $where),
			"recordsFiltered" => $user_model->count_filtered('datas', $column_order, $column_search, $order, $where),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function getdatabio()
	{
		$bio_model = $this->bio_model;
		$where = ['id !=' => 0];
		$column_order   = array('nik', 'f_name', 'l_name', 'email', 'phone', 'fakultas', 'alamat', null);
		$column_search  = array('nik', 'f_name',  'l_name', 'email', 'phone', 'fakultas', 'alamat',);
		$order = array('nik' => 'ASC');
		$list = $bio_model->get_datatables('biodata', $column_order, $column_search, $order, $where);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $lists) {

			$btn = "<button type='button' id='" . $lists->id . "' class='btn btn-info btn-sm'>Edit</button>&nbsp;
			<button type='button' id='" . $lists->id . "' class='btn btn-danger btn-sm'>delete</button>";

			$image = "<img src='../../images/" . $lists->avatar . "' style='height:100px;width:100px;' />";
			$no++;
			$row    = array();
			$row[]  = $no;
			$row[]  = $lists->nik;
			$row[]  = $lists->f_name;
			$row[]  = $lists->l_name;
			$row[]  = $lists->email;
			$row[]  = $lists->phone;
			$row[]  = $lists->fakultas;
			$row[]  = $lists->alamat;
			$row[]  = $image;
			$row[]  = $btn;


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $bio_model->count_all('biodata', $where),
			"recordsFiltered" => $bio_model->count_filtered('biodata', $column_order, $column_search, $order, $where),
			"data" => $data,
		);

		echo json_encode($output);
	}
}
