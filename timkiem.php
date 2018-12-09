<?php
    require_once './lib/db.php';

    $inputSearch = $_REQUEST["txtSearch"];
    $search = $_REQUEST["subSearch"];
    $sql = "select * from sanpham where (1 = 1)
            if(TenSP) $sql += 'and TenSP like '%$inputSearch%' '
            if(LoaiSP) $sql += 'and LoaiSP like '%$inputSearch%' '
            if(Gia) $sql += 'and Gia like '%$inputSearch%' ' 
            if(NhaSanXuat) $sql += 'and NhaSanXuat like '%$inputSearch%' '";
?>