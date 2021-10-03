@extends('layouts.app')

@section('content')
    <section class="section is-medium" style="background-size: cover;background-image: url({{asset('images/ruthson-zimmerman-FVwG5OzPuzo-unsplash.jpg')}})">
        <h1 class="title" style="color: white;">هيئة الاحصاء</h1>
        <h2 class="subtitle" style="color: white;">
            هيئة الاحصاءهيئة الاحصاءهيئة الاحصاءهيئة الاحصاء هيئة الاحصاءهيئة الاحصاءهيئة الاحصاءهيئة الاحصاءهيئة الاحصاءهيئة الاحصاء
        </h2>
    </section>
    <section>
        <h1 style="margin-right: 50px;  margin-bottom: 20px; margin-top: 50px; color:#1C79C5;font-size: 30px">
            عن المنصة
        </h1>
        <h1 style="text-align: right; margin-right: 50px; color:#1C79C5;font-size: 20px">
            فقرة تعرفية فقرة تعريفية فقرة تعريفيةفقرة تعرفية فقرة تعريفية فقرة تعريفية  فقرة تعرفية فقرة تعريفية فقرة تعريفية
        </h1>
    </section>

    <section class="section ">
        <h1 style="color:#1C79C5; margin-right: 60px; font-size: 30px;  margin-bottom: 10px">ما يميزنا</h1>

        <div class="columns is-multiline">
            <div class="column is-one-quarter">
                <div class="card-custom">
                    <div class="card-image image-hover-image  is-rounded">
                        <figure class="image is-4by3">
                            <img src="{{asset('images/m3.jpg')}}" style="border-radius: 20px;" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="image-hover-text">
                        <div class="image-hover-text-bubble">
                            <span class="image-hover-text-title">ستوريلاين</span>
                            قم بالتجربة من هنا
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter">
                <div class="card-custom">
                    <div class="card-image image-hover-image">
                        <figure class="image is-4by3">
                            <img src="{{asset('images/m1.jpg')}}" style="border-radius: 20px;" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="image-hover-text">
                        <div class="image-hover-text-bubble">
                            <span class="image-hover-text-title">فيديو تفاعلي</span>
                            قم بالتجربة من هنا
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter">
                <div class="card-custom">
                    <div class="card-image image-hover-image">
                        <figure class="image is-4by3">
                            <img src="{{asset('images/m2.jpg')}}" style="border-radius: 20px;" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="image-hover-text">
                        <div class="image-hover-text-bubble">
                            <span class="image-hover-text-title">كتاب إلكتروني</span>
                            قم بالتجربة من هنا
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-one-quarter">
                <div class="card-custom">
                    <div class="card-image image-hover-image">
                        <figure class="image is-4by3">
                            <img src="{{asset('images/m4.jpg')}}" style="border-radius: 20px;" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="image-hover-text">
                        <div class="image-hover-text-bubble">
                            <span class="image-hover-text-title">لعبة تفاعلية</span>
                            قم بالتجربة من هنا
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section ">
        <h1 class="title" style="color: #1C79C5 ;">أكتشـف دوراتـنا التدريبيـة</h1>
            <div class="tabs is-toggle is-fullwidth"  >
                <ul>
                    <li class="is-active is-primary">
                        <a>
                            <span>جميع الدورات</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span>مهارات الأتصال</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span>الدورات الهندسية</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span>الدورات الطبية</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span>الدورات التاريخية</span>
                        </a>
                    </li>
                </ul>
            </div>
        <div class="columns ">
            @foreach($coursesList as $course)
            <div class="column is-4">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-3by4">
                            <img src="{{asset('images/category2.png')}}" alt="Placeholder image">
                        </figure>
                        <div class="centered" style="color: white;">{{$course['fullname']}} </div>
                        <div class="bottom-right" style="color: white;">اسـم المدرب</div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </section>
    <section class="section">

            <div class="column">
                <div class="columns">


                    <div class="column">
                        <h1 class="title" style="color: #1C79C5 ;">ما الذي تتوقع من منصتنا؟</h1>
                        <ul style="color: #1C79C5;text-align: right;list-style-type:disc;">
                            <li style="margin-top: 20px">ان تصبح ملما بمابدئ الاحصاء</li>
                            <li style="margin-top: 20px">ان تصبح ملما بلعادات الرياضية </li>
                            <li  style="margin-top: 20px">ان تصبح ملما بمابدئ الاحصاء</li>
                            <li  style="margin-top: 20px">ان تصبح ملما بلعادات الرياضية </li>
                            <li  style="margin-top: 20px">ان تصبح ملما بمابدئ الاحصاء</li>
                            <li  style="margin-top: 20px">ان تصبح ملما بلعادات الرياضية </li>
                        </ul>
                    </div>

                    <div class="column is-half">
                        <div class="card-image">
                            <figure>
                                <img src="{{asset('images/aa1.png')}}" alt="Placeholder image">
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1 class="title" style="color: #1C79C5 ;">ما الذي سوف تجده في المنصة</h1>
            <hr style="background-color: #1C79C5">
            <div class="columns">
                <div class="column">
                    <img src="{{asset('images/a1.png')}}" alt="Placeholder image">
                    <p>دورات</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a2.png')}}" alt="Placeholder image">
                    <p>ملفات</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a3.png')}}" alt="Placeholder image">
                    <p>اختبارات</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a4.png')}}" alt="Placeholder image">
                    <p>مختصين</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a5.png')}}" alt="Placeholder image">
                    <p>احصائيات</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a6.png')}}" alt="Placeholder image">
                    <p>نقاشات</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a7.png')}}" alt="Placeholder image">
                    <p>محاضرات تفاعلية</p>
                </div>
                <div class="column">
                    <img src="{{asset('images/a8.png')}}" alt="Placeholder image">
                    <p>اسالة واجوبة</p>
                </div>
            </div>
            <hr style="background-color: #1C79C5">
        </div>

    </section>
    <section class="hero" style="background-image: url({{'images/c1.jpg'}});background-size: contain">
        <div class="hero-body">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <form  style="background-color: white;padding: 50px;">
                        <div class="field">
                            <label style="color: #1C79C5" class="label">الاسم</label>
                            <div class="control has-icons-left has-icons-right is-primary">
                                <input class="input" type="text" placeholder="الاسم" value="">
                                <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
    </span>
                            </div>

                        </div>
                        <div class="field">
                            <label style="color: #1C79C5" class="label">البريد الالكتروني</label>
                            <div class="control has-icons-left has-icons-right">
                                <input  class="input" type="email" placeholder="البريد الالكتروني" value="">
                                <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>


                            </div>
                        </div>
                        <div class="field">
                            <label style="color: #1C79C5" class="label">الرسالة</label>
                            <div class="control">
                                <textarea  class="textarea" placeholder="ادخل الرسالة...."></textarea>
                            </div>
                        </div>
                        <div class="field is-grouped" style="justify-content: center;">
                            <div class="control">
                                <button style="background-color: #1C79C5" class="button is-rounded is-primary">ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
