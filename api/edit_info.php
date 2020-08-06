<?php
include_once "../base.php";
// var_dump($_GET);
switch($_GET['do']){
    case "total":
        $total['total']=$_POST['total'];
        $Total->save($total);
    break;
    case "bottom":
        $bottom['bottom']=$_POST['bottom'];
        $Bottom->save($bottom);
    break;
}
to("../admin.php?do=".$_GET['do']);