<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data User</h1>
                    </div>
                    <div class="card shadow mb-4">
    <div class="card-header py-3 border-bottom-info ">
        <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
    </div>
                    <div class="card-body">
<form class="user" method="POST" action="<?php echo base_url();?>/user/simpan">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama Anda" name="nm_user">
                                    </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Usrename Anda" name="username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="label-input100">Level</span>
                                        <select class="form-control" id="level" name="level">
                                        <option>-Pilih Level-</option>
                                        <option value="admin">Admin</option>
                                        <option value="pegawai">User</option>
                                        <option value="manajer">Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" data-dismiss="modal">Simpan Data</button>
                            </form>
                        </div>