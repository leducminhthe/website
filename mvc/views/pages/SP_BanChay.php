

		<div class="danhmuc_detail">
			<h4>Sản Phẩm Bán Chạy</h4>
		</div>

<ul class="row">
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
</ul>

<div class="phantrang">
	<?php 

		for ($i=1; $i <= $data['trang_SP'] ; $i++) { ?>

			<button><a href='SP_BanChayController?trang=<?php echo $i ?>'>Trang <?php echo $i ?></a></button>

		<?php  
		} ?>
</div>

