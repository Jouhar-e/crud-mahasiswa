<?php

class DB
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $database = "dbakademi";
    private $koneksi;

    public function __construct()
    {
        $this->koneksi =  $this->koneksiDB();
    }

    public function koneksiDB()
    {
        $koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        return $koneksi;
    }

    public function getData($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        if (!empty($data)) {
            return $data;
        }
    }
}
