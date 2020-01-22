<div class="row gridContainer customersTable show-hide-animation" >
    <div class="customers view indent">
        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-user"></span> Danh sách khách hàng</h3>
            </header>
            <div class="row">
                <div class="col-md-10">
                    <div class="navbar">
                        <ul class="nav navbar-nav">
                            <li class="toolbaritem ">
                                <a href="../home/customer">
                                    <span class="glyphicon glyphicon-th-large"></span> Card View
                                </a>
                            </li>
                            <li class="toolbaritem active">
                                <a href="../home/list_customer">
                                    <span class="glyphicon glyphicon-align-justify"></span> List View
                                </a>
                            </li>
                            <li class="toolbaritem">
                                <a href="../home/add_customer">
                                    <span class="glyphicon glyphicon-plus"></span> Thêm khách hàng
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <label class="navbarText col-sm-2">Filter:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="novalidate form-control" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php if(isset($_COOKIE["success"])){ ?>
                <div class="alert alert-success font-weight-bold text-center"><?=$_COOKIE["success"]?></div>
            <?php } ?>
            <?php
            foreach ($data["customer"] as $row) :
            ?>
                <div class="col-md-12">
                    <div>
                        <table class="table table-striped table-condensed" >
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th >Họ tên</th>
                                    <th >Địa chỉ</th>
                                    <th >Đơn hàng</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody class="tab">
                             <tr class="repeat-animation">
                                <td><a href="../cart/customer_cart/<?php echo $row['id']?>"><img src="Content/images/<?php echo $row['gender']?>.png" class="cardImage img-responsive" style="width: 80px;height: 80px;" alt="Customer Image" /></a></td>
                                <td><a href="../cart/customer_cart/<?php echo $row['id']?>">
                                        <?php echo $row['first_name']." ".$row['last_name']?>
                                    </a></td>
                                <td><?php echo $row['address'] .','. $row['city']?></td>
                                <td>
                                    
                                    <a href="../cart/customer_cart/<?php echo $row['id'] ?>" class="btn-link">
                                        <?php echo $data["cart"]->cart_id($row["id"])->rowCount();?>
                                    </a>
                                </td>
                                <td><a href="../home/update_customer/<?php echo $row['id'] ?>" class="btn btn-warning">Update</a></td>
                                <td><a href="../home/delete_customer/<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                             </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>