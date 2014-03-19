<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.jqzoom-core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/homejs/jquery.cslider.js"></script>
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
        jQuery('#carousel').elastislide();

        jQuery('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens: true,
            preloadImages: false,
            alwaysOn: false
        });
    });
</script>
<?php foreach ($data_detail as $value)
     ?>
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
                    <a href="<?php echo base_url(); ?>template/uploads/29672_250008_64788.jpg" class="jqzoom" rel='gal1'  title="triumph">
                    <img class="view" src="<?php echo base_url(); ?>template/uploads/29672_250008_64788.jpg" alt=""  title="triumph"/>
                </a>
                <div class="clear"></div>
                <div id="sliderthumb">
                    <ul  id="carousel" class="elastislide-list">
                        <li>
                            <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/30087_255978_64112.jpg',largeimage: './uploads/30087_255978_64112.jpg'}">
                                <img src="uploads/30087_255978_64112.jpg"/></a>
                        </li>
                        <li>
                            <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64037.jpg',largeimage: './uploads/29717_250549_64037.jpg'}">
                                <img src='uploads/29717_250549_64037.jpg'></a>
                        </li>
                        <li>
                            <a href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: './uploads/29717_250549_64038.jpg',largeimage: './uploads/29717_250549_64039.jpg'}">
                                <img src='uploads/29717_250549_64038.jpg'></a>
                        </li>
                    </ul>
                </div>
            </div>
            <section id="product_content">
                <h1><?php echo $value->name ?></h1>
                <header class="longer_products">
                    <h6 class="icon_longer_products">Còn hàng</h6>
                </header>
                <div class="subdetail">
<?php echo $value->intro ?>
                </div>

                <div class="price_3">
                    Giá:
                    <span class="new_price"> <?php echo $value->price ?></span>
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
                                <h6 class="title_detail_item">Đặc điểm nổi bật</h6>
                                <ul>
                                    <li>
<?php echo $value->hightlight ?> 
                                    </li>
                                </ul>
                            </div>
                            <div class="detail_item">
                                <h6 class="title_detail_item">Điều kiện sử dụng</h6>
                                <ul>
                                    <li>

<?php echo $value->condition ?>

                                    </li>
                                </ul>
                            </div><!--End .detail_item -->
                            <hr class="line_full"/>
                            <div class="detail_item_post">
                                <header class="title_post_detail">Detail information</header>
                                <p>
<?php echo $value->productinfo ?>
                                </p>
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
<?php $this->load->view('layout/sidebar'); ?>
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