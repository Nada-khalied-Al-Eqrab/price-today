
 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route("dash")}}">
          <i class="bi bi-grid"></i>&nbsp;
          <span>لوحة التحكم</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i>&nbsp;<span>النماذج</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route("form_elements")}}">
              <span>عناصر النماذج</span><i class="bi bi-circle"></i>
            </a>
          </li>
          <li>
            <a href="{{route("forms_layouts")}}">
              <span>شكل النماذج</span><i class="bi bi-circle"></i>
            </a>
          </li>
          <li>
            <a href="{{route("forms_editors")}}">
              <span>تعديل النماذج</span><i class="bi bi-circle"></i>
            </a>
          </li>
          <li>
            <a href="{{route("forms_validation")}}">
            <span>صلاحيات النموذج</span><i class="bi bi-circle"></i>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i>&nbsp;<span>الجداول</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route("tables_general")}}">
          <span>الجداول العامة </span><i class="bi bi-circle"></i>
            </a>
          </li>
          <li>
            <a href="{{route("tables_data")}}">
             </i><span>جداول البيانات</span><i class="bi bi-circle"></i>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i>&nbsp;<span>النسب و التحليلات الاحصائية</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route("charts_complaints")}}">
              <span>تحليلات الشكاوى و المبيعات</span><i class="bi bi-circle"></i>
            </a>
          </li>
          <li>
            <a href="{{route("charts_price")}}">
            <span>تحليلات الاسعار و الدخل </span><i class="bi bi-circle"></i>
            </a>
          </li>
          <li>
            <a href="{{route("charts_website")}}">
          <span>تحليلات زيارات الموقع</span><i class="bi bi-circle"></i>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-heading">الصفحات</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("my-account")}}">
          <i class="bi bi-person"></i>&nbsp;
          <span>الصفحة الشخصية </span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("complaints")}}">
          <i class="bi bi-file-earmark"></i>&nbsp;
          <span>الشكاوى</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("F.A.Q")}}">
          <i class="bi bi-question-circle"></i>&nbsp;
          <span> مساعدة ؟</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("contact")}}">
          <i class="bi bi-envelope"></i>&nbsp;
          <span>التواصل</span>
        </a>
      </li><!-- End Contact Page Nav -->



{{--
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("error404")}}">
          <i class="bi bi-dash-circle"></i>
          <span>خطأ 404</span>
        </a>
      </li><!-- End Error 404 Page Nav --> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("creat-account")}}">
          <i class="bi bi-card-list"></i>&nbsp;
          <span>انشاء حساب</span>
        </a>
      </li><!-- End Register Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("login")}}">
          <i class="bi bi-box-arrow-in-right"></i>&nbsp;
          <span>   تسجيل الخروج   </span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->


