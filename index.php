<?php
require_once __DIR__ . "/vendor/autoload.php";
$cuahangcontroller = new \App\controller\CuahangController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page){
    case 'add':
        $cuahangcontroller->add();
        break;
    case 'delete':
        $cuahangcontroller->delete();
        break;
    case 'edit':
        $cuahangcontroller->edit();
        break;
    default:
        $cuahangcontroller->show();
}

