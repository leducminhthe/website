<nav class="nav nav_GioHang">
  <a class="nav-link" href="<?php echo link ?>HomeController"><img src="<?php echo file ?>/images/home.png" alt=""></a>
  <a class="nav-link" href="#">Kết quả kiểm tra</a>
</nav>
<?php

	while($row = mysqli_fetch_array($data['SP'])){ ?>

    <li class="col-4 col-md-4 col-lg-4">
	    <a href="/website/DetailsController?spId=<?=$row['MaSP'] ?>">
	      <figure>
	        <p class="mainProduct_listImg" ><img src="<?= $row['AnhSP'] ?>" alt=""></p>
	        <figcaption>
	          <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
	          <p class="mainProduct_listPrice">
	            <span><?=number_format($row['GIA_BD'])?></span>₫</p>
	        </figcaption>
	      </figure>
	    </a>
  	</li>
	
	<?php } ?>


<div class="phantrang">
	<?php 

		for ($i=1; $i <= $data['trang_SP'] ; $i++) { ?>

			<button><a href='SearchController?search=<?php echo $_GET['search'] ?>&trang=<?php echo $i ?>'>Trang <?php echo $i ?></a></button>

		<?php  
		} ?>
</div>

