<?php
    if (is_array($sp)) {
        extract($sp);
    }
?>

<div class="container">
    <div class="mb-3">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã sản phẩm</label>
            <input type="text" name="maloai" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tenloai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá cũ</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá mới</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
        <input type="reset" class="btn btn-secondary" value="Nhập lại">
        <a href="index.php?act=listsp"><button type="button" class="btn btn-info">Danh sách</button></a>
        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
