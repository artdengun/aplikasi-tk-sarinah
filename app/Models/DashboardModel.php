<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
	protected $table = 'users';

	public function getCountUser()
	{
		return $this->db->table("users")->countAll();
	}

	public function getCountTkSarinah()
	{
		return $this->db->table("tk")->countAll();
	}

}
