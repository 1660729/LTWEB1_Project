
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>TẠO TÀI KHOẢN MỚI</h1>
               
                <hr>
                <form action="?Page=ThemTaiKhoan" method="POST">
                  <div class="form-group">
                    <label for="NguoiDung">Tên đăng nhập</label>
                    <input id="NguoiDung" type="text" name="NguoiDung" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="matKhau">Mật khẩu</label>
                    <input id="matKhau" type="password" name="matKhau" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="Dientoai">Điện thoại</label>
                    <input id="Dientoai" type="text" name="Dientoai" class="form-control">
                  </div>

                 
                  <div class="form-group">
                    <label for="Diachi">Địa chỉ</label>
                    <input id="Diachi" type="text" name="Diachi" class="form-control">
                  </div>


                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input id="Email" type="text" name="Email" class="form-control">
                  </div>

                  <div class="form-group">
                   <div class="g-recaptcha" data-sitekey="6Le5AH8UAAAAAGj_HpfA3sZmghwmfJBOo3nrRpn-"></div>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    
    