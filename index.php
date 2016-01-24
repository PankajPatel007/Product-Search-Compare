<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/components_modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2016 18:13:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Pure Compare</title>


    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="assets/css/main.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                    <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                        
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form" action="e_product_list.php" method="post">
                <input type="text" class="header_main_search_input" name="mytxt" id="mytxt" />
                <button class="header_main_search_btn uk-button-link" id="submit" name="submit" type="submit" ><i class="md-icon material-icons" >&#xE8B6;</i></button>
            </form>
        </div>
    </header><!-- main header end -->
    <!-- main sidebar -->
   <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
               <a href="index.php"> <h1 align="center"><font face="Magneto" size="5">Pure <font color="blue">Compare</font></font></h1></a>
            </div>
            
        </div>
        
        <div class="menu_section">
            <ul>
                <li  title="Dashboard">
                    <a href="index.php">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Home page</span>
                    </a>
					<ul>
                        <li class="act_item"><a href="#SMARTPHONES">Smartphones</a></li>
                        <li class="act_item"><a href="#FASHION">Fashion</a></li>
                        <li class="act_item"><a href="#FURNITURE">Home & Furniture</a></li>
					</ul>
                </li>
				
				
				
				
				
                <li >
                    <a href="e_product_list.php">
                        <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                        <span class="menu_title">E-Comparison</span>
                    </a>
                    
                </li>
                
				<li >
                    <a href="index.php#contact">
                        <span class="menu_icon"><i class="uk-icon-spinner uk-icon-medium uk-icon-spin"></i></span>
                        <span class="menu_title">Contact Us</span>
                    </a>
                    
                </li>
				
				<li >
                    <a href="index.php#about">
                        <span class="menu_icon"><i class="material-icons"></i></span>
                        <span class="menu_title">About Us</span>
                    </a>
                    
                </li>
				
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    <div id="page_content">
      <br>
	<div    id="SMARTPHONES">  
	  <br><br>
	      <div id="page_heading">
            <h1 align="center">GREAT DEALS ON SMARTPHONES</h1>
            
        </div>
	  <br><br>
	  <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#products_sort'}">
                <div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/mobile/t/e/7/apple-iphone-6s-na-400x400-imaebymatbv4unha.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Apple iPhone 6S
                                <span class="sub-heading">iOS 9</span>
								<span class="sub-heading">4.7 inch Touchscreen</span>
								<span class="sub-heading">12 MP Primary Camera</span>
								<span class="sub-heading">3D Touch & Live Photos</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Apple iPhone 6S" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
                <div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img6a.flixcart.com/image/mobile/h/b/m/samsung-galaxy-note-5-n920g-400x400-imaebergj9zbghgm.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Samsung Galaxy Note 5
								<span class="sub-heading">Android v5.1 OS</span>
								<span class="sub-heading">Super AMOLED Display</span>
								<span class="sub-heading">4GB RAM | 32GB ROM</span>
								<span class="sub-heading">16MP | 5 MP Camera</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Samsung Galaxy Note 5" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
                
				<div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/mobile/y/z/h/one-plus-one-na-400x400-imae8gd6phygdszv.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                OnePlus One
								<span class="sub-heading">5.5 inch Screen</span>
								<span class="sub-heading">Android Lollipop</span>
								<span class="sub-heading">Quad Core Processor</span>
								<span class="sub-heading">4G LTE, 3GB RAM</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="OnePlus One" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
				
				<div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/mobile/p/g/j/mi-mi4-64gb-mzb4240in-400x400-imae4qwz5jthgnd7.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Mi 4
								<span class="sub-heading">13 MP Primary Camera</span>
								<span class="sub-heading">8 MP Secondary Camera</span>
								<span class="sub-heading">Android v4.4 OS</span>
								<span class="sub-heading">5 inch Touchscreen</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="OnePlus One" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
            </div>
	  </div>
	  <br><br><br><br>
	<div id="FASHION">  
	  
	  <br><br>
	   <div id="page_heading">
            <h1 align="center">GREAT DEALS ON FASHION</h1>
            
        </div>
	  <br><br>
	  
	  
	  
	  <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#products_sort'}">
                <div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/ethnic-set/3/n/a/on-121-fashion-curries-38-400x400-imadxt2c5hkngcgv.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Fashion Curries Men's Kurta and Pyjama Set
								
								

                                <span class="sub-heading">Fabric: Jaquard</span>
								<span class="sub-heading">Brand Color: Beige</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Fashion Curries Men Kurta and Pyjama Set" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
                <div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img6a.flixcart.com/image/dress/g/q/v/1-1-kf-418a-bedazzle-s-400x400-imadzcmjjym64v4g.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Bedazzle Women's High Low Dress
								<span class="sub-heading">Black</span>
								<span class="sub-heading">High Low</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Bedazzle Women's High Low Dress" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
                
				<div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img6a.flixcart.com/image/ethnic-set/7/r/x/625-maroon-aj-dezines-3-4-years-400x400-imaed5b5ymbykmyw.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                AJ Dezines Boy's Sherwani and Churidar Set
								<span class="sub-heading">Fabric: Silk Cotton</span>
								<span class="sub-heading">Brand Color: Maroon</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="AJ Dezines Boys Sherwani and Churidar Set" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
				
				<div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/apparels-combo/3/g/d/com101a-skdc-400x400-imaeea3ytr3egu9q.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Skdc Girl's Empire Waist Dress
								<span class="sub-heading">Black</span>
								<span class="sub-heading">Empire Waist</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Skdc Girls Empire Waist Dress" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
            </div>
	  </div>
	  <br><br><br><br>
	  <div id="FURNITURE">
	  <br><br>
	   <div id="page_heading">
            <h1 align="center">GREAT DEALS ON HOME & FURNITURE</h1>
            
        </div>
	  <br><br>
	  
	  
	  
	  <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#products_sort'}">
                <div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/bed/r/b/h/104-1-5-qween-queen-mdf-parin-na-black-400x400-imaedsdfdmafny4b.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Parin Engineered Wood Queen Bed With Storage
								<span class="sub-heading">1 Year Domestic Warranty</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Parin Engineered Wood Queen Bed With Storage" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
                <div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img6a.flixcart.com/image/dining-set/z/t/z/dt92-6-6-seater-pu-leatherette-royal-oak-cream-white-400x400-imaeb2hymftgzm9m.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Royal Oak Leatherette Dining Set
								<span class="sub-heading">30 day warranty on manufacturing defects only</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Royal Oak Leatherette Dining Set" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
                
				<div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/tv-entertainment-unit/k/3/s/tv103bl-mdf-royal-oak-dark-400x400-imae9rtvhejhtp7s.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Royal Oak Engineered Wood Entertainment Unit
								<span class="sub-heading">30 days warranty on manufacturing defects only</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Royal Oak Engineered Wood Entertainment Unit" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
				
				<div data-product-name="Sint error.">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">Compare</div>
                            <img class="md-card-head-img" src="http://img5a.flixcart.com/image/office-study-chair/h/z/d/adxn275-pu-leatherette-adiko-400x400-imaedpmyhzefdzgz.jpeg" alt=""/>
                        
						</div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                Adiko Leatherette Office Chair
								<span class="sub-heading">3 Months Domestic Warranty</span>
								</span>
                            </h4>
                            <form method="post" action="e_product_list.php">
							<input type="hidden"  name="mytxt" id="mytxt" value="Adiko Leatherette Office Chair" />
							<input class="md-btn md-btn-small"  type="submit" name="submit" value="Compare" id="submit">
							</form>
                        </div>
                    </div>
                </div>
            </div>
	  
	  </div>
	  <br><br><br><br><br><br><br>
	  <div id="contact">
	   <div id="page_heading">
            <br><br><br><br>
			<div class="line rmargin10 lmargin10 padding20 tmargin25 cs-bottom clearfix">
			<div class="unit size2of7">
			<div class="line"> 
			<h3 class="title bmargin15">Call us:</h3>
			<p>We're available 24 hours a day.</p> 
			<p class="bmargin10 fk-font-14"><span style="font-size:14px;">
			<b>(+91) 8511193793   </b> or <b>   (+91) 7802000792</b></span></p> </div> </div> 
			<div class="unit size2of7 mail-us"> <h3 class="title bmargin15">Mail us:</h3>
 Tech-knights@gmail.com </div> </div>
			
			<br><br><br><br>
        </div>
	  </div>
	  
	  
	  
	  <br><br><br><br><br><br>
	  <div id="about">
	  <br><br>
	  
	  <div id="about">
	   <div id="page_heading">
            <br><br><br>
			<div class="line rmargin10 lmargin10 padding20 tmargin25 cs-bottom clearfix">
			<div class="unit size2of7">
			<div class="line"> 
			<h3 class="title bmargin15">About us:</h3>
			<p><h2>Tech-Knights</h2></p>
			<p><h3>Jinesh Patel</h3></p>
			<p>Mobile.no :- (+91) 9913039597</p>
			<p>E-mail :- <a href="mailto:jinesh.mscit15@gmail.com">jinesh.mscit15@gmail.com</a></p>
			<br>
			
			
			<p><h3>Pankaj Patel</h3></p>
			<p>Mobile.no :- (+91) 8511796781</p>
			<p>E-mail :- <a href="mailto:pankaj.mscit15@gmail.com">pankaj.mscit15@gmail.com</a></p>
			<br>
			<p><h3>Saumil Patel</h3></p>
			<p>Mobile.no :- (+91) 7802000792</p>
			<p>E-mail :- <a href="mailto:saumil.mscit15@gmail.com">saumil.mscit15@gmail.com</a></p>
			<br>
			<p><h3>Kishor Purohit</h3></p>
			<p>Mobile.no :- (+91) 9737219803</p>
			<p>E-mail :- <a href="mailto:kishor007purohit007@gmail.com">kishor007purohit007@gmail.com</a></p>
			<br>
			
			<p><h3>Rohit Kardani</h3></p>
			<p>Mobile.no :- (+91) 8511193793</p>
			<p>E-mail :- <a href="mailto:rohit.kardani.mscit15@gmail.com">rohit.kardani.mscit15@gmail.com</a></p>
			<br>
			
			
			
			 </div>
 <br><br><br><br>
			<p align="center">© 2016 purecompare.in</p>
			<br><br><br>
        </div>
		
	  </div>
	  </div>
	  <br><br>
	  
	  
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="assets/js/altair_admin_common.min.js"></script>


    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-65191727-1', 'auto');
        ga('send', 'pageview');
    </script>

    <div id="style_switcher">
        <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
        <div class="uk-margin-medium-bottom">
            <h4 class="heading_c uk-margin-bottom">Colors</h4>
            <ul class="switcher_app_themes" id="theme_switcher">
                <li class="app_style_default active_theme" data-app-theme="">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_a" data-app-theme="app_theme_a">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_b" data-app-theme="app_theme_b">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_c" data-app-theme="app_theme_c">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_d" data-app-theme="app_theme_d">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_e" data-app-theme="app_theme_e">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_f" data-app-theme="app_theme_f">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_g" data-app-theme="app_theme_g">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_h" data-app-theme="app_theme_h">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_i" data-app-theme="app_theme_i">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
            </ul>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Sidebar</h4>
            <p>
                <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
                <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
            </p>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Layout</h4>
            <p>
                <input type="checkbox" name="style_layout_boxed" id="style_layout_boxed" data-md-icheck />
                <label for="style_layout_boxed" class="inline-label">Boxed layout</label>
            </p>
        </div>
        <div class="uk-visible-large">
            <h4 class="heading_c">Main menu accordion</h4>
            <p>
                <input type="checkbox" name="accordion_mode_main_menu" id="accordion_mode_main_menu" data-md-icheck />
                <label for="accordion_mode_main_menu" class="inline-label">Accordion mode</label>
            </p>
        </div>
    </div>

    <script>
        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $body
                    .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i')
                    .addClass(this_theme);

                if(this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if( $switcher.hasClass('switcher_active') ) {
                    if (
                        ( !$(e.target).closest($switcher).length )
                        || ( e.keyCode == 27 )
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if(localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
            }


        // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });


        // toggle boxed layout

            if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

        // main menu accordion mode
            if($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function(){
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function(){
                    $sidebar_main.removeClass('accordion_mode');
                });


        });
    </script>
</body>

<!-- Mirrored from altair_html.tzdthemes.com/components_modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jan 2016 18:13:17 GMT -->
</html>