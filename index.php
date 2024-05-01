<?php 
get_header();
?>
      <!-- Main row -->
      <div class="row g-4 g-lg-5">
        <div class="col-12 col-lg-4 col-xl-3">
          <!-- Section Navigation -->
          <div class="nav-wrapper">
            <div class="section-nav">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#about">
                    <span class="nav-link-desktop">درباره من</span>
                    <span class="nav-link-mobile">د</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#portfolio">
                    <span class="nav-link-desktop">نمونه کارها</span>
                    <span class="nav-link-mobile">ن</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">
                    <span class="nav-link-desktop">خدمات</span>
                    <span class="nav-link-mobile">خ</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#testimonial">
                    <span class="nav-link-desktop">مشتریان</span>
                    <span class="nav-link-mobile">م</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#resume">
                    <span class="nav-link-desktop">رزومه</span>
                    <span class="nav-link-mobile">ر</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#blog">
                    <span class="nav-link-desktop">وبلاگ</span>
                    <span class="nav-link-mobile">و</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">
                    <span class="nav-link-desktop">تماس با من</span>
                    <span class="nav-link-mobile">ت</span>
                    <span class="nav-circle"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- end section-nav -->
          </div>
          <!-- end nav-wrapper -->
          <!-- end Section Navigation -->
        </div>
        <!-- end col -->

        <div class="col-12 col-lg-8 col-xl-9">
          <!-- Sections wrapper -->
          <div
            class="sections-wrapper"
            data-bs-spy="scroll"
            data-bs-target=".section-nav"
          >
            <!-- About section -->
            <div class="section-box" id="about">
              <div class="row g-4 g-xl-5">
                <div class="col-12 col-xl-4">
                  <!-- Hero Avatar -->
                  <div class="hero-avatar">
                    <img
                      src="<?php echo get_template_directory_uri();  ?>/assets/images/hero-avatar.jpg"
                      alt=""
                      data-rjs="2"
                    />
                    <div class="hero-avatar-text">
                      <span
                        class="typer"
                        id="typer1"
                        data-words="سلام!, من امیر عباسیم"
                        data-delay="50"
                        data-deleteDelay="1500"
                      ></span
                      ><span class="cursor" data-owner="typer1"></span>
                    </div>
                  </div>
                  <!-- end Hero Avatar -->
                </div>
                <div class="col-12 col-xl-8">
                  <h6 class="title-heading mb-4" data-backdrop-text="درباره من">
                    درباره من
                  </h6>
                  <h1>طراح UI و UX. عکاس</h1>
                  <ul class="list-inline-pills mt-3">
                    <li>
                      <i class="fa-brands fa-html5 ps-2"></i> HTML5 & CSS3
                      <div class="d-inline-block font-family-mono font-small">
                        (<span class="counter">94</span>%)
                      </div>
                    </li>
                    <li>
                      <i class="fa-brands fa-bootstrap ps-2"></i> Bootstrap
                      <div class="d-inline-block font-family-mono font-small">
                        (<span class="counter">98</span>%)
                      </div>
                    </li>
                    <li>
                      <i class="fa-solid fa-magnifying-glass ps-2"></i> SEO
                      <div class="d-inline-block font-family-mono font-small">
                        (<span class="counter">75</span>%)
                      </div>
                    </li>
                  </ul>
                  <p class="mt-1">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <!-- end row -->
              <div class="row g-4 mt-1">
                <div class="col-12 col-xl-4">
                  <div class="d-flex align-items-center">
                    <div class="d-inline-block">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        <span class="counter">12</span>
                      </h1>
                    </div>
                    <div class="d-inline-block pe-2">
                      <h4 class="line-height-100 fw-normal mb-0">+</h4>
                      <p class="mono-heading">سال تجربه</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="d-flex align-items-center">
                    <div class="d-inline-block">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        <span class="counter">20</span>
                      </h1>
                    </div>
                    <div class="d-inline-block pe-2">
                      <h4 class="line-height-100 fw-normal mb-0">هزار</h4>
                      <p class="mono-heading">ساعت کار</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4">
                  <div class="d-flex align-items-center">
                    <div class="d-inline-block">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        <span class="counter">90</span>
                      </h1>
                    </div>
                    <div class="d-inline-block pe-2">
                      <h4 class="line-height-100 fw-normal mb-0">+</h4>
                      <p class="mono-heading">پروژه های انجام شده</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end section-box -->
            <!-- end About section -->

            <!-- Portfolio section -->
            <div class="section-box mt-4" id="portfolio">
              <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                  <h6
                    class="title-heading mb-3"
                    data-backdrop-text="نمونه کارها"
                  >
                    نمونه کارها
                  </h6>
                  <h1>آخرین آثار من</h1>
                  <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="filter mt-4 mt-lg-5 mb-3">
                <ul>
                  <li data-filter="all">نمایش همه</li>
                  <li data-filter=".category-1">اول</li>
                  <li data-filter=".category-2">دوم</li>
                </ul>
              </div>
              <!-- end Portfolio Filter -->
              <div class="row g-4 portfolio-grid">
                <!-- Portfolio Item 1 -->
                <div class="col-12 col-xl-6 portfolio-item category-1">
                  <div class="portfolio-box">
                    <!-- Image -->
                    <img
                      src="<?php echo get_template_directory_uri();  ?>/assets/images/portfolio-img.jpg"
                      alt=""
                      data-rjs="2"
                    />
                    <!-- Category -->
                    <span class="portfolio-category">دسته بندی</span>
                    <!-- Caption -->
                    <div class="portfolio-caption">
                      <h1><a href="portfolio-single-dark.html">عنوان پروژه</a></h1>
                    </div>
                  </div>
                  <!-- end portfolio-box -->
                </div>
                <!-- Portfolio Item 2 -->
                <div class="col-12 col-xl-6 portfolio-item category-2">
                  <div class="portfolio-box">
                    <!-- Image -->
                    <img
                      src="<?php echo get_template_directory_uri();  ?>/assets/images/portfolio-img-1.jpg"
                      alt=""
                      data-rjs="2"
                    />
                    <!-- Category -->
                    <span class="portfolio-category">دسته بندی</span>
                    <!-- Caption -->
                    <div class="portfolio-caption">
                      <h1><a href="portfolio-single-dark.html">عنوان پروژه</a></h1>
                    </div>
                  </div>
                  <!-- end portfolio-box -->
                </div>
                <!-- Portfolio Item 3 -->
                <div class="col-12 col-xl-6 portfolio-item category-1">
                  <div class="portfolio-box">
                    <!-- Image -->
                    <img
                      src="<?php echo get_template_directory_uri();  ?>/assets/images/portfolio-img-2.jpg"
                      alt=""
                      data-rjs="2"
                    />
                    <!-- Category -->
                    <span class="portfolio-category">دسته بندی</span>
                    <!-- Caption -->
                    <div class="portfolio-caption">
                      <h1><a href="portfolio-single-dark.html">عنوان پروژه</a></h1>
                    </div>
                  </div>
                  <!-- end portfolio-box -->
                </div>
                <!-- Portfolio Item 4 -->
                <div class="col-12 col-xl-6 portfolio-item category-2">
                  <div class="portfolio-box">
                    <!-- Image -->
                    <img
                      src="<?php echo get_template_directory_uri();  ?>/assets/images/portfolio-img-3.jpg"
                      alt=""
                      data-rjs="2"
                    />
                    <!-- Category -->
                    <span class="portfolio-category">دسته بندی</span>
                    <!-- Caption -->
                    <div class="portfolio-caption">
                      <h1><a href="portfolio-single-dark.html">عنوان پروژه</a></h1>
                    </div>
                  </div>
                  <!-- end portfolio-box -->
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end section-box -->
            <!-- end Portfolio section -->

            <!-- Services section -->
            <div class="section-box mt-4" id="services">
              <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                  <h6 class="title-heading mb-3" data-backdrop-text="خدمات">
                    خدمات
                  </h6>
                  <h1>کاری که من انجام می دهم</h1>
                  <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="mt-4 mt-lg-5">
                <ul class="services-list">
                  <!-- Services Item 1 -->
                  <li class="services-item">
                    <div class="services-number">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        01
                      </h1>
                    </div>
                    <div class="services-title icon-xl">
                      <i class="bi bi-code-slash"></i>
                      <h6 class="mono-heading">توسعه وب و موبایل</h6>
                    </div>
                    <div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </p>
                    </div>
                  </li>
                  <!-- Services Item 2 -->
                  <li class="services-item">
                    <div class="services-number">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        02
                      </h1>
                    </div>
                    <div class="services-title icon-xl">
                      <i class="bi bi-laptop"></i>
                      <h6 class="mono-heading">بازاریابی دیجیتال</h6>
                    </div>
                    <div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                      </p>
                    </div>
                  </li>
                  <!-- Services Item 3 -->
                  <li class="services-item">
                    <div class="services-number">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        03
                      </h1>
                    </div>
                    <div class="services-title icon-xl">
                      <i class="bi bi-gear"></i>
                      <h6 class="mono-heading">برندینگ و استراتژی</h6>
                    </div>
                    <div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ
                      </p>
                    </div>
                  </li>
                  <!-- Services Item 4 -->
                  <li class="services-item">
                    <div class="services-number">
                      <h1
                        class="font-family-mono fw-semi-bold stroke-text display-4"
                      >
                        04
                      </h1>
                    </div>
                    <div class="services-title icon-xl">
                      <i class="bi bi-person"></i>
                      <h6 class="mono-heading">تست کاربر و پرسونا</h6>
                    </div>
                    <div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- end section-box -->
            <!-- end Services section -->

            <!-- Testimonial section -->
            <div class="section-box mt-4" id="testimonial">
              <div class="row align-items-center">
                <div class="col-6">
                  <h6 class="title-heading mb-0" data-backdrop-text="مشتریان">
                    آنچه مردم می گویند
                  </h6>
                </div>
                <div class="col-6 text-start">
                  <!-- Slider Navigation -->
                  <div
                    class="button-circle button-circle-sm button-circle-outline swiper-custom-prev"
                  >
                    <i class="bi bi-arrow-right"></i>
                  </div>
                  <div
                    class="button-circle button-circle-sm button-circle-outline swiper-custom-next"
                  >
                    <i class="bi bi-arrow-left"></i>
                  </div>
                  <!-- end Slider Navigation -->
                </div>
              </div>
              <!-- end row -->
              <div class="swiper testimonial-swiper mt-4">
                <div class="swiper-wrapper">
                  <!-- Swiper item 1 -->
                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="d-block text-yellow mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </p>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <div class="d-inline-block ms-3">
                        <img
                          class="img-mask-avatar-sm"
                          src="<?php echo get_template_directory_uri();  ?>/assets/images/testimonial-avatar-1.jpg"
                          alt=""
                          data-rjs="2"
                        />
                      </div>
                      <div class="d-inline-block">
                        <h5 class="fw-medium m-0 line-height-140">
                          امیر عباسی
                        </h5>
                        <span class="font-small fw-normal"> مدیر پروژه </span>
                      </div>
                    </div>
                  </div>
                  <!-- Swiper item 2 -->
                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="d-block text-yellow mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </p>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <div class="d-inline-block ms-3">
                        <img
                          class="img-mask-avatar-sm"
                          src="<?php echo get_template_directory_uri();  ?>/assets/images/testimonial-avatar-2.jpg"
                          alt=""
                          data-rjs="2"
                        />
                      </div>
                      <div class="d-inline-block">
                        <h5 class="fw-medium m-0 line-height-140">
                          امیر عباسی
                        </h5>
                        <span class="font-small fw-normal"> مدیر پروژه </span>
                      </div>
                    </div>
                  </div>
                  <!-- Swiper item 3 -->
                  <div class="swiper-slide">
                    <div class="testimonial-box">
                      <div class="d-block text-yellow mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                        چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                      </p>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <div class="d-inline-block ms-3">
                        <img
                          class="img-mask-avatar-sm"
                          src="<?php echo get_template_directory_uri();  ?>/assets/images/testimonial-avatar-3.jpg"
                          alt=""
                          data-rjs="2"
                        />
                      </div>
                      <div class="d-inline-block">
                        <h5 class="fw-medium m-0 line-height-140">
                          امیر عباسی
                        </h5>
                        <span class="font-small fw-normal"> مدیر پروژه </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end swiper-wrapper -->
              </div>
              <!-- end swiper -->
            </div>
            <!-- end section-box -->
            <!-- end Testimonial section -->

            <!-- Resume section -->
            <div class="section-box mt-4" id="resume">
              <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                  <h6 class="title-heading mb-3" data-backdrop-text="رزومه">
                    رزومه
                  </h6>
                  <h1>تحصیلات و تجربیات</h1>
                  <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="row g-4 g-lg-5 mt-0">
                <div class="col-12 col-xl-6">
                  <div class="resume-wrapper">
                    <div class="icon-2xl mb-3">
                      <i class="bi bi-mortarboard line-height-100"></i>
                    </div>
                    <!-- Education box 1 -->
                    <div class="resume-box">
                      <span class="resume-date">1399 - 1402</span>
                      <h5 class="fw-medium">مدرک لیسانس بازرگانی</h5>
                      <span>@ دانشگاه بازرگانی</span>
                    </div>
                    <!-- Education box 2 -->
                    <div class="resume-box">
                      <span class="resume-date">1397 - 1399</span>
                      <h5 class="fw-medium">مدرک کارشناسی ارشد طراحی</h5>
                      <span>@ دانشگاه IT</span>
                    </div>
                    <!-- Education box 3 -->
                    <div class="resume-box">
                      <span class="resume-date">1393 - 1397</span>
                      <h5 class="fw-medium">لیسانس طراحی</h5>
                      <span>@ دانشگاه طراحی</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6">
                  <div class="resume-wrapper">
                    <div class="icon-2xl mb-3">
                      <i class="bi bi-briefcase line-height-100"></i>
                    </div>
                    <!-- Employment box 1 -->
                    <div class="resume-box">
                      <span class="resume-date">1399 - حاضر</span>
                      <h5 class="fw-medium">مدیر عملیات</h5>
                      <span>@ FlaTheme</span>
                    </div>
                    <!-- Employment box 2 -->
                    <div class="resume-box">
                      <span class="resume-date">1397 - 1399</span>
                      <h5 class="fw-medium">طراح ارشد</h5>
                      <span>@ FlaTheme</span>
                    </div>
                    <!-- Employment box 3 -->
                    <div class="resume-box">
                      <span class="resume-date">1394 - 1397</span>
                      <h5 class="fw-medium">طراح UI و UX</h5>
                      <span>@ FlaTheme</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end section-box -->
            <!-- end Resume section -->

            <!-- Clients section -->
            <div class="section-box mt-4" id="clients">
              <h6 class="title-heading mb-4" data-backdrop-text="حامیان من">
                حامیان من
              </h6>
              <div class="swiper clients-swiper">
                <div class="swiper-wrapper">
                  <!-- Client box 1 -->
                  <div class="swiper-slide client-box">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri();  ?>/assets/images/client-1-light.png"
                        alt=""
                        data-rjs="2"
                      />
                    </a>
                  </div>
                  <!-- Client box 2 -->
                  <div class="swiper-slide client-box">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri();  ?>/assets/images/client-2-light.png"
                        alt=""
                        data-rjs="2"
                      />
                    </a>
                  </div>
                  <!-- Client box 3 -->
                  <div class="swiper-slide client-box">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri();  ?>/assets/images/client-3-light.png"
                        alt=""
                        data-rjs="2"
                      />
                    </a>
                  </div>
                  <!-- Client box 4 -->
                  <div class="swiper-slide client-box">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri();  ?>/assets/images/client-4-light.png"
                        alt=""
                        data-rjs="2"
                      />
                    </a>
                  </div>
                  <!-- Client box 5 -->
                  <div class="swiper-slide client-box">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri();  ?>/assets/images/client-5-light.png"
                        alt=""
                        data-rjs="2"
                      />
                    </a>
                  </div>
                  <!-- Client box 6 -->
                  <div class="swiper-slide client-box">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri();  ?>/assets/images/client-3-light.png"
                        alt=""
                        data-rjs="2"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end section-box -->
            <!-- end Clients section -->

            <!-- Blog section -->
            <div class="section-box mt-4" id="blog">
              <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                  <h6 class="title-heading mb-3" data-backdrop-text="وبلاگ">
                    وبلاگ
                  </h6>
                  <h1>آخرین پست های وبلاگ</h1>
                  <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                </div>
              </div>
              <div class="mt-4 mt-lg-5">
                <!-- Blog Post box 1 -->
                <div class="blog-post-box">
                  <div class="blog-post-img">
                    <a href="blog-single-dark.html">
                      <img src="<?php echo get_template_directory_uri();  ?>/assets/images/blog-post-1.jpg" alt="" />
                    </a>
                    <div class="blog-post-category">
                      <a href="#">دسته بندی</a>
                    </div>
                  </div>
                  <div class="blog-post-caption">
                    <p class="mb-2">منتشر شده در 25 اردیبهشت</p>
                    <h2>
                      <a class="link-decoration" href="blog-single-dark.html">عنوان پست وبلاگ</a>
                    </h2>
                    <a class="button button-sm button-outline mt-2" href="blog-single-dark.html">
                      بیشتر بخوانید
                    </a>
                  </div>
                </div>
                <!-- Blog Post box 2 -->
                <div class="blog-post-box">
                  <div class="blog-post-img">
                    <a href="blog-single-dark.html">
                      <img src="<?php echo get_template_directory_uri();  ?>/assets/images/blog-post-2.jpg" alt="" />
                    </a>
                    <div class="blog-post-category">
                      <a href="#">دسته بندی</a>
                    </div>
                  </div>
                  <div class="blog-post-caption">
                    <p class="mb-2">منتشر شده در 25 اردیبهشت</p>
                    <h2>
                      <a class="link-decoration" href="blog-single-dark.html">عنوان پست وبلاگ</a>
                    </h2>
                    <a class="button button-sm button-outline mt-2" href="blog-single-dark.html">
                      بیشتر بخوانید
                    </a>
                  </div>
                </div>
                <!-- Blog Post box 3 -->
                <div class="blog-post-box">
                  <div class="blog-post-img">
                    <a href="blog-single-dark.html">
                      <img src="<?php echo get_template_directory_uri();  ?>/assets/images/blog-post-3.jpg" alt="" />
                    </a>
                    <div class="blog-post-category">
                      <a href="#">دسته بندی</a>
                    </div>
                  </div>
                  <div class="blog-post-caption">
                    <p class="mb-2">منتشر شده در 25 اردیبهشت</p>
                    <h2>
                      <a class="link-decoration" href="blog-single-dark.html">عنوان پست وبلاگ</a>
                    </h2>
                    <a class="button button-sm button-outline mt-2" href="blog-single-dark.html">
                      بیشتر بخوانید
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end section-box -->
            <!-- end Blog section -->

            <!-- Contact section -->
            <div class="section-box mt-4" id="contact">
              <div class="row">
                <div class="col-12 col-md-10 col-xl-8">
                  <h6
                    class="title-heading mb-3"
                    data-backdrop-text="تماس با من"
                  >
                    در تماس باشید
                  </h6>
                  <h1>با من در ارتباط باشید</h1>
                  <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه
                    و مجله در ستون و سطرآنچنان که لازم است
                  </p>
                  <ul class="list-inline-pills mt-4">
                    <li>
                      تلفن:
                      <span class="show-number-ltr"> +98 912 345 67 89</span>
                    </li>
                    <li>ایمیل: gray@example.com</li>
                    <li>آدرس: ایران، تهران</li>
                  </ul>
                </div>
              </div>
              <!-- end row -->
              <div class="mt-4 mt-lg-5">
                <!-- Contact Form -->
                <div class="contact-form">
                  <form method="post" id="contactform">
                    <div class="row gx-3 gy-0">
                      <div class="col-12 col-md-6">
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="نام"
                          required
                        />
                      </div>
                      <div class="col-12 col-md-6">
                        <input
                          type="email"
                          id="email"
                          name="email"
                          placeholder="ایمیل"
                          required
                        />
                      </div>
                    </div>
                    <input
                      type="text"
                      id="subject"
                      name="subject"
                      placeholder="موضوع"
                      required
                    />
                    <textarea
                      name="message"
                      id="message"
                      placeholder="متن پیام"
                    ></textarea>
                    <button class="button button-md" type="submit">
                      ارسال پیام
                    </button>
                  </form>
                  <!-- Submit result -->
                  <div class="submit-result">
                    <span id="success"
                      >Thank you! Your Message has been sent.</span
                    >
                    <span id="error"
                      >Something went wrong, Please try again!</span
                    >
                  </div>
                </div>
                <!-- end contact-form -->
              </div>
            </div>
            <!-- end section-box -->
            <!-- end Contact section -->

            <!-- Google Maps -->
            <div
              id="map1"
              class="gmap gmap-sm mt-4 border-radius box-shadow"
              data-latitude="51.513569"
              data-longitude="-0.123443"
            ></div>
          </div>
          <!-- end sections-wrapper -->
        </div>
        <!-- end col -->
      </div>
      <!-- end main row -->
    </div>
    <!-- end main container -->
<?php
get_footer();

?>