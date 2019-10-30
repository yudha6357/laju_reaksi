<!DOCTYPE html>
<html lang="zxx">
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	@include('layout.header')
    @include('layout.background2')
    @include('layout.head')


	<!-- Features section -->
	<section class="features-section spad">
		<div class="container">
			<div class="section-title">
				<img src="./img/bingung.png" width="100px" height="100px"alt="#">
				<h2>BELAJAR LAJU REAKSI</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-domain-registration"></i>
					</div>
					<h4>materi 1</h4>
                    <p>xxxxxxxxxx xxxx xxxxxxxxxxxxxxxxxxxxxxxxx xx xxxxxxxxxxxxxxxx xxxxxxx xxxxxxxxxxx</p>
                    <button onclick="window.location.href='{{ url('lajureaksi') }}'" class="site-btn" type="lajureaksi" >Read More</button>
				</div>
				<div class="col-lg-4 col-md-6 feature-item fi-center-top">
					<div class="ft-icon">
						<i class="flaticon-server"></i>
					</div>
					<h4>materi 2</h4>
					<p>pertumbuhan penduduk yang tidak stabil mengakibatkan kebosanan dan hidup tidak bermakna apalagi dengan membuat ini</p>
                    <button onclick="window.location.href='{{ url('pengaruh_lajureaksi') }}'" class="site-btn" type="lajureaksi" >Read More</button>
				</div>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-smartphone"></i>
					</div>
					<h4>materi 3</h4>
					<p>Uses the same spell checker that’s used in Google search. Text you type in the browser is sent to Google. </p>
					<button onclick="window.location.href='{{ url('molaritas') }}'" class="site-btn" type="lajureaksi" >Read More</button>
                </div>
                <div class="col-lg-4 col-md-6 feature-item">
                        <div class="ft-icon">
                            <i class="flaticon-devices"></i>
                        </div>
                        <h4>materi 4</h4>
                        <p>Laju pertumbuhan penduduk (LPP) Indonesia memiliki kecenderungan menurun. Kebijakan pemerintah untuk menekan LPP dengan adanya program Keluarga</p>
                        <button onclick="window.location.href='{{ url('penerapan_laju_reaksi') }}'" class="site-btn" type="lajureaksi" >Read More</button>
                    </div>
				<br>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-folder"></i>
					</div>
					<h4>materi 5</h4>
					<p>asadadadsssssdadadasdadaasadadadadadaku Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. </p>
					<button onclick="window.location.href='{{ url('orde_reaksi') }}'" class="site-btn" type="lajureaksi" >Read More</button>
				</div>
				<div class="col-lg-4 col-md-6 feature-item">
					<div class="ft-icon">
						<i class="flaticon-viral-marketing"></i>
					</div>
					<h4>materi 6</h4>
					<p>aku Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. </p>
					<a href="#" class="site-btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
