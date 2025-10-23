<?php

    // $c = $db->runQuery();
    $row = $db->getData('SELECT * FROM matkul');

    // var_dump($row);
    $no = 1;

?>

<a href="?f=matkul&&m=insert" class="btn btn-primary m-4">Tambah Data</a>

<div>
    <table class="table mt-3">
        <tr>
            <th>No</th>
            <th>Kode Mk</th>
            <th>Nama Mk</th>
            <th>Aksi</th>
        </tr>

        <?php if (!empty($row)) : ?>
            <?php foreach ($row as $data): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['kode_mk'] ?></td>
                    <td><?= $data['nama_mk'] ?></td>
                    <td>
                        <a href="?f=matkul&m=detail&id=<?= $data['idmatkul'] ?>" class="btn btn-info btn-sm">Details</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="4" class="text-center">Tidak ada data</td>
            </tr>
        <?php endif; ?>


    </table>
</div>