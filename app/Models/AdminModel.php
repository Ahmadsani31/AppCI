<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
	protected $table                = 'admin';
	protected $primaryKey           = 'id';
	protected $protectFields        = true;
	protected $allowedFields        = ['name', 'username', 'email', 'nope', 'password'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';
}
