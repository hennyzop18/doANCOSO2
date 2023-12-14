<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="uploads/".$Thumbnail;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh="nophoto";
        }
?>
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?act=qlsp">Danh sách sản phẩm</a></li>
        <li class="breadcrumb-item"><a href="index.php?act=updatesp">Cập nhật sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật sản phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i
                    class="fas fa-folder-plus"></i> Thêm danh mục</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtinhtrang"><i
                    class="fas fa-folder-plus"></i> Thêm tình trạng</a>
              </div>
            </div>
            <form class="row">
              <div class="form-group col-md-3">
                <label class="control-label">Mã sản phẩm </label>
                <input class="form-control" type="number" name="MaSP" placeholder="" disabled>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="TenSP" value="<?=$TenSP?>">
              </div>


              <div class="form-group  col-md-3">
                <label class="control-label">Số lượng</label>
                <input class="form-control" type="number" name="SoLuong" value="<?=$SoLuong?>">
              </div>
              <div class="form-group col-md-3 ">
              <label for="exampleSelect1" class="control-label">Trạng thái</label>
                <select class="form-control" id="exampleSelect1" name="Trangthai">
                <?php 
                    foreach ($listtt as $trangthai) {
                      extract($trangthai);
                      echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control" id="exampleSelect1" name="DM_ID">
                  <?php 
                    foreach ($listdm as $danhmuc) {
                      extract($danhmuc);
                      if($IDDM==$DM_ID) $s="selected"; else $s="";
                      echo '<option value="'.$DM_ID.'"'.$s.'>'.$TenDM.'</option>';
                      
                    }
                  ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input class="form-control" type="text" name="Gia" value="<?=$Gia?>">
              </div>
              
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <input class="form-control" type="file" name="Hinhanh" id="fileToUpLoad">
                <?=$hinh?>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="MoTa" col="30" rows="10" "><?=$MoTa?></textarea>
              </div>

          </div>
          <input type="hidden" name="MaSP" value="<?=$MaSP?>">
          <button class="btn btn-save" type="submit" name="Capnhat" value="Cập nhật">Cập nhật</button>
          <a class="btn btn-cancel" href="index.php?act=qlsp">Hủy bỏ</a>
        </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
    </form>
  </main>