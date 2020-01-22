<div class="slide-animation-container">
<div class="customers view indent">
<div class="container">
<header>
    <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
</header>
<div class="view">
<div class="container">
<header>
    <h3><span class="glyphicon glyphicon-edit"></span> Chỉnh sửa thông tin khách hàng</h3>
</header>
<?php if(isset($_COOKIE["success"])){ ?>
    <div class="alert alert-success font-weight-bold text-center"><?=$_COOKIE["success"]?></div>
<?php } ?>
<form name="editForm" novalidate method="post" action="../home/post_update_customer">
    <?php
    foreach ($data["customer"] as $row):
        ?>
        <div class="customerEdit">
            <div class="row">
                <div class="col-md-12">
                    <br/>
                </div>
            </div>
            <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>"/>
            <div class="row">
                <div class="col-md-2">
                    Họ:
                </div>
                <div class="col-md-10">
                    <input type="text" name="firstName" class="form-control"
                            value="<?php echo $row['first_name'] ?>" required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Tên:
                </div>
                <div class="col-md-10">
                    <input type="text" name="lastName" value="<?php echo $row['last_name'] ?>" class="form-control"
                            required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Giới tính:
                </div>
                <div class="col-md-10">
                    <div class="radio">
                        <label class="radio">
                            <input type="radio" name="gender"
                                    value="Nam" <?php echo ($row['gender'] == 'Nam') ? 'checked' : '' ?>/>
                            Nam
                        </label>
                    </div>
                    <div class="radio">
                        <label class="radio">
                            <input type="radio" name="gender"
                                    value="Nữ" <?php echo ($row['gender'] == 'Nữ') ? 'checked' : '' ?>/>
                            Nữ
                            <br/>
                        </label>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Email:
                </div>
                <div class="col-md-10">
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>"
                            required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Địa chỉ:
                </div>
                <div class="col-md-10">
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>"
                            required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Thành phố:
                </div>
                <div class="col-md-10">
                    <input type="text" name="city" value="<?php echo $row['city'] ?>" class="form-control"
                            required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Bang:
                </div>
                <div class="col-md-10">
                    <input type="text" name="state" value="<?php echo $row['state'] ?>" class="form-control" required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-2">
                    Zip:
                </div>
                <div class="col-md-10">
                    <input type="number" name="zip" class="form-control" value="<?php echo $row['zip'] ?>" required/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" value="<?=$row["id"]?>">
                    <button type="submit" name="update_submit" class="btn btn-primary">
                        Lưu
                    </button>
                    &nbsp;&nbsp;
                    <button class="btn btn-danger"><a href="../home/customer" style="text-underline-mode: none;color: white">Quay lại</a></button>
                </div>
            </div>
            <br/>
        </div>
    <?php
    endforeach;
    ?>
</form>