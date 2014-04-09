
<!---hàm validate--->
<style type="text/css">@import "<?php echo base_url(); ?>template/css/datepick.css";</style>
<script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.datepick.js"></script>
<script src="<?php echo base_url(); ?>template/js/jquery.easytabs.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $('#datePicker').datepick({
            defaultDate: '26/08/1992',
            yearRange: '1940:2014',
            maxDate: '2014',
            showTrigger: '<button type="button" class="trigger">' + '<img src="<?php echo base_url(); ?>template/images/calendar-green.gif" alt="Popup"></button>',
            renderer: $.extend({}, $.datepick.defaultRenderer,
                    {picker: $.datepick.defaultRenderer.picker.
                                replace(/\{link:clear\}/, '{button:clear}').
                                replace(/\{link:close\}/, '{button:close}')}),
        });

    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $.h5Validate.addPatterns({
            day_vn: /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/
        });
        $(".form").h5Validate({
            errorClass: "validationError",
            validClass: "validationValid"
        });
        $(".form").submit(function(evt) {
            if ($(".form_info").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            if ($(".form_pass").h5Validate("allValid") === false) {
                evt.preventDefault();
            }
            var x = document.forms["form_pass"]["new_pass"].value;
            var y = document.forms["form_pass"]["re_new_pass"].value;
            if (x !== y) {
                evt.preventDefault();
                document.getElementById("re_new_pass").focus();
                alert('nhap lai mat khau!');
            }
        });
    });
</script>
<section id="content" class="wrap">
    <div id="primary">
        <div id="tab-container" class='tab-container marginBottom_15'>
            <ul class='etabs'>
                <li class='tab active' ><a href="#profile">Thông tin người dùng</a></li>
                <li class='tab'><a href="#products">Quản lý sản phẩm</a></li>
                <li class='tab'><a href="#mail">Thư</a></li>
                <li class='tab'><a href="#monney">Nạp tiền</a></li>
            </ul>
            <div class='panel-container'>
                <div id="profile">
                    <div class="change">
                        <h6 class="title_detail_item">profile <span class="onclick">[ Sửa ]</span> </h6>
                        <table class="detail_profile"> 
                            <tr>
                                <td>Họ và tên</td>
                                <td><?php echo $profile['firstname'] . ' ' . $profile['lastname']; ?></td> 
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td><?php echo ($profile['gender'] == 0) ? 'Nam' : 'Nữ'; ?></td> 
                            </tr>
                            <tr>
                                <td>Ngày sinh</td>
                                <td><?php echo $profile['birthofday']; ?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?php echo $profile['address']; ?></td>
                            </tr>
                            <tr>
                                <td>TelePhone</td>
                                <td><?php echo $profile['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Tỉnh/Thành phố</td>
                                <td><?php echo $profile['province']; ?>,  Viet Nam</td>
                            </tr>

                        </table><!--End detail_profile -->

                        <form class="form change_open" id="form_info" method="post" name="form_info" action="">
                            <div class="position">
                                <label>Họ<span>*</span></label>
                                <input type="text" required="" name="first_name" value="<?php echo $profile['firstname']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Tên<span>*</span></label>
                                <input type="text" required="" name="last_name" value="<?php echo $profile['lastname']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Ngày sinh<span>*</span></label>
                                <p><input type="text" id="datePicker" required="" class="h5-day_vn"  name="birthday" value="<?php echo $profile['birthofday']; ?>" placeholder="dd/mm/yyyy" title="dd/mm/yyyy"></p>
                                <span class="tooltip">Định dạng: ngày/tháng/năm</span>
                            </div>
                            <div class="radio">
                                <label>Giới tính<span>*</span></label>
                                <input type="radio" name="gender" id="1" <?php if ($profile['gender'] == 0) echo 'checked'; ?> value="0"/><span>Nam</span>
                                <input type="radio" name="gender" id="2" <?php if ($profile['gender'] == 1) echo 'checked'; ?> value="1"/><span> Nữ</span>
                            </div>
                            <div>
                                <label>Điện thoại<span>*</span></label>
                                <input type="text" class="h5-phone" name="phone" required="" value="<?php echo $profile['phone']; ?>"/>
                                <span class="tooltip">Phải điền số</span>
                            </div>
                            <div>
                                <label>Địa chỉ<span>*</span></label>
                                <input type="text" required="" name="address" value="<?php echo $profile['address']; ?>"/>
                                <span class="tooltip">Không được để trống</span>
                            </div>
                            <div>
                                <label>Tỉnh/Thành phố<span>*</span></label>
                                <div class="select width70">
                                    <select required="" name="province" >
                                        <option value="">--Chọn--</option>
                                        <?php
                                        $arr = array(
                                            0 => 'Hà Nội', 1 => 'TP HCM', 2 => 'Cần Thơ', 3 => 'Đà Nẵng', 4 => 'Hải Phòng',
                                            5 => 'An Giang', 6 => 'Bà Rịa - Vũng Tàu', 7 => 'Bắc Giang', 8 => 'Bắc Kạn',
                                            9 => 'Bạc Liêu', 10 => 'Bắc Ninh', 11 => 'Bến Tre', 12 => 'Bình Định',
                                            13 => 'Bình Dương', 14 => 'Bình Phước', 15 => 'Bình Thuận', 16 => 'Cà Mau',
                                            17 => 'Cao Bằng', 18 => 'Đắk Lắk', 19 => 'Đắk Nông', 20 => 'Điện Biên',
                                            21 => 'Đồng Nai', 22 => 'Đồng Tháp', 23 => 'Gia Lai', 24 => 'Hà Giang',
                                            25 => 'Hà Nam', 26 => 'Hà Tĩnh', 27 => 'Hải Dương', 28 => 'Hậu Giang',
                                            29 => 'Hòa Bình', 30 => 'Hưng Yên', 31 => 'Khánh Hòa', 32 => 'Kiên Giang',
                                            33 => 'Kon Tum', 34 => 'Lai Châu', 35 => 'Lâm Đồng', 36 => 'Lạng Sơn',
                                            37 => 'Lào Cai', 38 => 'Long An', 39 => 'Nam Định', 40 => 'Nghệ An',
                                            41 => 'Ninh Bình', 42 => 'Ninh Thuận', 43 => 'Phú Thọ', 44 => 'Quảng Bình',
                                            45 => 'Quảng Nam', 46 => 'Quảng Ngãi', 47 => 'Quảng Ninh', 48 => 'Quảng Trị',
                                            49 => 'Sóc Trăng', 50 => 'Sơn La', 51 => 'Tây Ninh', 52 => 'Thái Bình',
                                            53 => 'Thái Nguyên', 54 => 'Thanh Hóa', 55 => 'Thừa Thiên Huế', 56 => 'Tiền Giang',
                                            57 => 'Trà Vinh', 58 => 'Tuyên Quang', 59 => 'Vĩnh Long', 60 => 'Vĩnh Phúc',
                                            61 => 'Yên Bái', 62 => 'Phú Yên'
                                        );
                                        for ($i = 0; $i < 62; $i++) {
                                            if ($arr[$i] == $profile['province'])
                                                echo '<option value="' . $arr[$i] . '" selected="selected">' . $arr[$i] . '</option>';
                                            else
                                                echo '<option value="' . $arr[$i] . '">' . $arr[$i] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label></label>
                                <input type="submit" id="save_info" name="save_info" value="SAVE"/>
                                <button class="btn" style="margin-left: 20px;">CANCEL</button>
                            </div>
                        </form>
                    </div>

                    <div class="change">
                        <h6 class="title_detail_item">Account<span class="onclick">[ Sửa ]</span> </h6>
                        <table class="detail_profile"> 
                            <tr>
                                <td>Email</td>
                                <td><?php echo $info['email']; ?></td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>......</td>
                            </tr>
                        </table><!--End detail_profile -->

                        <form class="form change_open" action="" method="post" name="form_pass" id="form_pass">
                            <div>
                                <label>Mật khẩu cũ<span>*</span></label>
                                <input type="password" required="" name="old_pass" id="old_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>
                            <div>
                                <label>Mật khẩu mới<span>*</span></label>
                                <input type="password" required="" name="new_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>
                            <div>
                                <label>Nhập lại mật khẩu mới<span>*</span></label>
                                <input type="password" required="" name="re_new_pass"/>
                                <span class="tooltip">không được để trống</span>
                            </div>

                            <div>
                                <label></label>
                                <input type="submit" id="save_pass" name="save_pass" value="SAVE"/>
                                <button class="btn" style="margin-left: 20px;">CANCEL</button>
                            </div>
                        </form>
                    </div><!--end change-->


                </div> <!--End #profile-->

                <div id="products">
                    <h6 class="title_detail_item">order</h6>

                    <table class="oder_table">

                        <?php
                        if (isset($product) && count($product)) {
                            echo '
                        <tr>
                            <th>#</th>
                            <th>Hình</th>
                            <th>Ngày đăng</th>
                            <th>Tên sản phẩm</th>
                            <th>Ngày hết hạn</th>
                        </tr>';
                            foreach ($product as $value => $pro) {
                                $img = json_decode($pro->images);
                                ?>
                                <tr>
                                    <td><?php
                                        for ($i = $paging['start']; $i < $paging['start'] + $paging['display']; $i++)
                                            echo $i;
                                        ?></td>
                                    <td><a href="#"><img src="<?php echo base_url() . $img[0]; ?>" alt="<?php echo $pro->name; ?>" height="50" width="50"/></a></td>
                                    <td>12/12/2014</td>
                                    <td><a href="#"><?php echo $pro->name; ?></a></td>
                                    <td><?php echo $pro->date_expiration; ?></td>
                                    <td class="update">
                                        <ul>
                                            <li><a href="#">Gia hạn</a></li>
                                            <li><a href="#">Sửa</a></li>
                                            <li><a href="#">Xóa</a></li>
                                        </ul>

                                    </td>

                                </tr>
                                <?php
                            }
                        }
                        else
                            echo 'Không có nội dung hiển thị';
                        ?>

                    </table>
                    <section class="pagination">
                        <div>
                            <?php
                            if ($paging['num_page'] > 1 && isset($product) && count($product)) {//neu can hien thi so trang
                                $first = 1;
                                $last = $paging['num_page'];
                                $prev = $paging['page'] - 1;
                                $next = $paging['page'] + 1;
                                $curent = ($paging['start'] / $paging['display']) + 1;
                                if ($curent != 1) {// neu la trang dau tien thi khong co nut prev
                                    echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $first . '#products">first</a>';
                                    echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $prev . '#products">prev</a>';
                                    if($curent>=6){
                                    echo '<span style="background=white; ">.....</span>';
                                    }
                                }
                                //hien thi so trang
                                for ($i = 1; $i <= $paging['num_page']; $i++) {

                                    if ($last > 9) {//neu tong so trang lon hon 9
                                        $total = $last;
                                        if ($curent <= 5) {
                                            if ($curent != $i)
                                                echo'<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $i . '#products">' . $i . '</a>';
                                            else
                                                echo'<span class="active">' . $i . '</span>';
                                            if ($i == 9)
                                                break;
                                        }
                                        elseif ($curent >= 6 && $curent <= ($total - 5)) {
                                            if ($i >= ($curent - 4) && $i <= $curent + 4) {
                                                if ($curent != $i)
                                                    echo'<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $i . '#products">' . $i . '</a>';
                                                else
                                                    echo'<span class="active">' . $i . '</span>';
                                                if ($i == $curent + 4)
                                                    break;
                                            }
                                        }
                                        elseif ($curent >= ($total - 4)) {
                                            if ($i >= ($total - 8)) {
                                                if ($curent != $i)
                                                    echo'<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $i . '#products">' . $i . '</a>';
                                                else
                                                    echo'<span class="active">' . $i . '</span>';
                                            }
                                        }
                                    }
                                    else {
                                        ////////
                                        if ($curent != $i)
                                            echo'<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $i . '#products">' . $i . '</a>';
                                        else
                                            echo'<span class="active">' . $i . '</span>';
                                    }
                                }
                                if ($curent != $paging['num_page']) {// neu la trang cuoi cung thi khong co nut next
                                    if($curent<=($total-5))
                                    echo '<span style="background=white; ">.....</span>';
                                    echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $next . '#products">next</a>';
                                    echo '<a href="' . base_url() . 'index.php/home/cusers/profile?page=' . $last . '#products">last</a>';
                                }
                            }
                            ?>


<!--                            <span class="active">1</span>-->
                            <!--<a href="#">3</a>-->

                        </div>
                    </section><!-- #End pagination-->    


                </div><!--End #products-->
                <div id="mail">
                    <h6 class="title_detail_item">Newsletters</h6>
                    <div class="content_3 clearfix">
                        <div class="col_2 detail_content_3">
                            <form id="formSearch_mss" class="clearfix">
                                <input type="text" class="txt-search" placeholder="search">
                                <input type="button" class="btnsearch" >
                            </form>
                            <ul class="scroll border_left">
                                <li class="active">
                                    <div class="listitem clearfix">
                                        <span class="del_2">xóa</span>
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <span class="del_2">xóa</span>
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <figure class="img_post">
                                            <img src="uploads/1076505_100003738868761_2002716988_q.jpg" alt="img-hot"/>
                                        </figure>
                                        <div class="listitem_ct">
                                            <span class="name_user">Vu Tuan</span>
                                            <span class="title_post">Produc:Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col_2 detail_content_3">
                            <ul class="scroll scroll_2">
                                <li>
                                    <div class="listitem clearfix">
                                        <span class="del_3">xóa</span>
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                                <li>
                                    <div class="listitem clearfix">
                                        <a href="#" class="name_user">Vu Tuan</a>
                                        <p>
                                            Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet , Produc:Lorem ipsum dolor sit amet ,
                                            Produc:Lorem ipsum dolor sit amet
                                        </p>
                                        <time>12/12/2013</time>
                                    </div>
                                </li>
                            </ul>
                            <div class="post_content">
                                <div>
                                    <textarea></textarea>       
                                </div>
                                <div>
                                    <button class="btn">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--End #mail-->
                <div id="monney">
                    <p>
                        sdfsdf nạp tiền
                    </p>
                </div>
            </div>
        </div> <!--End #tabs-->
    </div><!-- End Primary -->