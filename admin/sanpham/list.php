<div class="container">
        <div class="py-4">
            <h1>
                DANH SÁCH SẢN PHẨM
            </h1>
        </div>
        <div class="py-4">
            <form action="index.php?act=listsp" method="post" class="d-flex" role="search">
                <input class="form-control me-2 col-5" name="kyw" type="text" placeholder="Search" aria-label="Search">
                <select class="form-control col-3 form-select-lg mb-3" name="iddm" aria-label="Large select example">
                    <option value="0">Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input class="form-control btn btn-outline-success col-2" type="submit" name="listok" value="OK">
            </form>
        </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Mã sản phẩm</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Hình</th>
        <th scope="col">Giá</th>
        <th scope="col">Lượt xem</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($listsanpham as $sp) {
                extract($sp);
                $suasp = "index.php?act=suasp&id=".$id;
                $xoasp = "index.php?act=xoasp&id=".$id;
                $hinhpath = "../uploads/".$img;

                if (is_file($hinhpath)) {
                    $hinh = "<img src='".$hinhpath."' height='100' >";
                }else{
                    $hinh = "Không có hình ảnh";
                }
                echo '
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$iddm.'</td>
                    <td>'.$hinh.'</td>  
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td>'.$mota.'</td>
                    <td>
                        <a href="'.$suasp.'"><input type="button" class="btn btn-success" value="Sửa"></a>
                        <a href="'.$xoasp.'"><input type="button" class="btn btn-danger" value="Xóa"></a>
                    </td>
                </tr>
                ';
            }
        ?>
        
    </tbody>
    </table>
    <input type="button" class="btn btn-secondary" value="Chọn tất cả">
    <input type="button" class="btn btn-secondary" value="Bỏ chọn tất cả">
    <input type="button" class="btn btn-secondary" value="Xóa các mục đã chọn">
    <a href="index.php?act=addsp"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
</div>
