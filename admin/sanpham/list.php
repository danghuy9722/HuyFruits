<div class="container">
    <table class="table">
        <div class="py-4">
            <h1>
                DANH SÁCH DANH MỤC
            </h1>
        </div>
    <thead>
        <tr>
        <th scope="col">Mã sản phẩm</th>
        <th scope="col">Tên sản phẩm</th>
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
                extract($dm);
                $suasp = "index.php?act=suasp&id=".$id;
                $xoasp = "index.php?act=xoasp&id=".$id;
                echo '
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$img.'</td>
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
