<?php
    function loadall_tinhtrang(){
        $sql="select * from tinhtrang order by id desc";
        $listtt=pdo_query($sql);
        return $listtt;
    }
?>