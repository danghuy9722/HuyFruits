<div class="container">
    <div class="mb-3">
        <h1>Thêm mới danh mục</h1>
    </div>
    <form action="index.php?act=adddm" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã danh mục</label>
            <input type="text" name="maloai" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
            <input type="text" name="tenloai" class="form-control">
        </div>
        <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
        <input type="reset" class="btn btn-secondary" value="Nhập lại">
        <a href="index.php?act=listdm"><button type="button" class="btn btn-info">Danh sách</button></a>
        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
