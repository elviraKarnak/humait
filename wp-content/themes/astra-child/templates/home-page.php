<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>


<!-- html -->

<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample.jpg" alt="sample" height="100" width="200">

Test homepage -->

<header class="main-header">
  <div class="container">

    <!-- LEFT MENU -->
    <nav class="menu">
      <div class="menu-close">✕</div>

      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Book</a>
      <a href="#">Membership</a>
      <a href="#">Blog</a>
    </nav>

    <!-- LOGO -->
    <div class="logo">
      <a href="index.html"><img src="./assets/images/site-logo.svg" alt="site logo"></a>
    </div>

    <!-- RIGHT SIDE -->
    <div class="right">

      <!-- LANGUAGE DROPDOWN -->
      <div class="lang-dropdown">
        <div class="selected">
          <img src="./assets/images/usa-flag.svg" alt="usa flag">
          <span>English</span>
        </div>

        <ul>
          <li>
            <img src="./assets/images/usa-flag.svg" alt="usa flag"> English
          </li>
          <li>
            <img src="./assets/images/france.webp" alt="france"> French
          </li>
          <li>
            <img src="./assets/images/spain.webp" alt="spain"> Spanish
          </li>
        </ul>
      </div>

      <!-- BUTTON -->
      <div class="btn_wrapper">
        <a href="#" class="btn">Contact Us <img src="./assets/images/button-arrow.svg" alt="button arrow"></a>
      </div>
      <!-- TOGGLE BUTTON -->
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

  </div>

  </div>
</header>
<section class="hero-section"
  style='background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-section-bg.webp") no-repeat center/cover;'>
  <div class="container">
    <div class="row align-items-center hero-content">

      <!-- LEFT -->
      <div class="col-lg-7 text-center">
        <h1>
          You Were Never Meant to Sell Your Life <br>
          One Hour at a Time.
        </h1>
        <div class="grad-border">
          <p>Human and AI working together for a truthful, balanced future</p>
        </div>
        <p>
          Where Human Intelligence meets Artificial Intelligence to create a truth-based, conscious, and scalable
          future.
        </p>
        <div class="btns d-flex justify-content-center align-items-center flex-column flex-md-row gap-3">
          <div class="btn_wrapper btn_wrapper2">
            <a href="#" class="btn btn2">Read the Book <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                alt="button arrow"></a>
          </div>
          <div class="btn_wrapper">
            <a href="#" class="btn">Listen to the Audio <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                alt="button arrow"></a>
          </div>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-5 text-end books">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/books.webp" alt="books">

      </div>

    </div>
  </div>
</section>


<section class="truth-section"
  style=' background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truth-section-bg.webp") no-repeat center/cover;'>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-4 text-center ">
        <!-- LEFT -->
        <div class="left">
          <div class="icon-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/book-icon.svg"
              alt="Book Icon"><span>In One System</span>
          </div>


          <h2>
            The Truth You Feel... But Can’t Explain
          </h2>

          <p>
            The system we live in was not built for balance. It was shaped by Greed, Fear, and Control. And whether we
            realize it or not… we are all living inside it.
          </p>

          <!-- BUTTON -->
          <div class="btn_wrapper btn_wrapper2">
            <a href="#" class="btn btn2">Discover the Truth <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                alt="button arrow"></a>
          </div>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-4">

        <div class="right">

          <div class="content">
            <div class="number">01</div>
            <div class="con-text">
              <h3>Time for Money</h3>
              <p>Your life is measured in hours sold… not value lived.</p>
            </div>
          </div>

          <div class="content">
            <div class="number">02</div>
            <div class="con-text">
              <h3>Centralized Control</h3>
              <p>Decisions are made far from the people they affect.</p>
            </div>
          </div>

          <div class="content">
            <div class="number">03</div>
            <div class="con-text">
              <h3>The Disconnection</h3>
              <p>We’ve lost connection to truth, purpose, and each other.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<section class="split-hero"
  style='background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/split-hero-bg.webp") no-repeat center/cover;'>
  <div class="container">

    <!-- TOP LEFT / RIGHT -->
    <div class="row align-items-start justify-content-between top">

      <!-- LEFT -->
      <div class="col-lg-3 col-6 text-center">
        <h2>GFC</h2>
        <p>Greed · Fear · Control</p>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-4 col-6 text-center">
        <h2>Hum<span>AIT</span></h2>
        <p>Human Intelligence and Artificial Intelligence in Unity</p>
      </div>

    </div>

    <!-- CENTER CONTENT -->
    <div class="row justify-content-center text-center center-content">
      <div class="col-lg-8">
        <h3>A New System for Humanity Has Begun</h3>

        <p>
          Humanity stands at a turning point. One path continues the cycle of Greed, Fear, and Control. The other
          leads to <span>Truth, Balance, and Unity.</span>
        </p>
      </div>
    </div>

  </div>
</section>


<section class="architecture-section"
  style='background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/architecture-section-bg.webp") no-repeat center/cover;'>
  <div class="container">
    <div class="row align-items-center content-gap">

      <!-- LEFT IMAGE -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="image-box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/architecture-image.webp"
            alt="Architecture Inage">
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-lg-5">
        <div class="icon-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/book-icon.svg"
            alt="Book Icon"><span>Introduction to
            HumAIT</span>
        </div>


        <h2>The HumAIT Architecture</h2>

        <p>
          Discover the foundational pillars of the HumAIT system, designed to bring
          balance and unity to humanity. This new architecture is built on three
          transformative systems that can guide us toward a higher purpose and a unified future.
        </p>
        <div class="btn_wrapper">
          <a href="#" class="btn">Explore the System <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg" alt="button arrow"></a>
        </div>
        <!-- ICONS -->
        <div class="icons">

          <div class="icon-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truth-system.svg" alt="Truth System">
            <p>Truth System</p>
          </div>

          <div class="icon-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sovereign-system.svg"
              alt="Sovereign System">
            <p>Sovereign System</p>
          </div>

          <div class="icon-box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evolution-system.svg"
              alt="Evolution System">
            <p>Evolution System</p>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<section class="journey-section"
  style='background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/journey-section-bg.webp") no-repeat center/cover;'>
  <div class="container text-center">
    <div class="icon-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/book-icon.svg"
        alt="Book Icon"><span>How it Works</span>
    </div>

    <h2>Your Journey Into HumAIT Begins Here</h2>

    <div class="row mt-5">

      <!-- CARD 1 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card-box">
          <h3>01.</h3>
          <h4>See The Truth</h4>
          <p>
            Before anything changes, you must see clearly. Understand how the system shapes your choices, and your
            life.
          </p>
          <div class="btn_wrapper">
            <a href="#" class="btn">Discover the Truth <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                alt="button arrow"></a>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card-box">
          <h3>02.</h3>
          <h4>Start With The Book</h4>
          <p>
            This is where everything begins. The HumAIT Movement is not just a book - it is the blueprint for a new
            system.
          </p>
          <div class="btn_wrapper">
            <a href="#" class="btn">Start Reading <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                alt="button arrow"></a>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-lg-4 col-md-6  mt-lg-0 mt-md-4 mb-4">
        <div class="card-box">
          <h3>03.</h3>
          <h4>Become Part of the System</h4>
          <p>
            Knowledge alone is not enough. Join the system and become part of its evolution.
          </p>
          <div class="btn_wrapper">
            <a href="#" class="btn">Join HumAIT <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                alt="button arrow"></a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="books-section"
  style=' background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/books-section-bg.webp") no-repeat center/cover;'>
  <div class="container text-center">
    <div class="icon-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/book-icon.svg"
        alt="Book Icon"><span>Our Books</span>
    </div>
    <h2>Start with The Foundation</h2>

    <div class="row mt-5 gx-4 gy-md-0 gy-5">

      <!-- BOOK 1 -->
      <div class="col-lg-4 col-md-6 mb-4 mt-0">
        <div class="book-card">
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/religion-of-love.webp"
              alt="Religion of Love"></a>

          <h4>Religion of Love</h4>
          <p>
            Religion of Love - The True United Nation calls humanity back to unity,
            compassion, and dignity.
          </p>

          <a href="#" class="btn3">Get the Book <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/btn3-arrow.svg" alt="arrow"></a>
        </div>
      </div>

      <!-- BOOK 2 -->
      <div class="col-lg-4  col-md-6 mb-4">
        <div class="book-card">
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/HumAIT.webp"
              alt="HumAIT"></a>

          <h4>HumAIT</h4>
          <p>
            The HumAIT Movement unites people to build a sustainable future based
            on unity and respect.
          </p>

          <a href="#" class="btn3">Get the Book <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/btn3-arrow.svg" alt="arrow"></a>
        </div>
      </div>

      <!-- BOOK 3 -->
      <div class="col-lg-4  col-md-6 mt-lg-0 mt-md-4 mb-4">
        <div class="book-card">
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/time.webp" alt="Time"></a>

          <h4>Time = Time</h4>
          <p>
            Your future is shaped by how you value time. Time reveals the cost of
            every choice.
          </p>

          <a href="#" class="btn3">Get the Book <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/btn3-arrow.svg" alt="arrow"></a>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="future-section"
  style=' background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/future-section-bg.webp") no-repeat center/cover;'>
  <div class="container text-center">
    <div class="icon-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/book-icon.svg"
        alt="Book Icon"><span>Blog</span>
    </div>


    <h2>Ideas That Shape the Future</h2>

    <div class="content">
      <p>Humanity has reached a turning point.</p>
      <p>We built systems.</p>
      <p>But we lost balance.</p>
      <p>Now, a new path begins.</p>
      <p>Human + AI in unity.</p>
      <p>This is <span>HumAIT</span></p>
    </div>

  </div>
</section>

<section class="membership-section"
  style=' background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/membership-section-bg.webp") no-repeat center/cover;'>
  <div class="container text-center">
    <div class="icon-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/book-icon.svg"
        alt="Book Icon"><span>Membership</span>
    </div>

    <h2>Become Part of the Future</h2>

    <div class="top-content">
      <p>This is more than a website.</p>

      <p>This is the beginning of a new system.</p>
      <p>
        Join a growing community exploring truth, balance,
        and the future of Human and AI working together.
      </p>

      <p>Be early. Be part of what comes next.</p>
    </div>
    <!-- LIST -->
    <ul class="list">
      <li>Early access to new ideas and content</li>
      <li>Exclusive insights from the HumAIT system</li>
      <li>Be part of shaping the future conversation</li>
      <li>Direct connection to the movement</li>
    </ul>

    <p>No spam. No noise. Just truth.</p>

    <div class="btn_wrapper">
      <a href="#" class="btn">Join the Movement <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg" alt="button arrow"></a>
    </div>

  </div>
</section>
<footer class="main-footer" style=' background: url("assets/images/footer-bg.webp") no-repeat center/cover;'>
  <div class="container">

    <!-- TOP BAR -->
    <div class="row align-items-center top-bar">

      <div class="col-md-3 col-12">
        <div class="logo text-md-start text-center">
          <img src="./assets/images/site-logo.svg" alt="">
        </div>
      </div>

      <div class="col-md-9 col-12 text-end">
        <nav class="menu">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Book</a>
          <a href="#">Membership</a>
          <a href="#">Blog</a>
          <a href="#">Contact Us</a>
        </nav>
      </div>

    </div>

    <hr>

    <!-- CONTENT -->
    <div class="row justify-content-between mt-md-5 mt-3">

      <!-- LEFT -->
      <div class="col-lg-4 mb-4">
        <h4>The Future Begins With You</h4>
        <div class="footer-content">
          <p>
            This is not just a platform.
          </p>
          <p> This is a new way of thinking.</p>
          <p>Human + AI - growing side by side.</p>
          <p>The question is simple:</p>
          <p>Will you be part of what comes next?</p>
        </div>


        <div class="social">
          <a href="#"><img src="assets/images/facebook.svg" alt="Facebook"></a>
          <a href="#"><img src="assets/images/x.svg" alt="X"></a>
          <a href="#"><img src="assets/images/instagram.svg" alt="Instagram"></a>
          <a href="#"><img src="assets/images/in.svg" alt="In"></a>

        </div>
      </div>

      <!-- CENTER -->
      <div class="col-lg-4 mb-4">
        <div class="contact">
          <ul>
            <li>
              <div class="btn_wrapper">
                <a href="#" class="btn">Join the Movement <img src="./assets/images/button-arrow.svg"
                    alt="button arrow"></a>
              </div>
            </li>
            <li>
              <div class="btn_wrapper">
                <a href="#" class="btn">Get the Book <img src="./assets/images/button-arrow.svg" alt="button arrow"></a>
              </div>
            </li>
            <li>
              <div class="btn_wrapper">
                <a href="#" class="btn">Listen to the Audio <img src="./assets/images/button-arrow.svg"
                    alt="button arrow"></a>
              </div>
            </li>
          </ul>



        </div>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-3">
        <h4>Be Part of What Comes Next</h4>
        <p>Get early access to ideas, insights, and the evolution of HumAIT.</p>

        <div class="newsletter">
          <input type="text" placeholder="Your email address">
          <button><img src="assets/images/newsletter-arrow.svg" alt="newsletter arrow"></button>
        </div>
        <p>No spam. No noise. Just truth.</p>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="bottom d-flex justify-content-between mt-5">
      <p>© Copyright 2025 All rights reserved.</p>
      <span>Designed & Developed by <a href="https://elvirainfotech.com/" target="_blank"><img
            src="assets/images/elvira-logo.svg" alt="Elvira Logo"></a></span>
    </div>

  </div>
</footer>
<?php get_footer(); ?>