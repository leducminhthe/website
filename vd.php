<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>slider</title>
  <style>
    body{
      margin: 0px;
      padding: 0px;
    }
    section{
      position: absolute;
      width: 100%;
      height: 100%;
    }
    ul{
      width: 100%;
      height: 50px;
      margin: 0px;
      padding: 0px;
      background: rgba(0,0,0,.2);
      box-sizing: border-box;
      display: flex;
    }
    ul li{
      list-style: none;
      width: 20%;
    }
    ul li a{
      display: block;
      text-align: center;
      line-height: 50px;
      color: green;
      text-decoration: none;
      cursor: pointer;
      transition: all 0.5s;
      font-family: sans-serif;
    }
    ul li a:hover{
      background: red;
      color: #908888;
    }
    section img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -2;
      transition: all 0.5s;
      opacity: 0;
    }
    ul li:nth-child(1) a + img{
      opacity: 1;
    }
    ul li a:hover + img{
      opacity: 1;
      z-index: -1;
    }
    button{
      padding: 20px;
      border: none;
      background: #37f;
      font-size: 30px;
      color: white;
      position: absolute;
      top:45%;
      cursor: pointer;
     }
     .next{
          border-radius: 10px 0px 0px 10px;
          margin-left: 950px;
        }
        .prew{
          border-radius: 0px 10px 10px 0px;
        }
  </style>
</head>
<body>
  <section id="box">
    <ul>
       <li>
         <a href="" title="">Ngày Hội Lock&Lock</a>
         <img src="images/CA_appliances_1.png" alt="Ngày Hội Lock&Lock">
       </li>
        <li>
          <a href="" title="">Sản phẩm Mới</a>
          <img src="images/CA_cookware_2.png" alt="">
        </li>
        <li>
          <a href="" title="">Sản Phẩm Bán Chạy</a>
          <img src="images/CA_food_storage.png" alt="">
        </li>
        <li>
          <a href="" title="">Giam3 Gía</a>
          <img src="images/CA_lunch_box.png" alt="">
        </li>
        <li>
          <a href="" title="">ƯU ĐÃU THÀNH VIÊN</a>
          <img src="images/CA_vacuum_flask.png" alt="">
        </li>
     </ul>
     <button class="prew fa fa-chevron-left" onclick="prewImage()"></button>
    <button class="next fa fa-chevron-right" onclick="nextImage()"></button> 
  </section>
  <script >
    var slider_content = document.getElementById('box');
    var image = ['CA_appliances_1','CA_cookware_2', 'CA_food_storage', 'CA_lunch_box','CA_vacuum_flask'];
    var i = image.length;

    function prewImage(){

      if (i<image.length+1 && i>1) {
        i= i-1;
      }else{
        i = image.length;
      }
        slider_content.innerHTML = "<img src="+image[i-1]+".png>";
    }

    function nextImage(){
      if (i<image.length) {
        i= i+1;
      }else{
        i = 1;
      }
        slider_content.innerHTML = "<img src="+image[i-1]+".png>";
    }
  </script>
</body>
</html>