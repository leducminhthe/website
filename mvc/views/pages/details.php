
<ul class="nav nav-pills navDetail">
  <li class="nav-item iconHome">
    <a class="nav-link" href="#"><img src="<?php echo file ?>/images/home.png" alt=""></a>
  </li>
<?php
  while($row = mysqli_fetch_array($data['SP'])) { ?>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['TenMenuCon'] ?></a>
    <div class="dropdown-menu">

      <?php  while($row = mysqli_fetch_array($data['MenuCon'])) { ?>
      <a class="dropdown-item" href="#"><?php echo $row['TenMenuCon'] ?></a>
      <?php } ?>

    </div>
  </li>
  <?php } ?>
</ul>

<p class="thuonghieu">LOCK&LOCK</p>

<?php
  while($row_detail = mysqli_fetch_array($data['SPDetail'])) { ?>

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
      <img src="<?php echo file ?>/images/logout.png" alt=""></a>
    </li>
  </ul>
</div>

<div class="detailBox row">
  <div class="image_view col-7 col-lg-7 col-md-7">
   <?php echo $row_detail['AnhSP'] ?>
  </div>
  <div class="DetailSP">
    <form action="./GioHangController/BuySP" method="POST">
      <ul class="thongbao">
        <li><p class="soldOut"><span><?php echo $row_detail['Active'] ?></span></p></li>
        <li><p class="online"><span>Chuyên dùng trực tuyến</span></p></li>
      </ul>
      <table class="price_SP">
          <tr>
            <td class="td1">Giá bán</td>
            <td class="td2"><?php echo $row_detail['GIA_BD']." " ?>VNĐ</td>
          </tr>
      </table>
      <img src="http://www.locknlock.vn/data/base/button/btn_zzim.png" alt="Nổi bật">
      <div class="add_SP">
        <input type="spId" name="spId" value="<?php echo $row_detail['MaSP'] ?>">
        <input type="number" class="buyfield" name="quantity" value="1" min="1" />
        <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
      </div>
    </form>
  </div>
</div>
<?php } ?>