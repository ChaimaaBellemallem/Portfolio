<?php
 include"config_1.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Portfolio</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php"><?php echo $lang['p31']?></a></li>  
								<li class="nav-item submenu dropdown">
									<li class="nav-item"><a class="nav-link" href="portfolio.php"><?php echo $lang['p32']?></a>
								</li>  
								<li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['p33']?></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2><?php echo $lang['p34']?></h2>
							<div class="page_link">
								<a href="index.html"><?php echo $lang['p35']?></a>
								<a href="portfolio.html"><?php echo $lang['p36']?></a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php echo $lang['p37']?></h2>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-1.png" alt="">
        						<a class="light" href="img/gallery/project-1.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>E-POCKETS</h4>
        						<p>Capgemini</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-2.png" alt="">
        						<a class="light" href="img/gallery/project-2.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>SITE-WEB-REFERENCE</h4>
        						<p>Youcode</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-3.png" alt="">
        						<a class="light" href="img/gallery/project-3.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>CLOCK</h4>
        						<p><?php echo $lang['p38']?></p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand creative print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-4.png" alt="">
        						<a class="light" href="img/gallery/project-4.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Mockup</h4>
        						<p><?php echo $lang['p39']?></p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul design">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-5.png" alt="">
        						<a class="light" href="img/gallery/project-5.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Timi9it</h4>
        						<p><?php echo $lang['p40']?></p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand creative">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project-6.png" alt="">
        						<a class="light" href="img/gallery/project-6.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Slack</h4>
        						<p><?php echo $lang['p41']?></p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3><?php echo $lang['p43']?></h3>
        					</div>
        					<p><?php echo $lang['p44']?></p>
        					<p class="row invisible"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3><?php echo $lang['p45']?></h3>
        					</div>
        					<p><?php echo $lang['p46']?></p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3><?php echo $lang['p47']?></h3>
        					</div>
        					<p><?php echo $lang['p48']?></p>
        					<ul class="list">
        						<li><a href="https://www.facebook.com/cha.imaa.77377"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="https://twitter.com/cbellemallem"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="https://dribbble.com/Bellemallem"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="https://www.behance.net/cbellemall4d1b"><i class="fa fa-behance"></i></a></li>
								<li><a href="https://github.com/ChaimaaBellemallem"><i class="fa fa-github"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
			</div>
			<div class="text-center">
			<p ><a href="portfolio.php?lang=en"><img src="language/eng.png" width="18px" height="15px"></a>
			|<a href="portfolio.php?lang=fr"><img src="language/france.png" width="18px" height="15px"></a></p>
			</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>