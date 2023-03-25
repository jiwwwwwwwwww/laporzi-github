<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/profile/'.$user['foto_profile']) ?>" class="card-img" alt="img user">
            </div>
                <div class="card-body">
                    <!-- <h6 class="card-title">Nik : <?= $user['nik']; ?></h6> -->
                    <!-- <h6 class="card-title">Nama : <?= $user['nama']; ?></h6> -->
                    <h6 class="card-title">Username : <?= $user['username']; ?></h6>
                    <h6 class="card-title">Telp : <?= $user['telp'] ?></h6>
                    <!-- <h6 class="card-title">Alamat : <?= $user['alamat'] ?></h6> -->
                    <!-- <p class="card-text"><small class="text-muted">Member since </small></p> -->
                    <!-- <p><button class="btn btn-success" onclick="alert('halaman belum dibuat')">Ganti Foto</button></p> -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid