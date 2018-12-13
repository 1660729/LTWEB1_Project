<?php

class Suly
{
    function HienThiSanPham()
    {
            
      
        require_once("./lib/db.php");
        #10 sản phẩm mới nhất
         $sql1 ="select * from sanpham order by sanpham.NgayTao desc limit 0,10;";
         $SapMoi=load($sql1);


        #10 sản phẩm xem nhiều nhất
        $sql = "select * from  sanpham order by LuotXem desc limit 10";
        $result=load($sql);

        #10 sản phẩm bán chạy nhất
        $sql2 = "select * from sanpham where TinhTrang = 1 order by SoLuong desc limit 10";
        $BanChay=load($sql2);
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
                        $Sql="insert into taikhoan(ID, NguoiDung, MatKhau, DienThoai, DiaChi, Email) values('$ma','$TenDangnhap','$MKMD5','$DienThoai','$DiaChi','$Email')";
                      

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
        $SungNSX="select * from sanpham where NhaSanXuatId = (select NhaSanXuatId from sanpham  where ID='1') limit 0,5;";
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
          require_once './lib/db.php';
        if(isset($_SESSION["current_user"]))
        {

            $MaND=$_SESSION["current_user"]->ID;
            $SqlMaND="select dathang.ID from dathang where dathang.UserId='$MaND'";
            $resultMaDH=load($SqlMaND);
            $M1=$resultMaDH->fetch_object();
            $ma2 = $M1->ID;

            #Hiển thị danh sách sản phẩm trong giỏ hàng
            $SqlLayTBgioHang="select sanpham.HinhAnh, sanpham.TenSP, sanpham.Gia from chitietdathang join sanpham on chitietdathang.MaSP = sanpham.MaSP
                            where chitietdathang.DatHangId='$ma2'";
            $resqul=load($SqlLayTBgioHang);

            require_once("GioHang.php");
        }
        echo("Ban Chua dang nhập");
    }


    function ThemSPGihang()
    {
         require_once './lib/db.php';
        if(isset($_SESSION["current_user"]))
        {
            $maSp=$_GET["ID"];
            $Gia=$_GET["Gia"];
            $Sl=$_GET["Sluong"];
            $tenSp=$_GET["TenSP"];


              #tạo đơn đăt hàng
            $IDND=$_SESSION["current_user"]->ID;
              $MaDathang=uniqid();
            $SqlDonDhang="insert into dathang(ID, UserId) values('$MaDathang','$IDND')";
            $NhanDonDH=write($SqlDonDhang);
            #Tạo chi tiết đơn hàng
            $maChitiet=uniqid();
            $SqlChitiet="insert into chitietdathang(ID, DatHangId, MaSP, Gia) values('$maChitiet','$MaDathang','$maSp','$Gia')";
            $NhonChitiet=write($SqlChitiet);



            $this->GioHang();
        }
        echo("Ban Chua dang nhập");
    }

}
?>