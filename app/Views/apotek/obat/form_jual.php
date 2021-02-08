<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Penjualan Obat Apotek Farma </h1>
                    </div>
<div class="card shadow mb-4">
    <div class="card-header py-3 border-bottom-info ">
        <h6 class="m-0 font-weight-bold text-primary ">Data Obat</h6>
        <a class="btn btn-success btn-sm float-right" href="<?php base_url();?>/cart">keranjang</a>
    </div>
    <div class="card-body border-bottom-info">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Barang</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Expired</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Barang</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Expired</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <?php foreach($items as $key => $item) { ?>
        <tr class="">
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $item['id_barang']; ?></td>
            <td><?php echo $item['nama_barang']; ?></td>
            <td>Rp. <?php echo ($item['harga_jual']); ?></td>
            <td><?php echo $item['stok']; ?></td>
            <td><?php echo $item['tgl_exp']; ?></td>
            <td><a class="btn btn-primary" href="<?php base_url();?>/cart/beli/<?= $item['id_barang'];?>"><i class="fas fa-cart-plus"></i></a></td>

        </tr>   
   <?php } ?>
    <tr>
        <?php if(count($items) == 0){ // jika cart kosong, maka tampilkan: ?>
        <td colspan="3"> Tidak Ada Artikel</td>
        <?php } ?>
    </tr>
</table>
    </div>
</div>
