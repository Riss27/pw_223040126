<?php 
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "
    <script>
        alert('Baik, Data Berhasil dihapus!');
        document.location.href  = 'edit.php';
    </script>
    ";
} else {
    echo "<script>
        alert('Data Gagal dihapus!');
        document.location.href  = 'edit.php';
        </script>";
}

?>