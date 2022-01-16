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
    <link rel="stylesheet" href="assets/css/styletk.css">

</head>

<body>
    <div id="header">
        <div class="left">
            <img class="ms-4" src="assets/img/hahalolo.png" alt="">
            <span src="assets/img/2x/baseline_shopping_cart_white_24dp.png"></span>
        </div>
        <div class="mid d-flex ">
            <div class="iconmid">
                <div class="d-flex justify-content-center "><span class="material-icons">
                        feed
                    </span></div>
                <div class=""><a style="text-decoration: none" href="https://www.hahalolo.com/"><span>Bảng
                            Tin</span></a></div>

            </div>
            <div class="iconmid">
                <div class="d-flex justify-content-center"><span class="material-icons">
                        pedal_bike
                    </span></div>
                <div><span>Trải Nghiệm</span></div>
            </div>
            <div class="iconmid">
                <div class="d-flex justify-content-center"><span class="material-icons">
                        location_on</div>
                <div><span>Tour</span></div>
            </div>
            <div class="iconmid">
                <div class="d-flex justify-content-center"><span class="material-icons">
                        maps_home_work
                    </span></div>
                <div><span>Khách Sạn</span></div>
            </div>
            <div class="iconmid">
                <div class="d-flex justify-content-center"><span class="material-icons">
                        flight
                    </span></div>
                <div><span class="">Vé Máy Bay</span></div>
            </div>
            <div class="iconmid">
                <div class="d-flex justify-content-center"><span class="material-icons">
                        directions_car
                    </span></div>
                <div><span>Thuê Xe</span></div>
            </div>
            <div class="iconmid">
                <div class="d-flex justify-content-center"><span class="material-icons">
                        add_shopping_cart
                    </span></div>
                <div><Span>Mua Sắm</Span></div>
            </div>

        </div>
        <div class="right ">
            <span class="material-icons">
                shopping_cart
            </span>
            <span class="material-icons">
                credit_card
            </span>
            <a href="signin.php"><span class="material-icons">
                    arrow_drop_down
                </span></a>
            <a href=""><span class="material-icons">
                    account_circle
                </span></a>
        </div>

    </div>
    <div class="sea container row">
        <div class="col-md-4">
            <div class="mb-4">
                <a class="back" href="hotel.php"><span class="material-icons">
                        arrow_back
                    </span> Quay Lại</a>
            </div>

            <div id="righttop">
                <div class="search ">
                    <div class=" d-flex flex-column ms-4 me-4">
                        <span class="mt-2">Bạn Muốn ở đâu ?</span>
                        <input type="text" class="">
                    </div>
                    <div class=" d-flex flex-column ms-4 me-4 ">
                        <span>Ngày Nhận Phòng</span>
                        <input type="date" class="">
                    </div>
                    <div class=" d-flex flex-column ms-4 me-4">
                        <div class="d-flex flex-column">
                            <span>Ngày Trả Phòng</span>
                            <input type="date" class="">
                        </div>
                    </div>
                    <div class=" d-flex flex-column ms-4 me-4">
                        <div class="d-flex flex-column ">
                            <span>Số Người</span>
                            <select class="op " name="" id="">
                                <option value="">1 người lớn - 0 trẻ em - 1 phòng</option>
                                <option value="">2 người lớn - 0 trẻ em - 1 phòng</option>
                            </select>

                        </div>
                    </div>

                    <div class=" d-flex flex-column">
                        <button  class=" ms-4 me-4 mt-3 mb-3 btn btn-primary d-flex justify-content-center">Tìm
                            Kiếm</button>


                    </div>
                </div>
            </div>
            <div class="rightmid1">
                <input type="text" placeholder="Nhập nơi bạn muốn tìm"><span class="material-icons">
                    search
                </span>
            </div>
            <div class="rightmid2 ">
                <div class="ms-4 me-4">
                    <b>Xếp Hạng Sao</b>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <span class="material-icons">
                                star
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            <span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            <span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            <span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            <span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span><span class="material-icons">
                                star
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label mb-4" for="flexCheckDefault">
                            Không Xếp Hạng
                        </label>
                    </div>
                </div>
            </div>

            <div class="rightmid3">
                <div class="me-4 ms-4">
                    <b>Tiện ích</b>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hồ Bơi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Phòng không hút thuốc
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cho phép mang theo vật nuôi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Máy điều hòa
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            TV
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Phòng tắm riêng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Phòng bếp
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Trẻ em ở miễn phí
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Internet tốc độ cao
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Phục vụ bữa sáng
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Miễn Phí đậu xe
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Bồn tắm
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Phục vụ giặt ủi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Đa ngôn ngữ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label mb-3" for="flexCheckDefault">
                            Dịch vụ đưa đón miễn phí
                        </label>
                    </div>

                </div>
            </div>


        </div>

        <div class="col-md-8 mt-5">
            <span>Những chỗ nghỉ phù hợp</span> 
            <button>Bản đồ</button>
            <hr>
            <select name="" id="" >
                <option value="">Giá</option>
                <option value="">Giá tăng dần</option>
                <option value="">Giá giảm dần</option>
                
            </select>
            <span class="material-icons">
                list
                </span>
                <span class="material-icons">
                    view_compact_alt
                </span>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> HAMPTON INN UTICA NY </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/aysV3ihzbm7nzHk36">  172 - 180 North Genesee StrUtica NY 13502 US</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>


                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> HOMEWOOD SUITES BY HILTON SYRACUSE</h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/qjK6Eq8mkNuaqKmM7"> 6006 Fair Lakes Road East Syracuse NY 13057 US </a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">7.553.840đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo8.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> THE REVERIE SAIGON </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/3HowH7pwbR4jxCS99">  22 to 36 Nguyen Hue Blvd Ho Chi Minh City 70000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">5.510.400đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo7.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> SOMERSET HO CHI MINH CITY </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/wzXqrBfQt12jUMeu6"> 8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> REX HOTEL </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/BoMz2WdeWMr8oUF46">  141 Nguyen Hue Boulevard DHO CHI MINH CITY 70000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6>CITADINES REGENCY SAIGON </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/wzXqrBfQt12jUMeu6"> 8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> VISSAI SAIGON HOTEL </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://g.page/wink-hotel-saigon-center?share"> 144 Nguyen Van Troi StreetHo Chi Minh City 70000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> SHERWOOD SUITES LIF </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://g.page/maihousesaigon?share"> 192 Nam Ky Khoi Nghia Ho Chi Minh City 700000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6>LOTTE HOTEL SAIGON </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/7GZpfDGrgRoQSW4cA">  2A 4A Ton Duc Thang Street Ho Chi Minh 700000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> THE REVERIE RESIDENTIAL SUITES </h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://g.page/TheReverieSaigon?share"> 22 Nguyen Hue Boulevard Ho Chi Minh City 70000 VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo7.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> SEDONA SUITES HO CHI MINH CITY</h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/QcDtX9dCdrQBzBUg6"> 67 Le Loi Boulevard Ho Chi Minh City VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
                <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                cursor: pointer;" class="container row mt-4">
                    <div class="col-md-4">
                        <img src="assets/img/halo3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                       <h6> INTERCONTINENTAL SAIGON RESIDENCES</h6>
                       <div style="color: orange;"><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span><span class="material-icons">
                        star
                    </span></div>
                        <a style="text-decoration: none;" href="https://goo.gl/maps/Jvko7KK8rgHTZm9U8"> CORNER NGUYEN DU ST. HAIHO CHI MINH CITY VN</a>
                        
                    </div>
                    <div class="col-md">
                        <span >Giá mỗi đêm</span>
                        <b style="color: red;">3.212.563đ</b>
                        <button class="btn-primary" style="border-radius: 15px; " >Chọn phòng</button>
                    </div>
                </div>
        </div>
    </div>

    <!-- ---- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>