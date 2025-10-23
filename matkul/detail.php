<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM matkul WHERE idmatkul = $id";
        $row = $db->getValue($sql);
        // var_dump($row);
    }

?>

<h3 class="mt-3">Detail Mahasiswa</h3>

<div>
    <table class="table">
        <tr>
            <td>Kode Matkul</td>
            <td>:</td>
            <td><?= $row['kode_mk'] ?></td>
        </tr>
        <tr>
            <td>Nama Matkul</td>
            <td>:</td>
            <td><?= $row['nama_mk'] ?></td>
        </tr>
        <tr>
            <td colspan="3" class="d-flex">
                <a href="?f=matkul&&m=update&&id=<?= $row['idmatkul'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                <form action="" class="ms-2" method="post">
                    <input type="submit" class="btn btn-danger btn-sm" value="Hapus" name="hapus">
                </form>
            </td>
        </tr>
    </table>
</div>

<?php

    if (isset($_POST['hapus'])) {
        $sql = "DELETE FROM matkul WHERE idmatkul = $id";
        // echo $sql;
        $db->runQuery($sql);
        header("location:?f=matkul&&m=select");
    }

?>
