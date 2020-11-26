<?php
include_once "base.php";

$id=$_GET['id'];
// 找出檔案路徑並刪除
$row=find('uplooad',$id);
$path=$row['path'];
unlink($path);

// 刪除資料表中的紀錄
del('upload',$id);
to ('manage.php');

?>