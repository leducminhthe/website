
      <div class="main row">
        <div class="main_left col-3 col-lg-3 col-md-3">
          <div id="mainnav">
            <ul>
              <?php 
              foreach ($data['MenuCha'] as $value) { ?>

              <li><a href="#"><?php echo $value['tenMenuCha'] ?></a>
                <ul class="sub-menu">
                  <h4><?php echo $value['tenMenuCha'] ?></h4>

                  <?php 
                    foreach ($value['listMenuCon'] as $menucon) { ?>

                      <li><a href="GetSPController?danhmuc=<?php echo $menucon['id'] ?>"><?php echo $menucon['menucon'] ?></a></li>

                  <?php } ?>

                </ul>
              </li>

            <?php } ?>

            </ul>
          </div>
        </div>

        <div class="main_right col-9 col-lg-9 col-md-9"> 
          <div class="galleryContainer">
              <div class="slideShowContainer">
                  <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                  <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                  <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
                  <div class="imageHolder">
                      <img src="<?php echo file ?>/images/900x350.jpg">
                      <p class="captionText">Ngày Hội Lock&Lock</p>
                  </div>
                  <div class="imageHolder">
                      <img src="<?php echo file ?>/images/binh-giu-nhiet-colorful-banner.jpg">
                      <p class="captionText">Sản Phẩm Mới</p>
                  </div>
                  <div class="imageHolder">
                      <img src="<?php echo file ?>/images/member.jpg">
                      <p class="captionText">ƯU ĐÃI THÀNH VIÊN</p>
                  </div>
                  <div class="imageHolder">
                      <img src="<?php echo file ?>/images/mayeptraicay.jpg">
                      <p class="captionText">Sản phẩm bán chạy</p>
                  </div>
                  <div class="imageHolder">
                      <img src="<?php echo file ?>/images/Untitled-1.jpg">
                      <p class="captionText">Giảm Giá</p>
                  </div>
              </div>
              <div id="dotsContainer"></div>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="wrap row">
          <div class="col-12 col-md-3 col-lg-3"><h4>SẢN PHẨM BÁN CHẠY</h4></div>
          <div class="col-12 col-md-7 col-lg-7"><p class="btn_more"><a href="" >Xem thêm</a></p></div>
        </div>

        <div class="slide row">
          <div class="col-12 col-lg-12 col-md-12">
            <div class="owl-carousel owl-theme">
            
            <?php
              while($row = mysqli_fetch_array($data['SP_Best'])) { ?>

              <div class="item">
                <a href="DetailsController?spId=<?php echo $row['MaSP'] ?>">
                  <figure>
                    <p class="mainProduct_listImg"><img src="<?php echo $row['AnhSP'] ?>" alt=""></p>
                    <figcaption>
                      <p class="ranking best_1">BEST <span><?php echo $row['SP_Best'] ?></span></p>
                      <p class="mainProduct_listTit"><?php echo $row['TenSP'] ?></p>
                      <p class="mainProduct_listPrice"> 
                        <span><?php echo number_format($row['GIA_BD']) ?>₫</span>
                      </p>
                    </figcaption>
                  </figure>
                </a>
              </div>

            <?php } ?>
        
            </div>
          </div>
        </div>
      </div>

      <div class="category">
        <div class="sp" style="text-align: center;">
          <h4>DANH MỤC SẢN PHẨM</h4>
          <span>Bạn có thể xem được sản phẩm đa dạng của LOCK&LOCK</span>
        </div>

        <div class="sp">
          <ul class="list_sp">
              <li class="box_sp">
                <p>
                  BÌNH NƯỚC
                  <span style="float: right;"><a href="" >Xem thêm</a></span>
                </p>               
                <div class="list_box row">
                  <div class="list_box_left col-4 col-md-4 col-lg-4">
                    <a href="">
                      <img src="<?php echo file ?>/images/CA_water_bottle.png" class="img_Box">
                    </a>
                  </div>

                  <div class="list_box_right col-8 col-md-8 col-lg-8">
                    <ul class="row">
                    <?php
                      while($row = mysqli_fetch_array($data['BinhNuoc'])) { ?>

                      <li class="col-4 col-md-4 col-lg-4">
                        <a href="DetailsController?spId=<?=$row['MaSP'] ?>">
                          <figure>
                            <p class="mainProduct_listImg"><img src="<?=$row['AnhSP'] ?>" alt=""></p>
                            <figcaption>
                              <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
                              <p class="mainProduct_listPrice">
                                <span><?=number_format($row['GIA_BD'])?></span>₫</p>
                            </figcaption>
                          </figure>
                        </a>
                      </li>

                    <?php } ?>
                     
                    </ul>
                  </div>
                </div>
              </li>
          </ul>
        </div>

        <div class="sp">
          <ul class="list_sp">
              <li class="box_sp">
                <p>
                  DỤNG CỤ NẤU ĂN
                  <span style="float: right;"><a href="" >Xem thêm</a></span>
                </p>
                <div class="list_box row">
                  <div class="list_box_left col-4 col-md-4 col-lg-4">
                    <a href="">
                      <img src="<?php echo file ?>/images/CA_cookware_2.png" class="img_Box">
                    </a>
                  </div>
                  <div class="list_box_right col-8 col-md-8 col-lg-8">
                    <ul class="row">

                      <?php
                      while($row = mysqli_fetch_array($data['DungCuNauAn'])) { ?>

                      <li class="col-4 col-md-4 col-lg-4">
                        <a href="DetailsController?spId=<?=$row['MaSP'] ?>">
                          <figure>
                            <p class="mainProduct_listImg"><img src="<?=$row['AnhSP'] ?>" alt=""></p>
                            <figcaption>
                              <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
                              <p class="mainProduct_listPrice">
                                <span><?=number_format($row['GIA_BD'])?></span>₫</p>
                            </figcaption>
                          </figure>
                        </a>
                      </li>

                    <?php } ?>

                    </ul>
                  </div>
                </div>
              </li>
          </ul>
        </div>

        <div class="sp">
          <ul class="list_sp">
              <li class="box_sp">
                <p>
                  HÀNG GIA DỤNG
                  <span style="float: right;"><a href="" >Xem thêm</a></span>
                </p>
                <div class="list_box row">
                  <div class="list_box_left col-4 col-md-4 col-lg-4">
                    <a href="">
                      <img src="<?php echo file ?>/images/CA_appliances_1.png" class="img_Box">
                    </a>
                  </div>
                  <div class="list_box_right col-8 col-md-8 col-lg-8">
                    <ul class="row">

                      <?php
                      while($row = mysqli_fetch_array($data['HangGiaDung'])) { ?>

                      <li class="col-4 col-md-4 col-lg-4">
                        <a href="DetailsController?spId=<?=$row['MaSP'] ?>">
                          <figure>
                            <p class="mainProduct_listImg"><img src="<?=$row['AnhSP'] ?>" alt=""></p>
                            <figcaption>
                              <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
                              <p class="mainProduct_listPrice">
                                <span><?=number_format($row['GIA_BD'])?></span>₫</p>
                            </figcaption>
                          </figure>
                        </a>
                      </li>

                      <?php } ?>

                    </ul>
                  </div>
                </div>
              </li>
          </ul>
        </div>

        <div class="sp">
          <ul class="list_sp">
              <li class="box_sp">
                <p>
                  HỘP BẢO QUẢN
                  <span style="float: right;"><a href="" >Xem thêm</a></span>
                </p>
                <div class="list_box row">
                  <div class="list_box_left col-4 col-md-4 col-lg-4">
                    <a href="">
                      <img src="<?php echo file ?>/images/CA_food_storage.png" class="img_Box">
                    </a>
                  </div>
                  <div class="list_box_right col-8 col-md-8 col-lg-8">
                    <ul class="row">

                      <?php
                      while($row = mysqli_fetch_array($data['HopBaoQuan'])) { ?>

                      <li class="col-4 col-md-4 col-lg-4">
                        <a href="DetailsController?spId=<?=$row['MaSP'] ?>">
                          <figure>
                            <p class="mainProduct_listImg"><img src="<?=$row['AnhSP'] ?>" alt=""></p>
                            <figcaption>
                              <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
                              <p class="mainProduct_listPrice">
                                <span><?=number_format($row['GIA_BD'])?></span>₫</p>
                            </figcaption>
                          </figure>
                        </a>
                      </li>

                      <?php } ?>

                    </ul>
                  </div>
                </div>
              </li>
          </ul>
        </div>

        <div class="sp">
          <ul class="list_sp">
              <li class="box_sp">
                <p>
                  BÌNH GIỮ NHIỆT
                  <span style="float: right;"><a href="" >Xem thêm</a></span>
                </p>
                <div class="list_box row">
                  <div class="list_box_left col-4 col-md-4 col-lg-4">
                    <a href="">
                      <img src="<?php echo file ?>/images/CA_vacuum_flask.png" class="img_Box">
                    </a>
                  </div>
                  <div class="list_box_right col-8 col-md-8 col-lg-8">
                    <ul class="row">

                      <?php
                      while($row = mysqli_fetch_array($data['BinhGiuNhiet'])) { ?>

                      <li class="col-4 col-md-4 col-lg-4">
                        <a href="DetailsController?spId=<?=$row['MaSP'] ?>">
                          <figure>
                            <p class="mainProduct_listImg"><img src="<?=$row['AnhSP'] ?>" alt=""></p>
                            <figcaption>
                              <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
                              <p class="mainProduct_listPrice">
                                <span><?=number_format($row['GIA_BD'])?></span>₫</p>
                            </figcaption>
                          </figure>
                        </a>
                      </li>

                      <?php } ?>

                    </ul>
                  </div>
                </div>
              </li>
          </ul>
        </div>

        <div class="sp">
          <ul class="list_sp">
              <li class="box_sp">
                <p>
                  HỘP CƠM
                  <span style="float: right;"><a href="" >Xem thêm</a></span>
                </p>
                <div class="list_box row">
                  <div class="list_box_left col-4 col-md-4 col-lg-4">
                    <a href="">
                      <img src="<?php echo file ?>/images/CA_lunch_box.png" class="img_Box">
                    </a>
                  </div>
                  <div class="list_box_right col-8 col-md-8 col-lg-8">
                    <ul class="row">

                      <?php
                      while($row = mysqli_fetch_array($data['HopCom'])) { ?>

                      <li class="col-4 col-md-4 col-lg-4">
                        <a href="DetailsController?spId=<?=$row['MaSP'] ?>">
                          <figure>
                            <p class="mainProduct_listImg"><img src="<?=$row['AnhSP'] ?>" alt=""></p>
                            <figcaption>
                              <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
                              <p class="mainProduct_listPrice">
                                <span><?=number_format($row['GIA_BD'])?></span>₫</p>
                            </figcaption>
                          </figure>
                        </a>
                      </li>

                      <?php } ?>

                    </ul>
                  </div>
                </div>
              </li>
          </ul>
        </div>
      </div>
      
      <div class="mainService row">
        <div class="mainService_left col-4 col-md-4 col-lg-4">
          <article class="customer">
            <h4 style="margin-bottom: 0px;">Chăm sóc khách hàng</h4>
            <p class="sdt">028-5413 5756 (488)</p>
            <p>Email : leducminhthe96@gmail.com</p>
            <ul style="margin: 0px;">
              <li>Các ngày trong tuần</li>
              <li>(Thứ Hai ~ Thứ Sáu) 09:00 ~ 18:00</li>
              <li>Thứ Bảy,CN và ngày lễ</li>
            </ul>
          </article>
          <p><img src="http://www.locknlock.vn/data/base/imgs/main/mainService_lSide_banner02.jpg" alt=""></p>
        </div>

        <div class="mainService_center col-4 col-md-4 col-lg-4">
          <img src="http://www.locknlock.vn/html/images/main/mainService_rSide_middle.jpg">
          <article style="margin: 20px;">
            <h4><img src="http://www.locknlock.vn/data/base/imgs/main/mainService_rSide_bottomBottom_tit.png"></h4>
            <ul class="mainService_center_list">
              <li><a href=""  title="Facebook"><img src="<?php echo file ?>/images/facebook (1).png"></a></li>
              <li><a href=""  title="YouTube"><img src="<?php echo file ?>/images/youtube.png"></li>
              <li><a href=""  title="Instagram"><img src="<?php echo file ?>/images/instagram.png"></a></li>
            </ul>
          </article>
        </div>

        <div class="mainService_right col-4 col-md-4 col-lg-4">
          <a href="">
            <img src="http://www.locknlock.vn/data/base/banner/untitled_1.png" width="100%" height="120">
          </a>
          <a href="">
            <img src="http://www.locknlock.vn/data/base/banner/20170101_1.png" alt="#" width="100%" height="120" style="margin: 5px 0px;">
          </a>
          <div class="note">
            <div class="notice">
              <p>
                Notice
                <span style="float: right;"><a href="" >Xem thêm</a></span>
              </p>
            </div>
            <ul class="notice_list">
              <li>
                <p><a href="">CBHQ - BÌNH ĐỰNG NƯỚC LOCKLOCK BẰNG NHỰA PET HAP654</a></p>
              </li>
            </ul>             
          </div>
        </div>
      </div>