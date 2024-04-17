<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TkModel;
use Phpml\Classification\DecisionTree;
use Phpml\Preprocessing\Imputer;

class TkController extends BaseController
{
	public function __construct()
	{
		helper(['form']);
		$this->tk = new TkModel();
	}

	public function index()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$data['tk']   = $this->tk->findAll();
		echo view('tk/index', $data);
	}


	public function pmb()
	{
		$data['tk'] = $this->tk->findAll();

		echo view('tk/pmb', $data);
	}

	public function decision()
	{
		echo view('tk/decision-tree');
	}

	public function processAlgoritmaPenentuanKelas() {
	    // Mengambil data dari model TkModel
	    $tkModel = new TkModel();
	    $data = $tkModel->findAll();

	    // Persiapan data untuk menampung hasil
	    $hasil = [];

	    foreach ($data as $row) {
	        // Mengambil tahun lahir dari data dalam tabel
	        $tahunLahir = $this->extractTahunLahir($row['tanggal_lahir']);

	        // Menghitung umur berdasarkan tahun lahir
	        $umur = $this->hitungUmur($tahunLahir);

	        // Menentukan kelas A atau B berdasarkan umur
	        $kelas = $this->tentukanKelas($umur);
	        $nama = $row['nama'];
	        $id = $row['id'];

	        // Menambahkan hasil ke dalam array
	        $hasil[] = [
	            'id' => $id,
	            'umur' => $umur,
	            'kelas' => $kelas,
	            'nama' => $nama,
	        ];

	        // Simpan kelas ke dalam kolom "kelas" di tabel database
	        $dataToUpdate = [
	            'kelas' => $kelas,
	        ];
	        $tkModel->updateData($dataToUpdate, $id);
	    }

	    // Menampilkan hasil ke dalam view
	    $data['hasil'] = $hasil;
	    echo view('tk/report', $data);
	}


protected function extractTahunLahir($tanggalLahir) {
    // Memecah tanggal lahir untuk mendapatkan tahun
    $parts = explode('-', $tanggalLahir);
    return intval($parts[0]); // Mengambil tahun
}

protected function hitungUmur($tahunLahir) {
    // Menghitung umur berdasarkan tahun lahir
    $tahunIni = date('Y');
    $umur = $tahunIni - $tahunLahir;
    return $umur;
}

protected function tentukanKelas($umur) {
    // Menentukan kelas A atau B berdasarkan umur
    if ($umur > 5) {
        return 'B';
    } else {
        return 'A';
    }
}


	public function create()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		return view('tk/create');
	}

	public function store()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$validation =  \Config\Services::validation();
		$data = array(
			'nama'        						=> $this->request->getPost('nama'),
			'jenis_kelamin'         	=> $this->request->getPost('jenis_kelamin'),
			'tanggal_lahir'    				=> $this->request->getPost('tanggal_lahir'),
			'alamat'         					=> $this->request->getPost('alamat'),
			'kelas'         					=> $this->request->getPost('kelas'),
			'agama'         					=> $this->request->getPost('agama'),
			'tahun_ajaran'         		=> $this->request->getPost('tahun_ajaran'),
		);

		if ($validation->run($data, 'tk') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('tk/create'));
		} else {
			// insert
			$simpan = $this->tk->insertData($data);
			if ($simpan) {
				session()->setFlashdata('success', 'Tambah Data Berhasil');
				return redirect()->to(base_url('tk'));
			}
		}
	}

	public function getRegister(){
		$validation =  \Config\Services::validation();
		$data = array(
			'nama'        						=> $this->request->getPost('nama'),
			'jenis_kelamin'         	=> $this->request->getPost('jenis_kelamin'),
			'tanggal_lahir'    				=> $this->request->getPost('tanggal_lahir'),
			'alamat'         					=> $this->request->getPost('alamat'),
			'kelas'         					=> $this->request->getPost('kelas'),
			'agama'         					=> $this->request->getPost('agama'),
			'tahun_ajaran'         		=> $this->request->getPost('tahun_ajaran'),
		);

		if ($validation->run($data, 'pendaftaran') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('pendaftaran/create'));
		} else {
			// insert
			$simpan = $this->tk->insertData($data);
			if ($simpan) {
				session()->setFlashdata('success', 'Pendaftaran Berhasil !');
				return redirect()->to(base_url('pendaftaran'));
			}
		}
	}


	public function edit($id)
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$data['tk'] = $this->tk->getData($id);
		echo view('tk/edit', $data);
	}

	public function update()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$id = $this->request->getPost('id');

		$validation =  \Config\Services::validation();

		$data = array(
			'nama'        						=> $this->request->getPost('nama'),
			'jenis_kelamin'         	=> $this->request->getPost('jenis_kelamin'),
			'tanggal_lahir'    				=> $this->request->getPost('tanggal_lahir'),
			'alamat'         					=> $this->request->getPost('alamat'),
			'kelas'         					=> $this->request->getPost('kelas'),
			'agama'         					=> $this->request->getPost('agama'),
			'tahun_ajaran'         		=> $this->request->getPost('tahun_ajaran'),
		);
		if ($validation->run($data, 'tk') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('tk/edit/' . $id));
		} else {
			$ubah = $this->tk->updateData($data, $id);
			if ($ubah) {
				session()->setFlashdata('info', 'Update Data Berhasil');
				return redirect()->to(base_url('tk'));
			}
		}
	}
	public function delete($id)
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$hapus = $this->tk->deleteData($id);
		if ($hapus) {
			session()->setFlashdata('warning', 'Delete Data  Berhasil');
			return redirect()->to(base_url('tk'));
		}
	}
}
