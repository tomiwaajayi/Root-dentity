<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5f006efe51.js" crossorigin="anonymous"></script>
    <title>Root-dentity</title>
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

                        <form action="insert.php" method="post">
                            <div class="input-group mb-3 form-mail">
                                <input type="email" name="email" class="form-control form-input"
                                    placeholder="&#xf0e0 Email" required>
                                <div class="input-group-append">
                                    <button class="input-group-text bg-orange" id="basic-addon2" type="submit"
                                        name="submit" value="submit" data-toggle="modal" data-target="#exampleModal">GET
                                        NOTIFIED</button>
                                </div>
                            </div>
                        </form>

                        <!-- End of form 1 -->

                    </div>

                    <!-- Right Phone -->

                    <div class="col-md-5 text-center hero-phone-image">
                        <img src="https://res.cloudinary.com/dafsch2zs/image/upload/v1594739956/iPhone_11_Pro_azlgq3.png"
                            alt="">
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

            <!-- Be notified Form 2 -->
            <div class="call-to-action-2 text-center">
                <p class="form-mail-text">Get notified when we launch !</p>
            </div>
            <form action="insert.php" method="post">
                <div class="input-group mb-3 form-mail mx-auto form-2">
                    <input type="email" name="email" class="form-control form-input" placeholder="&#xf0e0 Email"
                        required>
                    <div class="input-group-append">
                        <button class="input-group-text bg-orange" id="basic-addon2" type="submit" name="submit"
                            value="submit">GET NOTIFIED</button>
                    </div>
                </div>
            </form>

            <!-- End of form 2-->
        </div>
    </section>