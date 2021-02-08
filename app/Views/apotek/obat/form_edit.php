<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Obat</h1>
                    </div>
                    <div class="card shadow mb-4">
    <div class="card-header py-3 border-bottom-info ">
        <h6 class="m-0 font-weight-bold text-primary">Edit Obat</h6>
    </div>
                    <div class="card-body">
<form class="user" method="POST" action="<?php echo base_url();?>/Apotek/update">
                                    <div class="form-group">
                                        <span>ID Obat</span>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Id barang" name="id_barang" value="<?= $obat->id_barang; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <span>Nama Obat</span>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama barang" name="nama_barang" value="<?= $obat->nama_barang; ?>" >
                                    </div>
                                <div class="form-group">
                                    <span>Harga Jual</span>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga Jual Obat" name="harga_jual" value="<?= $obat->harga_jual; ?>">
                                </div> 
                                <span>Stok Obat</span><span style="display: inline-block; width: 120px;"></span><span>Tanggal expired</span>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Stok Barang" name="stok" value="<?= $obat->stok; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Tanggal Expired Barang" name="tgl_exp" value="<?= $obat->tgl_exp; ?>">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-dismiss="modal">Simpan Data</button>
                            </form>
                        </div>