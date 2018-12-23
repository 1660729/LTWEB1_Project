 <div id="content">
        <div class="container">
          <div class="row">
              <?php 
                while($row= $result->fetch_assoc())
                {
              ?>
               
                    <div class="gallery" style=" width: 188px;height: 282px;">
                      <a target="_blank" href="?Page=ChitietSanPham&ID=<?php echo($row["ID"]);?>">
                        <img src="<?php echo $row["HinhAnh"]?>" alt="5Terre" width="188" height="280" style="height: 190px;">
                      </a>
                      <div class="desc">
                        <?php echo $row["TenSP"]?><br><br>
                        <?php echo $row["Gia"]?>
                      </div>
                      
                    </div>

                   <?php  }?>
          </div>
        </div>
 </div>