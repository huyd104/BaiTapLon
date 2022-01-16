<?php
include("template/headersi.php");
?>
<body>
<style>
        html{
          background-image: url("assets/img/bautroifull.jpg");
          background-repeat: no-repeat;
          background-size: 100%;
        }
        </style>
<div class="container row mt-10  ">
            <div class="left col-md">
                <div> <img src="assets/img/hahalolo.png" alt=""> <span class="haha">Hahalolo</span></div> 
                <div>
                    <h4>Bạn Thích</h4>
                    <h1>Đi du lịch ?</h1>
                    <h4>Bạn muốn tìm hiểu thông tin về những điểm đến?</h4>
                    <p>Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi.</p>
                </div>                              
            </div>
            <div class="right col-md">
            <form class="form-signin" action="process_signup.php" method="post">
      <h1 class=" h3 mb-3 font-weight-normal ">Đăng Ký</h1>
      <div class ="row">
          <div class="col-md"><input type="text" name ="txtten" placeholder="Tên" class="form-control" required></div>
          <div class="col-md"><input type="text" name ="txtho" placeholder="Họ" class="form-control" required></div>
      </div>
      <label for="inputEmail" class="sr-only " >Email address</label>
      <input type="email" type ="number" id="inputEmail" name="txtemail" class="form-control mt-3" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only" >Password</label>
      <input type="password" id="inputPassword" name ="txtpass" class="form-control mt-3" placeholder="Mật khẩu" required>
      <label for="inputPassword" class="sr-only" >RePassword</label>
      <input type="password" id="inputPassword" name ="txtpass2" class="form-control mt-3" placeholder="Xác nhận mật khẩu" required>
<?php
      if(isset($_GET['error'])){
          echo "<h5 style='color:red'>{$_GET['error']}</h5>";
      }
      ?>
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit" name="btnsignup">Đăng Ký</button>
      <div class="mt-3"><span>Bằng cách nhấp vào Đăng ký, bạn đồng ý với </span><a style="text-decoration: none" href="">Điều khoản dịch vụ</a>,
    <a style="text-decoration: none" href=" ">Chính sách dữ liệu</a>,<a style="text-decoration: none" href="">Chính sách cookie</a>và<a style="text-decoration: none" href=""> Tiêu chuẩn cộng đồng của chúng tôi</a></div>
      <div class="mt-3"><Span>Bạn đã có tài khoản?</Span> <a style="text-decoration: none" href="signin.php">Đăng nhập</a></div>
    </form>
            </div>
            
</div>


<!-- ----- -->
<?php
include("template/footer.php");
?>