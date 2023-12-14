<?php
    function loadall_tranghthai(){
        $sql="select * from trangthai order by id asc";
        $listtt=pdo_query($sql);
        return $listtt;
    }
?>