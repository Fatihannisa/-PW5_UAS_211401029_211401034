<?php
if (!defined('INDEX')) die("");

$halaman = array(
    "daftar", "daftar_tambah", "daftar_insert", "daftar_edit", "daftar_update", "daftar_hapus"
);
if (isset($_GET['hal']))
    $hal = $_GET['hal'];
else
    $hal = "dashboard";

foreach ($halaman as $h) {
    if ($hal == $h) {
        include 'crud/' . $h . '.php';
        break;
    }
}