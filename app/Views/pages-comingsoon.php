<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Coming Soon | Minia - Minimal Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

            <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

    <!-- <body data-layout="horizontal"> -->
        <div class="preview-img">
            <div class="swiper-container preview-thumb">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-bg" style="background-image: url(./assets/images/bg-1.jpg);"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" style="background-image: url(./assets/images/bg-2.jpg);"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" style="background-image: url(./assets/images/bg-3.jpg);"></div>
                    </div>
                </div>
            </div>
            <!-- preview-thumb -->
            <div class="swiper-container preview-thumbsnav">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <img src="assets/images/bg-1.jpg" alt=""
                                class="avatar-sm nav-img rounded-circle">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="assets/images/bg-2.jpg" alt=""
                                class="avatar-sm nav-img rounded-circle">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="assets/images/bg-3.jpg" alt=""
                                class="avatar-sm nav-img rounded-circle">
                        </div>
                    </div>
                </div>
            </div>
            <!-- preview-thumb -->
        </div>
        <!-- preview bg -->

        <div class="coming-content min-vh-100 py-4 px-3 py-sm-5">
            <div class="bg-overlay bg-primary"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center py-4 py-sm-5">

                            <div class="mb-5">
                                <a href="/">
                                    <img src="assets/images/logo-sm.svg" alt="" height="30" class="me-1"><span class="logo-txt text-white font-size-22">Minia</span>
                                </a>
                            </div>
                            <h3 class="text-white mt-5">Let's get started with Minia</h3>
                            <p class="text-white-50 font-size-16">Donec pede justo fringilla vel aliquet nec vulputate eget arcu. In enim justo, rhoncus ut imperdiet a venenatis vitae, justo felis</p>
                            
                            <div data-countdown="2021/12/31" class="counter-number mt-5"></div>
                        
                            <form class="app-search mt-5 mx-auto">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <button class="btn btn-primary" type="button"><i class="bx bx-paper-plane align-middle"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- coming-content -->

        <!-- JAVASCRIPT -->
       <?= $this->include('partials/vendor-scripts') ?>
        <!-- swiper js -->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        <!-- Plugins js-->
        <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>

        <!-- Countdown js -->
        <script src="assets/js/pages/coming-soon.init.js"></script>
    </body>
</html>
