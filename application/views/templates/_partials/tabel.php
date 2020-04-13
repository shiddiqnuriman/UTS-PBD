<!-- Awal Tabel -->
<table class="table">
    <thead class="thead">
        <tr>
            <th>No.</th>
            <th>User ID</th>
            <th class="text-left">Izin</th>
            <th class="text-center">Approve by</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
<table id="tabel" class="table">
    <tbody>
        <?php
        $no = 1;
        foreach ($rumah as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->user_id ?></td>
                <td><?php echo $u->ijin_pulang_cepat ?></td>
                <td><?php echo $u->approve_by ?></td>
                <td class="text-center">
                    <a href="<?= base_url() ?>map" style="color: #fd7e15; margin-right: 5px" data-toggle="tooltip" data-placement="top" title="Lihat Detail Lokasi">
                        <span><img src="<?php echo base_url('assets/img/icons/map-marked.svg') ?>" width="25" height="25"></span>
                    </a>
                    <a id="delete" style="color: #fd7e15" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                        <span><img src="<?php echo base_url('assets/img/icons/trash.svg') ?>" width="25" height="25"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- Akhir Table -->