<?php
class Pendaftar {

    public function __construct() {
        if (!isset($_SESSION['pendaftar'])) {
            $_SESSION['pendaftar'] = [];
        }
    }

    public function semuaPendaftar() {
        return $_SESSION['pendaftar'];
    }

    public function tambahPendaftar($data) {
        $_SESSION['pendaftar'][] = $data;
    }
}