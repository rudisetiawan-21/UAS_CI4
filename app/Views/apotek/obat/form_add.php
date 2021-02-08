<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Obat</h1>
                    </div>
                    <div class="card shadow mb-4">
    <div class="card-header py-3 border-bottom-info ">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Obat</h6>
    </div>
                    <div class="card-body">
<form class="user" method="POST" action="<?php echo base_url();?>/Apotek/simpan">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama barang" name="nama_barang">
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Harga Jual Obat" name="harga_jual">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Stok Barang" name="stok">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Tanggal Expired Barang" name="tgl_exp">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-dismiss="modal">Simpan Data</button>
                            </form>
                        </div>