<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>سعرك اليوم | وزارة التموين</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset("main_page/assets/img/favicon.png")}}" rel="icon">
  <link href="{{asset("main_page/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset("main_page/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("main_page/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("main_page/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("main_page/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("main_page/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("main_page/assets/css/main.css")}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{route("main")}}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->

        <h1><img src="{{asset("main_page/assets/img/logo.png")}}" alt=""> سعرك <span>اليوم </span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">الصفحة الرئيسية</a></li>
          <li class="dropdown"><a href="#about"><span>من نحن  </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#about">عن  الموقع </a></li>
              <li><a href="#developer"> مطورين الموقع </a></li>
            </ul>
          </li>
          <li><a href="#events">الاخبار</a></li>
          <li class="dropdown"><a href="#menu"><span>السلع التموينية </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#menu">الاسعار الموحدة </a></li>
              <li><a href="#pricing"> العروض </a></li>
            </ul>
          </li>

          <li><a href="#supports">الدعم الفنى</a></li>
          <li><a href="#contact">تواصل معنا</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-complaints" href="{{route("login")}}">تسجيل الدخول</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">عزيزى المواطن المصرى <br></h2>
          <p data-aos="fade-up" data-aos-delay="100">يمكنك الان معرفة اسعار السلع التموينية بكل سهولة و تجنب الغش التجارى ومعرفة المتوفر و غير المتوفر من السلع و ايضا اسباب عدم التوفر.  </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#complaints" class="btn-complaints">ارسل شكوى </a>

            <a href="" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>شاهد الفيديو .</span></a>

          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{asset("main_page/assets/img/hero-img.png")}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

 <!-- ======= Clients Section ======= -->
 <section id="clients" class="clients section-bg">
  <div class="container">

    <div class="row" data-aos="zoom-in">



      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset("main_page/assets/img/clients/client-1.png")}}" class="img-fluid" alt="حماية المستهلك" >
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset("main_page/assets/img/clients/client-2.png")}}" class="img-fluid" alt="مصر رقمية ">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset("main_page/assets/img/clients/client-3.png")}}" class="img-fluid" alt="رؤية مصر 2030">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset("main_page/assets/img/clients/client-4.png")}}" class="img-fluid" alt="وزارة التموين ">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset("main_page/assets/img/clients/client-5.png")}}" class="img-fluid" alt="الهيئة العامة للسلع التموينية ">
      </div>


      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{asset("main_page/assets/img/clients/client-6.png")}}" class="img-fluid" alt="منظومة الشكاوى الحكومية الموحدة ">
      </div>

    </div>

  </div>
</section><!-- End Cliens Section -->
    <!-- ======= من تحن Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>من نحن</h2>
          <p>اعرف المزيد  <span>عن موقعنا </span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{asset("main_page/assets/img/img2.gif")}}) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <p>تواصل معنا </p>
              <p> 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic"><b>
               نظرا لارتفاع الساعار و الغش التجارى الذى اصبح شائع تم انشاء موقع سعرك اليوم بهدف الاتى :
              </b></p>
              <ul>
                <li><i class="bi bi-check2-all"></i>رؤية مستقبلية متوسعة لحماية اسعار السلع و الخدمات بكافة انواعها .</li>
                <li><i class="bi bi-check2-all"></i>مراقبة الاسعار بشكل مستمر .</li>
                <li><i class="bi bi-check2-all"></i> الحد من الغش التجارى و جشع التجار .</li>
                <li><i class="bi bi-check2-all"></i> معرفت اراء المواطنين و توفير لهم المعلومات الازمة عن اسعار السلع .</li>
              </ul>
              <p>
                مشكلة غلاء الاسعار اصبحت مشكلة خطيرة و ملموسة فى واقعنا الحالى , و نمر بها فى كل لحظة و كل وقت ، وعندما تصبح المشكلة امر مزمن و فى تزايد فيجب علينا التصدى لها  و الاسراع فى حلها .
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset("main_page/assets/img/img.gif")}}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>ما مميزات هذا الموقع ؟</h3>
              <p>
               لمراقبة الاسعار بشكل سليم وضعنا عددة مميزات فى هذا الموقع تجعل من السهل
               التعرف على اسعار السلع و تفقدها .
               <br>
               <br>
               لا تنسى يمكنك ايضا تسجيل الدخول للموقع ، و معرفة كل جديد .
               <br>
               <br>
               و المميزات هى :
              </p>
              <div class="text-center">
                <a href="{{route("login")}}" class="more-btn">سجل الدخول الان <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>كتابة شكوى </h4>
                  <p>فى حالة وجود اى غش او استغلال تجارى يمكنك ارسال شكوى فى مصدر هذا الغش .</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>معرفة سعر السلعة </h4>
                  <p>فيمكنك معرفة سعر السلعة الموحد و الموجود فى اللوائح و بهذا يمكنك تجنب ارتفاع الاسعار بسبب غش التجار .</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>معرفة ان كانت السلعة متوفرة ام لا </h4>
                  <p>وبهذا يمكنك معرفة ان كانت السلعة متوفرة فى الدولة ام لا ، وو هكذا يمكن الكشف عن ان كان التاجر يخبأ السلع فعلا ام هى غير متوفرة فى الحقيقة .</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->



    <!-- ======= مطورين الموقع  Section ======= -->
    <section id="developer" class="developer section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>المطوريين </h2>
          <p>تعرف على  <span>مطورين الموقع </span></p>
        </div>

        <div class="developer-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img1.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img1.jpg")}}" class="img-fluid" alt=""><br>ندى خالد </a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img2.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img2.jpg")}}" class="img-fluid" alt=""><br>زياد وائل</a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img3.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img3.jpg")}}" class="img-fluid" alt=""><br>ندى صفوت</a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img4.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img4.jpg")}}" class="img-fluid" alt=""><br>ميرنا محمد </a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img5.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img5.jpg")}}" class="img-fluid" alt=""><br>مروة محمد</a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img6.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img6.jpg")}}" class="img-fluid" alt=""><br>نانسى حسام</a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img7.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img7.jpg")}}" class="img-fluid" alt=""><br>شيماء مصباح </a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img8.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img8.jpg")}}" class="img-fluid" alt=""><br>احمد محمود</a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img9.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img9.jpg")}}" class="img-fluid" alt=""><br>حسين عادل </a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img10.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img10.jpg")}}" class="img-fluid" alt=""><br>يوسف شريف</a></div>
            <div class="swiper-slide"><a class="glightbox" data-developer="images-developer" href="{{asset("main_page/assets/img/developer/img11.jpg")}}"><img src="{{asset("main_page/assets/img/developer/img11.jpg")}}" class="img-fluid" alt=""><br>مصطفى ابو المجد</a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End developer Section -->
     <!-- ======= Events Section ======= -->
     <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>الاخبار</h2>
          <p>تعرف على  <span>احدث الاخبار</span> لعام 2024</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset("main_page/assets/img/events-1.jpg")}})">
              <h3>وزير التموين ... معارض اهلا رمضان ستبدأ منتصف الشهر الجاري بحد ادنى 3 معارض بكل محافظة
                طرح الكوبونات فئة 100،150، 200، 250، 300، 500</h3>
              <p class="description">الإثنين ، ١٢ فبراير ٢٠٢٤</p>
              <p class="description">
                <a href="http://www.msit.gov.eg/details.html?topicID=2279"  class="btn-more">اقرأ المزيد </a>
                </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset("main_page/assets/img/events-2.jpg")}})">
              <h3>وزير التموين ... تعاون وثيق بين هيئة الاغاثة الكاثوليكية ولجنة المساعدات التابعة للوزارة لتوفير مساعدات لأهالينا بغزة.</h3>

              <p class="description"> الإثنين ، ٢٢ يناير ٢٠٢٤</p>
              <p class="description">
                <a href="http://www.msit.gov.eg/details.html?topicID=2262"  class="btn-more">اقرأ المزيد </a></p>
            </div><!-- End Event item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Events Section -->


    <!-- ======= الاسعار الموحدةSection ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الاسعار الموحدة</h2>
          <p>تعرف الان على  <span>الاسعار الموحدة للسلع و العروض </span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-goods">
              <h4>اسعار التموين</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-market">
              <h4>اسعار السوبر ماركت</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-other">
              <h4>اسعار سلع اخرى </h4>
            </a><!-- End tab nav item -->


        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-goods">

            <div class="tab-header text-center">
              <p>الاسعار</p>
              <h3>التموين</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/سكر.png" class="glightbox"><img src="assets/img/menu/سكر.png" class="menu-img img-fluid" alt=""></a>
                <h4>سكر ابيض 1 ك</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $27
                </p>
              </div><!-- التموين Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/هدية.png" class="glightbox"><img src="assets/img/menu/هدية.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت طعام خليط هدية 700 مل </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $34
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/قلية.png" class="glightbox"><img src="assets/img/menu/قلية.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت طعام خليط قلية 700مل </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $34
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/الممتاز.png" class="glightbox"><img src="assets/img/menu/الممتاز.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت طعام خليط الممتاز 700مل</h4>
                <p class="ingredients">
                  منوفر
                </p>
                <p class="price">
                  $34
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/هدية.png" class="glightbox"><img src="assets/img/menu/هدية.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت طعام خليط هدية 1 لتر</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $46
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/قلية.png" class="glightbox"><img src="assets/img/menu/قلية.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت طعام خليط قلية 1 لتر </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $46
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/الممتاز.png" class="glightbox"><img src="assets/img/menu/الممتاز.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت طعام خليط الممتاز 1 لتر</h4>
                <p class="ingredients">
                غير متوفر
                </p>
                <p class="price">
                  $46
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/سندباد.png" class="glightbox"><img src="assets/img/menu/سندباد.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت سندباد 1 لتر</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $42
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/غالية.png" class="glightbox"><img src="assets/img/menu/غالية.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت غالية 1 لتر </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $38.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/مرجانة.png" class="glightbox"><img src="assets/img/menu/مرجانة.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت مرجانة 900 ملى </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $39.25
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/مرجانة.png" class="glightbox"><img src="assets/img/menu/مرجانة.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت مرجانة 800 ملى </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $32
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/غالية.png" class="glightbox"><img src="assets/img/menu/غالية.png" class="menu-img img-fluid" alt=""></a>
                <h4>زيت غالية 700 ملى </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $32
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/حلوة.png" class="glightbox"><img src="assets/img/menu/حلوة.png" class="menu-img img-fluid" alt=""></a>
                <h4>حلوة زيت خليط 700 ملى </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $34
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/حلوة.png" class="glightbox"><img src="assets/img/menu/حلوة.png" class="menu-img img-fluid" alt=""></a>
                <h4>حلوة زيت خليط 1 لتر</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $46
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/هنادى_نص.png" class="glightbox"><img src="assets/img/menu/هنادى_نص.png" class="menu-img img-fluid" alt=""></a>
                <h4>هنادى زيت خليط 700 ملى </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $34
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/هنادى.png" class="glightbox"><img src="assets/img/menu/هنادى.png" class="menu-img img-fluid" alt=""></a>
                <h4>هنادى زيت خليط 1 لتر</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $46
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/عبور لاند كيلو.png" class="glightbox"><img src="assets/img/menu/عبور لاند كيلو.png" class="menu-img img-fluid" alt=""></a>
                <h4>عبور لاند جبنة 1 كيلو</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $56.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/عبور نص.png" class="glightbox"><img src="assets/img/menu/عبور نص.png" class="menu-img img-fluid" alt=""></a>
                <h4>عبور لاند جبنة 500 جرام</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $31.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/عبور_ربع.jpg" class="glightbox"><img src="assets/img/menu/عبور_ربع.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>عبور لاند جبنة 250 جرام </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $16.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/عبور لاند 125.jpg" class="glightbox"><img src="assets/img/menu/عبور لاند 125.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>عبور لاند جنبة 125 جرام</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $9.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/زرقاء.png" class="glightbox"><img src="assets/img/menu/زرقاء.png" class="menu-img img-fluid" alt=""></a>
                <h4>جبنة 250 جرام زرقاء</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $14
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بلس.png" class="glightbox"><img src="assets/img/menu/بلس.png" class="menu-img img-fluid" alt=""></a>
                <h4>جبنة 250 جرام بلس </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $15
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بلس.png" class="glightbox"><img src="assets/img/menu/بلس.png" class="menu-img img-fluid" alt=""></a>
                <h4>جبنة 500 جرام بلس</h4>
                <p class="ingredients">
                 غير متوفر
                </p>
                <p class="price">
                  $30
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/تترباك.png" class="glightbox"><img src="assets/img/menu/تترباك.png" class="menu-img img-fluid" alt=""></a>
                <h4>جبنة تتراباك 500 جرام </h4>
                <p class="ingredients">
                  غير متوفر
                </p>
                <p class="price">
                  $25
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/دومتى.png" class="glightbox"><img src="assets/img/menu/دومتى.png" class="menu-img img-fluid" alt=""></a>
                <h4>دومتى جبنة طعوم بلس 250 جرام </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $15
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بخيرة نص.png" class="glightbox"><img src="assets/img/menu/بخيرة نص.png" class="menu-img img-fluid" alt=""></a>
                <h4>حليب  بخيرة 500 كجم</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $15.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بخيرة.png" class="glightbox"><img src="assets/img/menu/بخيرة.png" class="menu-img img-fluid" alt=""></a>
                <h4>حليب بخيرة كامل الدسم 1 لتر </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $29
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/لبن عبور.png" class="glightbox"><img src="assets/img/menu/لبن عبور.png" class="menu-img img-fluid" alt=""></a>
                <h4>حليب عبور لاند كامل الدسم كيس 500 ملى </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $16
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/عبور لاند كيلو.png" class="glightbox"><img src="assets/img/menu/لبن عبور.png" class="menu-img img-fluid" alt=""></a>
                <h4>حليب عبور لاند كامل الدسم 1 لتر </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $34.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/علبة بشاير.jpg" class="glightbox"><img src="assets/img/menu/علبة بشاير.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>حليب بشاير كيس 500 كجم  </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $13
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/علبة بشاير.jpg" class="glightbox"><img src="assets/img/menu/علبة بشاير.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>حليب بشاير كيس 1 لتر</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $25
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ستار نص.png" class="glightbox"><img src="assets/img/menu/ستار نص.png" class="menu-img img-fluid" alt=""></a>
                <h4>مكرونة ستار 400 جرام</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $8
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ستار كيلو.png" class="glightbox"><img src="assets/img/menu/ستار كيلو.png" class="menu-img img-fluid" alt=""></a>
                <h4>مكرونة ستار 1 كيلو </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $20
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/كايرو.png" class="glightbox"><img src="assets/img/menu/كايرو.png" class="menu-img img-fluid" alt=""></a>
                <h4>مكرونة كايرو 400 جرام </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $6.7
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/كايرو.png" class="glightbox"><img src="assets/img/menu/كايرو.png" class="menu-img img-fluid" alt=""></a>
                <h4>مكرونة كايرو 1 ك </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $16.27
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بساطة كيلو.png" class="glightbox"><img src="assets/img/menu/بساطة كيلو.png" class="menu-img img-fluid" alt=""></a>
                <h4>بساطة مكرونة 1 ك</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $17.5
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بساطة نص.png" class="glightbox"><img src="assets/img/menu/بساطة نص.png" class="menu-img img-fluid" alt=""></a>
                <h4>بساطة مكرونة 350 جرام </h4>
                <p class="ingredients">
                متوفر
                </p>
                <p class="price">
                  $5.75
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/مجمد.png" class="glightbox"><img src="assets/img/menu/مجمد.png" class="menu-img img-fluid" alt=""></a>
                <h4>دواجن برازيلى مجمدة 1 كيلو </h4>
                <p class="ingredients">
                  غير متوفر
                </p>
                <p class="price">
                  $85
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/فراخ.png" class="glightbox"><img src="assets/img/menu/فراخ.png" class="menu-img img-fluid" alt=""></a>
                <h4>دواجن محلى مجمدة 1 كيلو </h4>
                <p class="ingredients">
                  متوفرة
                </p>
                <p class="price">
                  $105
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/بيض.png" class="glightbox"><img src="assets/img/menu/بيض.png" class="menu-img img-fluid" alt=""></a>
                <h4>طبق بيض 30 بيضة </h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $125
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/الضحى فول.png" class="glightbox"><img src="assets/img/menu/الضحى فول.png" class="menu-img img-fluid" alt=""></a>
                <h4>حبات فول معبأ 500 جرام </h4>
                <p class="ingredients">
                متوفر
                </p>
                <p class="price">
                  $12
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/الضحى فول.png" class="glightbox"><img src="assets/img/menu/الضحى فول.png" class="menu-img img-fluid" alt=""></a>
                <h4>حبات فول معبأ 1 كيلو</h4>
                <p class="ingredients">
                  متوفر
                </p>
                <p class="price">
                  $20
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ريحانة عدس.png" class="glightbox"><img src="assets/img/menu/ريحانة عدس.png" class="menu-img img-fluid" alt=""></a>
                <h4>حبه حبه عدس اصفر 500 جرام</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $22
                </p>
              </div><!-- التموين Item -->
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ريحانة عدس.png" class="glightbox"><img src="assets/img/menu/ريحانة عدس.png" class="menu-img img-fluid" alt=""></a>
                <h4>حبة حبة عدس اصفر 1 كيلو</h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $36.5
                </p>
              </div><!-- التموين Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/الضحى ارز.png" class="glightbox"><img src="assets/img/menu/الضحى ارز.png" class="menu-img img-fluid" alt=""></a>
                <h4>ارز بلدى عريض الحبة 1 كيلو </h4>
                <p class="ingredients">
                متوفر
                </p>
                <p class="price">
                  $22
                </p>
              </div><!-- التموين Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/دقيق.png" class="glightbox"><img src="assets/img/menu/دقيق.png" class="menu-img img-fluid" alt=""></a>
                <h4>ارز مستورد 1 كيلو </h4>
                <p class="ingredients">
                 غير متوفر
                </p>
                <p class="price">
                  $20
                </p>
              </div><!--التموين Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/المطبخ.png" class="glightbox"><img src="assets/img/menu/المطبخ.png" class="menu-img img-fluid" alt=""></a>
                <h4>المطبخ 1 كيلو ارز </h4>
                <p class="ingredients">
                 متوفر
                </p>
                <p class="price">
                  $23
                </p>
              </div><!-- التموين  Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/رز الريف.png" class="glightbox"><img src="assets/img/menu/رز الريف.png" class="menu-img img-fluid" alt=""></a>
                <h4>الريف 1 كيلو ارز</h4>
                <p class="ingredients">
                متوفر
                </p>
                <p class="price">
                  $23
                </p>
              </div><!-- التموين Item -->

            </div>
          </div><!-- End التموين Content -->

          <div class="tab-pane fade" id="menu-market">

            <div class="tab-header text-center">
              <p>الاسعار</p>
              <h3>السوبر ماركت</h3>
            </div>

            <div class="row gy-5">
              <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/سكر.png" class="glightbox"><img src="assets/img/menu/سكر.png" class="menu-img img-fluid" alt=""></a>
                  <h4>سكر ابيض 1 ك</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $27
                  </p>
                </div><!-- التموين Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/هدية.png" class="glightbox"><img src="assets/img/menu/هدية.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت طعام خليط هدية 700 مل </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $34
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/قلية.png" class="glightbox"><img src="assets/img/menu/قلية.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت طعام خليط قلية 700مل </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $34
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/الممتاز.png" class="glightbox"><img src="assets/img/menu/الممتاز.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت طعام خليط الممتاز 700مل</h4>
                  <p class="ingredients">
                    منوفر
                  </p>
                  <p class="price">
                    $34
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/هدية.png" class="glightbox"><img src="assets/img/menu/هدية.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت طعام خليط هدية 1 لتر</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $46
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/قلية.png" class="glightbox"><img src="assets/img/menu/قلية.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت طعام خليط قلية 1 لتر </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $46
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/الممتاز.png" class="glightbox"><img src="assets/img/menu/الممتاز.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت طعام خليط الممتاز 1 لتر</h4>
                  <p class="ingredients">
                  غير متوفر
                  </p>
                  <p class="price">
                    $46
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/سندباد.png" class="glightbox"><img src="assets/img/menu/سندباد.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت سندباد 1 لتر</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $42
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/غالية.png" class="glightbox"><img src="assets/img/menu/غالية.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت غالية 1 لتر </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $38.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/مرجانة.png" class="glightbox"><img src="assets/img/menu/مرجانة.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت مرجانة 900 ملى </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $39.25
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/مرجانة.png" class="glightbox"><img src="assets/img/menu/مرجانة.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت مرجانة 800 ملى </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $32
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/غالية.png" class="glightbox"><img src="assets/img/menu/غالية.png" class="menu-img img-fluid" alt=""></a>
                  <h4>زيت غالية 700 ملى </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $32
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/حلوة.png" class="glightbox"><img src="assets/img/menu/حلوة.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حلوة زيت خليط 700 ملى </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $34
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/حلوة.png" class="glightbox"><img src="assets/img/menu/حلوة.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حلوة زيت خليط 1 لتر</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $46
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/هنادى_نص.png" class="glightbox"><img src="assets/img/menu/هنادى_نص.png" class="menu-img img-fluid" alt=""></a>
                  <h4>هنادى زيت خليط 700 ملى </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $34
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/هنادى.png" class="glightbox"><img src="assets/img/menu/هنادى.png" class="menu-img img-fluid" alt=""></a>
                  <h4>هنادى زيت خليط 1 لتر</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $46
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/عبور لاند كيلو.png" class="glightbox"><img src="assets/img/menu/عبور لاند كيلو.png" class="menu-img img-fluid" alt=""></a>
                  <h4>عبور لاند جبنة 1 كيلو</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $56.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/عبور نص.png" class="glightbox"><img src="assets/img/menu/عبور نص.png" class="menu-img img-fluid" alt=""></a>
                  <h4>عبور لاند جبنة 500 جرام</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $31.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/عبور_ربع.jpg" class="glightbox"><img src="assets/img/menu/عبور_ربع.jpg" class="menu-img img-fluid" alt=""></a>
                  <h4>عبور لاند جبنة 250 جرام </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $16.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/عبور لاند 125.jpg" class="glightbox"><img src="assets/img/menu/عبور لاند 125.jpg" class="menu-img img-fluid" alt=""></a>
                  <h4>عبور لاند جنبة 125 جرام</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $9.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/زرقاء.png" class="glightbox"><img src="assets/img/menu/زرقاء.png" class="menu-img img-fluid" alt=""></a>
                  <h4>جبنة 250 جرام زرقاء</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $14
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بلس.png" class="glightbox"><img src="assets/img/menu/بلس.png" class="menu-img img-fluid" alt=""></a>
                  <h4>جبنة 250 جرام بلس </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $15
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بلس.png" class="glightbox"><img src="assets/img/menu/بلس.png" class="menu-img img-fluid" alt=""></a>
                  <h4>جبنة 500 جرام بلس</h4>
                  <p class="ingredients">
                   غير متوفر
                  </p>
                  <p class="price">
                    $30
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/تترباك.png" class="glightbox"><img src="assets/img/menu/تترباك.png" class="menu-img img-fluid" alt=""></a>
                  <h4>جبنة تتراباك 500 جرام </h4>
                  <p class="ingredients">
                    غير متوفر
                  </p>
                  <p class="price">
                    $25
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/دومتى.png" class="glightbox"><img src="assets/img/menu/دومتى.png" class="menu-img img-fluid" alt=""></a>
                  <h4>دومتى جبنة طعوم بلس 250 جرام </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $15
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بخيرة نص.png" class="glightbox"><img src="assets/img/menu/بخيرة نص.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حليب  بخيرة 500 كجم</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $15.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بخيرة.png" class="glightbox"><img src="assets/img/menu/بخيرة.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حليب بخيرة كامل الدسم 1 لتر </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $29
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/لبن عبور.png" class="glightbox"><img src="assets/img/menu/لبن عبور.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حليب عبور لاند كامل الدسم كيس 500 ملى </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $16
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/عبور لاند كيلو.png" class="glightbox"><img src="assets/img/menu/لبن عبور.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حليب عبور لاند كامل الدسم 1 لتر </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $34.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/علبة بشاير.jpg" class="glightbox"><img src="assets/img/menu/علبة بشاير.jpg" class="menu-img img-fluid" alt=""></a>
                  <h4>حليب بشاير كيس 500 كجم  </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $13
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/علبة بشاير.jpg" class="glightbox"><img src="assets/img/menu/علبة بشاير.jpg" class="menu-img img-fluid" alt=""></a>
                  <h4>حليب بشاير كيس 1 لتر</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $25
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/ستار نص.png" class="glightbox"><img src="assets/img/menu/ستار نص.png" class="menu-img img-fluid" alt=""></a>
                  <h4>مكرونة ستار 400 جرام</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $8
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/ستار كيلو.png" class="glightbox"><img src="assets/img/menu/ستار كيلو.png" class="menu-img img-fluid" alt=""></a>
                  <h4>مكرونة ستار 1 كيلو </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $20
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/كايرو.png" class="glightbox"><img src="assets/img/menu/كايرو.png" class="menu-img img-fluid" alt=""></a>
                  <h4>مكرونة كايرو 400 جرام </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $6.7
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/كايرو.png" class="glightbox"><img src="assets/img/menu/كايرو.png" class="menu-img img-fluid" alt=""></a>
                  <h4>مكرونة كايرو 1 ك </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $16.27
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بساطة كيلو.png" class="glightbox"><img src="assets/img/menu/بساطة كيلو.png" class="menu-img img-fluid" alt=""></a>
                  <h4>بساطة مكرونة 1 ك</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $17.5
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بساطة نص.png" class="glightbox"><img src="assets/img/menu/بساطة نص.png" class="menu-img img-fluid" alt=""></a>
                  <h4>بساطة مكرونة 350 جرام </h4>
                  <p class="ingredients">
                  متوفر
                  </p>
                  <p class="price">
                    $5.75
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/مجمد.png" class="glightbox"><img src="assets/img/menu/مجمد.png" class="menu-img img-fluid" alt=""></a>
                  <h4>دواجن برازيلى مجمدة 1 كيلو </h4>
                  <p class="ingredients">
                    غير متوفر
                  </p>
                  <p class="price">
                    $85
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/فراخ.png" class="glightbox"><img src="assets/img/menu/فراخ.png" class="menu-img img-fluid" alt=""></a>
                  <h4>دواجن محلى مجمدة 1 كيلو </h4>
                  <p class="ingredients">
                    متوفرة
                  </p>
                  <p class="price">
                    $105
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/بيض.png" class="glightbox"><img src="assets/img/menu/بيض.png" class="menu-img img-fluid" alt=""></a>
                  <h4>طبق بيض 30 بيضة </h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $125
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/الضحى فول.png" class="glightbox"><img src="assets/img/menu/الضحى فول.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حبات فول معبأ 500 جرام </h4>
                  <p class="ingredients">
                  متوفر
                  </p>
                  <p class="price">
                    $12
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/الضحى فول.png" class="glightbox"><img src="assets/img/menu/الضحى فول.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حبات فول معبأ 1 كيلو</h4>
                  <p class="ingredients">
                    متوفر
                  </p>
                  <p class="price">
                    $20
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/ريحانة عدس.png" class="glightbox"><img src="assets/img/menu/ريحانة عدس.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حبه حبه عدس اصفر 500 جرام</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $22
                  </p>
                </div><!-- التموين Item -->
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/ريحانة عدس.png" class="glightbox"><img src="assets/img/menu/ريحانة عدس.png" class="menu-img img-fluid" alt=""></a>
                  <h4>حبة حبة عدس اصفر 1 كيلو</h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $36.5
                  </p>
                </div><!-- التموين Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/الضحى ارز.png" class="glightbox"><img src="assets/img/menu/الضحى ارز.png" class="menu-img img-fluid" alt=""></a>
                  <h4>ارز بلدى عريض الحبة 1 كيلو </h4>
                  <p class="ingredients">
                  متوفر
                  </p>
                  <p class="price">
                    $22
                  </p>
                </div><!-- التموين Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/دقيق.png" class="glightbox"><img src="assets/img/menu/دقيق.png" class="menu-img img-fluid" alt=""></a>
                  <h4>ارز مستورد 1 كيلو </h4>
                  <p class="ingredients">
                   غير متوفر
                  </p>
                  <p class="price">
                    $20
                  </p>
                </div><!--التموين Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/المطبخ.png" class="glightbox"><img src="assets/img/menu/المطبخ.png" class="menu-img img-fluid" alt=""></a>
                  <h4>المطبخ 1 كيلو ارز </h4>
                  <p class="ingredients">
                   متوفر
                  </p>
                  <p class="price">
                    $23
                  </p>
                </div><!-- التموين  Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/رز الريف.png" class="glightbox"><img src="assets/img/menu/رز الريف.png" class="menu-img img-fluid" alt=""></a>
                  <h4>الريف 1 كيلو ارز</h4>
                  <p class="ingredients">
                  متوفر
                  </p>
                  <p class="price">
                    $23
                  </p>
                </div><!-- التموين Item -->



            </div>
          </div><!-- End السوبر ماركت  Content -->
          <div class="tab-pane fade" id="menu-other">

            <div class="tab-header text-center">
              <p>الاسعار </p>
              <h3>السلع الاخرى </h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4 >سيتم اضافة سلع اخرى قريبا.</h4>
                <p class="ingredients">
                  غير متوفرة حاليا
                </p>
                <p class="price">
                 $0
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End سلع اخرى  Menu Content -->

        </div>

      </div>
    </section><!-- End الاسعار الموحدة Section -->

      <!-- ======= العروض Section ======= -->
      <section id="pricing" class="pricing">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2>العروض</h2>
            <p>شنطة الخير </p>
          </div>

          <div class="row" data-aos="fade-left">

            <div class="col-lg-3 col-md-6">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <h3>العادى</h3>
                <h4><sup>$</sup>120<span> جنية مصرى </span></h4>
                <ul>
                  <li>كيلو سكر</li>
                  <li>كيلو رز</li>
                  <li>لتر زيت </li>
                  <li class="na">كيلو مكرونة</li>
                  <li class="na">كيلو دقيق</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">اشترى الان</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
              <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                <h3>المتوسطة</h3>
                <h4><sup>$</sup>150<span> جنية مصرى</span></h4>
                <ul>
                  <li>كيلو سكر</li>
                  <li>كيلو رز</li>
                  <li>لتر زيت</li>
                  <li>كيلو مكرونة</li>
                  <li class="na">كيلو دقيق</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">اشترى الان</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="400">
                <span class="advanced">مرتفعة الثمن </span>
                <h3>السوبر</h3>
                <h4><sup>$</sup>200<span> جنية مصرى </span></h4>
                <ul>
                  <li>كيلو سكر</li>
                  <li>كيلو رز</li>
                  <li>لتر زيت</li>
                  <li>كيلو مكرونة</li>
                  <li>كيلو دقيق</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">اشترى الان </a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End العروض Section -->


      <!-- ======= الدعم الفنى Section ======= -->

    <section id="supports" class="supports section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الدعم الفنى </h2>
          <p>يمكنك التعرف على  <span>خبراء الدعم الفنى </span> لدينا </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="support-member">
              <div class="member-img">
                <img src="{{asset("main_page/assets/img/supports/supports-1.jpg")}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>احمد حسام </h4>
                <span>لدعم مشاكل الارسال</span>
                <p>يمكنك التواصل معى ان كنت تواجة مشاكل فى ارسال الشكاوى و الاقتراحات  ، واضا ان كنت تواجة مشاكل فى الرد على رسائلك .</p>
              </div>
            </div>
          </div><!-- End الدعم Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="support-member">
              <div class="member-img">
                <img src="{{asset("main_page/assets/img/supports/supports-2.jpg")}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>حسين عادل </h4>
                <span>لدعم مشاكل تسجيل الدخول</span>
                <p>يمكنك ان تتحدث معى ان كنت تواجة مشاكل فى انشاء حساب خاص على الموقع ، و ايضا ان كنت تواجة مشاكل فى تسجيل الدخول و الخروج .</p>
              </div>
            </div>
          </div><!-- End الدعم Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="support-member">
              <div class="member-img">
                <img src="{{asset("main_page/assets/img/supports/supports-3.jpg")}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>ندى خالد </h4>
                <span>لدعم لمشاكل التقنية </span>
                <p>يمكنك التحدث معى ان كنت تواجة اى مشاكل تقنية فى الموقع تعطلك عن التصفح بكل سهولة ، ويمكنك ايضا تقديم الاقتراحات لتحسين الموقع .</p>
              </div>
            </div>
          </div><!-- End الدعم Member -->

        </div>

      </div>
    </section><!-- End الدعم Section -->

    <!-- ======= الشكاوى  Section ======= -->
    <section id="complaints" class="complaints">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>الشكاوى</h2>
          <p>اكتب <span>شكوتك </span> الان!</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url({{asset("main_page/assets/img/img1.gif")}});" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="{{asset("main_page/forms/complaints.php")}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
                <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="الايميل" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="رقم الوتساب" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="التاريخ" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="الوقت" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="نص الشكوى...."></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">انتظر</div>
                <div class="error-message"></div>
                <div class="sent-message">تم ارسال شكوتك بنجاح، و سيتم الرد عليها فى اسرع وقت ، شكر لك عزيزى المواطن !</div>
              </div>
              <div class="text-center"><button type="submit">ارسل الشكوى</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End الشكاوى  Section -->



    <!-- ======= تواصل معنا  Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>تواصل معنا</h2>
          <p>هل تحتاج الى المساعدة او تريد تقديم اى اقتراحات ؟ <span>تواصل معنا </span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>البلد</h3>
                <p>جمهورية مصر العربية(جميع المحافظات).</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>بريدنا الالكترونى </h3>
                <p>priceاليوم@yahoo.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>اتصل بنا</h3>
                <p>+20 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>ساعات الدعم </h3>
                <div><strong>نستقبل الشكاوى :</strong> على مدار اليوم
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="{{asset("main_page/forms/contact.php")}}" method="post" role="form" class="php-email-form p-3 p-md-4">
            @csrf
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكترونى " required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="نص الرسالة " required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">انتظر</div>
            <div class="error-message"></div>
            <div class="sent-message">تم ارسال رسالتك , شكرا لك!</div>
          </div>
          <div class="text-center"><button type="submit">ارسال</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End تواصل معنا  Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>البلد</h4>
            <p>
              جمهورية مصر العربية  <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>تواصل معنا </h4>
            <p>
              <strong>الهاتف:</strong> +20 5589 55488 55<br>
              <strong>البريد الالكترونى :</strong> priceاليوم@yahoo.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>سعات العمل</h4>
            <p>
              <strong>على مدار</strong> 24 ساعة <br>

            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>تابعونا</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        جميع حقوق الطبع و النشر محفوظة لموقع <strong><span>سعرك اليوم </span></strong>&copy; Copyright
      </div>
      <div class="credits">
          Designed by<strong><span><a href="">  MET</a></span></strong>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="{{route("main")}}" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset("main_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("main_page/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("main_page/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("main_page/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{asset("main_page/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("main_page/assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- website  Main JS File -->
  <script src="{{asset("main_page/assets/js/main.js")}}"></script>

</body>

</html>
