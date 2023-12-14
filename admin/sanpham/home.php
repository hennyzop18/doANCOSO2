<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="index.php?act=qlsp"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="index.php?act=qlsp" method="post">
                        <div class="row element-button">
                            <?php
                            echo'
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="index.php?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                                  class="fas fa-file-upload"></i> Tải từ file</a>
                            </div>
              
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                  class="fas fa-print"></i> In dữ liệu</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                                  class="fas fa-copy"></i> Sao chép</a>
                            </div>
              
                            <div class="col-sm-2">
                              <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                  class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm" type="button" href="#" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                          </div>';
                          ?>
                            <input type="text" name="kyw">
                            <select name="DM_ID">
                                <option value="0" selected>Tất cả</option>
                                <?php 
                                    foreach ($listdm as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$DM_ID.'">'.$TenDM.'</option>';
                                    }
                                ?>
                                <input type="submit" name="listLoc" class="btn btn-add btn-sm" value="Lọc">
                            </select>
                          
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Giá tiền</th>
                                    <th>Mô tả</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($danhsachSP as $sanpham ){
                                        extract($sanpham);
                                        $suasp="index.php?act=suasp&MaSP=".$MaSP;
                                        $xoasp="index.php?act=xoasp&MaSP=".$MaSP;
                                        $hinhpath="uploads/".$Thumbnail;
                                        if(is_file($hinhpath)){
                                            $hinh="<img src='".$hinhpath."' height='70'>";
                                        }else{
                                            $hinh="nophoto";
                                        }
                                        echo '<tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>'.$MaSP.'</td>
                                        <td>'.$TenSP.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$SoLuong.'</td>
                                        <td><span class="badge bg-success">'.$id_trth.'</span></td>
                                        <td>'.$Gia.'</td>
                                        <td>'.$MoTa.'</td>
                                        <td><a href="'.$xoasp.'"> <button class="btn btn-primary btn-sm trash" type="button" value="Xóa"
                                                onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                            </button></a>
                                            <a href="'.$suasp.'"><button class="btn btn-primary btn-sm edit" type="button" value="Sửa" id="show-emp" data-toggle="modal"
                          data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                           
                                        </td>
                                    </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

