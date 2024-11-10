<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cake - Bakery</title>

    <!-- Icon css link -->
    <link href="./Client/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="./Client/assets/vendors/linearicons/style.css" rel="stylesheet">
    <link href="./Client/assets/vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./Client/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="./Client/assets/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="./Client/assets/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="./Client/assets/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="./Client/assets/vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="./Client/assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="./Client/assets/vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">

    <link href="./Client/assets/css/style.css" rel="stylesheet">
    <link href="./Client/assets/css/responsive.css" rel="stylesheet">

    <style>
        .login-form {
            font-family: "Open Sans", sans-serif;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-form .btn-primary {
            font-family: "Open Sans", sans-serif;
            background-color: palevioletred;
            border: none;
        }

        .login-form .btn-primary:hover {
            font-family: "Open Sans", sans-serif;
            background-color:deeppink ;
        }

        .login-form .social-login {
            font-family: "Open Sans", sans-serif;
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .login-form .social-login a {
            font-family: "Open Sans", sans-serif;
            margin: 0 5px;
        }
    </style>
</head>

<body style="background-color: #f2f2f2;">

    <div class="main_title">
        <div class="login-form mt-5 p-4">
            <h5 class="text-center">Đăng nhập</h5>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="email" placeholder="Email hoặc Tên đăng nhập">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                <div class="text-center mt-3">
                    <a href="FogotPassword.php">Quên mật khẩu?</a>
                </div>
                <div class="text-center mt-3">
                    Bạn chưa có tài khoản?<a href="Register.php"> Đăng ký</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>