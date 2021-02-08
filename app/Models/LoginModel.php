<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{

	protected $table = 'tbl_user';
	protected $allowedFields = ['nm_user','username','password','level'];
}