<div style="margin-left: 300px;">
    <form id="form1" name="form1" method="post"
          action="<?php echo site_url('admin/category_controller/insertCategory'); ?> ">
        Cha:<input type="radio" name="thuocloai" id="cha" value="0" checked/> |
        Con:<input type="radio" name="thuocloai" id="con" value="1"/><br>
        <?php echo "<select name='danhmuc' >"; ?>
        <option value="">Vui lòng chọn</option>
        <?php
        selectCate($data);
        echo '</select>';
        ?><br>
        <br><br>
        Tên danh mục
        <br/>
        <label class="smallInput">
            <input type="text" name="txtcategory" size="28" value=""/>
        </label>
        <br>

        <p class="stdformbutton">
            <button class="btn btn-primary" type="submit" name="ook">Add new</button>
            <button type="reset" class="btn">Reset Form</button>
        </p>
    </form>
</div>