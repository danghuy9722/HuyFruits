<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>
<div class="container">
    <div class="mb-3">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <form action="index.php?act=updatedm" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã loại</label>
            <input type="text" name="maloai" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
            <input type="text" name="tenloai" class="form-control" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
        </div>
        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
        <input type="reset" class="btn btn-secondary" value="Nhập lại">
        <a href="index.php?act=listdm"><button type="button" class="btn btn-info">Danh sách</button></a>
        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
