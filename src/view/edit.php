<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">tenhang</label>
        <input type="text" name="tenhang" value="<?php echo $sanpham[0]['tenhang'] ?>" class="form-control" id="exampleInputEmail1"  placeholder="Nhập tên hàng">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">loaihang</label>
        <input type="text" name="loaihang" value="<?php echo $sanpham[0]['loaihang'] ?>" class="form-control" id="exampleInputEmail1"  placeholder="Nhập loại hàng">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">gia</label>
        <input type="number" name="gia" value="<?php echo $sanpham[0]['gia'] ?>" class="form-control" id="exampleInputEmail1"  placeholder="Nhập giá">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">soluong</label>
        <input type="number" name="soluong" value="<?php echo $sanpham[0]['soluong'] ?>" class="form-control" id="exampleInputEmail1"  placeholder="Nhập số lượng">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ngaytao</label>
        <input type="text" name="ngaytao" value="<?php echo $sanpham[0]['ngaytao'] ?>" class="form-control" id="exampleInputEmail1"  placeholder="Nhập ngày tạo">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">mota</label>
        <input type="text" name="mota" value="<?php echo $sanpham[0]['mota'] ?>" class="form-control" id="exampleInputEmail1"  placeholder="Nhập mô tả">
    </div>
    <input type="hidden" name="id" value="<?php echo $sanpham[0]['id'] ?>">
    <!--    <button type="submit">Enter</button>-->
    <button type="submit" class="btn btn-outline-success">Xác nhận</button>


</form>
</body>
</html>
