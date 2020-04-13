<?php $this->load->view('templates/_partials/header.php') ?>


<!-- memuat sidebar -->
<?php $this->load->view('templates/_partials/sidenav.php'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main style="padding-bottom:80px">
            <div class="container-fluid">
                <h1 class="mt-2">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Beranda</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Absen</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>User ID</th>
                                        <th class="text-left">Lat</th>
                                        <th class="text-left">long</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data->result_array() as $u) :
                                        $userid = $u['user_id'];
                                        $latitude = $u['lat'];
                                        $longitude = $u['lang'];
                                    ?>
                                        <tr>
                                            <td data-field="user"><?php echo $no++ ?></td>
                                            <td data-field="user"><?php echo $userid ?></td>
                                            <td data-field="lat"><?php echo $latitude ?></td>
                                            <td data-field="lang"><?php echo $longitude ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('maps/view/');
                                                            echo $u['id'] ?>" style="color: #fd7e15; margin-right: 5px" data-toggle="tooltip" data-placement="top" title="Lihat Detail Lokasi">
                                                    <span><img src="<?php echo base_url('assets/img/icons/map-marked.svg') ?>" width="25" height="25"></span>
                                                </a>
                                                <a href="<?= base_url('maps/delete/');
                                                            echo $u['id'] ?>" id="delete" style="color: #fd7e15" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                    <span><img src="<?php echo base_url('assets/img/icons/trash.svg') ?>" width="25" height="25"></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<<<<<<< Updated upstream
</div>
<?php $this->load->view('templates/_partials/footer.php'); ?>

<!-- JS untuk tooltip -->
<script type="text/javascript">
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
=======
    <?php $this->load->view('templates/_partials/footer.php'); ?>



    <?php $this->load->view('templates/_partials/js.php'); ?>

    <script type="text/javascript">
        var $u = $('#tabel tr');

        $('#search').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, '').toLowerCase();
            $u.show().filter(function() {
                var text = $(this).text().replace(/s+/g, '').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>

    <!-- JS untuk tooltip -->
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Js untuk google maps -->
    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.1212641, 110.4093027),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-7.1212641, 110.4093027),
                map: peta,
                animation: google.maps.Animation.BOUNCE
            });
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
>>>>>>> Stashed changes
</body>

</html>