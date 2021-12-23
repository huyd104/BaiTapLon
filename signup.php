<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/stylesi.css">
</head>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>
</html>