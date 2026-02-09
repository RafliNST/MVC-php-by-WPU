<?php

class Mahasiswa_Model {
    private $db = "mvc_wpu";
    private $table = 'mahasiswa';

    private $conn;    

    private $mhs = [
        [
            "nama" => "Rafli A.N.",
            "nrp" => "043040023",
            "email" => "huhu@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Alfian R.",
            "nrp" => "043040024",
            "email" => "lol@gmail.com",
            "jurusan" => "Teknik Mesin"
        ]
    ];

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost:3306;dbname=" . $this->db, "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswaStatic()
    {
        return $this->mhs;
    }
    
    public function getAllMahasiswa()
    {
        return $this->conn->query("SELECT * FROM " . $this->table)->fetchAll(PDO::FETCH_ASSOC);
    }
}