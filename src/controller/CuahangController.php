<?php


namespace App\controller;
use App\model\Cuahang;
use App\model\CuahangModel;

class CuahangController
{
protected $cuahangcontroller;

public function __construct()
{
    $this->cuahangcontroller=new CuahangModel();
}

public function show(){
    $sanphams=$this->cuahangcontroller->getAll();
    include_once "src/view/list.php";
}

public function delete(){
    $id=$_REQUEST['id'];
    $this->cuahangcontroller->delete($id);
    header('location:index.php');
}

public function add(){
    if($_SERVER['REQUEST_METHOD']=='GET'){
        include_once "src/view/add.php";
    }
    else{
        $tenhang=$_REQUEST['tenhang'];
        $loaihang=$_REQUEST['loaihang'];
        $gia=$_REQUEST['gia'];
        $soluong=$_REQUEST['soluong'];
        $ngaytao=$_REQUEST['ngaytao'];
        $mota=$_REQUEST['mota'];
        $sanpham=new Cuahang($tenhang,$loaihang,$gia,$soluong,$ngaytao,$mota);
        $this->cuahangcontroller->addsanpham($sanpham);
        header('location:index.php');
    }
}

public function edit(){
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_REQUEST['id'];
        $sanpham=$this->cuahangcontroller->findCuahangById($id);
        include_once "src/view/edit.php";
    }
    else{
        $id = $_REQUEST['id'];
        $tenhang = $_REQUEST['tenhang'];
        $loaihang = $_REQUEST['loaihang'];
        $gia = $_REQUEST['gia'];
        $soluong=$_REQUEST['soluong'];
        $ngaytao=$_REQUEST['ngaytao'];
        $mota=$_REQUEST['mota'];
        $newSanpham = new Cuahang($tenhang, $loaihang, $gia,$soluong,$ngaytao,$mota);
        $newSanpham->setId($id);
        $this->cuahangcontroller->editsanpham($newSanpham);
        header('location:index.php');
    }
}


}