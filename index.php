<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <script src="https://kit.fontawesome.com/5f006efe51.js" crossorigin="anonymous"></script>
    <title>Root-dentity</title>

    <style>
    body {
        margin: 0 !important;
        padding: 0 !important;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="header">
        <div class="container">
            <div class="logo text-center">
                <!-- Welcome to Root-dentity -->
                <img src="./img/logo.png" alt="logo" class="logo-im">
                <p class="logo-welcome">Welcome to Root-dentity</p>
            </div>



            <div class="container primary-section">
                <div class="row">
                    <!-- Coming Soon left section -->
                    <div class="col-md-7 text-center text-md-left">
                        <p class="coming-soon">Coming Soon</p>
                        <h1>Where in the world are you from ?</h1>
                        <p class="text-info-1">The places your ancestors called home are encoded in your Physical
                            features. Ethnic groups
                            historically
                            come from the same geographic regions and draw from a local gene pool. <strong>The app
                                analyzes your
                                face to determine which portions are estimated to originate from each</strong></p>

                        <!-- Be notified Form 1 -->
                        <div>
                            <p class="form-mail-text">Get notified when we launch !</p>
                        </div>

                        <form action="insert.php" method="POST" id="my-form-1" class>
                            <div class="input-group mx-auto ml-md-0  mb-3 form-mail">
                                <input type="email" name="email" class="form-control form-input"
                                    placeholder="&#xf0e0 Email" id="my-form-input-1" required>
                                <div class="input-group-append">
                                    <button class="input-group-text bg-orange" id="basic-addon2" type="submit"
                                        name="submit" value="submit">GET
                                        NOTIFIED</button>
                                </div>
                            </div>
                        </form>
                        <!-- End of form 1 -->

                    </div>

                    <!-- Right Phone -->

                    <div class="col-md-5 text-center hero-phone-image">
                        <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594739956/iPhone_11_Pro_azlgq3.png"
                            alt="" class="vert-move">
                    </div>
                </div>
            </div>

            <!-- Watch the overview -->
            <div class="video-bg">
                <h2 class="text-center video-header">Watch the Overview</h2>
                <div class="video-box container">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/afxKcToF7Kk"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>


            <!-- Phone Screen Carousel -->
            <div class="carousel-container container">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center"> <img
                                src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                                alt=""> </div>
                        <div class="swiper-slide text-center"> <img
                                src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                                alt=""> </div>
                        <div class="swiper-slide text-center"> <img
                                src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                                alt=""> </div>
                        <div class="swiper-slide text-center"> <img
                                src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                                alt=""> </div>
                        <div class="swiper-slide text-center"> <img
                                src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                                alt=""> </div>
                        <div class="swiper-slide text-center"> <img
                                src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                                alt=""> </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>


            <!-- Be notified Form 2 -->
            <div class="call-to-action-2 text-center">
                <p class="form-mail-text">Get notified when we launch !</p>
                </>
                <form action="insert.php" method="POST" id="my-form-2">
                    <div class="input-group mx-auto mb-3 form-mail mx-auto form-2">
                        <input type="email" name="email" class="form-control form-input" id="my-form-input-2"
                            placeholder="&#xf0e0 Email" required>
                        <div class="input-group-append">
                            <button class="input-group-text bg-orange" id="basic-addon2" type="submit" name="submit"
                                value="submit">GET NOTIFIED</button>
                        </div>
                    </div>
                </form>

                <!-- End of form 2-->
            </div>
    </section>

    <section class="app-description">
        <div class="container text-center app-description-h3-container">
            <h3>Let’s Get You Connected to your Roots</h3>
        </div>

        <div class="container app-description-container">
            <div class="row">
                <div class="col-4">
                    <div class="px-auto app-description-text-1">
                        <p class="move-1" data-aos="fade-down">With the use of Facial identification
                            technology and Artificial Inteligence, Root-dentity traces your ancestery and history.</p>
                        <hr data-aos="zoom-in" data-aos-offset="150">
                        <p class="move-2" data-aos="fade-up">With the use of Facial identification
                            technology and Artificial Inteligence, Root-dentity traces your ancestery and history.</p>
                    </div>
                </div>

                <div class="col-4 text-center">
                    <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594797786/iPhone_11_Pro_Max_so1j2u.png"
                        alt="" class="app-description-img" data-aos="zoom-in" data-aos-duration="1700"
                        data-aos-anchor-placement="top-center">
                </div>

                <div class="col-4">
                    <div class="app-description-text-2">
                        <p class="move-3" data-aos="fade-down">With the use of Facial identification
                            technology and Artificial Inteligence, Root-dentity traces your ancestery and history.</p>
                        <hr data-aos="zoom-in" data-aos-offset="150">
                        <p class="move-4" data-aos="fade-up">With the use of Facial identification technology and
                            Artificial Inteligence, Root-dentity traces your ancestery and history.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container-fluid">
            <div class="row footer-col">
                <div class="col-lg-3 d-none d-lg-block">
                    <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594825928/footer2_l2doix.png" alt="">
                </div>
                <div class="col-lg-6 text-center pt-3">
                    <div class="footer-text-container mx-auto">
                        <h4 class="footer-heading mb-3">Download the future</h4>
                        <p class="footer-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit possimus
                            ipsam quam mollitia.
                            Expedita, maiores consectetur quam neque quo ducimus?</p>

                        <!-- Last Get Notified Form -->
                        <div>
                            <p class="form-mail-text">Get notified when we launch !</p>
                        </div>

                        <form action="insert.php" method="POST" id="my-form-3">
                            <div class="input-group mx-auto   mb-3 form-mail">
                                <input type="email" name="email" id="my-form-input-3" class="form-control form-input"
                                    placeholder="&#xf0e0 Email" required>
                                <div class="input-group-append">
                                    <button class="input-group-text bg-orange" id="basic-addon2" type="submit"
                                        name="submit" value="submit">GET
                                        NOTIFIED</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594826683/Screenshot_2020-07-15_at_4.07.00_PM_wp83vw.png"
                        alt="">
                </div>
            </div>
        </div>
    </section>



    <!-- MODAL -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="card">
                <div class="text-right cross"> <i class="fa fa-times"></i> </div>
                <div class="card-body text-center"> <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594893975/iPhone_11_Pro_Max_2_rekyep.png">
                    <h4>GREAT!</h4>
                    <p>We'd make sure you're notified as soon as we launch!</p> <button
                        class="btn btn-out btn-square continue">CONTINUE</button>
                </div>
            </div>
        </div>
    </div>



    <!-- ===== JAVASCRIPT ===== -->

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>



    <script>
    $(document).ready(function() {
        $('#my-form-1').on('submit', function(e) {
            //Stop the form from submitting itself to the server.
            e.preventDefault();
            var email = $('#my-form-input-1').val();
            $.ajax({
                type: "POST",
                url: 'insert.php',
                data: {
                    email: email,
                    submit: 'submit'
                },
                success: function(data) {
                    $("#myModal").modal('show');
                    $("#my-form-1")[0].reset();
                    // alert(data);
                }
            });
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#my-form-2').on('submit', function(e) {
            //Stop the form from submitting itself to the server.
            e.preventDefault();
            var email = $('#my-form-input-2').val();
            $.ajax({
                type: "POST",
                url: 'insert.php',
                data: {
                    email: email,
                    submit: 'submit'
                },
                success: function(data) {
                    $("#my-form-2")[0].reset();
                    alert(data);
                }
            });
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#my-form-3').on('submit', function(e) {
            //Stop the form from submitting itself to the server.
            e.preventDefault();
            var email = $('#my-form-input-3').val();
            $.ajax({
                type: "POST",
                url: 'insert.php',
                data: {
                    email: email,
                    submit: 'submit'
                },
                success: function(data) {
                    $("#my-form-3")[0].reset();
                    alert(data);
                }
            });
        });
    });
    </script>


    <!-- Initialize Swiper.JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: false,
        },
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    </script>
    <script type="text/javascript">
    $(document).on('scroll', function()) {
        $()
    }
    </script>

    <!-- AOS SCROLL EFFECT JS CDN AND INIT CODE -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        // offset: 150,
        duration: 1500
    });
    </script>
</body>

</html>