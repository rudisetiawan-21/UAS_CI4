<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	protected $table = "tbl_user";
	public function getData($id = false)
	{
		if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_user' => $id]);
        }   
	}
	public function simpanUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function updateUSer($data, $id)
    {
        $query = $this->db->table($this->table)->update($data,  ['id_user' => $id]);
        return $query;
    }
    public function deleteUser($id)
    {
        $query = $this->db->table($this->table)->delete(array ('id_user' => $id));
        return $query;
    } 
}