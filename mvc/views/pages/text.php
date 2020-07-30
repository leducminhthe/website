<?php
while($row = mysqli_fetch_array($data['SP'])){ ?>

	<div class="col-4 col-md-4 col-lg-4">
	    <a href="<?php echo link ?>DetailsController?spId=<?=$row['id'] ?>">
	      <figure>
	        <p class="mainProduct_listImg" ><img src="<?= $row['photo'] ?>" alt=""></p>
	        <figcaption>
	          <p class="mainProduct_listTit"><?=$row['ten']?></p>
	          <p class="mainProduct_listPrice">
	            <span><?=number_format($row['gia'])?></span>₫</p>
	        </figcaption>
	      </figure>
	    </a>
	</div>

<?php } ?>
