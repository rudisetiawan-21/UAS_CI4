<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Keranjang Belanja Apotek Farma</h1>
 </div>
 <div class="card shadow mb-4">
                <div class="card-header py-3 border-bottom-info ">
                  <h6 class="m-0 font-weight-bold text-primary ">Keranjang Belanja</h6>
                   <div class="card-header-action">
                    <br>
                  <a href="<?php base_url();?>/penjualan"  class="btn btn-success btn-sm float-left">
                    <span class="text">Tambah</span>
                  </a>
              </div>
                </div>
                <div class="card-body border-bottom-info">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
            <tr>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Harga</th>
                <th colspan="3"><center>Jumlah</center></th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Total Harga</th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
                <th>Rp. <?php echo $cart->total(); ?></th>
                <th></th>
            </tr>
            
            </tfoot>
            <?php foreach ($cart->contents() as $item) : ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['price']; ?></td>
                    <td> <?php echo anchor('/cart/kurang/' . $item['qty'] . '/' . $item['rowid'], ' <i class="fas fa-minus"></i> ') ?></td>
                    <td></a><?= $item['qty']; ?></td>
                    <td><?php echo anchor('/cart/tambah/' . $item['qty'] . '/' . $item['rowid'], ' <i class="fas fa-plus"></i>') ?></td>
                    <td>Rp. <?php echo  $item['qty'] * $item['price']; ?></td>
                    <td> <a href="<?php base_url();?>/cart/remove/<?=$item['rowid'];?>">Hapus</a></td>
                </tr>  
            <?php endforeach ?>

</table>
<tr>
                <th colspan="8">
                     <a href="<?php base_url();?>/cart/clear_cart"  class="btn btn-danger btn-icon-split ">
                    <span class="text">Bersihkan Keranjang</span></a>
                    <a href="<?php base_url();?>/billing"  class="btn btn-primary btn-icon-split float-right ">
                    <span class="text " >Cek out</span></a>
            </tr>
    </div>