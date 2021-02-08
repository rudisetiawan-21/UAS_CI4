<?php namespace App\Controllers;
 
use App\Models\PenjualanModel;
use CodeIgniter\Controllers;
// memanggil library / package WFcart
// use Wildanfuady\WFcart\WFcart;
 
class Cart extends BaseController
{
   public function index()
    {
        $cart = \Config\Services::cart();
        $obat = new PenjualanModel();
        $data = [
                'obat' => $obat->findAll(),
                'cart' => $cart,
            ];
         return $this->renderView('/apotek/obat/form_cart', $data);
 
    }
    public function beli($id = null)
    {
        $cart = \Config\Services::cart();
        $model = new PenjualanModel();
        $obat = $model->find($id);
        $data = array (
            'id'        => $obat['id_barang'],
            'name'      => $obat['nama_barang'],
            'price'     => $obat['harga_jual'],
            'stok'      => $obat['stok'],
            'qty'  => 1
            );
        $cart->insert($data);
        // print_r($cart->contents());
        //return $this->renderView('/apotek/obat/form_cart');
        return redirect()->to(base_url('Cart'));
    }
 
    // function untuk update cart berdasarkan id dan quantity
    public function update()
    {
        // update cart
        $this->cart->update();
        return $this->renderView('/apotek/obat/form_cart', $data);
    }
 
    // function untuk menghapus cart berdasarkan id
    public function remove($id)
    {
        $cart = \Config\Services::cart();
        $rowid = $id;
        $cart->remove($rowid);
        // print_r($cart->remove($rowid));
        // print_r($cart->contents());
        return redirect()->to(base_url('cart'));
    }
 public function tambah($qty, $id)
    {
        $cart = \Config\Services::cart();
        $jumlah = $qty + 1;
        $data = array(
            'rowid' => $id,
            'qty' => $jumlah
        );
        $cart->update($data);
        return redirect()->to(base_url('cart'));
    }
    public function kurang($qty, $id)
    {
        $cart = \Config\Services::cart();
        $jumlah = $qty - 1;

        $data = array(
            'rowid' => $id,
            'qty' => $jumlah
        );
        
        if ($qty < 2) {
            return redirect()->to(base_url('cart/remove/'.$id));
        } else {
            $cart->update($data);
        }

        return redirect()->to(base_url('cart'));
    }
    public function clear_cart(){
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->to(base_url('cart'));
        $this->session->setFlashdata('msg','Berhasil Clear Keranjang');
    }
    public function save_order(){

        $model =  new PenjualanModel();
        $data = array(
            'id_trx'     => $this->request->getPost('id_trx'),
            'id_barang'  => $this->request->getPost('id_barang'),
            'jumlah'     => $this->request->getPost('jumlah'),
        );
        $model->simpanOrder($data);
        $cart->destroy();
        return redirect()->to('/apotek/view_obat');
    }
}