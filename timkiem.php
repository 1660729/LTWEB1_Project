<?php
    require_once './lib/db.php';

    if(isset($_REQUEST["subSearch"]))
    {
        $inputSearch = $_REQUEST["txtSearch"];
        $search = $_REQUEST["subSearch"];
        $sql = "select * from sanpham where TenSP like '%$inputSearch%' 
                or LoaiSP like '%$inputSearch%' or XuatXu like '%$inputSearch%'
                or NhaSanXuatId like '%$inputSearch%'";
        $result = write($sql);
        while($row = mysqli_fetch_array($result))
        {
    }
?>
    <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="<?php echo($row["Hinhanh"]);?>" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="./img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="Chitiet.php" class="invisible"><img src="./img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="?Page=ChitietSanPham&ID=<?php echo($row["ID"]);?>">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del><?php echo($row["Gia"]);?>K
                    </p>
    </div>
<?php 
    }
?>