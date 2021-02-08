<?php namespace App\Models;

use CodeIgniter\Model;

class ApotekModel extends Model{
	protected $table = "tbl_barang";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ['nama_barang','harga_jual'];
	public function getObat ($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_barang' => $id]);
        }  
    }
 
	public function simpanObat($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function updateObat($data, $id)
    {
        $query = $this->db->table($this->table)->update($data,  ['id_barang' => $id]);
        return $query;
    }
    public function deleteObat($id)
    {
        $query = $this->db->table($this->table)->delete(array ('id_barang' => $id));
        return $query;
    } 
}
