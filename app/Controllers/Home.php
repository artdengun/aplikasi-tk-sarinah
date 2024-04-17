<?php

namespace App\Controllers;
use App\Models\DashboardModel;
use App\Models\TkModel;


class Home extends BaseController
{

	protected $dashboard_model;
	protected $tk;
	
	public function __construct()
	{
		$this->dashboard_model = new DashboardModel();
		helper(['form']);
		$this->tk = new TkModel();
	}

	public function index()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$data['data_tk']       	= $this->dashboard_model->getCountTkSarinah();
		return view('dashboard',  $data);
	}

	public function pmb(){
		return view ('pmb/index');
	}
	public function pendaftaran(){
		return view ('pmb/pendaftaran');
	}
	
}