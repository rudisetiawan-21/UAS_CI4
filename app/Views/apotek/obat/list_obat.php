<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Obat Apotek </h1>
                    </div>
<div class="card shadow mb-4">
    <div class="card-header py-3 border-bottom-info ">
        <h6 class="m-0 font-weight-bold text-primary ">Data Obat</h6>
        <a href="<?php base_url();?>/apotek/form_tambah"  class="btn btn-success btn-sm float-right">
        	<span class="text">Tambah</span>
        </a>
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
                                            <th colspan="2"><center>Aksi</center></th>
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
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </tfoot>
        <?php if (! empty($obat) && is_array($obat))
		:
		$no=1;
		foreach ($obat as $row): ?>
		<tr class="">
			<td><?= $no++;?></td>
			<td><?= esc($row['id_barang']);?></td>
			<td><?= esc($row['nama_barang']);?></td>
			<td><?= esc($row['harga_jual']);?></td>
			<td><?= esc($row['stok']);?></td>
			<td><?= esc($row['tgl_exp']);?></td>
			<td><a href="<?php base_url();?>/Apotek/edit/<?= $row['id_barang'];?>" class="btn btn-info btn-circle btn-sm"><i class="far fa-edit"></i></a></td>
			<td><a href="<?php base_url();?>/Apotek/delete/<?= $row['id_barang'];?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
		</tr>   
	<?php endforeach ?>
	<?php else : ?>
	<tr>
		<td colspan="3"> Tidak Ada Artikel</td>
	</tr>
	<?php endif?>
</table>
    </div>
</div>
