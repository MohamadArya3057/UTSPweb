<?php
require_once 'model/Pendaftar.php';

class PendaftarController {
    private $pendaftarModel;

    public function __construct() {
        $this->pendaftarModel = new Pendaftar();
    }

    public function showForm() {
        $page = 'form';
        require 'view/template.php';
    }

    public function showList() {
        $page = 'list';
        $pendaftar = $this->pendaftarModel->semuaPendaftar();
        $dataView = ['pendaftar' => $pendaftar];
        require 'view/template.php';
    }

    public function store() {
        $data = [
            'nama' => $_POST['nama'] ?? '',
            'email' => $_POST['email'] ?? '',
            'telepon' => $_POST['telepon'] ?? ''
        ];

        $this->pendaftarModel->tambahPendaftar($data);

        header('Location: index.php?page=list&status=success');
        exit;
    }
}