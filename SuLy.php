<?php

class Suly
{
    function HienThiSanPham()
    {
            
      
        require_once("./lib/db.php");
             #10 sản phẩm mới nhất
         $sql1 ="select * from sanpham order by sanpham.Ngaytao desc limit 0,10;";
         $SapMoi=load($sql1);


            #10 sản phẩm xem nhiều nhất
            $sql = "select * from  sanpham order by LuotXem desc limit 10";
            $result=load($sql);

                #10 sản phẩm bán chạy nhất
            $sql2 = "select * from sanpham where TinhTrang = 1 order by SoLuong desc limit 10";
            $BanChay=load($sql2);
           require_once("SanPham.php");
           //header("location:admin/index.php");
         
    } 





    function DangNhap()
    {
           
        require_once './lib/db.php';

    

        if (isset($_POST["btnLogin"])) 
        {
            $username = $_POST["txtUserName"];
            $password = $_POST["txtPassword"];
            $enc_password =md5($password);//md5($password);

            $sql = "select * from taikhoan where NguoiDung = '$username' and MatKhau = '$enc_password'";
            $rs = load($sql);
                if ($rs->num_rows > 0) 
                {
                    
                    $_SESSION["current_user"] = $rs->fetch_object();
                    $_SESSION["dang_nhap_chua"] = 1;
                    

                   $this->HienThiSanPham();
                } 
                else
                {
                    echo("Tai khoan khong dung");
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
                        $Sql="insert taikhoan(ID,NguoiDung,MatKhau,DienThoai,DiaChi,Email)values('$ma','$TenDangnhap','$MKMD5','$DienThoai','$DiaChi','$Email')";
                      

                        $result=write($Sql);


                        
                      #tạo đơn đăt hàng
                   
                    $MaDathang=uniqid();
                    $SqlDonDhang="insert into dathang(ID,UserId)values('$MaDathang','$ma')";
                    $NhanDonDH=write($SqlDonDhang);

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

        //tang luot xem cua san pham
         $SqlLuotxem="select LuotXem from sanpham where ID='$IDs'";
         $rs=load($SqlLuotxem);

        // $luotXemCu=($rs->fetch_assoc())->LuotXem;
        //  $LuotXemMoi=$luotXemCu+1;
        //  $sqp="update sanpham set LuotXem=$LuotXemMoi where ID='$IDs'";
         //$s=write($sqp);



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
            $SqlMaND="select ID from dathang where dathang.UserId='$MaND'";
            $resultMaDH=load($SqlMaND);
            $M1=$resultMaDH->fetch_object();
            $ma2=$M1->ID;

            #Hiển thị danh sách sản phẩm trong giỏ hàng
            $SqlLayTBgioHang="select ChiTietDathang.ID,SanPham.MaSP,SanPham.Hinhanh,SanPham.TenSP,SanPham.Gia as GIASP,ChiTietDathang.Gia,ChiTietDathang.SoLuong from ChiTietDathang join SanPham on ChiTietDathang.MaSP=SanPham.MaSP
                where ChiTietDathang.DatHangID='$ma2'";
            $resqul=load($SqlLayTBgioHang);

            #Lay ra tong so tien trong gio hang hien tai

            $sqlTongtien="select TongGia from dathang where ID='$ma2'";
            $TT=load($sqlTongtien);
            $kq3=$TT->fetch_object();
            $kq5=$kq3->TongGia;



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
           # $Sl=$_GET["Sluong"];
             $Sl ="1";
            $tenSp=$_GET["TenSP"];
            
              $IDND=$_SESSION["current_user"]->ID;

            $sql="select ID from dathang where UserId='$IDND';";
            $re=load($sql);
            $r1=$re->fetch_object();

            $MaDathang=$r1->ID;
            #Tạo chi tiết đơn hàng
            $maChitiet=uniqid();
            $SqlChitiet="insert chitietdathang(ID,DatHangId,MaSP,SoLuong,Gia)values('$maChitiet','$MaDathang','$maSp',$Sl,'$Gia')";
            $NhonChitiet=write($SqlChitiet);

            #cập nhật lai đơn đặt hàng
            $sqlDathang="select Sum(Gia) as Tong from chitietdathang where DatHangId='$MaDathang'";
            $resul=load($sqlDathang);
            $kq=$resul->fetch_object();
            $kq2=$kq->Tong;

            $sqlUpdatedathang="update dathang set TongGia =$kq2 where  ID='$MaDathang'";
            $kq4=write($sqlUpdatedathang);


            $this->GioHang();
        }
        else
        {
             echo("Ban Chua dang nhập");
        }
       
    }


    function XoaSPGioHang()
    {
         require_once './lib/db.php';

        $MaChiTiet=$_GET["ID"];

        $sql="delete from chitietdathang where ID='$MaChiTiet'";
        $s=write($sql);

         $IDND=$_SESSION["current_user"]->ID;

            $sql="select ID from dathang where UserId='$IDND';";
            $re=load($sql);
            $r1=$re->fetch_object();

            $MaDathang=$r1->ID;


         #cập nhật lai đơn đặt hàng
            $sqlDathang="select Sum(Gia) as Tong from chitietdathang where DatHangId='$MaDathang'";
            $resul=load($sqlDathang);
            $kq=$resul->fetch_object();
            $kq2=$kq->Tong;
            if($kq2==null)
            {
                $kq2=0;
            }

            $sqlUpdatedathang="update dathang set TongGia =$kq2 where  ID='$MaDathang'";
            $kq4=write($sqlUpdatedathang);



        $this->GioHang();

    }


    function ThongTinTK()
    {
        require_once("ChinhSuaTK.php");
    }



    function UpdateGioHang($MaID,$SolungSp,$TongTien)
    {
       require_once './lib/db.php';
       $Sql="update chitietdathang set SoLuong=$SolungSp, Gia=$TongTien where ID='$MaID'";
       $re=write($Sql);

       

            $sql="select DatHangID from  ChiTietDathang where ID='$MaID'";
            $re=load($sql);
            $r1=$re->fetch_object();

            $MaDathang=$r1->DatHangID;


         #cập nhật lai đơn đặt hàng
            $sqlDathang="select Sum(Gia) as Tong from chitietdathang where DatHangId='$MaDathang'";
            $resul=load($sqlDathang);
            $kq=$resul->fetch_object();
            $kq2=$kq->Tong;

            $sqlUpdatedathang="update dathang set TongGia =$kq2 where  ID='$MaDathang'";
            $kq4=write($sqlUpdatedathang);


                $this->GioHang();

       

    }



  function HienThiDSSP()
  {
        require_once './lib/db.php';
        $ma=$_GET["ID"];

        $sql="select * from sanpham where sanpham.LoaiSP='$ma'";
        $result=load($sql);

      require_once("HienThiSP.php");
  }

  function HienThiTheoNSX()
  {
         require_once './lib/db.php';
        $ma=$_GET["ID"];

        $sql="select * from sanpham where  sanpham.NhaSanXuatId='$ma'";
        $result=load($sql);


      require_once("HienThiNSX.php");
  }



  function ThongTinNguoiMua()
  {
        require_once './lib/db.php';
         $IDND=$_SESSION["current_user"]->ID;

         $sql="select TongGia  from dathang where UserId='$IDND'";

         $results=load($sql);
         $rows=$results->fetch_object();
         $tong=$rows->TongGia;




      require_once("PhieuMua.php");
  }


  function ThemThongTinNguoiMua()
  {
        require_once './lib/db.php';
         $IDND=$_SESSION["current_user"]->ID;


        $TenNNhan=$_POST["firstname"];
        $SoDt=$_POST["SoDT"];
        $DiaChi=$_POST["Diachi"];
        $Ma=uniqid();

        $sql="insert diachinhanhang(ID,NguoiDungId,TenNguoiNhan,SoDienThoai,DiaChiGiaoHang)values('$Ma','$IDND','$TenNNhan','$SoDt','$DiaChi')";
        $result=write($sql);

        if($result==true)
        {
                echo("<script>alert('ban da them thanh cong')</script>");
                $this->HienThiSanPham();
        }
        else
        {
            $this->ThongTinNguoiMua();
        }

       



    }

    function UpdateMatKhau()
        {
            require_once './lib/db.php';

            $MKMoi=$_POST["password_1"];

            $mkcu=$_POST["password_old"];

            $MKSQL=$_SESSION["current_user"]->MatKhau;
            
            $MkCuMD5=md5($mkcu);

            $MatKM=md5($MKMoi);

            $kq= strcmp($MkCuMD5,$MKSQL);

            if($kq==0)
            {
                $IDND=$_SESSION["current_user"]->ID;

                $sql="update TaiKhoan set MatKhau ='$MatKM' where  ID='$IDND'";
                $result=write($sql);
                $this->Logout();

            }
            else
            {
                $this->ThongTinTK();
            }

                


            


        }



        function UpdateTaiKhoan()
        {

              require_once './lib/db.php';

             $DiaChis=$_POST["DC"];
             $DienThoai=$_POST["DT"];
             $email=$_POST["Em"];
            
           

            $target_dir = "./img/";
            $target_file = $target_dir .uniqid(). basename($_FILES['dss']['name']);
            move_uploaded_file($_FILES["dss"]["tmp_name"],$target_file);
             $IDND=$_SESSION["current_user"]->ID;
            $sql="update TaiKhoan set DiaChi='$DiaChis',Email='$email',DienThoai='$DienThoai',HinhAnh='$target_file' where ID='$IDND'";
            $re=write($sql);

            if($re==true)
            {
                 echo("<script>alert('Bạn đã thay đổi thành công')</script>");
                     $this->Logout();

            }
            else
            {
                $this->ThongTinTK();
            }
        
        
        
        }

        function TimKiem()
        {
            require_once './lib/db.php';

            if(isset($_REQUEST["subSearch"]))
            {
                $inputSearch = $_REQUEST["txtSearch"];
                $tieuchitim=$_REQUEST["chon"];
                if($tieuchitim=='XuatXu')
                {
                        $sql="select * from sanpham where XuatXu like CONCAT('%', '$inputSearch' , '%')";
                         $result = load($sql);
                         require_once("HienThiSP.php");
                }
                else if($tieuchitim=='TenSP')
                {
                        
                        $sql="select * from sanpham where TenSP like CONCAT('%', '$inputSearch' , '%')";
                         $result = load($sql);
                         require_once("HienThiSP.php");
                }
                 else if($tieuchitim=='LoaiSP')
                {
                        
                        $sql="select * from sanpham where LoaiSP like CONCAT('%', '$inputSearch' , '%')";
                         $result = load($sql);
                         require_once("HienThiSP.php");
                }
                  else if($tieuchitim=='NhaSanXuatId')
                {
                        
                        $sql="select * from sanpham where NhaSanXuatId like CONCAT('%', '$inputSearch' , '%')";
                         $result = load($sql);
                         require_once("HienThiSP.php");
                }


               
               
            }
            else
            {
                
            }
          
        }



}
?>