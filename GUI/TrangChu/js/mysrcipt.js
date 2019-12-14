(function() {
    var dangnhap = document.getElementById('btndangnhap');
    var dangki = document.getElementById('btndangki');
    var trolaiDN = document.getElementById('TroLaiDN');
    var trolaiDK = document.getElementById('TroLaiDK');
    var DialogDN = document.getElementById('dnDialog');
    var DialogDK = document.getElementById('dkDialog');
  
    //Dialog dùng để đăng nhập
    dangnhap.addEventListener('click', function() {
        DialogDN.showModal();
    });
    trolaiDN.addEventListener('click', function() {
        DialogDN.close();
    });
    //Dialog dùng để đăng kí
    dangki.addEventListener('click', function() {
        DialogDK.showModal();
      });
      trolaiDK.addEventListener('click', function() {
        DialogDK.close();
      });
  })();