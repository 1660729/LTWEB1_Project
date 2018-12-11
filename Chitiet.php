  <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">

            <div class="col-lg-9">

              <div id="productMain" class="row">
                  <?php 
                       while ($row = $result->fetch_assoc()) {
                  ?>

                <div class="col-md-6">
                  <div data-slider-id="1" >
                    <div class="item"> <img src="<?php echo($row["HinhAnh"])?>" alt="" class="img-fluid"></div>
                  </div>
                 
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo($row["TenSP"])?></h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p>
                    <p class="price"><?php echo($row["Gia"])?></p>
                    <p>Số lượt xem: <?php echo($row["LuotXem"])?> </p>
                    <p>Số lương bán: <?php echo($row["SoLuong"])?> <p>
                    <p>Mô tả: <?php echo($row["MoTa"])?> <p>
                     <p>Xuất xứ:<?php echo($row["XuatXu"])?> <p>
                    <p>Loại: <?php echo($row["LoaiSP"])?></p>
                    <p>Nhà sản xuất: </p>



                    <p class="text-center buttons"><a href="?Page=GioHang&ID=<?php echo($row["ID"])?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a><a href="basket.html" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                  </div>
                  
                </div>
              </div>
              <?php }?>
 <!--Hiển thị sản phẩm cùng loai-->            
              <div class="row same-height-row">
                <div class="col-lg-3 col-md-6">
                  <div class="box same-height">
                    <h3>Sản Phẩm Cùng Loại</h3>
                  </div>
                </div>
                
                <?php while($CL=$result1->fetch_assoc()) {?>
                <div class="col-lg-3 col-md-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="?Page=ChitietSanPham&ID=<?php echo($CL["ID"])?>"><img src="<?php if($CL["Hinhanh"])echo($CL["Hinhanh"]) ?>" alt="Không hình" class="img-fluid"></a></div>
                        
                      </div>
                    </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><?php echo($CL["TenSP"])?></h3>
                      <p class="price"><?php echo($CL["Gia"])?>k</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <?php }?>
              </div>
              <div class="row same-height-row">
                <div class="col-lg-3 col-md-6">
                  <div class="box same-height">
                    <h3>Sản Phẩm Cùng Nhà Sản Xuất</h3>
                  </div>
                </div>
                  <?php while($CNSX=$CSX->fetch_assoc()){?>

                <div class="col-lg-3 col-md-6">
                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="detail.html"><img src=" <?php if($CNSX["Hinhanh"])echo($CNSX["Hinhanh"]) ?>" alt="" class="img-fluid"></a></div>
                      
                      </div>
                    </div><a href="detail.html" class="invisible"><img src="<?php if($CNSX["Hinhanh"])echo($CNSX["Hinhanh"]) ?>" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><?php echo($CNSX["TenSP"])?></h3>
                      <p class="price"><?php echo($CNSX["Gia"])?>k</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
               <?php }?>
              </div>
            </div>
            <!-- /.col-md-9-->
          </div>
        </div>
      </div>
    </div>