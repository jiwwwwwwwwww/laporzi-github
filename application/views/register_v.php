 <div class="container">

     <div class="card o-hidden border-0 shadow-lg my-3">
         <div class="card-body p-3">
             <!-- Nested Row within Card Body -->
             <div class="row">
                 <div class="col-lg-3"></div>
                 <div class="col-lg-6">
                     <div class="p-5">
                         <div class="text-center">
                             <h5 class="text-gray-900 mb-1">Daftar</h5>
                             <hr><br>
                             <center>
                                 <!-- <p>Repost by <a href='#' title='Pengaduan' target='_blank'>CEKZYYY</a></p> -->
                             </center>

                         </div>

                         <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>') ?>

                         <?= $this->session->flashdata('msg'); ?>

                         <?= form_open('Auth/RegisterController', 'class="user"') ?>
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="nik" placeholder="Nik"
                                 name="nik" value="<?= set_value('nik') ?>">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama"
                                 name="nama" value="<?= set_value('nama') ?>">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="username" name="username"
                                 placeholder="Username" value="<?= set_value('username') ?>">
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control form-control-user" id="password" name="password"
                                 placeholder="Password">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="telp" placeholder="Telp"
                                 name="telp">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat"
                                 name="alamat">
                         </div>
                         <button type="submit" class="btn btn-primary btn-user btn-block">DAFTAR</button>
                         </form>
                         <hr>
                         <div class="text-center">
                             <h6><a class="small" href="<?= base_url('Auth/LoginController') ?>">Sudah punya akun?
                                     Masuk!</a></h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>