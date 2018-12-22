  <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">   
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Nhập thông tin nơi nhận</li>
                </ol>
              </nav>
            </div>
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="POST" action="?Page=ThemThongTinNguoiMua">
                  <h1>Nhập thông tin nơi nhận</h1>
                 
                  <div class="content py-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstname">Tên người nhận</label>
                          <input id="firstname" type="text" name="firstname" class="form-control">
                        </div>
                      </div>
                     
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="SoDT">Số điện thoại</label>
                          <input id="SoDT" type="text" name="SoDT" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="street">Địa chỉ giao hàng</label>
                          <input id="street" type="text" name="Diachi" class="form-control">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                  
                    <!-- /.row-->
                  </div>
                  <div class="box-footer d-flex justify-content-between"><a href="?Page=GioHang" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                    <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i></button>
                  </div>
                </form>
              </div>
              <!-- /.box-->
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
              <div id="order-summary" class="card">
                <div class="card-header">
                  <h3 class="mt-4 mb-4">Order summary</h3>
                </div>
                <div class="card-body">
                  <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Order subtotal</td>
                          <th>$446.00</th>
                        </tr>
                        <tr>
                          <td>Shipping and handling</td>
                          <th>$10.00</th>
                        </tr>
                        <tr>
                          <td>Tax</td>
                          <th>$0.00</th>
                        </tr>
                        <tr class="total">
                          <td>Tổng số tiền</td>
                          <th><?php echo($row->TongGia)?></th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-lg-3-->
          </div>
        </div>
      </div>