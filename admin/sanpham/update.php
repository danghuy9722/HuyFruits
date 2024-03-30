<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }

    $hinhpath = "../uploads/".$img;
        if (is_file($hinhpath)) {
            $hinh = "<img src='".$hinhpath."' height='100' >";
        }else{
            $hinh = "Không có hình ảnh";
        }
?>

<div class="container">
    <div class="mb-3">
        <h1>Cập nhật sản phẩm</h1>
    </div>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <select class="form-control col-3 form-select-lg mb-3" name="iddm" aria-label="Large select example">
                <option value="0">Tất cả</option>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        if($iddm==$id) $s="selected"; else $s = "";
                        echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tensp" class="form-control" value="<?=$name?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
            <input type="text"  name="giasp" class="form-control" value="<?=$price?>" id="exampleInputPassword1">
        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá mới</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div> -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ảnh</label>
            <input class="form-control" name="hinh" type="file" id="formFile">
            <?=$hinh?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
            <textarea class="form-control" name="mota" value="" id="exampleFormControlTextarea1" rows="3"><?=$mota?></textarea>
        </div>
        <input type="hidden" name="id" class="btn btn-primary" value="<?=$id?>">
        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
        <input type="reset" class="btn btn-secondary" value="Nhập lại">
        <a href="index.php?act=listsp"><button type="button" class="btn btn-info">Danh sách</button></a>
        <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </form>
</div>
