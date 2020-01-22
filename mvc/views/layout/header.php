<!DOCTYPE html>
<html>
<head>
<base href="http://localhost/manager/public/">
    <title>Quản lý khách hàng</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Content/bootstrap.css" rel="stylesheet"/>
    <link href="Content/animations.css" rel="stylesheet"/>
    <link href="Content/styles.css" rel="stylesheet"/>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light container" style="background-color: #e3f2fd !important;">
  <a class="navbar-brand" href="../home/customer">Trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php if(isset($_SESSION["user"])){ ?>
      <li class="nav-item active">
        <a class="nav-link" href="../home/customer">Khách hàng</a>
      </li>
      <li class="nav-item" style="margin-left: 30px;">
        <a class="nav-link" href="../cart/list_cart">Đơn hàng</a>
      </li>
      <li class="nav-item" style="margin-left: 30px;">
        <a class="nav-link" href="../home/add_customer">Thêm khách hàng</a>
      </li>
      <li class="nav-item" style="margin-left: 30px;">
        <a class="nav-link" href="../cart/add_cart">Thêm đơn hàng</a>
      </li>
      <li class="nav-item" style="margin-left: 30px;">
      <?php if(isset($_SESSION["user"])){ ?>
        <p  class="nav-link mt-3"><b class="text-danger"><?php echo $_SESSION["user"] ?></b><a href="../account/logout"> (Đăng xuất)</a></p>
      <?php }else{ ?>
        <a class="nav-link" href="../account/login">Đăng nhập</a>
      <?php } ?>
      <?php } ?>
      </li>
    </ul>
  </div>
</nav>