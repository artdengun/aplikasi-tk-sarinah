<?php

namespace App\Models;

use CodeIgniter\Model;

class TkModel extends Model
{
    protected $table = 'tk';
    protected $allowedFields = ['nama', 'jenis_kelamin','tanggal_lahir', 'alamat','agama','tahun_ajaran', 'kelas'];

	public function getData($id = false)
	{
		if ($id === false) {
			return $this->table('tk')
				->get()
				->getResultArray();
		} else {
			return $this->table('tk')
				->where('tk.id', $id)
				->get()
				->getRowArray();
		}
	}
	public function insertData($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	public function updateData($data, $id)
	{
		return $this->db->table($this->table)->update($data, ['id' => $id]);
	}
	public function deleteData($id)
	{
		return $this->db->table($this->table)->delete(['id' => $id]);
	}
}
