<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM mahasiswa WHERE idmahasiswa = $id";
        $row = $db->getValue($sql);
        // var_dump($row);
    }

?>

<h1>Detail Mahasiswa</h1>

<div>
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $row['nim'] ?></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td><?= $row['mahasiswa'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $row['alamat'] ?></td>
        </tr>
    </table>
</div>
