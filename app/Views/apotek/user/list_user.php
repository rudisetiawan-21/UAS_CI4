<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Data Detail User</h1>
 </div>
<div class="card shadow mb-4">
                <div class="card-header py-3 border-bottom-info ">
                  <h6 class="m-0 font-weight-bold text-primary ">List User</h6>
                  <a href="<?php base_url();?>/user/tambah"  class="btn btn-success btn-sm float-right">
                  	<span class="text">Tambah</span>
                  </a>
                   <div class="card-header-action">
              </div>
                </div>
                <div class="card-body border-bottom-info">
                	
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<tr class="">
			<th>No</th>
			<th>Id</th>
			<th>Nama</th>
			<th>Level</th>
			<th colspan="2" class=""><center>Aksi</center></th>
		</tr>
		<?php if (! empty($user) && is_array($user))
		:
		$no=1;
		foreach ($user as $row): ?>
		<tr class="">
			<td><?= $no++;?></td>
			<td><?= esc($row['id_user']);?></td>
			<td><?= esc($row['nm_user']);?></td>
			<td><?= esc($row['level']);?></td>
			<td><a href="<?php base_url();?>/User/edit/<?= $row['id_user'];?>" class="btn btn-info btn-circle btn-sm"><i class="far fa-edit"></i></i></a></td>
			<td><a href="<?php base_url();?>/User/delete/<?= $row['id_user'];?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
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
              </div>