<?php

class Suly
{
    function HienThiSanPham()
    {
        require_once("./lib/db.php");
         $sql ="select * from sanpham";
         $result=load($sql);
        require_once("SanPham.php");
    }


    function DangKi()
    {
        require_once("register.php");
    }

    function ThemTaiKhoan()
    {


          if(isset($_POST["submit"]))
        {
          require_once("./lib/db.php");
          $TenDangnhap=$_POST["NguoiDung"];
          $MatKhau=$_POST["matKhau"];
          $DienThoai=$_POST["Dientoai"];
          $DiaChi=$_POST["Diachi"];
          $Email=$_POST["Email"];
          $Sql="insert TaiKhoan(NguoiDung,matKhau,Dientoai,Diachi,Email)values('$TenDangnhap','$MatKhau','$DienThoai','$DiaChi','$Email')";
         
            $result=write($Sql);
            $this->HienThiSanPham();
        }
    }


    function ChitietSanPham()
    {
          require_once './lib/db.php';
        $IDs=$_GET["ID"];
        $sql="select * from sanpham where ID='$IDs'";
        $result= load($sql);
        require_once("Chitiet.php");
    }


    

}
?>