<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ăn gì bây giờ? - Chatbot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./static/img/icon2.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Chatbot style -->
    <script src="./static/a658a7b479.js"></script>
    <link rel="stylesheet" href="./static/aos.css"/>
    <link rel="stylesheet" href="./static/demo_bot/chatbot-ui.css">
    <link rel="stylesheet" href="./static/prism.css"/>
    <link rel="stylesheet" href="./static/styles.css">
    <!-- Chatbot style -->
</head>
<body>
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="z-index: 1">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-utensils"></i> Chatbot <span>Ăn gì bây giờ?</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Trang chủ</a></li>
                <li class="nav-item"><a href="#foods" class="nav-link">Các món ăn</a></li>
                <li class="nav-item">
                    <a
                        href="https://github.com/nghiemtientuan/lunchChatBot.git"
                        class="nav-link"
                        target="_blank"
                    >
                        Repo
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="home-slider js-fullheight owl-carousel bg-white" id="home">
    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
            <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
                    <div class="overlay"></div>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                     data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text mt-md-5">
                        <h1 class="mb-4">Ăn gì bây giờ: <br> Cơm nhà không la cà bạn ơi!</h1>
                        <p>Một trong những câu hỏi lớn nhất của việc ở nhà chính là "Ăn gì bây giờ?". Ngoài team đau đầu
                            gọi ship mỗi ngày, hội đảm đang cũng bất ngờ bổ sung thêm những cái tên mới với những bữa
                            cơm "nhà làm" chuẩn chỉnh từ hình thức đến nội dung khiến bao người trầm trồ, món nào món nấy nhìn vào là thấy đói
                            meo liền luôn đây nè!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                 data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
                    <div class="overlay"></div>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                     data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text mt-md-5">
                        <h1 class="mb-4">Ăn gì bây giờ: <br> Nhớ lắm... bữa cơm nhà!</h1>
                        <p>Mâm cơm đơn giản chỉ là canh chua, rau muống, cá rô kho tiêu, vậy mà bỗng gợi lên trong tôi nỗi nhớ quê da diết.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item js-fullheight">
        <div class="overlay"></div>
        <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                 data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_1.jpg);">
                    <div class="overlay"></div>
                </div>
                <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                     data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text mt-md-5">
                        <h1 class="mb-4">Ăn gì bây giờ: <br> MẸ ƠI, CON NHỚ CƠM NHÀ!</h1>
                        <p>Bữa cơm nhà không phải là bữa cơm thịnh soạn nhất nhưng có lẽ không ai quên được hương vị
                            những món ngon mẹ nấu và dù trưởng thành, được thưởng thức nhiều món ăn của nhiều nơi, từ
                            nhà hàng sang chảnh cho đến khách sạn 5*</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- counter -->
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);"
         data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="3">0</strong>
                                <span>Nguồn dữ liệu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="500">0</strong>
                                <span>Món ăn</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END counter -->

<!-- menu -->
<section class="ftco-section" id="foods">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Các món ăn</span>
                <h2 class="mb-4">Không thưởng thức – phí cả cuộc đời</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/mi_quang.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Mỳ Quảng</h3>
                        <span class="position mb-2">Đặc sản của tỉnh Quảng Nam</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/pho.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Phở</h3>
                        <span class="position mb-2">Món ngon mỗi ngày ở Việt Nam </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/goi_cuon.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Gỏi cuốn</h3>
                        <span class="position mb-2">Món ăn nhẹ hoàn hảo của Việt Nam</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/bo_kho.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bò khô</h3>
                        <span class="position mb-2">Món ăn này được đặc biệt yêu thích</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/bun_cha.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bún chả</h3>
                        <span class="position mb-2">Bún chả là một đại diện của phong cách ẩm thực Hà Nội</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/cha_gio.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Chả giò</h3>
                        <span class="position mb-2">Bún chả là một đại diện của phong cách ẩm thực Việt Nam</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/bun_man.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bún mắm</h3>
                        <span class="position mb-2">Món ăn này được người dân địa phương biến tấu với nhiều nguyên liệu khác nhau</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/ga_nuong_sa.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Gà nướng sả</h3>
                        <span class="position mb-2">Gà nướng sả cũng tương tự như các món bún nổi tiếng khác của Việt Nam</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/com_tam.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Cơm tấm</h3>
                        <span class="position mb-2">Đây là bữa trưa vô cùng phổ biến ở Sài Gòn</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/muc_chien.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Mực chiên</h3>
                        <span class="position mb-2">Mực tươi rất dẽ mua và phổ biến trong ẩm thực Việt</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/bun_bo_hue.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bún bò Huế</h3>
                        <span class="position mb-2">Ẩm thực cố đô Huế nổi tiếng với hương vị hài hòa giữa cay, chua, mặn và ngọt</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/banh_mi.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bánh mì</h3>
                        <span class="position mb-2">Hàng triệu ổ bánh mì được nướng mỗi ngày, không chỉ ngon, giá rẻ mà còn đầy đủ chất dinh dưỡng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/ca_kho_to.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Cá kho tộ</h3>
                        <span class="position mb-2">Cá được đun sôi liên tục trong dầu ăn, nước hàng, tỏi, hành, muối, nước mắm và nước dừa</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/goi.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Gỏi</h3>
                        <span class="position mb-2">Các món nộm/ gỏi thường có nguyên liệu chính từ đu đủ xanh bào sợ, bắp cải thái chỉ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/rau_muong_xao_toi.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Rau muống xào tỏi</h3>
                        <span class="position mb-2">Rau muống xanh mướt được xào với tỏi và dầu ăn béo ngậy</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/cao-lau.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Cao lầu</h3>
                        <span class="position mb-2">Món cao lầu là đặc sản của Hội An</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/cha_ca.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Chả cá</h3>
                        <span class="position mb-2">Cá được ướp với bột nghệ, gừng, tỏi và nước mắm</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/oc.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Ốc</h3>
                        <span class="position mb-2">Người Việt rất thích ăn ốc và các loại ốc ở đây cũng vô cùng đa dạng cả về chủng loại</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/banh_cuon.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bánh cuốn</h3>
                        <span class="position mb-2">Bánh cuốn được làm bằng cách tráng bột gạo mỏng thành vỏ bánh</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/banh_khot.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Bánh khọt</h3>
                        <span class="position mb-2">Nước chấm dùng cho bánh khọt là nước mắm pha chua ngọt, vừa miệng thực khách</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url(images/foods/ga_nuong.jpg);"></div>
                    <div class="text px-4 pt-4">
                        <h3>Gà nướng</h3>
                        <span class="position mb-2">Gà quết hành phi, xì dầu bên ngoài con gà rồi nướng trên bếp than</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END menu -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>
<!-- END loader -->

<!--  Chatbot socket ui  -->
<div id="chat-container"></div>
<script src="./static/demo_bot/chatbot-ui.js"></script>

<script>
    createChatBot(
        hotServer = 'http://localhost:8000',
        host = 'http://localhost:5005/webhooks/rest/webhook',
        botLogo = "./icons/bot_icon.png",
        title = "Bánh bao chào bạn",
        welcomeMessage = "Chào bạn tôi có thể giúp gì được cho bạn?",
        inactiveMsg = "Tạm thời tôi bị mất kết nối với máy chủ, bạn vui lòng tải lai trang."
    )
</script>

<!--  Styles  -->
<script src="./static/prism.js"></script>
<script src="./static/jquery-3.5.1.slim.min.js"></script>
<script src="./static/aos.js"></script>
<script>AOS.init();</script>
<script>$('[data-aos]').parent().addClass('hideOverflowOnMobile');</script>
<!--  END Styles  -->
<!--  END chatbot socket ui  -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
