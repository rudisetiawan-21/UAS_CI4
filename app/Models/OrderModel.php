<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model{
	protected $table = "tbl_transaksi";
    protected $primaryKey = "id_trx";
    
	public function simpanOrder($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}