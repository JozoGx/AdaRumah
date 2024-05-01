<?php
session_start();

if (isset($_SESSION['isLogin'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>AdaRumah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="shortcut icon" type="image/png" href="img/adarumah.png" />
    <link rel="stylesheet" href="/css/styles.min.css" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Login Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-center"><span class="bg-secondary pr-3">Login</span></h2>
        <div class="row px-xl-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <img src="img/adarumah.png" alt="Login Image" class="mx-auto d-block mb-4"
                        style="max-width: 200px;">
                    <form action="service/action/login.php" method="post" name="Login" id="Singup">
                        <!-- email -->
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                required="required" data-validation-required-message="Enter Email" autofocus />
                            <p class="help-block text-danger"></p>
                        </div>
                        <!-- password -->
                        <div class="control-group">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required="required"
                                data-validation-required-message="Please enter a Password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button type="submit" name="login" class="btn btn-primary py-2 px-4">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>