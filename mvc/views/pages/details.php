<?php 
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 ?>

<ul class="nav nav-pills navDetail">
  <li class="nav-item iconHome">
    <a class="nav-link" href="<?php echo link ?>HomeController"><img src="<?php echo file ?>/images/home.png" alt=""></a>
  </li>
<?php
  while($row = mysqli_fetch_array($data['DanhMucCha'])) { ?>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['TenMenuCha'] ?></a>
    <div class="dropdown-menu">

      <?php  while($row = mysqli_fetch_array($data['listMenuCha'])) { ?>
      <a class="dropdown-item" href="<?php echo link ?>/DanhMucChaController?menucha=<?php echo $row['id'] ?>"><?php echo $row['TenMenuCha'] ?></a>
      <?php } ?>

    </div>
  </li>
<?php } ?>
</ul>

<p class="thuonghieu">LOCK&LOCK</p>
<div class="fb-like" data-href="<?php echo $actual_link ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>

<?php
  while($row_detail = mysqli_fetch_array($data['SPDetail'])) { 
    $a = $row_detail['id_Con_FK'];
    $b = $row_detail['MaSP'];
  ?>

<div class="pageCommunity row">
  <div class="TenMaSP col-8 col-lg-8 col-md-8">
    <h3><?php echo $row_detail['TenSP'] ?></h3>
    <p><?php echo $row_detail['MaSP'] ?></p>
  </div>
  <ul class="reviewSP col-4 col-lg-4 col-md-4">
    <li class="review">
      <strong class="tit">Phản hồi trực tiếp</strong>
      <p class="average"><img src="http://www.locknlock.vn/data/base/imgs/icon/star_00n.png" alt="별점 0"></p>
    </li>
    <li class="choice">
        <strong class="tit">Nổi bật</strong>
        <p class="average select">
          <img src="<?php echo file ?>/images/heart.png" alt="">
          1
        </p>
    </li>
    <li class="back">
      <a href="<?php echo link ?>HomeController" title=""><img src="<?php echo file ?>/images/logout.png" alt=""></a>
    </li>
  </ul>
</div>

<div class="detailBox row">

  <div class="another_image col-2 col-lg-2 col-md-2">

  <?php 
    while ($row_images = mysqli_fetch_array($data['Image'])) { ?>

    <ul class="thumb-img">
      <li onclick="changeImage(this)">
          <img src="<?php echo $row_images['AnhSP'] ?>" alt=""> 
      </li>
    </ul>
  <?php } ?>

  </div>

  <div class="image_view col-5 col-lg-5 col-md-5">
   <img src="<?php echo $row_detail['AnhSP'] ?>" alt="" class="pro-img">
  </div>
  <div class="DetailSP col-5 col-lg-5 col-md-5">
    <form action="./GioHangController/BuySP" method="POST">
      <ul class="thongbao">
        <li><p class="soldOut"><span><?php echo $row_detail['Active'] ?></span></p></li>
        <li><p class="online"><span>Chuyên dùng trực tuyến</span></p></li>
      </ul>
      <table class="price_SP">
          <tr>
            <td class="td1">Giá bán</td>
            <td class="td2"><?php echo number_format($row_detail['GIA_BD'])." " ?>VNĐ</td>
          </tr>
      </table>
      <img src="http://www.locknlock.vn/data/base/button/btn_zzim.png" alt="Nổi bật">
      <div class="add_SP">
        <input type="hidden" name="AnhSP" value="<?php echo $row_detail['AnhSP'] ?>">
        <input type="hidden" name="Price" value="<?php echo $row_detail['GIA_BD'] ?>">
        <input type="hidden" name="TenSP" value="<?php echo $row_detail['TenSP'] ?>">
        <input type="hidden" name="spId" value="<?php echo $row_detail['MaSP'] ?>">

        <input type="number" class="buyfield" name="quantity" value="1" min="1" />
        <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
      </div>
    </form>
  </div>
</div>
<?php } ?>

<!-- <div class="fb-comments" data-href="<?php echo $actual_link ?>" data-numposts="20" data-width=""></div> -->

<div id="danhsach"></div>
  <div id="xemthem">
    <center><button>xem thêm sản phẩm liên quan</button></center>
  </div>

<script>
  var sotrang = 0
  $(document).ready(function(){
    $("#xemthem").click(function(){
      sotrang = sotrang + 1;
      $.get("text", {trang:sotrang,spId:'<?php echo $b ?>',danhmuc:<?php echo $a ?>} , function(data){
        $("#danhsach").append(data);
      })
    })
  })

  const thumbs=document.querySelector(".thumb-img").children;

     function changeImage(event){
        document.querySelector(".pro-img").src=event.children[0].src
        
        for(let i=0; i<thumbs.length;i++){
          thumbs[i].classList.remove("active");
        }
        event.classList.add("active");
     }
</script>



