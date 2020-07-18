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
</head>

<body>
    <!-- --------------------------------------------------------------===== Hero Section =====-------------------------------------------------------------- -->
    <section class="header">
        <div class="container">
            <div class="logo text-center">
                <!-- Welcome to Root-dentity -->
                <img src="./img/logo.png" alt="logo" class="logo-im">
                <p class="logo-welcome">Welcome to Root-dentity</p>
            </div>


            <div class="container primary-section pb-md-5 mb-md-5">
                <div class="row">
                    <!-- Coming Soon left section -->
                    <div class="col-md-7 text-center text-md-left">
                        <div class="coming-soon pb-2">C<span id="typing" class="coming-soon"></span></div>
                        <h1>Where in the world are you from ?</h1>
                        <p class="text-info-1">The places your ancestors called home are encoded in your Physical
                            features. <br> <strong>The app
                                analyzes your
                                face and estimates based on your different facial features where your'e from.</strong>
                        </p>

                        <!-- ===== Be notified Form 1 ===== -->
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
                        <!-- ===== End of form 1 ===== -->

                    </div>

                    <!-- ===== Right Phone ===== -->

                    <div class="col-md-5 text-center hero-phone-image">
                        <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594922126/iPhone_11_Pro_azlgq3_1_zsdrwk.png"
                            alt="" class="vert-move">
                    </div>
                </div>
            </div>


            <div class="mt-5 video-div" data-aos="fade-down">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe title="Embedded YouTube video." width="560" height="315"
                        src="https://res.cloudinary.com/dafsch2zs/video/upload/v1594936119/Final_w2ufms.mp4"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loading="lazy"
                        srcdoc="<style>*{padding:0;margin:0;overflow:hidden}img:first-child{position:absolute;top:calc(50vh - 36px);left:calc(50vw - 36px);}img:nth-child(2){width:100%;height:auto}</style><a href='https://res.cloudinary.com/dafsch2zs/video/upload/v1594938570/Final-1_kdamsr.mp4?autoplay=1'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAAA8FBMVEUAAAAAAADq6ur6+voAAAAuLi4GBgYAAABfX18AAAD19fUAAACenp7z8/Pw8PBOTk4REREAAAAAAAAAAADc3Nyvr69mZmZHR0cAAAAAAAAAAAAWFhYMDAwAAACjo6Nvb29sbGz8/Pzs7Ozp6emxsbFAQEAmJibQ0NDNzc3CwsK8vLyZmZkpKSkAAAAAAAAAAAAAAAAAAAAAAAAAAACgoKA7OzvHx8fFxcWAgIDm5uZYWFhUVFRLS0snJycODg4AAAAAAADl5eXY2NjExMSWlpaVlZUAAAAAAAAAAAAAAACoqKgAAACDg4MyMjIAAAD///9SmF7MAAAAT3RSTlOzAPf9Br20lMqn+7Dc+vnFt6yjgfHhy8NoR0G4tizezs3++Pbiwrvt7Ofm2rxYUU4lGxML3MDq6dP1x8fEvLZ8MfXw6NnZmolgPN+g0757xSwr/gAAA8RJREFUeAGtmGdT21oXhVdUJKsIW+7YuBcKpmBsTIeXlwtJSLL+/7+5xxLMBaxyRPx8Y0bzDPvI2mfvhW8JHG9+/2O++ID/Yv75vnmc9GysaHp0Z+ET1t3RNJtIazwjGqfU0KRFpwdFBOgdd7es2KStlHfdjo6A4sGplEg7DEu6rCj8hFK5DEs81NJFrScIxu6AkQzcMQRPrRSRVg9KqqhcYp/td2vjAlAY17r7ZzaXqJWgxLqWJDoxARRmvaCO9rWBDxjX7QEFvVkBgHkSL7q3AFQVCrZzBiIwctsUKFUA1n2cqOEAWz8p2MkjlvwOBT+3AKcRLdoEMHkg2e8gkU6f5MMEwGaU6IcDjPok95pIoblHsj8CnB+ropYD1DxS/QUJfqmkVwOc1mfRiQXMbdK+ghR5j7TngHXyUaSZwFghN0aQZLRBKmPA1D6I6sBtmbRHkGZkk+VboP5e1AJQIdUrZOBKJYcAWu9EJlAleY5MnJOsAuZ/okOgoJB7yMgeqRSAwzfRqQXMSKWJjDQVcgZYp6+iA0DvkVVkpkr2dOAgFGnF4KR38AV2gvMuaoGoAdyoZB5fIE+qN0AjEJUAl9zGl9gmXaC0FE0dGBtkDqv8X0caOXLDgDMVoqO3v1ah+s8WEgn+h0vgSIhKwVG3EQHJ/+WQTJusACUh8oFBzFFzSUp9eXIA+BqOAZ20jVhRSn2GTeoQmk2gQ54hXpRS3xnZgdDUAZfcTxCl1LdPuhCaErBLdlNECfV1yV3gDibwQNZSRAn11cgyYKIYvLRxiiihvjHZB4rwAY8spIgS6iuQNuBDoJJIESXVRxICJ5PoYlVkvIqsLKU9RpTWfC3tRf6wFzoimISHLf/6L1Jev+wP8jH5B1lCHZilfyKL1E9E6qO9kPloJdrIY2Ib8V7biOYDSlJjW6Q2NgXwtbRWeyHbalOa/6NM88+FzX+K2OtoIXsdYSpE356B2V9ekM9vV/ZkLVe2VgSG6xgi/nKs+Q0cvBu02l8dtNqAdbqu0W/9w2gwHg+zjsf5t/E4YmD35pBm7kUM7MEKMdnIskLMl09PAFNbXWpGWZeaUbDUxK1ZUid+HrtmhYvfXJFf/JR5sPjFraJlkv0uEun2SZZjV1HZ5fh6h4LhLeA0pNZ1RCK1rr8FCO0eBYPZaoDghgFCOwwQJCKNocol3kJEGnrTMJq6iDQWHpeow99hpCEVsty4CiNR3BsInu7XHvvIB1F9mz3vQjqIyh6NyYd1JR+f8EtZw7oQTcSHd2bRB/yieSfiQy3h4X8BIjMI7XNyKGoAAAAASUVORK5CYII=' alt='Play'><img src='https://res.cloudinary.com/dafsch2zs/image/upload/v1594919504/ezgif.com-optimize_k1v3ff.gif' alt='Thumbnail'></a>"></iframe>
                </div>
            </div>



            <!-- --------------------------------------------------------------===== App Screen Carousel =====-------------------------------------------------------------- -->
            <div class="carousel-container container" data-aos="zoom-in-down">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper pt-5">
                        <div class="swiper-slide text-center"> 
                            <div class="swiper-zoom-container">
                                <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594923043/iPhone_11_Pro_Max_so1j2u_1_1_qt6kx2.png" alt=""> 
                            </div>
                        </div>
                        <div class="swiper-slide text-center"> 
                            <div class="swiper-zoom-container">
                                <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594956239/iPhone_11_Pro_Max-1_1_ilckms.png" alt=""> 
                            </div>
                        </div>
                        <div class="swiper-slide text-center"> 
                            <div class="swiper-zoom-container">
                                <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594956239/iPhone_11_Pro_Max_1_z0cmt1.png" alt=""> 
                            </div>
                        </div>
                        <div class="swiper-slide text-center"> 
                            <div class="swiper-zoom-container">
                                <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594956240/iPhone_11_Pro-1_1_vljlhf.png" alt=""> 
                            </div>
                        </div>
                        <div class="swiper-slide text-center"> 
                            <div class="swiper-zoom-container">
                                <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594956240/scannnner_1_uqs9nq.png" alt=""> 
                            </div>
                        </div>
                        <div class="swiper-slide text-center"> 
                            <div class="swiper-zoom-container">
                                <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594971849/profile_1_tf6cgd.png" alt=""> 
                            </div>
                        </div>
                    </div>
                    <!-- ===== Add Pagination to Carousel ===== -->
                    <div class="swiper-pagination"></div>

                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->
                </div>
            </div>


            <!-- --------------------------------------------------------------===== Be notified Form 2 =====-------------------------------------------------------------- -->
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

                <!-- ===== End of form 2 ===== -->
            </div>
    </section>





    <!-- --------------------------------------------------------------===== APP DESCRIPTION =====-------------------------------------------------------------- -->

    <section class="app-description">
        <div class="container text-center app-description-h3-container">
            <h3>Let’s Get You Connected to your Roots</h3>
        </div>

        <div class="container app-description-container">
            <div class="row">

                <!-- ===== COLUMN 1 ===== -->
                <div class="col-4">
                    <div class="px-auto app-description-text-1">
                        <p class="move-1" data-aos="fade-down">With the use of Facial identification
                            technology and Artificial Inteligence, Root-dentity traces your ancestery and history.</p>
                        <hr data-aos="zoom-in" data-aos-offset="150">
                        <p class="move-2" data-aos="fade-up">Root-dentity® gives you insight into the past and identity
                            of your family’s history.</p>
                    </div>
                </div>

                <!-- ===== COLUMN 2 ===== -->
                <div class="col-4 text-center">
                    <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594923043/iPhone_11_Pro_Max_so1j2u_1_1_qt6kx2.png"
                        alt="" class="app-description-img" data-aos="zoom-in" data-aos-duration="1700"
                        data-aos-anchor-placement="top-center">
                </div>

                <!-- ===== COLUMN 3 ===== -->
                <div class="col-4">
                    <div class="app-description-text-2">
                        <p class="move-3" data-aos="fade-down">Root-dentity Smart family tree Feature would accurately
                            get the data and imageries of everyone in your lineage.</p>
                        <hr data-aos="zoom-in" data-aos-offset="150">
                        <p class="move-4" data-aos="fade-up">Root-dentity gives you the access to a community of people
                            you are related to with just a scan of your face. A rare opportunity to get connected to
                            your Lost loved ones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- --------------------------------------------------------------===== FOOTER =====-------------------------------------------------------------- -->

    <section class="footer">
        <div class="container-fluid">
            <div class="row footer-col">


                <!-- ===== COLUMN 1 ===== -->
                <div class="col-lg-3 d-none d-lg-block">
                    <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594959737/footer-left_1_gyx7nf.png"
                        data-aos="fade-right" data-aos-duration="3000" alt="">
                </div>


                <!-- ===== COLUMN 2 ===== -->

                <div class="col-lg-6 text-center pt-3">
                    <div class="footer-text-container mx-auto">
                        <h4 class="footer-heading mb-1">Get Ready for the future</h4>
                        <p class="footer-text">With state of the art R&D, we are set to move you 7 steps closer to your
                            roots. Tracing your roots has never been easier</p>

                        <!-- Last Get Notified Form (Form 3) -->
                        <div>
                            <p class="form-mail-text">Get notified when we launch !</p>
                        </div>

                        <form action="insert.php" method="POST" id="my-form-3">
                            <div class="input-group mx-auto   mb-0 form-mail">
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

                <!-- ===== COLUMN 3 ===== -->
                <div class="col-lg-3 text-right pt-5 mt-lg-5">
                    <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594924309/Screenshot_2020-07-15_at_4.07.00_PM_wp83vw_1_1_fzoxen.png"
                        alt="">
                </div>
            </div>
        </div>
    </section>



    <!-- --------------------------------------------------------------===== MODALS ====-------------------------------------------------------------- -->

    <!-- ===== MODAL SUCCESS ===== -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="card">
                <div class="text-right cross"> <i class="fa fa-times"></i> </div>
                <div class="card-body text-center"> <img class="" src="./img/logo.png">
                    <h4>GREAT!</h4>
                    <p>We'd make sure you're notified as soon as we launch!</p> <button
                        class="btn btn-out btn-square continue">CONTINUE</button>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL ERROR-->

    <div class="modal fade" id="errorModal" role="dialog">
        <div class="modal-dialog">
            <div class="card">
                <div class="text-right cross"> <i class="fa fa-times"></i> </div>
                <div class="card-body text-center"> <img class="" src="./img/logo.png">
                    <h4>WE GOT YOUR MAIL ALREADY!</h4>
                    <p>We know you're eager! <br> You'd be the first person to be notified !</p> <button
                        class="btn btn-out btn-square continue">CONTINUE</button>
                </div>
            </div>
        </div>
    </div>



    <!-- --------------------------------------------------------------===== JAVASCRIPT =====-------------------------------------------------------------- -->

    <script src="./js/app.js"></script>
    <script src="./js/ghost-typer.js"></script>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    <script src="./js/ghost-typer.js"></script>


    <!-- --------------------------------------------------------------===== GHOST TYPER =====-------------------------------------------------------------- -->
    <script>
        $(document).ready(function(){
            $("#typing").ghosttyper({
                messages: ['oming Soon !!!', 'oming Fast !!!', 'oming Hot !!!'],
            });
        })
    </script>

    <!-- --------------------------------------------------------------===== FORM SUBMIT AJAX =====-------------------------------------------------------------- -->

    <!-- ===== FORM 1 ===== -->
    <script>
        $(document).ready(function () {
            $('#my-form-1').on('submit', function (e) {
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
                    success: function (data) {
                        $("#myModal").modal('show');
                        $("#my-form-1")[0].reset();
                        // alert(data);
                    },
                    error: function (data) {
                        $("#errorModal").modal('show');
                        $("#my-form-1")[0].reset();
                    }
                });
            });
        });
    </script>



    <!-- ===== FORM 2 ===== -->
    <script>
        $(document).ready(function () {
            $('#my-form-2').on('submit', function (e) {
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
                    success: function (data) {
                        $("#myModal").modal('show');
                        $("#my-form-2")[0].reset();
                        // alert(data);
                    },
                    error: function (data) {
                        $("#errorModal").modal('show');
                        $("#my-form-2")[0].reset();
                    }
                });
            });
        });
    </script>



    <!-- ===== FORM 3 ===== -->
    <script>
        $(document).ready(function () {
            $('#my-form-3').on('submit', function (e) {
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
                    success: function (data, status) {
                        $("#myModal").modal('show');
                        $("#my-form-3")[0].reset();
                    },
                    error: function (data, status) {
                        $("#errorModal").modal('show');
                        $("#my-form-3")[0].reset();

                    }
                });
            });
        });
    </script>

    <!-- --------------------------------------------------------------===== CAROUSEL JS =====-------------------------------------------------------------- -->

    <!-- Initialize Swiper.JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: false,
            },
            zoom: {
                maxRatio: 1.15,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
    <script type="text/javascript">
    // $(document).on('scroll', function()) {
    //     $()
    // }
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