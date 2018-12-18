 <div id="content">
        <div class="container">
          <div class="row">
              <?php 
                while($row= $result->fetch_assoc())
                {

               
              
              ?>
               
                    <div class="gallery"  style="width: 190px;height: 313px;">
                      <a target="_blank" href="img_5terre.jpg">
                        <img src="<?php echo $row["HinhAnh"]?>" alt="5Terre" width="176" height="280">
                      </a>
                      <div class="desc"><?php echo $row["MoTa"]?></div>
                    </div>

                   <?php  }?>
          </div>
        </div>
 </div>