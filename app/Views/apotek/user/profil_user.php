<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Obat</h1>
                    </div>
                    <div class="card shadow mb-4">
    <div class="card-header py-3 border-bottom-info ">
        <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
    </div>
                    <div class="card-body">
<form class="user" method="POST" action="<?php echo base_url();?>/User/update">
                                    <div class="form-group">
                                        <span>Id User</span>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Id User Anda" name="id_user" value="<?= $obat->id_user; ?>" readonly >
                                    </div>
                                    <div class="form-group">
                                        <span>Nama User</span>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama Anda" name="nm_user" value="<?= $obat->nm_user; ?>" >
                                    </div>
                                <div class="form-group">
                                    <span>Username</span>
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username Anda" name="username" value="<?= $obat->username; ?>">
                                </div>
                                <button class="btn btn-primary" type="submit" data-dismiss="modal">Simpan Data</button>
                            </form>
                        </div>