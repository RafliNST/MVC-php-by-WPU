<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data['mhs'] = $this->model('Mahasiswa_Model')->getAllMahasiswa();
        $this->view('mahasiswa/index', $data);
    }
}