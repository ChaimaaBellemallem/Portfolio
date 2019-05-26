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
        <title> Portfolio</title>
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
								<li class="nav-item active"><a class="nav-link" href="index.php"><?php echo $lang['p1']?></a></li> 
								<li class="nav-item submenu dropdown">
									<li class="nav-item"><a class="nav-link" href="portfolio.php"><?php echo $lang['p2']?></a>
									<ul class="dropdown-menu">
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<ul class="dropdown-menu">
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['p3']?></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="img/personal.jpg" alt="" width="400" height="400">
							</div>
							<div class="media-body">
								<div class="personal_text">
									<h6> <?php echo $lang['p4']?></h6>
									<h3>Chaimaa Bellemallem</h3>
									<h4><?php echo $lang['p5']?></h4>
									<ul class="list basic_info">
										<li><a href="#"><i class="lnr lnr-calendar-full"></i> <?php echo $lang['p6']?></a></li>
										<li><a href="#"><i class="lnr lnr-phone-handset"></i>  (212) 691 178 195</a></li>
										<li><a href="#"><i class="lnr lnr-envelope"></i> cbellemallem@gmail.com</a></li>
										<li><a href="#"><i class="lnr lnr-home"></i> 32 QU Takaddoum Rue Palestin Youssoufia,Morocco</a></li>
									</ul>
									<ul class="list personal_social">
										<li><a href="https://www.facebook.com/cha.imaa.77377"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/cbellemallem"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/in/chaimaa-bellemallem-4a86b5173/"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="https://www.instagram.com/chaimaa.bellemallem"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://github.com/ChaimaaBellemallem"><i class="fa fa-github"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4><?php echo $lang['p7']?></h4>
        					<p><?php echo $lang['p8']?></p>
        					<div class="row invisible">
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>$2.5M</h4>
        								<p>Total Donation</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>1465</h4>
        								<p>Total Projects</p>
        							</div>
        						</div>
        						<div class="col-md-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>3965</h4>
        								<p>Total Volunteers</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">
        					<div class="skill_main">
								<div class="skill_item">
									<h4>HTML5/CSS3/Bootstrap5 <span class="counter">70</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>Visual studio <span class="counter">50</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="skill_item ">
									<h4>Illustrator/Adobe XD/PS <span class="counter">30</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>JavaScript <span class="counter">40</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="skill_item">
									<h4>SQL/PHP <span class="counter">40</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
        	<div class="container">
        		<div class="tabs_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo $lang['p9']?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php echo $lang['p10']?></a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>13/11/2018</p>
										</div>
										<div class="media-body ml-4">
											<h4>YouCode</h4>
											<p><?php echo $lang['p11']?><br /></p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media ml-4">
										<div class="d-flex">
											<p>06-08/2018</p>
										</div>
										<div class="media-body ml-5">
											<h4><?php echo $lang['p12']?></h4>
											<p>SABAH INFO<br /></p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>03/2018</p>
										</div>
										<div class="media-body ml-5">
											<h4>OCP</h4>
											<p><?php echo $lang['p13']?><br /></p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>0 8-->10/2018</p>
										</div>
										<div class="media-body ml-4">
											<h4>Youssoufia</h4>
											<p><?php echo $lang['p14']?> <br /></p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>05/2018</p>
										</div>
										<div class="media-body ml-5">
											<h4>Youssoufia</h4>
											<p><?php echo $lang['p15']?><br /></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<ul class="list">
								<li>
									<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>2018/2020</p>
										</div>
										<div class="media-body ml-5">
											<h4>YouCode</h4>
											<p> <?php echo $lang['p16']?> <br></p>
										</div>
									</div>
								</li>
								<li>
									<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>2016/2018</p>
										</div>
										<div class="media-body ml-5">
											<h4>ISTA Youssoufia</h4>
											<p><?php echo $lang['p17']?> <br /></p>
										</div>
									</div>
								</li>
								<li>
								<span></span>
									<div class="media ml-5">
										<div class="d-flex">
											<p>2015/2016</p>
										</div>
										<div class="media-body ml-5">
											<h4>Imamme EL Boukhari</h4>
											<p><?php echo $lang['p18']?> <br /></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End My Tabs Area =================-->
        
       
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><?php echo $lang['p19']?></h2>
        		</div>
        		<div class="isotope_fillter">

        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project7.jpeg" alt="">
        						<a class="light" href="img/gallery/project7.jpeg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>UX, UI</h4>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project8.jpg" alt="">
        						<a class="light" href="img/gallery/project8.jpg"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
								<h4>Intérfaçage Web</h4>
								<p>(Front-End)</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="img/gallery/project9.png" alt="">
        						<a class="light" href="img/gallery/project9.png"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>Charte Graphique</h4>
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
        						<h3><?php echo $lang['p25']?></h3>
        					</div>
        					<p><?php echo $lang['p26']?></p>
        					<p class="row invisible"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3><?php echo $lang['p27']?></h3>
        					</div>
        					<p><?php echo $lang['p28']?></p>
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
        						<h3><?php echo $lang['p29']?></h3>
        					</div>
        					<p><?php echo $lang['p30']?></p>
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
			<p ><a href="index.php?lang=en"><img src="language/eng.png" width="18px" height="15px"></a>
			|<a href="index.php?lang=fr"><img src="language/france.png" width="18px" height="15px"></a></p>
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