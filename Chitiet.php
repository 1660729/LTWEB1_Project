
<?php
  
    while ($row = $result->fetch_assoc()) {

?>

<div class="col-lg-9">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel owl-loaded owl-drag">
                    
                    
                    
                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-795px, 0px, 0px); transition: all 0.25s ease 0s; width: 2783px;"><div class="owl-item cloned" style="width: 397.5px;"><div class="item"> <img src="img/detailbig2.jpg" alt="" class="img-fluid"></div></div><div class="owl-item cloned" style="width: 397.5px;"><div class="item"> <img src="img/detailbig3.jpg" alt="" class="img-fluid"></div></div><div class="owl-item active" style="width: 397.5px;"><div class="item"> <img src="img/detailbig1.jpg" alt="" class="img-fluid"></div></div><div class="owl-item" style="width: 397.5px;"><div class="item"> <img src="img/detailbig2.jpg" alt="" class="img-fluid"></div></div><div class="owl-item" style="width: 397.5px;"><div class="item"> <img src="img/detailbig3.jpg" alt="" class="img-fluid"></div></div><div class="owl-item cloned" style="width: 397.5px;"><div class="item"> <img src="img/detailbig1.jpg" alt="" class="img-fluid"></div></div><div class="owl-item cloned" style="width: 397.5px;"><div class="item"> <img src="img/detailbig2.jpg" alt="" class="img-fluid"></div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo($row["TenSP"])?></h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p>
                    <p class="price" ><?php echo($row["Gia"]) ?></p>
                    <p class="text-center buttons"><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a><a href="basket.html" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item active"><img src="img/detailsquare.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4>Product details</h4>
                <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                <h4>Material &amp; care</h4>
                <ul>
                  <li>Polyester</li>
                  <li>Machine wash</li>
                </ul>
                <h4>Size &amp; Fit</h4>
                <ul>
                  <li>Regular fit</li>
                  <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                </ul>
                <blockquote>
                  <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
                <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
             
              
            </div>
        <?php }?>