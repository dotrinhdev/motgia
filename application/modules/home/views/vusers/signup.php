
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/validateh5.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $.h5Validate.addPatterns({
            day_vn: /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/
        });
        $("#signup").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $("#signup").submit(function(evt) {
            var x = document.forms["signup"]["pass"].value;
            var y = document.forms["signup"]["re-pass"].value;
            if ($("#signup").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            if (x !== y) {
                alert('Yêu cầu nhập lại mật khẩu!');
                document.getElementById("repass").focus();
                evt.preventDefault();
            }
        });
        $('#pass').live("keyup", function() {
            $('.errorpass').empty();
            if ((this).value.length <= 6) {
                $('.errorpass').append('Bảo mật: Yếu!');
            } else if ((this).value.length > 6 && (this).value.length <= 10) {
                $('.errorpass').append('Bảo mật: Trung bình!');
            } else if ((this).value.length > 10) {
                $('.errorpass').append('<img src="<?php echo base_url() ?>public/icons/ok-icon.png"/>Good!');
            }
        }
        );
        $('#inputmail').on("blur", function() {
            $(this).val(function(i, val) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/cusers/checkmail'); ?>",
                    data: "email=" + val,
                    cache: false,
                    success: function(html) {
                        $('.errormail').empty();
                        $('.errormail').append(html);
                    }
                });
                return val();
            });
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        //More Button
        $('.recaptcha').live("click",function()
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('home/cusers/re_captcha'); ?>",
//                        cache: false,
                        success: function(kq) {
                            $("#capt").html(kq);
                        }
                    });
                    return false;
                });
    });
</script>
<section class="bg_shadow">
    <div class="wrap clearfix">
        <div class="title floatLeft">
            <h6>Đăng ký </h6>
            <span>Tạo tài khoản mới</span>
        </div>
        <div class="clearfix breadcrumbs floatRight">
            <div class="fl" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a title="Trang nhất" href="/" itemprop="url">
                    <span itemprop="title">Trang chủ</span>
                </a> /
            </div>
            <div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="fl">
                <a class="highlight" href="/" title="Kiến thức SEO" itemprop="url">
                    <span itemprop="title">Đăng ký</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="content" class="wrap">
    <section id="primary">
        <header class="title_form">
            <span>Thông tin cá nhân</span>
        </header>
        <form class="form error" id="signup" method="post" action="" name="Form">
            <div> 
                <div ></div>
                <?php
                if (isset($success)) {
                    echo "
                        <label></label>
                        <div style='color:green; line-height:4; 
                        border: 2px solid;
                        border-radius: 5px 5px 5px 5px;
                        padding: 10px; margin-bottom: 20px;' 
                        class='success'><b style='margin-left: -66px'>Thành công!</b> $success </div>
                         ";
                } elseif (isset($error1) || isset($error2) || isset($error3)) {
                    echo "<div style='color:red; line-height:2; 
                        border: 2px solid;
                        border-radius: 5px 5px 5px 5px;
                        padding: 10px;
                        margin-bottom: 20px;' 
                        class='error'><b>Lỗi đăng ký:</b>";
                    if (isset($error1)) {
                        echo '</br><span style="margin-left:88px">- ' . $error1 . '</span>';
                    }
                    if (isset($error4)) {
                        echo '</br><span style="margin-left:88px">- ' . $error4 . '</span>';
                    }
                    if (isset($error2)) {
                        echo '</br><span style="margin-left:88px">- ' . $error2 . '</span>';
                    }
                    if (isset($error3)) {
                        echo '</br><span style="margin-left:88px">- ' . $error3 . '</span>';
                    }
                    echo "</br><span style='margin-left:95px'>Xin vui lòng thử lại!</span></div>";
                }
                ?> 
            </div> 
            <div  class="position">
                <label>Tên <span>*</span></label>
                <input type="text" required name="l_name"/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div class="position">
                <label>Họ<span>*</span></label>
                <input type="text" required="" name="f_name"/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div class="position marginBottom_15">
                <label>Ngày sinh<span>*</span></label>
                <!--<input type="text" id="datePicker" required="" class="h5-day_vn"  name="birthday" placeholder="dd/mm/yyyy" title="dd/mm/yyyy"></p>-->
                <input type="date" required=""  name="birthday" placeholder="dd/mm/yyyy" title="dd/mm/yyyy"
                       style="
                       height: 34px;
                       font: -webkit-small-control;
                       background: #e5e6e6;
                       width: 290px;
                       color: #272727;
                       border: 0 none;
                       border-radius: 3px;
                       "/></p><span class="tooltip">Định dạng: ngày/tháng/năm</span>
                <div class="clearfix"></div>
            </div>
            <div class="marginBottom_15">
                <label>Giới tính<span>*</span></label>
                <div class="select" style="width: auto">
                    <select name="gender">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div>
            <div class="position">
                <label>Điện thoại<span>*</span></label>
                <input type="text" class="h5-phone" name="phone" required=""/>
                <span class="tooltip">Ex: 0123456789,...</span>
            </div>
            <div class="position">
                <label>Địa chỉ<span>*</span></label>
                <input type="text" name="adr" required=""/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div>
                <label>Tỉnh/Thành phố<span>*</span></label>
                <div class="select country" style="width: auto">
                    <select name="province">
                        <option value="">--Chọn--</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="TP HCM">Tp HCM</option>
                        <option value="Phú Yên">Phú Yên</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="An Giang">An Giang</option>
                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                        <option value="Bắc Giang">Bắc Giang</option>
                        <option value="Bắc Kạn">Bắc Kạn</option>
                        <option value="Bạc Liêu">Bạc Liêu</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Bến Tre">Bến Tre</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="Cao Bằng">Cao Bằng</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Đắk Nông">Đắk Nông</option>
                        <option value="Điện Biên">Điện Biên</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="Hà Giang">Hà Giang</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Hòa Bình">Hòa Bình</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Lạng Sơn">Lạng Sơn</option>
                        <option value="Lào Cai">Lào Cai</option>
                        <option value="Long An">Long An</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Ninh Thuận">Ninh Thuận</option>
                        <option value="Phú Thọ">Phú Thọ</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                        <option value="Sơn La">Sơn La</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Thái Nguyên">Thái Bình</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                        <option value="Tiền Giang">Tiền Giang</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Tuyên Quang">Tuyên Quang</option>
                        <option value="Vĩnh Long">Vĩnh Long</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Yên Bái">Yên Bái</option>
                    </select>
                </div>
            </div>

            <div class="title_form">
                <span>Thông tin tài khoản</span>
            </div>
            <div class="position">
                <label>Email<span>*</span></label>
                <input type="email" class="h5-email" name="email" required="" id="inputmail"/>
                <div class="errormail" style="height: 30px;width: 250px;float: right;color: red;margin: -48px -45px 0px 10px;font-weight: bold;text-align: left;"></div>
                <span id ="check"></span>
                <span class="tooltip">Ex: Billgate@microsoft.com,..</span>
            </div>
            <div class="position">
                <label >Mật khẩu<span>*</span></label>
                <input type="password" name="pass" required="" id="pass"/>
                <div class="errorpass" style="height: 30px;width: 150px;float: right;color: red;margin: 8px 58px 0px 0px;font-weight: bold;text-align: left;"></div>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div class="position">
                <label id="lbpass">Gõ lại Mật khẩu<span>*</span></label>
                <input type="password" name="re-pass" value="" required="" id="repass"/>
                <span class="tooltip">Không được để trống</span>
            </div>



            <div class="position">
                <label>Mã xác nhận<span>*</span></label>
                <input type="text" name="captcha" required="" placeholder="Không phân biệt chữ viết Hoa"/>
                <span class="tooltip">Không được để trống</span>
            </div>
            <div>
                <label></label>
                <div style="float: left"><span id="capt"><?php echo $Data; ?></span></div>
                <div><button class="recaptcha" style="border: none; background-color: white"><img src="<?php echo base_url(); ?>public/icons/refresh-icon.png" height="40px" width="40px"/></button></div>
            </div>
            <div class="clearfix"></div>
            <div class="type_checkbox">
                <input type="checkbox" name="check" id="checkbox" value="ok"/>
                <label for="checkbox" style="color:#848282;">Tôi đã đọc và đồng ý <span style="color: #3498db;">Quy đinh</span> của website</label>
            </div>
            <div>
                <input type="submit" value="Đăng ký" name="Add"/>
            </div>
        </form>
    </section><!--End #primary-->
    <?php // $this->load->view('layout/sidebar'); ?>
