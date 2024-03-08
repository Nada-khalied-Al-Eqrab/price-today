<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center"  >

    <div class="d-flex align-items-center justify-content-between">

        <i class="bi bi-list toggle-sidebar-btn"></i>

      <a href="{{route("dash")}}" class="logo d-flex align-items-center">
        <img src="{{asset("control/assets/img/logo.png")}}" alt="">
        <span class="d-none d-lg-block">سعرك اليوم </span>
      </a>


    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

    {{-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        @csrf
        <input type="text" name="query" placeholder="بحث" title="Enter search keyword"> &nbsp;
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon--> --}}


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset("control/assets/img/profile-img.jpg")}}" alt="Profile" class="rounded-circle"> &nbsp;
            <span class="d-none d-md-block dropdown-toggle ps-2">اسم المستخدم</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>الاسم  المستخدم كامل</h6>
              <span>وظيفتة</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route("my-account")}}">
                <i class="bi bi-person"></i>
                <span>صفحتى الشخصية</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route("my-account")}}">
                <i class="bi bi-gear"></i>
                <span>اعدادات الحساب </span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route("F.A.Q")}}">
                <i class="bi bi-question-circle"></i>
                <span>مساعدة ؟</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route("login")}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>تسجيل خروج </span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">عدد متغير</span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
               لديك 4 اشعارات جديدة
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">اعرض المزيد</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>تنبية مهم</h4>
                  <p>محتوى التنبية ........</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>حدث خطأ</h4>
                  <p>محتوى الخطأمع التوضيح</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>تم الارسال</h4>
                  <p>المحتوى ........</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>استفسار</h4>
                  <p>نص استفسار.......</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="dropdown-footer">
                <a href="#">اعرض كل التنبيهات</a>
              </li>

            </ul><!-- End Notification Dropdown Items -->

          </li><!-- End Notification Nav -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">عدد متغير</span>
            </a><!-- End Messages Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
              <li class="dropdown-header">
               لديك 3 شكاوى جديدة
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">اعرض المزيد</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="{{asset("control/assets/img/messages-1.jpg")}}" alt="" class="rounded-circle">
                  <div>
                    <h4>اسم الشخص</h4>
                    <p>نص الشكوى ...</p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="{{asset("control/assets/img/messages-2.jpg")}}" alt="" class="rounded-circle">
                  <div>
                    <h4>اسم الشخص 2</h4>
                    <p>نص الشكوى...</p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="{{asset("control/assets/img/messages-3.jpg")}}" alt="" class="rounded-circle">
                  <div>
                    <h4>اسم الشخص</h4>
                    <p>نص الشكوى...</p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-footer">
                <a href="#">عرض جميع الرسائل</a>
              </li>

            </ul><!-- End Messages Dropdown Items -->

          </li><!-- End Messages Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

