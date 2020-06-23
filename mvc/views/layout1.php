<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href='<?php echo file ?>/css/owl.theme.default.min.css'>
    <link rel="stylesheet" type="text/css" href='<?php echo file ?>/css/owl.carousel.min.css'>
    <link rel="stylesheet" type="text/css" href='<?php echo file ?>/css/website_css.css'>
    <link rel="stylesheet" type="text/css" href='<?php echo file ?>/css/slide.css'>

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">

      <div class="header">

        <?php 
          if (isset($_SESSION['email'])) {

            $email = $_SESSION['email'];
            $name = $_SESSION['name'];

            ?>
              <div class="btn-group account">
                <marquee  scrollamount="10"><h3>chào mừng <?php echo $name;?> đến với chúng tôi</h3></marquee>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $email;?>
                </button>
                <div class="dropdown-menu dropdown-menu-right option">
                  <button class="dropdown-item" type="button"><a href="/website/LogoutController">Logout</a></button>
                  <button class="dropdown-item" type="button"><a href="" >My Page</a></button>
                  <button class="dropdown-item" type="button">
                    <a href="/website/LienHeController" >Chăm sóc khánh hàng</a>
                  </button>
                </div>
              </div>

             
            <?php
          }else{
            ?>
              <div class="member row justify-content-end">
                <ul class="col-12 col-md-12 col-lg-12">
                  <li><a href="/website/LoginController" >Đăng nhập</a></li>
                  <li><a href="/website/RegisterController" >Gia nhập thảnh viên</a></li>
                  <li><a href="" >My Page</a></li>
                  <li><a href="/website/LienHeController" >Chăm sóc khánh hàng</a></li>                  
                </ul>
              </div>
            <?php
          } 
        ?>

        <div class="login row">
          <ul class="cart_left col-4 col-md-4 col-lg-4">
            <li>
              <a href="" ><img src="http://www.locknlock.vn/data/base/imgs/global/top_icon_event.png" alt="Sự kiện"></a>
            </li>
             <li>
              <a href="" ><img src="http://www.locknlock.vn/data/base/imgs/global/top_icon_coupon.png" alt="Membership/Coupon"></a>
            </li>
          </ul>

          <h1 class="logo col-4 col-md-4 col-lg-4">
            <a href="/website/HomeController" >
              <img src="http://www.locknlock.vn/data/base/banner/hd2_logo_4.gif">       
            </a>
         </h1>

          <ul class="cart_right col-4 col-md-4 col-lg-4">
            <li>
              <a href="" ><img src="http://www.locknlock.vn/data/base/imgs/global/top_icon_cart.png" alt="Giỏ hàng"></a>
            </li>
            <li>
              <a href="" ><img src="http://www.locknlock.vn/data/base/imgs/global/top_icon_wish.png" alt="Sản phẩm nổi bật"></a>
            </li>
            <li>
              <a href="" ><img src="http://www.locknlock.vn/data/base/imgs/global/top_icon_truck.png" alt="Kiểm tra đơn hàng"></a>
            </li>
          </ul>
        </div>

        <div class="menu">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown menu-area">
                    <a class="nav-link dropdown-toggle" href="#" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      DANH MỤC SẢN PHẨM
                    </a>
                    <div class="dropdown-menu mega-area"  aria-labelledby="mega-one">
                      <div class="row">
                        <div class="col-sm-6 col-lg-3">
                          <h5>Hộp bảo quản</h5>
                          <a href="" title="" class="dropdown-item">Hộp kín hơi</a>
                          <a href="" title="" class="dropdown-item">Hộp nhựa</a>
                          <a href="" title="" class="dropdown-item">Hủ gia vị</a>
                          <a href="" title="" class="dropdown-item">Nắp hộp kín hơi</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Dụng cụ nấu ăn</h5>
                          <a href="#" title="" class="dropdown-item">Chảo/Chảo sâu lòng</a>
                          <a href="#" title="" class="dropdown-item">Nồi chảo/Nồi áp xuất</a>
                          <a href="#" title="" class="dropdown-item">Dùng cho lò nướng</a>
                          <a href="#" title="" class="dropdown-item">Dụng cụ trộn thực phẩm</a>
                          <a href="#" title="" class="dropdown-item">Khay/rỗ</a>
                          <a href="#" title="" class="dropdown-item">Dụng cụ nhà bếp/Đồ gắp</a>
                          <a href="#" title="" class="dropdown-item">Dao/Kéo</a>
                          <a href="#" title="" class="dropdown-item">Thớt</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Phụ kiện nhà bếp</h5>
                          <a href="#" title="" class="dropdown-item">Bình nước</a>
                          <a href="#" title="" class="dropdown-item">Ly/Cốc</a>
                          <a href="#" title="" class="dropdown-item">Đế nồi</a>
                          <a href="#" title="" class="dropdown-item">Khay</a>
                          <a href="#" title="" class="dropdown-item">Tấm lót bàn ăn</a>
                          <a href="#" title="" class="dropdown-item">Ấm đun nước</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Đồ dùng dã ngoại</h5>
                          <a href="#" title="" class="dropdown-item">Bình nước</a>
                          <a href="#" title="" class="dropdown-item">Hộp cơm</a>
                          <a href="#" title="" class="dropdown-item">Đồ dùng du lịch</a>
                          <a href="#" title="" class="dropdown-item">Đồ dùng cắm trại</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Bảo quản đồ đạc</h5>
                          <a href="#" title="" class="dropdown-item">Thùng đựng đồ</a>
                          <a href="#" title="" class="dropdown-item">Giỏ</a>
                          <a href="#" title="" class="dropdown-item">Kệ/Tủ</a>
                          <a href="#" title="" class="dropdown-item">Kệ kéo</a>
                          <a href="#" title="" class="dropdown-item">Túi hút chân không</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Hàng gia dụng</h5>
                          <a href="#" title="" class="dropdown-item">Thiết bị nhà bếp</a>
                          <a href="#" title="" class="dropdown-item">Thiết bị gia dụng</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Đồ dùng trẻ em</h5>
                          <a href="#" title="" class="dropdown-item">Dụng cụ uống sữa</a>
                          <a href="#" title="" class="dropdown-item">Đồ dùng cho bé</a>
                          <a href="#" title="" class="dropdown-item">Dụng cụ vệ sinh cho bé</a>
                          <a href="#" title="" class="dropdown-item">Thảm cho bé</a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                          <h5>Đồ nội thất</h5>
                          <a href="#" title="" class="dropdown-item">Bàn đa năng</a>
                          <a href="#" title="" class="dropdown-item">Kệ treo/Kệ sách</a>
                          <a href="#" title="" class="dropdown-item">Bàn/Tủ/Ghế</a>
                          <a href="#" title="" class="dropdown-item">Giường</a>
                          <a href="#" title="" class="dropdown-item">Sofa/Đồ dùng cho khách</a>
                          <a href="#" title="" class="dropdown-item">Thảm</a>
                          <a href="#" title="" class="dropdown-item">Phụ kiện nội thất</a>
                          <a href="#" title="" class="dropdown-item">Đèn</a>
                          <a href="#" title="" class="dropdown-item">Tủ quần áo/Tủ lắp ráp</a>
                          <a href="#" title="" class="dropdown-item">Bàn trang điểm/Gương</a>
                        </div>
                      </div>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">SẢN PHẨM BÁN CHẠY</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">SẢN PHẨM MỚI</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">KHUYẾN MÃI HOT</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">
                  <img src="<?php echo file ?>/images/search.png" >
                </button>
              </form>
            </div>
          </nav>
        </div>
      </div>

    <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>

      <div class="footer">
        <div class="footer_top">
          <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Giới thiệu về công ty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Điều khoản</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chính sách xử lý thông tin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Từ chối thư rác</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chăm sóc khách hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sơ đồ</a>
          </li>
          <li class="nav-item_top">
            <img src="http://www.locknlock.vn/data/base/imgs/global/btnTop.png">
          </li>
          </ul>
        </div>  
        <div class="footer_bottom row">
          <div class="footer_img col-2 col-md-2 col-lg-2" >
            <a href=""><img src="http://www.locknlock.vn/data/base/banner/footerLogo.png" style=""></a>
          </div>
          <div class="addressBox col-8 col-md-8 col-lg-8">
            <ul class="address">
              <li>CÔNG TY TNHH LOCK&amp;LOCK HCM</li>
              <li>
                Giấy CNĐKDN : 0309921077 –Ngày cấp :17/03/2010  ,  được sửa đổi lần thứ 08 ngày : 16/11/2015 
                được sửa đổi lần thứ
              </li>
              <li>Cơ quan cấp : Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP.HCM</li>
              <li>Địa chỉ đăng ký kinh doanh : 27487 77 Hoàng Văn Thái. Phường Tân Phú , Quận 7, TP HCM</li>
            </ul>
          </div>
          <div class="marklayer col-2 col-md-2 col-lg-2">
            <a href="">
              <img src="http://www.locknlock.vn/data/base/imgs/global/Thongbao.png" alt="">
            </a>
          </div>     
        </div>
      </div>

    </div>

    <script src='<?php echo file ?>/js/jquery.min.js'></script>
    <script src='<?php echo file ?>/js/owl.carousel.min.js'></script>
    <script src='<?php echo file ?>/js/website_js.js'></script>
    <script src='<?php echo file ?>/js/slide.js.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>