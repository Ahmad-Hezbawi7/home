<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statistics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    {{--    @php--}}
    {{--    @endphp--}}
    {{--    @if(Local::getLang('ar'))--}}
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">--}}
    {{--    <link href="{{asset('css/style-rtl.css')}}" rel="stylesheet">--}}
    {{--    @else--}}

    {{--    @endif--}}

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body {
            font-family: 'Cairo', sans-serif;;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }

        .image-hover-text-container {
            position: relative;
            display: inline-block;
            width: auto;
            height: auto;
            transition: all 0.2s linear;
        }

        .image-hover-image {
            display: block;
        }

        /* Make the image round */
        .image-hover-image img {

        }

        .image-hover-text {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            opacity: 0;
            cursor: default;
            transition: opacity 0.2s linear;
        }

        .image-hover-text:hover {
            opacity: 1;
        }

        .image-hover-text-bubble {
            position: relative;
            box-sizing: border-box;
            top: 0;
            left: 0;
            right: 100%;
            border-radius: 1.25rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            margin: 0 auto;
            padding: 25% 8px 108px 8px;
            overflow: hidden;
            font-size: 17px;
            text-align: center;
            word-wrap: break-word;
        }

        .image-hover-text .image-hover-text-title {
            font-size: 25px;
            display: block;
        }

    </style>
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <img src="{{asset('images/lo.png')}}" width="112" height="50">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                الرئيسية
            </a>

            <a class="navbar-item">
                دورات تدريبية
            </a>
            <a class="navbar-item">
                خدمات الإحصاء
            </a>
            <a class="navbar-item">
                إحصائيات Blogger
            </a>
        </div>
        <div class="navbar-end"  style="padding-right:500px">
            <div class="navbar-item">
                <div class="buttons">
                    <div class="container" id="app">
                        <div id="image-modal" class="modal">
                            <div class="modal-background"></div>
                            <div class="modal-content">
                                <div class="modal-card">
                                    <header class="modal-card-head">
                                        <p class="modal-card-title">نموذج تسجبل الدخول</p>
                                    </header>
                                    <section class="modal-card-body">
                                        <form action="{{route('user.login.store')}}" method="POST">
                                            <div class="field">
                                                <label class="label">اسم المستخدم</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" name="username" placeholder="Email input" value="Name">
                                                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label class="label">كلمة المرور</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="password" name="password" placeholder="كلمة المرور">
                                                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                                                </div>
                                            </div>
                                            <div class="field is-grouped">
                                                <div class="control">
                                                    <button class="button is-link" type="submit">تسجيل دخول</button>
                                                </div>
                                                <div class="control">
                                                    <button class="button is-link is-light"  id="image-modal-close">الغاء</button>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                            <button id="image-modal-close" class="modal-close"></button>
                        </div>
                        <br>
                        <button style=" margin-bottom: 24px; color: #1C79C5" class="button" id="showModal">تسجيل دخول</button>
                    </div>
                    {{--                    <input class="form-control form-control form-text  mx-4" placeholder="ابحث..." type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128">--}}
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Button trigger modal -->



@yield('content')
<footer class="footer" style="background: white; opacity:45%; background-image: url({{'images/footer_background.jpg'}})">
    <section class="section" >
        <div class="container" >

            <div class="columns">
                <div class="column">
                    <img src="{{asset('images/logo1.png')}}" alt="Placeholder image">
                </div>
                <div class="column">


                </div>
                <div class="column">
                    <div>
                        <a href="">الصفحة الرئيسية</a>
                    </div>
                    <div>
                        <a href="">الدورات التدريبية</a>
                    </div>
                    <div>
                        <a href="">عن المنصة</a>
                    </div>
                </div>


                <div class="column">
                    <div>
                        <a href="">سياسة الخصوصية</a>
                    </div>
                    <div>
                        <a href="">شروط الخدمة</a>
                    </div>
                    <div>
                        <a href="">المساعدة</a>
                    </div>
                </div>

                <div class="column">
                    <a href="">ابق على تواصل</a>
                    <div>
                        <hr style="background-color: #1C79C5">
                        <i class="fab fa-facebook" style="color: #1C79C5"></i>
                        <i class="fab fa-instagram"  style="color: #1C79C5"></i>
                        <i class="fab fa-twitter"  style="color: #1C79C5"></i>
                        <i class="fab fa-linkedin"  style="color: #1C79C5"></i>
                        <i class="fab fa-email"  style="color: #1C79C5"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content has-text-centered">
        <p>جميع الحقوق محفوظة للهيئة العامة للإحصاء © 2021 .</p>
    </div>
</footer>


<script src="{{asset('js/app.js')}}"></script>


<script>
    var btn = document.querySelector('#showModal');
    var modalDlg = document.querySelector('#image-modal');
    var imageModalCloseBtn = document.querySelector('#image-modal-close');
    btn.addEventListener('click', function(){
        modalDlg.classList.add('is-active');
    });

    imageModalCloseBtn.addEventListener('click', function(){
        modalDlg.classList.remove('is-active');
    });
    //btn.click(function() {
    // .addClass("is-active");
    // });

    // $(".modal-close").click(function() {
    //    $(".modal").removeClass("is-active");
    // });
</script>
</body>
</html>
