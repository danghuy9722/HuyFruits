<div class="container">
    <div class="mb-3">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mã sản phẩm</label>
            <input type="text" name="masp" disabled>
        </div>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" name="iddm" aria-label="Large select example">
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tensp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
            <input type="text" name="giasp" class="form-control" id="exampleInputPassword1">
        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá mới</label>
            <input type="text" name="giamoi" class="form-control" id="exampleInputPassword1">
        </div> -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh</label>
            <input class="form-control" name="hinh" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
            <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
        <input type="reset" class="btn btn-secondary" value="Nhập lại">
        <a href="index.php?act=listsp"><button type="button" class="btn btn-info">Danh sách</button></a>
        <br>
        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
