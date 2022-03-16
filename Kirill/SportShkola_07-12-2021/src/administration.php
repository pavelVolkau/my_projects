<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!--favicon icon-->
	<link rel="icon" href="#" type="image/png" sizes="16x16">
	<!--title-->
	<title>Document</title>

	<!--build:css-pattern-->
	<link rel="stylesheet" href="css/main.min.css">


	<!--build:css-->
	<link rel="stylesheet" href="css/style.min.css">
</head>

<body>
	<?php
	include_once "chunks/header.html"
	?>

	<div class="main">
		<!--about school-->
		<?php
		include_once "chunks/about.html"
		?>

		<!-- btn_manager -->
		<section class="btn_manager ptb-20">
			<div class="container">
				<div class="btn-group btn_manager_block" role="group" aria-label="Basic radio toggle button group">
					<div class="btn_manager_block_item"><input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
						<label class="btn btn-outline-primary" for="btnradio1">Администрация</label>
					</div>

					<div class="btn_manager_block_item"><input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
						<label class="btn btn-outline-primary" for="btnradio2">Тренерская</label>
					</div>

					<div class="btn_manager_block_item"><input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
						<label class="btn btn-outline-primary" for="btnradio3">Попечительский совет</label>
					</div>
				</div>
			</div>
		</section>
		
		<!-- administration -->
		<section class="ptb-100 service-section-wrap administration">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="section-heading text-center">
                            <h2>Our Tools And Services For Optimize Website Building</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy &amp; First</span> <br>Website Building</h4>
                                <span class="fas fa-shield-alt fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Suitable For All Users</span> <br>Managed WordPress</h4>
                                <span class="fab fa-wordpress fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Commitment To</span> <br>Dedicated Support</h4>
                                <span class="fas fa-headset fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy &amp; Smooth</span> <br>Website Transfer</h4>
                                <span class="fas fa-dolly-flatbed fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- coaching -->
		<!-- <section class="ptb-100 service-section-wrap coaching">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="section-heading text-center">
                            <h2>Our Tools And Services For Optimize Website Building</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy &amp; First</span> <br>Website Building</h4>
                                <span class="fas fa-shield-alt fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Suitable For All Users</span> <br>Managed WordPress</h4>
                                <span class="fab fa-wordpress fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Commitment To</span> <br>Dedicated Support</h4>
                                <span class="fas fa-headset fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy &amp; Smooth</span> <br>Website Transfer</h4>
                                <span class="fas fa-dolly-flatbed fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

		<!-- trustees -->
		<!-- <section class="ptb-100 service-section-wrap trustees">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-7">
                        <div class="section-heading text-center">
                            <h2>Our Tools And Services For Optimize Website Building</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy &amp; First</span> <br>Website Building</h4>
                                <span class="fas fa-shield-alt fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Suitable For All Users</span> <br>Managed WordPress</h4>
                                <span class="fab fa-wordpress fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Commitment To</span> <br>Dedicated Support</h4>
                                <span class="fas fa-headset fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="single-service p-5 rounded border gray-light-bg">
                            <div class="service-header d-flex align-items-center justify-content-between">
                                <h4><span class="h5 text-uppercase">Easy &amp; Smooth</span> <br>Website Transfer</h4>
                                <span class="fas fa-dolly-flatbed fa-3x color-primary"></span>
                            </div>
                            <p>Globally fashion client-focused synergy for accurate synergy. Quickly network cost effective ideas rather than standardized leadership. Interactively syndicate alternative opportunities via ubiquitous systems. </p>
                            <a href="#" class="btn btn-outline-brand-02 mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
	</div>

	<?php
		include_once "chunks/footer.html"
	?>

	<!--build:js from pattern-->
	<script src="js/vendors/jquery-3.5.1.min.js"></script>
	<script src="js/vendors/popper.min.js"></script>
	<script src="js/vendors/bootstrap.min.js"></script>
	<script src="js/vendors/bootstrap-slider.min.js"></script>
	<script src="js/vendors/jquery.easing.min.js"></script>
	<script src="js/vendors/owl.carousel.min.js"></script>
	<script src="js/vendors/countdown.min.js"></script>
	<script src="js/vendors/jquery.waypoints.min.js"></script>
	<script src="js/vendors/jquery.rcounterup.js"></script>
	<script src="js/vendors/magnific-popup.min.js"></script>
	<script src="js/vendors/validator.min.js"></script>
	<script src="js/vendors/hs.megamenu.js"></script>
	<script src="js/app.js"></script>	
</body>

</html>