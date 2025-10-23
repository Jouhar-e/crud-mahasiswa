<div>
    <form class="mt-5" action="" method="post">
        <div>
            <label class="form-label" for="kode_mk">Kode Matkul</label>
            <input class="form-control" placeholder="Masukkan Kode Matkul" name="nim_mahasiswa" type="number" required>
        </div>
        <div>
            <label class="form-label" for="nama_mk">Nama Matkul</label>
            <input class="form-control" placeholder="Masukkan Nama Matkul" name="nama_mk" type="text" required>
        </div>
        <div class="mt-3">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <a href="?f=matkul&&m=select" class="btn btn-info">Kembali</a>
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $kode_mk = $_POST['nim_nama_mk'];
        $nama_mk = $_POST['nama_mk'];

        $sql = "INSERT INTO matkul VALUES (NULL,'$kode_mk','$nama_mk')";

        $db->runQuery($sql);
        header("location:?f=matkul&&m=select");
    }

?>