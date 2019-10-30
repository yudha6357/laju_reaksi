<!DOCTYPE html>
@include('layout.header')
@include('layout.background2')
@include('layout.head')
<html lang="zxx">

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
    <div class="panel">

        <form name="form1" action="" method="post">
        <div align="center">   KALKULATOR   </div>
        <div align="center">============================</div>
        <center><b>MASUKAN BILANGAN M:</b><br/>
        <input type="text" name="M" value=""/><br/>
        <b>MASUKAN BILANGAN m:</b><br/>
        <input type="text" name="m" value=""/><br/>
        <b>MASUKAN BILANGAN mr:</b><br/>
        <input type="text" name="mr" value=""/><br/><br>
        <b>MASUKAN BILANGAN v:</b><br/>
        <input type="text" name="v" value=""/><br/>
        <b>MASUKAN BILANGAN n:</b><br/>
        <input type="text" name="n" value=""/><br/>
        <b>MASUKAN BILANGAN Ketetapan:</b><br/>
        <input type="text" name="1000" value="1000" disabled="true" /><br/>
        <input type="button" value="=" onClick="hitung()" />
        <input type="button" value="CLEAR" onClick="resetForm()" /><br>
        <input type="text" name="hasil" disabled="true" /></center><br/>
        </div>



        <script language="JavaScript" type="text/javascript">
            function hitung(){

                var myForm = document.form1;
                var M=eval(myForm.M.value);
                var m=eval(myForm.m.value);
                var mr=eval(myForm.mr.value);
                var v=eval(myForm.v.value);
                var n=eval(myForm.n.value);

                if (M == null && n == null){
                    var n = m/mr;
					var M = n/v;
					myForm.n.value = n;
                    myForm.M.value = M;
                }








                if (m == null) {
                        var m = (M * mr) / (1000 / v) ;
                        myForm.m.value = m;
                }
                if (v2 == null) {
                        var v2 = v1 * m1 / m2 ;
                        myForm.v2.value = v2;
                }else if (v2 == "1") {
                                var v2 = v1 * m1;
                                myForm.v2.value = v2;
                             }
                if (m2 == null) {
                        var m2 = v1 * m1 / v2 ;
                        myForm.m2.value = m2;
                }else if (m2 == "1") {
                        var m2 = v1 * m1;
                        myForm.m2.value = m2;
                    }
            }
                function resetForm(){
                document.form1.reset();
                }
            </script>



    <section class="about" id="about">
		<div class="container-fluid  ">
			<br>
		  </div>


	  </section>
  	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 contact-text">
					<h4>Contact Info</h4>
					<p>Nullam lacinia ex eleifend orci portt-itor, suscipit interdum augue condi-mentum. Etiam pretium turpis eget nibh laoreet iaculis. Vivamus auctor mi eget odio feugiat.</p>
					<div class="cont-info">
						<div class="ci-icon">
							<img src="img/icons/1.png" alt="">
						</div>
						<span>Main Str, no 23, New York</span>
					</div>
					<div class="cont-info">
						<div class="ci-icon">
							<img src="img/icons/2.png" alt="">
						</div>
						<span>+546 990221 123</span>
					</div>
					<div class="cont-info">
						<div class="ci-icon">
							<img src="img/icons/2.png" alt="">
						</div>
						<span>hosting@contact.com</span>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your e-mail">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Message"></textarea>
								<button class="site-btn">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="map" id="map-canvas"></div>
	</section>
	<!-- Contact section end -->


	<!-- Footer top section -->
	<section class="footer-top-section text-white spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget about-widget">
						<img src="./img/logo.png" alt="logo">
						<p>Proin gravida nibh vel velit auctor aliquet, aenean sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum.Proin gravida nibh vel velit auctor aliquet, aenean sollicitudin lorem quis bibendum auctor, nisi elit consequat ipsum</p>
						<div class="fw-social social">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Usefull Links</h4>
						<div class="row">
							<div class="col-sm-6">
								<ul>
									<li><a href="">Web Hosting</a></li>
									<li><a href="">WordPress Hosting</a></li>
									<li><a href="">VPS Hosting</a></li>
									<li><a href="">Cloud Server</a></li>
									<li><a href="">Reseller Package</a></li>
									<li><a href="">Dedicated Hosting</a></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<ul>
									<li><a href="">Web Hosting</a></li>
									<li><a href="">WordPress Hosting</a></li>
									<li><a href="">VPS Hosting</a></li>
									<li><a href="">Cloud Server</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4  col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/footer-thumb/1.jpg"></div>
								<div class="lp-content">
									<h6>Web Hosting for everyone</h6>
									<span>Oct 21, 2018</span>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/footer-thumb/2.jpg"></div>
								<div class="lp-content">
									<h6>Web Hosting for everyone</h6>
									<span>Oct 21, 2018</span>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/footer-thumb/3.jpg"></div>
								<div class="lp-content">
									<h6>Web Hosting for everyone</h6>
									<span>Oct 21, 2018</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>

	</body>
</html>
