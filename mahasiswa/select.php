<?php

    $row = $db->getData('SELECT * FROM mahasiswa');

    var_dump($row);

    // foreach ($row as $r) {
    //     echo $r['nim'].'  ';
    //     echo $r['mahasiswa'].'  ';
    //     echo $r['alamat'];
    // }

?>


<div>
    <table class="table mt-3">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    </table>
</div>