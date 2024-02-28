<div class="container">
    <table class="table">
        <div class="py-4">
            <h1>
                DANH SÁCH DANH MỤC
            </h1>
        </div>
    <thead>
        <tr>
        <th scope="col">Mã loại</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Chức năng</th>
        </tr>
        
    </thead>
    <tbody>
        <?php
            foreach ($listdanhmuc as $dm) {
                extract($dm);
                $suadm = "index.php?act=suadm&id=".$id;
                $xoadm = "index.php?act=xoadm&id=".$id;
                echo '
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>
                        <a href="'.$suadm.'"><input type="button" class="btn btn-success" value="Sửa"></a>
                        <a href="'.$xoadm.'"><input type="button" class="btn btn-danger" value="Xóa"></a>
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
    <a href="index.php?act=adddm"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
</div>
