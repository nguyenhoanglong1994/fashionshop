<dialog  id="dkDialog">
  <div id="dangKi">
    <form>
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đăng kí</h4>
        <h4><a href="#" style="color:red;">Đăng nhập</a></h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body modal-body-dk">
        <div id="thongtincanhan">
          <h4>Thông tin cá nhân</h4>
          <div class="input-group mb-3 thongtincanhan-noidung">
            <div class="input-group-prepend">
              <span class="input-group-text">Họ tên:&emsp;&emsp;&nbsp;</span>
            </div>
            <input type="text" class="form-control" placeholder="Họ tên" id="txtName" name="txtName">
          </div>
          <div class="input-group mb-3 thongtincanhan-noidung">
            <div class="input-group-prepend">
              <span class="input-group-text">Ngày sinh:&emsp;</span>
            </div>
            <input type="text" class="form-control" placeholder="Họ tên" id="txtName" name="txtName">
          </div>
          <div class="input-group mb-3 thongtincanhan-noidung">
            <div class="input-group-prepend">
              <span class="input-group-text">Bạn sống tại:</span>
            </div>
            <input type="text" class="form-control" placeholder="--Chọn thành phố--" id="txtName" name="txtName">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"></button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Thành phố Hồ Chí Minh</a>
              <a class="dropdown-item" href="#">Hà Nội</a>
              <a class="dropdown-item" href="#">Vũng Tàu</a>
            </div>
          </div>
        </div>
        <div>
          <h4>Thông tin tài khoản</h4>
        </div>
        <div>
          <h4>Mã kiểm tra</h4>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="TroLaiDK">Trở lại</button>
        <input type="submit" class="btn btn-danger" value="Đăng kí" id="smDangNhap"></input>
      </div>
    </form>
  </div>
</dialog>
