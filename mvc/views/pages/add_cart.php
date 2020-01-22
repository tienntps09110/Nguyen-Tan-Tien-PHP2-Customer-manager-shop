<div class="slide-animation-container">
<div class="customers view indent">
<div class="container">
<header>
    <h3><span class="glyphicon glyphicon-user"></span> Hoá đơn</h3>
</header>
<div class="view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-edit"></span> Thêm hoá đơn</h3>
        </header>
        <form name="editForm" novalidate method="post" action="../cart/post_add_cart">
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
                <br/>
                <div class="row">
                    <div class="col-md-2">
                        Chọn khách hàng:
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select class="form-control" name="id_customer">
                                <?php
                                foreach ($data["customer"] as $row) {
                                    ?>
                                    <option value="<?php echo $row["id"]?>"><?php echo $row["first_name"] . ' ' . $row['last_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <br/>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        Tên sản phẩm 1:
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select class="form-control" id="sel1" name="cart1">
                                <option value="0">Chọn sản phẩm</option>
                                <?php foreach($data["product"] as $product){ ?>
                                    <option value="<?=$product["id"]?>"><?=$product["name"]?></option>
                                <?php } ?>
                            </select>
                            <select class="form-control col-1" id="total1" name="total1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-2">
                        Tên sản phẩm 2:
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select class="form-control" id="sel2" name="cart2">
                                <option value="0">Chọn sản phẩm</option>
                                <?php foreach($data["product"] as $product){ ?>
                                    <option value="<?=$product["id"]?>"><?=$product["name"]?></option>
                                <?php } ?>
                            </select>
                            <select class="form-control col-1" id="total2" name="total2">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Tên sản phẩm 3:
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select class="form-control" id="sel3" name="cart3">
                                <option value="0">Chọn sản phẩm</option>
                                <?php foreach($data["product"] as $product){ ?>
                                    <option value="<?=$product["id"]?>"><?=$product["name"]?></option>
                                <?php } ?>
                            </select>
                            <select class="form-control col-1" id="total3" name="total3">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        Tên sản phẩm 4:
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select class="form-control" id="sel4" name="cart4">
                               <option value="0">Chọn sản phẩm</option>
                                <?php foreach($data["product"] as $product){ ?>
                                    <option value="<?=$product["id"]?>"><?=$product["name"]?></option>
                                <?php } ?>
                            </select>
                            <select class="form-control col-1" id="total4" name="total4">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" name="submit_cart" class="btn btn-primary">
                            Thêm
                        </button>
                        &nbsp;&nbsp;
                        <a href="../cart/list_cart" class="btn btn-danger">Quay lại</a>
                    </div>
                </div>
                <br/>

            </div>
        </form>
    </div>
</div>
