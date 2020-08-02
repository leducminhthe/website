<ul class="nav nav-pills navDetail">
  <li class="nav-item iconHome">
    <a class="nav-link" href="<?php echo link ?>HomeController"><img src="<?php echo file ?>/images/home.png" alt=""></a>
  </li>
<?php
  while($row = mysqli_fetch_array($data['DanhMucCha'])) { ?>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['ten'] ?></a>
    <div class="dropdown-menu">

      <?php  while($row = mysqli_fetch_array($data['ListMenuCha'])) { ?>
      <a class="dropdown-item" href="<?php echo link ?>DanhMucChaController?menucha=<?php echo $row['id'] ?>"><?php echo $row['ten'] ?></a>
      <?php } ?>

    </div>
  </li>
<?php } ?>
</ul>

<?php 
	$menucon = $_GET['menucon'];
	while($row_menucon = mysqli_fetch_array($data['DanhMucMenuCon'])){ ?> 
		<div class="danhmuc_detail">
			<h4><?php echo $row_menucon['ten'] ?></h4>
		</div>
<?php } ?>


<div class="danhsach row"></div>
  <div id="xemthem">
    
  </div>

<script>
  var sotin1trang = 3;
  var from = 0;
  $(document).ready(function(){
    getData();
  })

  $(window).scroll(function(){
      if($(window).scrollTop() === $(document).height() - $(window).height()) {
        getData();
      }
  })

  function getData(){
      $.get("Ajax_danhmuc", {danhmuc:<?php echo $menucon ?>, sotin1trang:sotin1trang, from:from} , function(data) {
        if (data) {
          $(".danhsach").append(data);
          $(".dropdown-toggle").dropdown();
          from += sotin1trang;
        }
      })
  }

</script>

