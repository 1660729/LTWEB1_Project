<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="./img/main-slider1.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="./img/main-slider2.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="./img/main-slider3.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="./img/main-slider4.jpg" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Sản phẩm bán chạy nhất</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
            <?php
            
             while ($row = $result->fetch_assoc()) {
            ?>
               <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo($row["HinhAnh"]);?>" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="./img/1.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="Chitiet.php" class="invisible"><img src="./img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="?Page=ChitietSanPham&ID=<?php echo($row["ID"]);?>">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del><?php echo($row["Gia"]);?>K
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>

             <?php }?> 
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>

        

          
            
        <!--

          
        *** GET INSPIRED ***
        _________________________________________________________
        -->
      
      
        
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>