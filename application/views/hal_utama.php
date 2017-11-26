	<div id="demo-1" data-zs-src='["<?php echo base_url(); ?>assets/images/rizal1.JPG", "<?php echo base_url(); ?>assets/images/rizal2.JPG", "<?php echo base_url(); ?>assets/images/rizal3.JPG", "<?php echo base_url(); ?>assets/images/rizal4.JPG"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
			<!--/header-w3l-->
			<div class="header-w3-agileits" id="home">
				<div class="inner-header-agile">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<h1><a  href="<?php echo base_url(); ?>"><span>N</span><i class="fa fa-scissors" aria-hidden="true"></i>ew Rizal  <p class="s-log">Barber Shop</p></a>

							</h1>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav linkEffects linkHoverEffect_12">
								<li><a href="<?php echo base_url(); ?>" class="active"><span>Beranda</span></a></li>
								<li><a href="<?php echo base_url(); ?>hal_harga"><span>Harga</span></a></li>
								<li><a href="<?php echo base_url(); ?>hal_galeri"><span>Galeri</span></a></li>
								<li><a href="<?php echo base_url(); ?>hal_tiket"><span>Tiket</span></a></li>
								<li><a href="<?php echo base_url(); ?>hal_antrian"><span>Antrian</span></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</nav>
				</div>
				<div class="contact-top-agileits">
					<div class="col-md-4 contact-grid ">
						<div class="contact-grid1 agileits-w3layouts">
							<div class="con-w3l-info">
								<h4>Alamat </h4>
								<p>Jl. Raya Cianjur<span>Cianjur, Jawa Barat.</span></p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-4 contact-grid">
						<div class="contact-grid2 w3">

							<div class="con-w3l-info">
								<h4>Telpon</h4>
								<p>(0263) 331212</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-4 contact-grid">
						<div class="contact-grid3 w3l">

							<div class="con-w3l-info">
								<h4>Email</h4>
								<p><a href="mailto:newrizal@barbershop.com">newrizal@barbershop.com</a>

								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>

					</div>
					<!--//header-w3l-->
					<!--/banner-info-->
					<div class="baner-info">
						<h3>Selamat <span>Datang </span>di  <span>New Rizal </span>Barbershop</h3>
						<h4>Bercukur dengan gaya.</h4>
						<a class="w3_play_icon1" href="hal_tiket">
							Pesan sekarang
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--/banner-section-->
		<!-- /about -->
		<div class="about-wthree">
			<div class="container">
				<div class="ab-w3l-spa">
					<div class="title-agileits">
						<h2 class="w3l-agile">Selamat datang di New Rizal Barbershop</h2>
					</div>

					<p>New Rizal Barbershop adalah sebuah barbershop yang selalu mengikuti tren gaya rambut terbaru.</p>
					<img src="<?php echo base_url(); ?>assets/images/bg.JPG" class="img-responsive" alt="Hair Salon">
					<!--Slider-->
					<div class="slider-agileits-ab">
						<div class="callbacks_container">
							<ul class="rslides" id="slider3">
								<?php
								$i = 1;
								foreach ($rambut as $key => $value) {
									?>
								<li>
									<div class="w3l-slider-img">
										<img src="<?php echo base_url(); ?>assets/images/model/<?php echo $value['gambar_rambut']?>" class="img-responsive" alt="Hair Salon">
									</div>
								</li>
								 <?php $i++;} ?>
							</ul>
						</div>
						<div class="w3ls-info-about">
							<h4>Temukan gaya rambut terbaru</h4>
							<p>Old school, two block, dll. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //about -->
		<!-- work-services -->
		<div class="w3l-services-agile" >
			<div class="container">
				<div class="title-agileits">
					<h3 class="w3l-agile">Layanan Kami</h3>
				</div>

			</div>
			<div class="w3layouts_work_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<?php
							$i = 1;
							foreach ($paket as $key => $value) {
								?>
							<li>
								<div class="w3layouts_work_grid_left">
									<img src="<?php echo base_url(); ?>assets/images/newrizal.JPG" alt=" " class="img-responsive" />
									<div class="w3layouts_work_grid_left_pos">
										<img src="<?php echo base_url(); ?>assets/images/paket<?php echo rand(0,5);?>.jpg" alt=" " class="img-responsive" />
									</div>
								</div>
								<div class="w3layouts_work_grid_right">
									<h4>New Rizal Barber Shop</h4>
									<h5><?php echo $value['nama_paket']; ?></h5>
									<p><?php echo $value['deskripsi_paket']; ?></p>
								</div>
								<div class="clearfix"> </div>
							</li>
							<?php $i++;} ?>
						</ul>
					</div>
				</section>
			</div>
		</div>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
				auto: true,
				pager:false,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
				});

			});
		 </script>
