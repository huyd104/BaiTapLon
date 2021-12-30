<?php
include("template/header.php");
?>
<body>
    <style>
        html{
          background-image: url("assets/img/bautroifull.jpg");
          background-repeat: no-repeat;
          background-size: 100%;
        }
        </style>
<div class="container row mt-10">
            <div class="left col-md">
                <div> <img src="assets/img/hahalolo.png" alt=""> <span class="haha"> Hahalolo</span></div> 
                <div>
                    <h4>Bạn Thích</h4>
                    <h1>Đi du lịch ?</h1>
                    <h4>Bạn muốn tìm hiểu thông tin về những điểm đến?</h4>
                    <p>Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi.</p>
                </div>                              
            </div>
            <div class="right col-md">
            <form class="form-signin" action="process_signin.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Đăng Nhập</h1>
      <label for="inputEmail" class="sr-only" >Email address</label>
      <input type="email" id="inputEmail" name="txtemail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only" >Password</label>
      <input type="password" id="inputPassword" name ="txtpass" class="form-control mt-3" placeholder="Password" required>
      <?php
      if(isset($_GET['error'])){
          echo "<h5 style='color:red'>{$_GET['error']}</h5>";
      }
      ?>
      <button class="btn btn-lg btn-primary btn-circle mt-4" type="submit" name="btnsignin">Đăng nhập</button>
      <div class="mt-2"><a style="text-decoration: none" href="" >Quên mật khẩu?</a></div>
      <div><Span>Bạn chưa có tài khoản?</Span> <a style="text-decoration: none" href="signup.php">Đăng ký tại đây</a></div>
    </form>
            </div>
            
</div>


<!-- ----- -->
<?php
include("template/footer.php");
?>