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
<header>
    <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Album</strong>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<div class="jumbotron text-center" style="margin-bottom:0;background-color: #007ee5">
    <h2>Quản lý cửa hàng</h2>
</div>
<a href="index.php?page=add" class="btn-success">Thêm</a>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col">Mô tả</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($sanphams as $key=>$sanpham):?>
        <tr>
            <th scope="row"><?php echo $key+1?></th>
            <td><?php echo $sanpham['tenhang']?></td>
            <td><?php echo $sanpham['loaihang']?></td>
            <td><?php echo $sanpham['gia']?></td>
            <td><?php echo $sanpham['soluong']?></td>
            <td><?php echo $sanpham['ngaytao']?></td>
            <td><?php echo $sanpham['mota']?></td>
            <td><a href="index.php?page=delete&id=<?php echo $sanpham['id'] ?>" onclick="return confirm('Are you sure')" class="btn btn-danger">Delete</a></td>
            <td><a href="index.php?page=edit&id=<?php echo $sanpham['id'] ?>" onclick="return confirm('Are you sure')" class="btn btn-success">Edit</a></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->

    <!-- Copyright -->

</footer>
<!-- Footer -->
<footer class="page-footer font-small mdb-color darken-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

                <!-- Video -->
                <div class="embed-responsive embed-responsive-16by9 mb-4">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                            allowfullscreen></iframe>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Footer -->

</body>
</html>
