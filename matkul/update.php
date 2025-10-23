<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM matkul WHERE idmatkul = $id";
        $row = $db->getValue($sql);
        // var_dump($row);
    }

?>


<div>
    <form class="mt-5" action="" method="post">
        <div>
            <label class="form-label" for="kode_mk">Kode Matkul</label>
            <input class="form-control" value="<?= $row['kode_mk'] ?>" placeholder="Masukkan Kode Matkul" name="nim_mahasiswa" type="number" required>
        </div>
        <div>
            <label class="form-label" for="nama_mk">Nama Matkul</label>
            <input class="form-control" value="<?= $row['nama_mk'] ?>" placeholder="Masukkan Nama Matkul" name="nama_mk" type="text" required>
        </div>
        <div class="mt-3">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $kode_mk = $_POST['kode_mk'];
        $nama_mk = $_POST['nama_mk'];

        $sql = "UPDATE matkul SET kode_mk = '$kode_mk', nama_mk = '$nama_mk' WHERE idmatkul = $id";

        $db->runQuery($sql);
        header("location:?f=matkul&&m=select");
    }

?>