<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    die("Anda belum login");
}

//cek level user
if($_SESSION['profesi']!="Kasir"){
    die("Anda bukan Kasir");
}
?>