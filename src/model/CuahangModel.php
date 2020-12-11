<?php


namespace App\model;


class CuahangModel
{
protected $database;
public function __construct()
{
    $db=new DBConnection();
    $this->database=$db->connect();
}

public function getAll(){
    $sql='SELECT * FROM Cuahang LIMIT 1,15';
    $stmt=$this->database->query($sql);
    return $stmt->fetchAll();
}

public function findCuahangById($id){
    $sql='SELECT * FROM Cuahang WHERE id=:id';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    return $stmt->fetchAll();
}

public function addsanpham($sanpham){
    $sql='INSERT INTO Cuahang(tenhang,loaihang,gia,soluong,ngaytao,mota) VALUES(:tenhang,:loaihang,:gia,:soluong,:ngaytao,:mota)';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(":tenhang",$sanpham->getTenhang());
    $stmt->bindParam(":loaihang",$sanpham->getLoaihang());
    $stmt->bindParam(":gia",$sanpham->getGia());
    $stmt->bindParam(":soluong",$sanpham->getSoluong());
    $stmt->bindParam(":ngaytao",$sanpham->getNgaytao());
    $stmt->bindParam(":mota",$sanpham->getMota());
    $stmt->execute();
    return $stmt->fetchAll();
}

public function editsanpham($newsanpham){
    $sql='UPDATE Cuahang SET tenhang=:tenhang,loaihang=:loaihang,gia=:gia,soluong=:soluong,ngaytao=:ngaytao,mota=:mota WHERE id=:id';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(":tenhang",$newsanpham->getTenhang());
    $stmt->bindParam(":loaihang",$newsanpham->getLoaihang());
    $stmt->bindParam(":gia",$newsanpham->getGia());
    $stmt->bindParam(":soluong",$newsanpham->getSoluong());
    $stmt->bindParam(":ngaytao",$newsanpham->getNgaytao());
    $stmt->bindParam(":mota",$newsanpham->getMota());
    $stmt->bindParam(":id",$newsanpham->getId());
    $stmt->execute();
    return $stmt->fetchAll();

}

public function delete($id){
    $sql='DELETE FROM Cuahang WHERE id=:id';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}

}