<ul class="nav nav-pills navDetail">
  <li class="nav-item iconHome">
    <a class="nav-link" href="<?php echo link ?>HomeController"><img src="<?php echo file ?>/images/home.png" alt=""></a>
  </li>
<?php
  while($row = mysqli_fetch_array($data['DanhMucCha'])) { ?>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['TenMenuCha'] ?></a>
    <div class="dropdown-menu">

      <?php  while($row = mysqli_fetch_array($data['ListMenuCha'])) { ?>
      <a class="dropdown-item" href="<?php echo link ?>/DanhMucChaController?menucha=<?php echo $row['id'] ?>"><?php echo $row['TenMenuCha'] ?></a>
      <?php } ?>

    </div>
  </li>
<?php } ?>
</ul>
  <?php 
  foreach ($data['DanhMucMenuCha'] as $value) { ?>
    <div class="danhmuc_detail">
      <h4><?php echo $value['tenMenuCha'] ?></h4>
    </div>
    <ul class="row">
      <?php 
        foreach ($value['listMenuCon'] as $menucon) { ?>

          <li class="col-3 col-lg-3 col-md-3">
            <a href="GetSPController?danhmuc=<?php echo $menucon['id'] ?>"><?php echo $menucon['menucon'] ?>
            </a>
          </li>

      <?php } ?>
    </ul>

<?php } ?>
