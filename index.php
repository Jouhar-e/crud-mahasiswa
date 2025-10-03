<?php

require_once 'module.php';
$db = new DB();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- Navbar -->
        <div class="row shadow">
            <div class="col-md-5 m-3">
                <nav>
                    <div>
                        <h2>Data Mahasiswa</h2>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Content -->
        <div class="row">
            <div>
                <?php 
                
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f = $_GET['f'];
                        $m = $_GET['m'];

                        $file = $f.'/'.$m.'.php';
                        // echo $file;
                        require_once $file;
                    }else {
                        require_once 'mahasiswa/select.php';
                    }
                
                ?>
            </div>
        </div>

        <!-- Footer -->
        <div></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>