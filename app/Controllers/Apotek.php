<?php namespace App\Controllers;

use App\Models\ApotekModel;
use CodeIgniter\Controllers;

class Apotek extends BaseController
{
	public function index()
	{
		// $model = new ApotekModel();
		// $data  = array (
		// 	     'id_barang' => "Daftar Obat",
		// 	     'obat' => $model->getObat(),
		// );
        return $this->renderView('apotek/obat/index');
		
	}
    public function view_obat()
    {
        $model = new ApotekModel();
        $data  = array (
                 'id_barang' => "Daftar Obat",
                 'obat' => $model->getObat(),
        );
        return $this->renderView('/apotek/obat/list_obat', $data);
    }
	function form_tambah()
	{
	return $this->renderView('/apotek/obat/form_add');
	}
    
	public function simpan()
    {
        $model = new ApotekModel();
        $data = array(
            'id_barang'  => $this->request->getPost('id_barang'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga_jual' => $this->request->getPost('harga_jual'),
            'stok' => $this->request->getPost('stok'),
            'tgl_exp' => $this->request->getPost('tgl_exp'),
        );
        $model->simpanObat($data);
        return redirect()->to('/apotek/view_obat');
    }
    public function delete($id)
    {
        $model = new ApotekModel();
        $model->deleteObat($id);
        return redirect()->to('/apotek/view_obat');
    }
    function edit($id)
	{
		$model = new ApotekModel();
		$data ['obat'] = $model->getObat($id)->getRow();
		return $this->renderView('/apotek/obat/form_edit', $data);
	}
	public function update()
    {
        $model = new ApotekModel();
        $id = $this->request->getPost('id_barang');
        $data = array(
            'id_barang'      => $this->request->getPost('id_barang'),
            'nama_barang'      => $this->request->getPost('nama_barang'),
            'harga_jual'		 => $this->request->getPost('harga_jual'),
            'stok'		 => $this->request->getPost('stok'),
            'tgl_exp'		 => $this->request->getPost('tgl_exp'),
        );
        $model->updateObat($data, $id);
        return redirect()->to('/apotek/view_obat');
    }
    
}