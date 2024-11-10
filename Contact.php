<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="Client/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="Client/assets/vendors/linearicons/style.css" rel="stylesheet">
        <link href="Client/assets/vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="Client/assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="Client/assets/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="Client/assets/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="Client/assets/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="Client/assets/vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="Client/assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="Client/assets/vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="Client/assets/css/style.css" rel="stylesheet">
        <link href="Client/assets/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body> 
        <?php include 'Client/Particals/Header.php'; ?>      <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Contact Us</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="single-blog.html">Contact Us</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Contact Form Area =================-->
        <section class="contact_form_area p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Liên hệ</h2>
					<h5>Bạn có điều gì muốn cho chúng tôi biết không? Vui lòng đừng chậm trễ để kết nối với chúng tôi bằng mẫu liên hệ của chúng tôi.</h5>
				</div>
       			<div class="row">
       				<div class="col-lg-7">
       					<form class="row contact_us_form" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn">
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email">
							</div>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Vấn đề của bạn">
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Lời nhắn"></textarea>
							</div>
							<div class="form-group col-md-12">
								<button type="submit" value="submit" class="btn order_s_btn form-control">Gửi</button>
							</div>
						</form>
       				</div>
       				<div class="col-lg-4 offset-md-1">
       					<div class="contact_details">
       						<div class="contact_d_item">
       							<h3>Địa Chỉ :</h3>
       							<p>Ninh Kiều <br />Cần Thơ</p>
       						</div>
       						<div class="contact_d_item">
       							<h5>Số Điện Thoại : <a href="tel:01372466790">01372.466.790</a></h5>
       							<h5>Email : <a href="mailto:rockybd1995@gmail.com">rockybd1995@gmail.com</a></h5>
       						</div>
       						<div class="contact_d_item">
       							<h3>Giờ mở cửa :</h3>
       							<p>8:00 AM – 10:00 PM</p>
       							<p>Thứ 2 – Chủ nhật</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
        <!--================End Contact Form Area =================-->
        
        <!--================End Banner Area =================-->
        <section class="map_area">
            <div id="mapBox" class="mapBox row m0" 
                data-lat="40.701083" 
                data-lon="-74.1522848" 
                data-zoom="13" 
                data-marker="img/map-marker.png" 
                data-info="54B, Tailstoi Town 5238 La city, IA 522364"
                data-mlat="40.701083"
                data-mlon="-74.1522848">
            </div>
        </section>
        <?php include 'Client/Particals/Footer.php'; ?>      <!--================End Main Header Area =================-->

        <!--================End Banner Area =================-->
        <script src="Client/assets/js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="Client/assets/js/popper.min.js"></script>
        <script src="Client/assets/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="Client/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="Client/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="Client/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="Client/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="Client/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="Client/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="Client/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="Client/assets/vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="Client/assets/vendors/datetime-picker/js/moment.min.js"></script>
        <script src="Client/assets/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="Client/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="Client/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="Client/assets/vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="Client/assets/js/theme.js"></script>
    </body>

</html>