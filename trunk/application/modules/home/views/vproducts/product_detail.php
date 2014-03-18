<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product_detail</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/homecss/style.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/modernizr.custom.28468.js"></script><!-- Slideshow -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/validateh5.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.cslider.js"></script><!-- Slideshow -->

        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.jcarousel.min.js"></script>
        <script src="<?php echo base_url(); ?>public/homejs/jquery.hashchange.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.jqzoom-core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/modernizr.custom.17475.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.elastislide.js"></script>
        <script type="text/javascript">

            jQuery(document).ready(function() {
                //
                jQuery('#da-slider').cslider({
                    autoplay: true,
                    bgincrement: 450
                });
                //
                $(".form").h5Validate({
                    errorClass: "validationError",
                    validClass: "validationValid"
                });

                // Prevent form submission when errors
                $(".form").submit(function(evt) {
                    if ($(".form").h5Validate("allValid") === false) {
                        evt.preventDefault();
                    }
                });
                jQuery('#carousel').elastislide({
                    autoplay:true
                });

                jQuery('.jqzoom').jqzoom({
                    zoomType: 'standard',
                    lens: true,
                    preloadImages: false,
                    alwaysOn: false
                   
                });

                $('#tab-container').easytabs();

            });
        </script>			
    </head>
    <body>	
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <section class="bg_back">
            <header class="top_Nav wrap clearfix">
                <ul class="Top_menu floatLeft">
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul><!--End .Top_menu-->
                <ul class="user clearfix floatRight">
                    <li><a href="#">Đăng tin</a></li>
                    <li><a href="#">Đăng nhập</a>
                        <div class="detail-login">
                            <form class="form clearfix">
                                <div class="gmail">
                                    <input type="email" placeholder="Abc@gmail.com" required/>
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Mật Khẩu" required/>
                                </div>
                                <div class="send">
                                    <input type="submit" value="Đăng Nhập"/>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="price_user">
                        <span>100000 VND</span>
                    </li>
                    <li>
                        <a href="#" class="headerTinymanPhoto">
                            <img src="<?php echo base_url(); ?>template/uploads/1076505_100003738868761_2002716988_q.jpg" alt="user"/>
                            <span class="headerTinymanName">Hai Le</span>
                        </a>
                        <div class="detail_user">
                            <ul>
                                <li><h6 class="welcome"> Hai Le</h6></li>
                                <li><a href="">Profile</a></li>
                                <li><button id="logout">Đăng xuất</button></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </header><!--End .top_Nav-->
        </section><!--End .bg_back-->

        <section class="logo_formSearch">
            <div class="wrap clearfix">
                <a href="#" id="logo" class="floatLeft"><img src="<?php echo base_url(); ?>template/uploads/logo.png" alt=""/></a>
                <form id="search" >
                    <input type="text" placeholder="search" class="txt-search"/>
                    <input type="button" id="btnSearch" class="btnsearch"/>
                </form>
                <section class="cart">
                    <a class="icon_cart"></a>
                    <span>0</span>

                </section>
            </div>
        </section><!--End .logo_formSearch-->

        <nav id="navigation">
            <ul class="wrap clearfix lever1">
                <li><a href="#">Home</a></li>
                <li><a href="#">man  </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Bags & Purses</a></li>
                            <li> <a href="#">Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">woman </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">kids </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">fashion </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">new </a></li>
                <li><a href="#">sale </a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">new</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">Sweatshirts</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>

                <li><a href="#">Bags & Purses</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
                <li><a href="#">new</a>
                    <div class="sub_menu">
                        <ul>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Shoes</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags & Purses</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats</a></li>
                                        <li> <a href="#">Beauty</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Bags & Purses</a>
                                <div class="sub_menu_2">
                                    <ul>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>
                                        <li><a href="#">Dresses 2</a></li>
                                        <li><a href="#">Shirts 3</a></li>
                                        <li><a href="#">Shoes 4</a></li>
                                        <li><a href="#">Bags & Purses 5</a></li>
                                        <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                                        <li> <a href="#">Jackets & Coats 6</a></li>
                                        <li> <a href="#">Beauty 7</a></li>

                                    </ul>
                                </div>
                            </li>

                            <li> <a href="#">Hoodies & Sweatshirts Hoodies & Sweatshirts</a></li>
                            <li> <a href="#">Jackets & Coats</a></li>
                            <li> <a href="#">Beauty</a></li>

                        </ul>
                    </div>
                </li>
            </ul><!--End #Navigation-->
        </nav><!--End .navigation-->   

        <section class="bg_shadow">
            <div class="wrap clearfix">
                <div class="title floatLeft">
                    <h6>Chi tiết sản phẩm</h6>
                    <span>Thông tin chi tiết sản phẩm và nhà cung cấp</span>
                </div>
                <div class="clearfix breadcrumbs floatRight">
                    <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a title="Trang nhất" href="/" itemprop="url">
                            <span itemprop="title">Home</span>
                        </a> /
                    </div>
                    <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                        <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                            <span itemprop="title">Product</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="content" class="wrap">

            <section id="primary">
                <section class="product_detail">
                    <div id="product_view">
                        <a href="<?php echo base_url(); ?>template/uploads/29672_250008_64788_zoom.jpg" class="jqzoom" rel='gal1'  title="triumph">
                            <img class="view" src="<?php echo base_url(); ?>template/uploads/29672_250008_64788.jpg" alt=""  title="triumph"/>
                        </a>
                        <div class="clear">                
                        </div>
                        <div id="sliderthumb">
                            <ul  id="carousel" class="elastislide-list">
                                <li><a  class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29672_250008_64788.jpg',largeimage: './uploads/29672_250008_64788_zoom.jpg'}"><img src="uploads/29672_250008_64788.jpg"/></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/30087_255978_64112.jpg',largeimage: './uploads/30087_255978_64112.jpg'}"><img src="uploads/30087_255978_64112.jpg"/></a></li>
                                <li><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64037.jpg',largeimage: './uploads/29717_250549_64037.jpg'}"><img src='uploads/29717_250549_64037.jpg'></a></li>
                            </ul>
                        </div>
                    </div>

                    <section id="product_content">
                        <h1>distracted by the readable content of a page when</h1>
                        <header class="longer_products">
                            <h6 class="icon_longer_products">Còn hàng</h6>
                            <h6 class="">Mã sản phẩm : 9999</h6>
                        </header>
                        <div class="subdetail">
                            Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
                            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum
                            primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean
                        </div>

                        <div class="price_3">
                            Giá:
                            <span class="new_price"> $20</span>
                        </div>

                        <div id="addCart">
                            <form action="" method="POST">
                                <label for="qty">Số lượng</label>
                                <input id="down" type="button" value="<"/>
                                <input id="qty" type="text" value="1"/>
                                <input id="up" type="button" value=">"/>
                                <div>
                                    <input id="btnAdd" type="submit" value="Buy now" />
                                </div>
                            </form>
                        </div>
                        <div class="social_02">
                            <img src="<?php echo base_url(); ?>template/uploads/lienket.jpg"/>
                        </div>
                    </section>
                    <div class="clear"></div>
                    <div id="tab-container" class='tab-container'>
                        <ul class='etabs'>
                            <li class='tab active' ><a href="#tabs1-html">Thông tin sản phẩm</a></li>
                            <li class='tab'><a href="#tabs1-js">Bình luận</a></li>
                            <li class='tab'><a href="#tabs1-css">Nhà cung cấp</a></li>
                        </ul>
                        <div class='panel-container'>
                            <div class="position">
                                <div id="tabs1-html">
                                    <div class="detail_item">
                                        <h6 class="title_detail_item">Highlights</h6>
                                        <ul>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="detail_item">
                                        <h6 class="title_detail_item">Highlights</h6>
                                        <ul>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                            <li>

                                                Wide range of snacks, sides, mains and desserts
                                                Indulge in the signature Rotisserie Chicken served 

                                            </li>
                                        </ul>
                                    </div><!--End .detail_item -->
                                    <hr class="line_full"/>
                                    <div class="detail_item_post">
                                        <header class="title_post_detail">Detail information</header>
                                        <p>
                                            Sating famished diners late into the wee hours of weekends,
                                            Charly T's keep insomniacs and overworked office staff well-fed 
                                            with hassle-free and flavour-rich international fare. 
                                            Take a break from the fastlane with the Mom's Chicken Soup ($8), 
                                            and move on to their famous Rotisserie Chicken (from $14.50 for a 
                                            Quarter Chicken with 2 Sauces and 2 Additions). 
                                        </p>
                                        <figure class="img_center"><img src="<?php echo base_url(); ?>template/uploads/product_1.png"/></figure>
                                        <p>
                                            Sating famished diners late into the wee hours of weekends,
                                            Charly T's keep insomniacs and overworked office staff well-fed 
                                            with hassle-free and flavour-rich international fare. 
                                            Take a break from the fastlane with the Mom's Chicken Soup ($8), 
                                            and move on to their famous Rotisserie Chicken (from $14.50 for a 
                                            Quarter Chicken with 2 Sauces and 2 Additions). 
                                        </p>
                                        <figure class="img_center"><img src="<?php echo base_url(); ?>template/uploads/product_4.png"/></figure>
                                    </div>


                                </div>
                            </div>
                            <div id="tabs1-js">
                                <div class="fb-comments" data-href="http://example.com/comments" data-width="673px" data-numposts="5" data-colorscheme="light"></div>

                            </div>
                            <div id="tabs1-css">
                                <div class="detail_item">
                                    <h6 class="title_detail_item">Thông tin Nhà cung cấp</h6>
                                    <ul>
                                        <li>Address:11 Unity Street, #01-30,Robertson Walk, Singapore 237995</li>
                                        <li>Tel: 6235 6787</li>
                                        <li><a  href="#">Website: 123.com</a></li>
                                    </ul>
                                </div>
                                <div class="detail_item">
                                    <h6 class="title_detail_item">Bản đồ</h6>
                                    <div class="address_maps">
                                        <img src="<?php echo base_url(); ?>template/uploads/maps.png" alt=""/>
                                    </div>
                                </div><!--End .detail_item -->
                                <div class="clear"></div>
                                <div class="detail_item_post clearfix">
                                    <header class="title_post_detail">Gửi góp ý</header>
                                    <form class="form floatLeft">
                                        <div>
                                            <label>Tên<span>*</span></label>
                                            <input id="fullname" name="fullname" type="text" placeholder="Tên liên hệ" value="" size="40" required="">
                                            <span class="tooltip">Không được để trống</span>
                                            </div>
                                        <div>
                                            <label>Số điện thoại<span>*</span></label>
                                            <input id="phone" name="phone" type="text" placeholder="phone" value="" size="11" required>
                                            <span class="tooltip">Không được để trống</span>
                                        </div>
                                        <div>
                                            <label>Email<span>*</span></label>


                                            <input id="email" name="email" type="email" placeholder="acb@gmail.com" value="" size="40" required="">
                                            <span class="tooltip">Không được để trống</span>
                                        </div>
                                        <div>
                                            <label>Góp ý<span>*</span></label>
                                            <textarea id="content" name="content" placeholder="comment tại đây" cols="40" rows="8" required="">

                                            </textarea>
                                            <span class="tooltip">Không được để trống</span>
                                        </div>
                                        <div style="text-align: right;">
                                            <input type="submit" value="send"/>
                                        </div>
                                    </form>
                                    <div  class="floatRight note">
                                        <i>IT is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section><!-- .End product_detail -->

            </section><!--End #primary-->
            <aside id="sidebar">
                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="<?php echo base_url(); ?>template/uploads/product_1.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>
                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="<?php echo base_url(); ?>template/uploads/product_2.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>

                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="<?php echo base_url(); ?>template/uploads/product_3.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>

                <div class="box_item">
                    <a href="#" class="img_box">
                        <img src="<?php echo base_url(); ?>template/uploads/product_4.png" alt="000"/>
                    </a>
                    <h6><a href="#">It is a long established fact that a reader </a></h6>
                    <span class="price">$20</span>
                </div>
            </aside><!--End #sidebar--> 
            <div class="clear"></div>
        </section><!--End #content-->

        <section  class="slide-infomation">
            <ul id="mycarousel" class="jcarousel-skin-tango">
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/1.png" title="" alt="1" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/2.png" title="" alt="2" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/3.png" title="" alt="3" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/1.png" title="" alt="1" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/2.png" title="" alt="2" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/3.png" title="" alt="3" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/1.png" title="" alt="1" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/2.png" title="" alt="2" ></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo base_url(); ?>template/uploads/3.png" title="" alt="3" ></a>
                </li>
            </ul>
        </section> <!-- end .slide-infomation -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/gallery.js"></script>

           <div id="footer" class="bg_back"> 
            <footer class="wrap">
                <div class="col floatLeft">
                    <div class="footerlink">
                        <h2>Giới thiệu</h2>
                        <ul>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has dummy text ever since the ...</li>
                        </ul>
                        <a href="#" class="readmore">Read More</a>
                    </div><!-- .End footerlink-->
                </div><!-- .End col-->
                <div class="col floatLeft">
                    <div class="footerlink">
                        <h2>Liên hệ</h2>
                        <div class="maps_contact">
                            <ul>
                                <li>The Company Name</li>
                                <li><img src="<?php echo base_url(); ?>public/icons/icon_maps.png"/>DC 999 E Street, N.W.. Washington, DC</li>
                                <li><img src="<?php echo base_url(); ?>public/icons/mail.png"/>1800-555-3838</li>
                                <li><img src="<?php echo base_url(); ?>public/icons/phone.png"/>info@yourstore.com</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .End col-->
                <div class="col floatLeft">
                    <div class="footerlink">
                        <h2>Thông tin</h2>
                        <div class="maps_contact">
                            <ul>
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .End col-->
                <div class="col floatLeft">
                    <div class="footerlink">
                        <h2>Thanh toán</h2>
                        <figure class="img_paypal">
                            <img src="<?php echo base_url(); ?>template/uploads/paypal.png" alt="01"/>
                        </figure>
                        <p>It is a long established fact that a reader will be .distracted by the readable content of a page when looking at its layout. </p>
                    </div>
                </div><!-- .End col-->
                <div class="clear"></div>

                <div class="copyright_social">
                    <div class="floatLeft copyright">
                        <p >© Copyright 2013 1price</p>
                    </div>
                    <div class="social floatRight">
                        <a href="#"><img src="<?php echo base_url(); ?>template/uploads/skype.png" alt=""></a>
                        <a href="#"><img src="<?php echo base_url(); ?>template/uploads/ff.png" alt=""></a>
                        <a href="#"><img src="<?php echo base_url(); ?>template/uploads/gg.png" alt=""></a>
                        <a href="#"><img src="<?php echo base_url(); ?>template/uploads/tw.png" alt=""></a>
                    </div><!-- .End social-->
                    <div class="clear"></div>
                </div>
            </footer><!-- .End wrap-->
        </div><!-- #End footer -->
        <script src="<?php echo base_url(); ?>public/homejs/idangerous.swiper-2.0.min.js"></script>
        <script src="<?php echo base_url(); ?>public/homejs/idangerous.swiper.3dflow-2.0.js"></script>
        <script>
            var mySwiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                loop: true,
                //Enable 3D Flow
                tdFlow: {
                    rotate: 30,
                    stretch: 10,
                    depth: 150,
                    modifier: 1,
                    shadows: true
                }
            })
        </script>
    </body>

</html>
