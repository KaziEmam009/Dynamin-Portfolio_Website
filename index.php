<?php
session_start();
require_once 'includes/db.php';
$all_services_query = "SELECT * FROM services WHERE status = 'active' ORDER BY id DESC ";
$all_services_from_db = mysqli_query($db_connect, $all_services_query);

$all_factarea_query = "SELECT * FROM factarea";
$all_factarea_from_db = mysqli_query($db_connect, $all_factarea_query);

$all_brands_query = "SELECT * FROM brands";
$all_brands_from_db = mysqli_query($db_connect, $all_brands_query);

$all_portfolios_query = "SELECT * FROM portfolios";
$all_portfolios_from_db = mysqli_query($db_connect, $all_portfolios_query);


$owner_name_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='owner_name'";
$owner_name_from_db = mysqli_query($db_connect, $owner_name_select_query);

$owner_bio_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='owner_bio'";
$owner_bio_from_db = mysqli_query($db_connect, $owner_bio_select_query);

$owner_fb_link_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='fb_link'";
$owner_fb_link_from_db = mysqli_query($db_connect, $owner_fb_link_select_query);

$owner_tw_link_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='tw_link'";
$owner_tw_link_from_db = mysqli_query($db_connect, $owner_tw_link_select_query);

$owner_instagram_link_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='instagram'";
$owner_instagram_link_from_db = mysqli_query($db_connect, $owner_instagram_link_select_query);

$owner_about_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='owner_about'";
$owner_about_from_db = mysqli_query($db_connect, $owner_about_select_query);

$owner_about_edu_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='about_edu'";
$owner_about_edu_from_db = mysqli_query($db_connect, $owner_about_edu_select_query);

$owner_address_query = "SELECT setting_value FROM text_settings WHERE setting_name='address'";
$owner_address_from_db = mysqli_query($db_connect, $owner_address_query);

$owner_phone_query = "SELECT setting_value FROM text_settings WHERE setting_name='phone'";
$owner_phone_from_db = mysqli_query($db_connect, $owner_phone_query);

$owner_emaile_query = "SELECT setting_value FROM text_settings WHERE setting_name='email'";
$owner_email_from_db = mysqli_query($db_connect, $owner_emaile_query);




?>

<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=mysqli_fetch_assoc($owner_name_from_db)['setting_value']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=mysqli_fetch_assoc($owner_bio_from_db)['setting_value']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                    <?php
                                    $fb_link = mysqli_fetch_assoc($owner_fb_link_from_db)['setting_value'];
                                    if($fb_link):
                                    ?>
                                    <li><a href="<?=$fb_link?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                                    <?php
                                    endif;
                                    ?>

                                    <?php
                                    $tw_link = mysqli_fetch_assoc($owner_tw_link_from_db)['setting_value'];
                                    if($tw_link):
                                    ?>
                                    <li><a href="<?=$tw_link?>" target="_blank"><i class="fab fa-twitter"></i></a></li>

                                    <?php
                                    endif;
                                    ?>

                                    <?php
                                    $instagram_link = mysqli_fetch_assoc($owner_instagram_link_from_db)['setting_value'];
                                    if($instagram_link):
                                    ?>
                                    <li><a href="<?=$instagram_link?>" target="_blank"><i class="fab fa-instagram"></i></a></li>

                                    <?php
                                    endif;
                                    ?>
                                   </ul>
                                </div>
                                <a href="#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">

                            <div class="banner-img text-right">
                                <img src="img/banner/banner_img.png" alt="">
                                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
                   </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year">2020</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=mysqli_fetch_assoc($owner_about_edu_from_db)['setting_value']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="education">
                                <div class="year">2016</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>Master of Database Administration</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 90%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="education">
                                <div class="year">2010</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>Bachelor of Computer Engineering</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 82%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="education">
                                <div class="year">2005</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>Diploma of Computer</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 85%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php
                        foreach($all_services_from_db as $service):
                        ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$service['service_icon']?>"></i>
								<h3><?=$service['service_title']?></h3>
								<p>
									<?=$service['service_description']?>
								</p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php foreach($all_portfolios_from_db as $portfolio): ?>
                   <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="image/portfolio_image/feature/<?=$portfolio['portfolio_feature_photo']?>" alt="img">
								</div>
								<div class="speaker-overlay">
								<h4><a href="portfolio-single.php?id=<?=$portfolio['id']?>"><?=$portfolio['portfolio_title']?></a></h4>
									<a href="portfolio-single.php?id=<?=$portfolio['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                       <?php endforeach; ?>
                    </div>

                </div>

            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php foreach($all_factarea_from_db as $factarea):  ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$factarea['factarea_icon']?>"></i>
                                    </div>
                                    <!-- start work -->
                                    <div class="fact-content">
                                        <h3><?=$factarea['factarea_amount']?></h3>
                                        <span><?=$factarea['factarea_title']?></span>
                                    </div>
                                    <!-- end work -->
                                </div>
                            </div>
                            <?php endforeach;?>
                         </div>
                      </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                    <?php
                                      $testimonial_select_query = "SELECT * FROM testimonials";
                                      $testimonial_from_db = mysqli_query($db_connect, $testimonial_select_query);
                                      ?>
                                      <?php foreach($testimonial_from_db as $testimonial): ?>
                                        <div class="single-testimonial text-center">
                                            <div class="testi-avatar">
                                                <img src="img/profile_img/<?=$_SESSION['image_from_login_page']?>" width="150px" alt="img">
                                            </div>
                                            <div class="testi-content">
                                                <h4><span>???</span><?=$testimonial['testimonial_text']?><span>???</span></h4>
                                                <div class="testi-avatar-info">
                                                    <h5><?=$testimonial['testimonial_name']?></h5>
                                                    <span><?=$testimonial['testimonial_dasignation']?></span>

                                                    <?php for($start = 1; $start <= $testimonial['testimonial_stars']; $start++): ?>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                  <?php endfor; ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php foreach($all_brands_from_db as $brand):?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand_image/<?=$brand['brand_image_name']?>" alt="Not Found">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <!-- 1111111111111111111 -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=mysqli_fetch_assoc($owner_address_from_db)['setting_value']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=mysqli_fetch_assoc($owner_phone_from_db)['setting_value']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=mysqli_fetch_assoc($owner_email_from_db)['setting_value']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php if(isset($_SESSION['status'])):?>
                               <div class="alert alert-success">
                                     <?=$_SESSION['status']?>
                                <?php
                                  unset($_SESSION['status']);
                                ?>
                               </div>
                                   <?php endif; ?>
                            <div class="contact-form">
                                <form action="contact_post.php" method="POST">
                                    <input type="text" placeholder="your name *" name="guest_name">
                                    <input type="email" placeholder="your email *" name="guest_email">
                                    <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright?? <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

                <!--Start of Tawk.to Script-->
              <script type="text/javascript">
                     var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                     (function(){
                     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                     s1.async=true;
                     s1.src='https://embed.tawk.to/6251f3397b967b1179899d9f/1g081s7bn';
                     s1.charset='UTF-8';
                     s1.setAttribute('crossorigin','*');
                     s0.parentNode.insertBefore(s1,s0);
                     })();
              </script>
             <!--End of Tawk.to Script-->
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
