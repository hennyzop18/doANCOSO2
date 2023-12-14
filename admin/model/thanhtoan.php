<?php

    //  function insert_donhang($id,$id_user,$user,$id_dtbill,$name,$file,$MoTa){
    //      $sql= "insert into sanpham(TenSP, SoLuong, TrangThai, Gia, IDDM, Thumbnail, MoTa) values('$TenSP','$SoLuong','$TrangThai','$Gia','$IDDM','$file','$MoTa')";
    //      pdo_execute($sql);
    //  }
    // function loadall_sanpham($kyw,$IDDM){
    //     $sql="select * from sanpham where 1";
    //     if($kyw!=""){
    //         $sql.=" and TenSP like '%".$kyw."%'";
    //     }
    //     if($IDDM>0){
    //         $sql.=" and IDDM ='".$IDDM."'";
    //     }
    //     $sql.=" order by MaSP desc";
    //     $danhsachSP=pdo_query($sql);
    //     return $danhsachSP;
    // }
    // function loadall_sanpham_home_new(){
    //     $sql="select * from sanpham where 1 order by MaSP desc limit 0,4";
    //     $danhsachSP=pdo_query($sql);
    //     return $danhsachSP;
    // }
    // function loadall_sanpham_home_noibat(){
    //     $sql="select * from sanpham where 1 order by IDDM desc limit 0,10";
    //     $danhsachSP=pdo_query($sql);
    //     return $danhsachSP;
    // }
    // function delete_sanpham($MaSP){
    //     $sql="delete from sanpham where MaSP=".$MaSP;
    //     pdo_execute($sql);
    // }
    // function loadone_sanpham($MaSP){
    //     $sql="select * from sanpham where MaSP=".$MaSP;
    //     $sanpham=pdo_query_one($sql);
    //     return $sanpham;
    // }
    // function update_sanpham($MaSP, $TenSP, $SoLuong, $TrangThai, $Gia, $IDDM, $MoTa, $hinh){
    //     if($hinh!="")
    //         $sql= "update sanpham set  TenSP='".$TenSP."',SoLuong='".$SoLuong."',TrangThai='".$TrangThai."',GiaHienTai='".$Gia."',IDDM='".$IDDM."',MoTa='".$MoTa."',Thumbnail='".$hinh."' where MaSP=".$MaSP;
    //     else
    //         $sql= "update sanpham set  TenSP='".$TenSP."',SoLuong='".$SoLuong."',TrangThai='".$TrangThai."',GiaHienTai='".$Gia."',IDDM='".$IDDM."',MoTa='".$MoTa."' where MaSP=".$MaSP;
    //     pdo_execute($sql);
    // }
   
?>