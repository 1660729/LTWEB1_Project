   <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Nhà sản xuất<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Quần áo</h5>
                        <ul class="list-unstyled mb-3">   
                                    <?php 
                               require_once './lib/db.php';
                               $sql="select * from nhasanxuat";
                              $reult=load($sql);
                              while($row=$reult->fetch_assoc())
                              {
                                if($row["ID"]==1)
                                {

                                
                            ?>

                          <li class="nav-item"><a href="?Page=HienThiTheoNSX&ID=<?php echo $row["ID"]?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          <?php } else if($row["ID"]==2){?>
                          <li class="nav-item"><a href="?Page=HienThiTheoNSX&ID=<?php echo $row["ID"]?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          <?php } else if($row["ID"]==3){?>
                          <li class="nav-item"><a href="?Page=HienThiTheoNSX&ID=<?php echo $row["ID"]?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                        <?php } else if($row["ID"]==4){?>
                          <li class="nav-item"><a href="?Page=HienThiTheoNSX&ID=<?php echo $row["ID"]?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                       
                       
                        <?php }}?>
                        </ul>
                      </div>
                                        
                    </div>
                  </li>
                </ul>
              </li>
  
  
  <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Ladies<b class="caret"></b></a>
 <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Quần áo</h5>
                        <ul class="list-unstyled mb-3"> 
                            <?php 
                               require_once './lib/db.php';
                               $sql="select * from danhmuc ";
                              $reult=load($sql);
                              while($row=$reult->fetch_assoc())
                              {
                                if($row["ID"]==1)
                                {

                                
                            ?>


                          <li class="nav-item"><a href="?Page=HienThiDSSP&ID=<?php echo $row["ID"] ?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          <?php } else if($row["ID"]==2){?>
                          <li class="nav-item"><a href="?Page=HienThiDSSP&ID=<?php echo $row["ID"] ?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          <?php } else if($row["ID"]==3){?>
                          <li class="nav-item"><a href="?Page=HienThiDSSP&ID=<?php echo $row["ID"] ?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          
                          <?php }}?>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Giày</h5>
                        <ul class="list-unstyled mb-3">
                         <?php 
                               require_once './lib/db.php';
                               $sql="select * from danhmuc ";
                              $reult=load($sql);
                              while($row=$reult->fetch_assoc())
                              {
                                if($row["ID"]==4)
                                {

                                
                            ?>


                          <li class="nav-item"><a href="?Page=HienThiDSSP&ID=<?php echo $row["ID"] ?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          <?php } else if($row["ID"]==5){?>
                          <li class="nav-item"><a href="?Page=HienThiDSSP&ID=<?php echo $row["ID"] ?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          <?php } else if($row["ID"]==6){?>
                          <li class="nav-item"><a href="?Page=HienThiDSSP&ID=<?php echo $row["ID"] ?>" class="nav-link"><?php echo $row["Ten"]?></a></li>
                          
                          <?php }}?>                   
                        </ul>
                      </div>                      
                    </div>
                  </li>
                </ul>
 </li>   