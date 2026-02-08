<?php

class Mahasiswa_Model {
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

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}