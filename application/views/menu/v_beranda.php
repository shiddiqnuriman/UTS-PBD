<?php $this->load->view('templates/_partials/header.php') ?>

<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom: 30px">
            <div class="container-fluid">
                <h1 class="mt-2" style="text-align: right"> Daftar Tempat</h1>
                <p style="text-align: right; color: #808080 ">Daftar Tempat Yang Sering di Kunjungi</p>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
                <div class="card" style="width: 18rem">
                    <img src="<?= base_url('assets/img/Peta.jpg') ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Lokasi</h5>
                        <p class="card-text">Daftar semua tempat yang ada secara Geografis.</p>
                        <a href="<?= base_url('pemetaan'); ?>" class="btn btn-secondary">Go to Map</a>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('templates/_partials/footer'); ?>
    </div>
</div>
</body>

</html>