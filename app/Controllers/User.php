<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controllers;

class User extends BaseController
{
	public function index()
	{
		$model = new UserModel();
		$data  = array (
				'id'    => "Data User",
				'user'  => $model->getData(),
			);
		return $this->renderView('/apotek/user/list_user', $data);
	}
	function tambah()
	{
	return $this->renderView('apotek/user/form_add');
	}
	public function simpan()
    {
        $model = new UserModel();
        $data = array(
            'nm_user'  => $this->request->getPost('nm_user'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level' => $this->request->getPost('level'),
        );
        $model->simpanUser($data);
   
        
        return redirect()->to('/user');
    }
    function edit($id)
	{
		$model = new UserModel();
		$data ['obat'] = $model->getData($id)->getRow();
		return $this->renderView('/apotek/user/form_edit', $data);
	}
	public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id_user');
        $data = array(
            'id_user'      => $this->request->getPost('id_user'),
            'nm_user'      => $this->request->getPost('nm_user'),
            'username'		 => $this->request->getPost('username'),
        );
        $model->updateUser($data, $id);
        return redirect()->to('/user');
    }
    public function delete($id)
    {
        $model = new UserModel();
        $model->deleteUser($id);
        return redirect()->to('/user');
    }
}