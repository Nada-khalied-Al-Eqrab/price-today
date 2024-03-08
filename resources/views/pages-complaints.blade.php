@extends('layeout.master')

@section('title',' لوحة تحكم | سعرك اليوم')

@section('page')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>الصفحات</h1>&nbsp;
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">الشكاوى و الرد على الشكاوى </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">عنوان الشكوى </h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">عنوان الشكوى </h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div>
      </div>

      <section class="section contact">

        <div class="row gy-4">

      <div class="col-xl-6">
        <div class="card p-4">
            <h1>الرد على الشكاوى </h1>
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div>
        <

      </div>
    </section>

  </main><!-- End #main -->

  @endsection
