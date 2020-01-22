<div class="slide-animation-container">
<div class="customers view indent">
<div class="container">
<header>
    <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
</header>
<div class="view">
    <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-edit"></span> Thêm khách hàng</h3>
            </header>
            <form name="editForm" novalidate method="post" action="../home/post_add_customer">
                <div class="customerEdit">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span></span></h4>
                            <?php
                            if (isset($_COOKIE["success"])) {
                                echo '<div class="alert alert-success text-center font-weight-bold">' . $_COOKIE["success"] . '</div>';
                            }
                            ?>
                            <br/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Họ:
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="firstName" class="form-control" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-2">
                            Tên:
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="lastName" class="form-control" required/>
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
                                    <input type="radio" checked name="gender" value="Nam"/>
                                    Nam
                                </label>
                            </div>
                            <div class="radio">
                                <label class="radio">
                                    <input type="radio" name="gender" value="Nữ"/>
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
                            <input type="email" name="email" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-2">
                            Địa chỉ:
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="address" class="form-control" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-2">
                            Thành phố:
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="city" class="form-control" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-2">
                            Bang:
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="state" class="form-control" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-2">
                            Zip:
                        </div>
                        <div class="col-md-10">
                            <input type="number" name="zip" class="form-control" required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-primary">
                                Thêm mới
                            </button>
                            
                            <!-- <button class="btn btn-danger"><a href="customer.php" style="text-underline-mode: none;color: white">Quay lại</a></button> -->
                        </div>
                    </div>
                    <br/>

                </div>
            </form>
    </div>
</div>