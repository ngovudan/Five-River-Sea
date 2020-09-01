
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Five River Sea</title>
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/bootstrap-4.1.3/bootstrap.css">
    <link href="{{asset('plugins')}}/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins')}}/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins')}}/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/blog.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/blog_responsive.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <link rel="shortcut icon" type="image/png" href="{{asset('images')}}/icon1.png"/>
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/NhatQuangCss.css">
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://skywalkapps.github.io/bootstrap-notifications/stylesheets/bootstrap-notifications.css">
    <!-- <link href="{{asset('assets')}}/css/all.min.css" rel="stylesheet" /> -->
    <script src="{{asset('plugins')}}/ckeditor/ckeditor.js"></script>
    <style>
        /* .notification-icon{margin-right:6.8775px}
        .notification-icon:after{position:absolute;content:attr(data-count);margin-left:-6.8775px;margin-top:-6.8775px;padding:0 4px;min-width:13.755px;height:13.755px;line-height:13.755px;background:red;border-radius:10px;color:#fff;text-align:center;vertical-align:middle;font-size:11.004px;font-weight:600;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}
        .btn-lg .notification-icon:after{margin-left:-8.253px;margin-top:-8.253px;min-width:16.506px;height:16.506px;line-height:16.506px;font-size:13.755px}.btn-xs .notification-icon:after{content:'';margin-left:-4.1265px;margin-top:-2.06325px;min-width:6.25227273px;height:6.25227273px;line-height:6.25227273px;padding:0}.btn-xs .notification-icon{margin-right:3.43875px} */
    </style>
</head>
<body>

<div class="super_container">
    <!-- @if ( Session::has('user') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
            <script>
                $(document).ready(function(){
                    $('.alert').hide(4000);
                })
            </script>
    @endif -->
    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            
            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
                <a href="/"><div>a<span>River</span><p>MARKETPLACE</p></div></a>
            </div>

            <!-- Navigation -->
            <nav class="header_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Tôi bán</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">Thông báo</a></li> 
                    <li><a href="#">About us</a></li>
                </ul>
            </nav>

            <!-- Header Extra -->
            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="menu_top d-flex flex-row align-items-center justify-content-start">

        </div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="/">Home</a></li>
                <li class="menu_mm"><a href="#">Tôi bán</a></li>
                <li class="menu_mm"><a href="#">Chat</a></li>
                <li class="menu_mm"><a href="#">Thông báo</a></li>
                <li class="menu_mm"><a href="#">About us</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->

    <div class="sidebar">
        
        <!-- Info -->
        <div class="info" style="margin-left: -11px;">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">
                <!-- Đăng nhập --->
                <div class="info_languages has_children">
                    @if(!session('user'))
                        <i class='far fa-user-circle' style="color: #FFF; font-size: 18px"></i>
                        <button type="button" data-toggle="modal" data-target="#myModal" style="background-color: #1a1a1a; color: #FFF; border: none; cursor: pointer;">
                            ĐĂNG NHẬP
                        </button>
                    @else
                    <div class="dropdown show">
                        <a href="#" class="btn dropdown-toggle" style="color: #FFF; font-size: 16px" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><span style="color: #7d7d7d;">Hi</span> {{ session('user')->user }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a href="/user/{{session('user')->iduser}}" class="dropdown-item">Thông tin chi tiết</a>
                            <a href="/logout" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $(".dropdown-toggle").dropdown();
                        });
                    </script>
                    @endif
                </div>                
                <!-- Đăng tin --->
                <div class="info_currencies has_children">
                <i class='far fa-edit' style="color: #FFF; font-size: 18px"></i> 
                @if(!session('user'))                  
                    <a href="/post" id="postt" data-toggle="modal" data-target="#myModal" style="color: #FFF;">ĐĂNG TIN</a>
                @else
                    <a href="/post" style="color: #FFF;">ĐĂNG TIN</a>
                @endif
                </div>

            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <a href="/"><div>5<span>River Sea</span><p>MARKETPLACE</p></div></a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav navbar-inverse navbar" style="font-size: 18pt;">
        <div class="container-fluid">
            <ul style="color: #FFF;">
                <li><i class="fas fa-home"></i> <a href="/"> Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><i class="far fa-grin-wink"></i> <a href="/ibuy">Tôi bán<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><i class="fas fa-comments-dollar"></i> <a href="/chat">Chat<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>   
                <li class="dropdown-notifications dropdown">
                    <div class="dropdown show">
                        
                        <a href="#notifications-panel" class="btn dropdown-toggle" style="color: #FFF; font-size: 16px; margin-left: -20px;" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-count="0" class="notification-icon fas fa-bullhorn"></i> Thông báo
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-container" aria-labelledby="dropdownMenuLink" style="color: #000;">
                            <div class="dropdown-toolbar">
                                <!-- <div class="dropdown-toolbar-actions">
                                    <a href="#" style="color: #000;">Mark all as read</a>
                                </div> -->
                                <h6 class="dropdown-toolbar-title">Thông báo (<span class="notif-count">0</span>)</h6>
                            </div>
                            <ul class="dropdown-menu" style="color: #000;">
                            
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="#" style="color: #000;">View All</a>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $(".dropdown-toggle").dropdown();
                        });
                    </script>
                </li> 
                <li><i class="far fa-user"></i> <a href="/blog">About us<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>   
                     
            </ul>
            <!-- <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="color: #FFF;">
                    <li class="dropdown dropdown-notifications" class="dropdown-toggle" data-toggle="dropdown">
                        <a href="#notifications-panel">
                            <i data-count="0" class="notification-icon fas fa-bullhorn" style="margin-left: 0px; margin-right: 15px; font-size: 18pt;"></i> Thông báo<i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-container">
                            <div class="dropdown-toolbar">
                                <div class="dropdown-toolbar-actions">
                                    <a href="#">Đánh dấu tất cả đã đọc</a>
                                </div>
                                <h3 class="dropdown-toolbar-title">Thông báo (<span class="notif-count">0</span>)</h3>
                            </div>
                            <ul class="dropdown-menu">
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="#">Xem tất cả</a>
                            </div>
                        </div>
                    </li>  
                </ul> 
            </div> -->
            </div>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <!-- <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                <img src="{{asset('images')}}/bag.png" alt="">
                <div class="cart_num">2</div>
            </a></div>
            <div class="cart_text">TIN LƯU</div>
        </div> -->
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h2 class="title align-middle text-white">LOGIN</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="text-align: center">
                        <form action="/login" class="text-center justify-content-center">
                            <label for="">Email:</label><br>
                            <input type="text" id="forms" placeholder="Điền email vào đây..." name="email" style="padding: 5px; width: 300px;"><br>
                            @if($errors -> has('email'))
                                <span class="help-block">
                                    <strong>{{$errors -> first('email')}}</strong>
                                </span><br>
                            @endif 
                            <label for="">Password:</label><br>
                            <input type="password" name="password" id="forms" placeholder="Điền password vào đây..." id="" style="padding: 5px; width: 300px;"><br>
                            @if($errors -> has('password'))
                                <span class="help-block">
                                    <strong>{{$errors -> first('password')}}</strong>
                                </span><br>
                            @endif 
                            <a href="#" style="padding: 5px;">Quên mật khẩu?</a>
                            <button type="submit" id="submitt" class="btn btn-primary" style="margin-top: 5px; margin-left: 120px;">Login</button>
                        </form><br>
                        <a href="/createuser" class="btn btn-success col-md-8">Tạo tài khoản</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @section('content')
    @show
    <!-- Footer -->
    <footer class="footer" style="margin-top:300px;">
        <div class="footer_content">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_about">
                                <!-- Logo -->
                                <div class="footer_logo">
                                    <a href="#"><div>5<span>River Sea</span><p>MARKETPLACE</p></div></a>
                                </div>
                                <div class="footer_about_text">
                                    <p>5 River Sea Marketplace là nơi để mọi người trao đổi buôn bán hàng cũ. Nếu có thắc mắc xin hãy liên lạc về số tổng đài +84985410882 </p>
                                </div>
                            </div>
                        </div>

                        <!-- Questions -->
                        <div class=" col-md-6 footer_col">
                            <div class="footer_questions">
                                <div class="footer_title">Mục lục</div>
                                <div class="footer_list">
                                    <ul>
                                        <li><a href="#">Giới thiệu</a></li>
                                        <li><a href="#">Truyền thông</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Tuyển dụng</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">An toàn mua bán</a></li>
                                        <li><a href="#">Trung tâm hỗ trợ</a></li>
                                        <li><a href="#">Quy định cơ bản</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Blog -->

                        <!-- Contact -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                </div>
            </div>				
        </div>

        <!-- Credits -->    
    </footer>

    </div>

    <script src="{{asset('js')}}/jquery-3.2.1.min.js"></script>
    <script src="{{asset('assets')}}/js/chat.js"></script>
    <script src="{{asset('assets')}}/js/core/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/core/bootstrap.min.js"></script>
    <script src="{{asset('styles')}}/bootstrap-4.1.3/popper.js"></script>
    <script src="{{asset('styles')}}/bootstrap-4.1.3/bootstrap.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/TweenMax.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/TimelineMax.min.js"></script>
    <script src="{{asset('plugins')}}/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/animation.gsap.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{asset('plugins')}}/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{asset('plugins')}}/easing/easing.js"></script>
    <script src="{{asset('plugins')}}/parallax-js-master/parallax.min.js"></script>
    <script src="{{asset('plugins')}}/Isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('plugins')}}/Isotope/fitcolumns.js"></script>
    <script src="{{asset('js')}}/custom.js"></script>
    <script type="text/javascript">
        var receiver_id = "";
        @if(session('user'))
        var my_id = "{{ session('user')->iduser }}";
        @endif
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('.dropdown-menu');

        if (notificationsCount <= 0) {
            notificationsWrapper.hide();
        }

        $(".messages").animate({scrollTop: $(document).height()}, "fast");
        //Thay giá trị PUSHER_APP_KEY vào chỗ xxx này nhé
        var pusher = new Pusher('f0b2951130ab8d956286', {
            cluster: "ap1",
            forceTLS: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('chat');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('chat-admin', function(data) {
            $(".messages").animate({scrollTop: $(document).height()}, "fast");
            $('<li class="replies"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + data.message + '</p></li>').appendTo($('.messages ul'));
            var existingNotifications = notifications.html();
            var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
            <li class="notification active">
                <div class="media">
                    <div class="media-left">
                    <div class="media-object">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                    </div>
                    </div>
                    <div class="media-body">
                    <strong class="notification-title">`+data.message+`</strong>
                    <!--p class="notification-desc">Extra description can go here</p-->
                    <div class="notification-meta">
                        <small class="timestamp">about a minute ago</small>
                    </div>
                    </div>
                </div>
            </li>
            `;
            notifications.html(newNotificationHtml + existingNotifications);
            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });
        $('.my-1').click(function(){
            $('.my-1').removeClass('active');
            $(this).addClass('active');
            receiver_id = $(this).attr('id');
            // console.log(receiver_id);
            $.ajax({
                type: "get",
                url: "chat/"+receiver_id,
                data: "",
                cache: false,
                success: function (data){
                    for(i = 0; i<data.length; i++){
                        $('.boxes .col-8 .messages').html('<li class="sent"><img src="{{asset("images")}}/sach.jpg"  style="width:40px;height:40px;" class="rounded-circle " alt=""><p class="bongbong">'+data[i].tinnhan+'</p></li>');
                    }               
                }, error: function () {
                    alert("Có lỗi xảy ra");
                },
                
                
            });
            
        });
        $('.submit').click(function (e) {
            e.preventDefault();
            var formComment = new FormData();
            var message = $('#message').val();
            formComment.append('message', message);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                contentType: false,
                processData: false,
                url: '{{ route('client.chat.submit') }}',
                type: 'POST',
                dataType: 'json',
                data: formComment,
                success: function (response) {
                    $(".messages").animate({scrollTop: $(document).height()}, "fast");
                    $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + response.message + '</p></li>').appendTo($('.messages ul'));
                    $('.message-input input').val(null);
                }, error: function () {
                    alert("Có lỗi xảy ra");
                },
            });
        });
    </script>
    //NOTICE
    @include('sweetalert::alert')
</body>
</html>