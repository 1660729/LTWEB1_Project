 <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box">
                <form method="post" action="checkout1.html">
                  <h1>Giỏ hàng</h1>
                  <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody >
                      <?php while($row=$resqul->fetch_assoc()){?>
                        <tr>
                          <td><a href="#"><img src="<?php echo($row["HinhAnh"])?>" alt="White Blouse Armani"></a></td>
                          <td><a href="#"><?php echo($row["TenSP"])?></a></td>
                          <td>
                            <input type="number" class="<?php echo $row["ID"]?>" value="1" onchange="TongTien(this)" class="form-control">
                          </td>
                          <td class="<?php echo $row["ID"]?>"><?php echo($row["Gia"])?></td>
                          <td>$0.00</td>
                          <td class="<?php echo $row["ID"]?>"><?php echo($row["Gia"])?></td>
                          <td><a href="?Page=XoaSPGioHang&ID=<?php echo $row["ID"]?>" ><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <?php }?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">0</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left"><a href="?page=index" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right">
                      <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Cập nhật giỏ hàng</button>
                      <button type="submit" class="btn btn-primary">Thanh toán <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box-->
           
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
              <div id="order-summary" class="box">
                <div class="box-header">
                  <h3 class="mb-0">Order summary</h3>
                </div>
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
                        <td>Total</td>
                        <th>$456.00</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
             
            </div>
            <!-- /.col-md-3-->
          </div>
        </div>
      </div>
<script>

  function TongTien(a)
  {


     var x = String(a.getAttribute("class"));
    //   var Soluong=document.getElementsByClassName(x)[0].value;
    //   var GiaHienyai=  document.getElementsByClassName(x)[1].innerHTML;
    // var tongtien= document.getElementsByClassName(x)[2];
    //       tongtien.innerHTML=Soluong*GiaHienyai;
    //     var tongt= tongtien.innerHTML;
       

   // Gọi ajax
     //var ChuoiG='Ma1='+Ma+'&Ten1='+Ten+'&Mk1='+Mk;
    var xhr=new XMLHttpRequest();

    xhr.open("POST","index.php?Page=TongTiens",true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader("MaCt","12");
    xhr.onreadystatechange=function()
    {
        if(xhr.readyState==4&&xhr.status==200)
        {
            alert("thành công");
        }
    }
    xhr.send(null);
}

function XoaSp()
{

    alert(TenSP);
}




</script>