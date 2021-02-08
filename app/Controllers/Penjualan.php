<?php namespace App\Controllers;

use App\Models\PenjualanModel;
use CodeIgniter\Controllers;

class Penjualan extends BaseController
{
	public function __construct() {
     
        $this->apotek = new PenjualanModel;
     
    }
	public function index()
    {
        // membuat variabel untuk menampung session cart
        $session = session('cart');
        // membuat variabel total yang isinya mengecek ada atau tidak
        // variabel session dan memasukannya ke dalam array values
        // jika session cart tidak ada, tampilkan array() / kosong
        $data['total'] = is_array($session)? array_values($session): array();
        // menampilkan semua data product yang ada di dalam database
        $data['items'] = $this->apotek->findAll();
        // $data  = array (
        //          'id_barang' => "Daftar Obat",
        //          'obat' => $this->apotek->getJual(),
        //  );
        // menampilkan halaman view product dan membawa variabel data
        return $this->renderView('/apotek/obat/form_jual', $data);    
    }
	// public function index()
 //    {
 //        $model = new PenjualanModel();
 //        $data  = array (
 //                 'id_barang' => "Daftar Obat",
 //                 'obat' => $model->getJual(),
 //        );
 //        return $this->renderView('/apotek/obat/form_jual', $data);
 //    }
}
