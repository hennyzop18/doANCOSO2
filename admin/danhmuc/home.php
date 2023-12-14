<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="index.php?act=qldm"><b>Danh sách danh mục</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="index.php?act=adddm" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới danh mục</a>
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
                              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>Mã loại</th>
                                    <th>Tên loại</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($listdm as $danhmuc ){
                                        extract($danhmuc);
                                        $suadm="index.php?act=suadm&DM_ID=".$DM_ID;
                                        $xoadm="index.php?act=xoadm&DM_ID=".$DM_ID;
                                        echo '<tr>
                                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                        <td>'.$DM_ID.'</td>
                                        <td>'.$TenDM.'</td>
                                        <td><a href="'.$xoadm.'"> <button class="btn btn-primary btn-sm trash" type="button" value="Xóa"
                                                onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                            </button></a>
                                            <a href="'.$suadm.'"><button class="btn btn-primary btn-sm edit" type="button" value="Sửa" id="show-emp" data-toggle="modal"
                          data-target="#ModalUP"><i class="fas fa-edit"></i></button></a>
                                           
                                        </td>
                                    </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

