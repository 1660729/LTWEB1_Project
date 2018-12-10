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



    function DangNhap()
    {
           
        require_once './lib/db.php';

    

        if (isset($_POST["btnLogin"])) 
        {
            $username = $_POST["txtUserName"];
            $password = $_POST["txtPassword"];
            $enc_password = $password;//md5($password);

            $sql = "select * from taikhoan where NguoiDung = '$username' and MatKhau = '$enc_password'";
            $rs = load($sql);
                if ($rs->num_rows > 0) 
                {
                    
                    $_SESSION["current_user"] = $rs->fetch_object();
                    $_SESSION["dang_nhap_chua"] = 1;
                   $this->HienThiSanPham();
                } 
        }
      
    }



    function DangKi()
    {
        require_once("register.php");
    }

    function ThemTaiKhoan()
    {


          if(isset($_POST["submit"]))
        {
                 if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
                {
                        //your site secret key
                    $secret = '6Le5AH8UAAAAAHVJ4u409Droj3t79UIEkbfHSabm';
                    //get verify response data
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                    $responseData = json_decode($verifyResponse);
                    if($responseData->success)
                    {
                        require_once("./lib/db.php");
                        $TenDangnhap=$_POST["NguoiDung"];
                        $MatKhau=$_POST["matKhau"];
                        $MKMD5=md5($MatKhau);
                        $DienThoai=$_POST["Dientoai"];
                        $DiaChi=$_POST["Diachi"];
                        $Email=$_POST["Email"];
                        $ma=uniqid();
                        $Sql="insert TaiKhoan(ID,NguoiDung,matKhau,Dientoai,Diachi,Email)values('$ma','$TenDangnhap','$MKMD5','$DienThoai','$DiaChi','$Email')";
                      

                        $result=write($Sql);
                        $this->HienThiSanPham();

                    }

                }


        
        }
    }


    function ChitietSanPham()
    {
          require_once './lib/db.php';
        $IDs=$_GET["ID"];
        #Lấy ra sản phầm bằng
        $ThongTinSP="select * from sanpham where ID='$IDs'";
        $result= load($ThongTinSP);
       
        // #Lấy ra sản phẩm cùng loại
         $SpCloai="select * from sanpham where LoaiSP= (select LoaiSP from sanpham  where ID='$IDs') limit 0,5;";
         $result1=load($SpCloai);

        // #Cùng nhà sản xuất
        $SungNSX="select * from sanpham where NhaSanXuatId= (select NhaSanXuatId from sanpham  where ID='1') limit 0,5;";
        $CSX=load($SungNSX);
        require_once("Chitiet.php");

    }

    function Logout()
    {
        unset($_SESSION["current_user"]);

        $this->HienThiSanPham();
    }

    function GioHang()
    {
        if(isset($_SESSION["current_user"]))
        {
            require_once("GioHang.php");
        }
        echo("Ban Chua dang nhập");
    }

}
?>