<?php
session_start();

require_once 'controller/PendaftarController.php';

$controller = new PendaftarController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store();
    return; 
}

$page = $_GET['page'] ?? 'form'; 

switch ($page) {
    case 'list':
        $controller->showList();
        break;
    case 'form':
    default:
        $controller->showForm();
        break;
}