<?php

    $row = $db->getData('SELECT * FROM mahasiswa');

    // var_dump($row);
    $no = 1;

?>

<a href="?f=mahasiswa&&m=insert" class="btn btn-primary m-4">Tambah Data</a>

<div>
    <table class="table mt-3">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($row as $data): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['mahasiswa'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                    <a href="?f=mahasiswa&&m=detail&&id=<?= $data['idmahasiswa'] ?>" class="btn btn-info btn-sm">Details</a>
                </td>
            </tr>
        <?php endforeach?>

    </table>
</div>