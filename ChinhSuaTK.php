<div id="content">
        <div class="container">
          <div class="row">
                <div class="col-lg-12">
                <!-- breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">My account</li>
                    </ol>
                </nav>
                </div>
             <div class="col-lg-3">
              <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu">
                <div class="card-header">
                  <h3 class="h4 card-title">Customer section</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> My orders</a>
                    <a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a>
                    <a href="./admin" class="nav-link"><i class="fa fa-user"></i>Trang Quan Tri</a>
                    <a href="?Page=Logout" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
                  </ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** CUSTOMER MENU END ***-->
            </div>
            <div class="col-lg-9">
              <div class="box">
                <h1>Tài khoản của tôi</h1>
                <p class="lead">Thay đổi thông tin tài khoản và mật khẩu</p>
              
                <h3>Thay đổi mật khẩu</h3>
                <form  action="#" method="POST" id="Sulymk" >
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_old">Mật khẩu cũ</label>
                        <input id="password_old" type="password" name="password_old" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_1">Mật khẩu mới</label>
                        <input id="password_1" type="password" name="password_1" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_2">Nhâp lai mật khẩu</label>
                        <input id="password_2" type="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" onclick="KiemtraMatKhau()"><i class="fa fa-save"></i> Lưu lại mật khẩu</button>
                  </div>
                </form>
                <h3 class="mt-5">Thông tin tài khoản của bạn</h3>
                <form  action="#" method="POST" id="Sulytk" enctype="multipart/form-data" >
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="DiaChi">Địa chỉ</label>
                        <input id="DiaChi" type="text" name="DC" class="form-control">
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                 
                  <!-- /.row-->
                  <div class="row">
                    
                     <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone">Điện thoại</label>
                        <input id="phone" name="DT" type="text" class="form-control">
                      </div>
                    </div>
                   
                    <div class="col-md-6">
                      <div class="form-group" >
                          <img src="#" id="hinhanh" alt="Khong co hinh" width="185px"  style="width:185px;height:185px;"/>
                         <input type="file"  id="txtHinhAnh" onchange="UploadDulieu()" name="dss"   >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="Em" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary" onclick="UpadteTaiKhan()"><i class="fa fa-save"></i> Save changes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>

      function UploadDulieu()
		 {
            var preview = document.getElementById("hinhanh");// tên thẻ 
          var file    = document.querySelector('input[type=file]').files[0]; //sames as here
          var reader  = new FileReader();
          reader.onloadend = function ()
           {
            preview.setAttribute ("src",reader.result);
            
          }
          
              
          if (file)
           {
            reader.readAsDataURL(file); //reads the data as a URL
          } else
           {
            preview.src = "";
          }
         

		}


        function KiemtraMatKhau()
        {
            var mkmoi1=document.getElementById("password_1").value;
            var mkmoi2=document.getElementById("password_2").value;
            var s=mkmoi1.localeCompare(mkmoi2)
            if(s==0)
            {
              var f= document.getElementById("Sulymk");
              f.setAttribute("action","?Page=UpdateMatKhau");
            }
            else
            {
              alert("Mat khau sai roi");
            }


        }



        function UpadteTaiKhan()
        {
           
              var f= document.getElementById("Sulytk");
              f.setAttribute("action","?Page=UpdateTaiKhoan");
          

        }
        
      </script>