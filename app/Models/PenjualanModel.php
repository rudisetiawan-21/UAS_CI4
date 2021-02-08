<?php namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model{
	protected $table = "tbl_barang";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ['nama_barang','harga_jual','stok'];
    protected $table1 = "tbl_transaksi";
    protected $primaryKey1 = "id_trx";

	public function getJual ($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_barang' => $id]);
        }  
    }
    public function simpanOrder($data)
    {
        $query = $this->db->table($this->table1)->insert($data);
        return $query;
    }
}