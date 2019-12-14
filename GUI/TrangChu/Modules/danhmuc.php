<div class="danhmuc row">
  <div class="hang col-md-2">
    <div class="dropdown">
      <a href="#">Hãng</a>
      <?php
        include "Modules/loai.php";
      ?>
      </a>
    </div>
  </div>
  <div class="sanpham col-md-2">
    <div class="dropdown">
      <a href="#">Sản phẩm</a>
      <?php
        include "Modules/loai.php";
      ?>
      </a>
    </div>
  </div>
  <p class="col-md-4"></p>
  <div class="lienhe col-md-2,5">
    <a href="#">Liên hệ</a>
  </div>
  <div class="timkiem col-md-2,5">
    <a href="#" data-toggle="dropdown">Tìm kiếm</a>
    <?php
      include "Modules/timkiem.php";
    ?>
  </div>
  <div class="giohang col-md-2,5">
    <a href="#">Giỏ hàng</a>
  </div>
</div>
