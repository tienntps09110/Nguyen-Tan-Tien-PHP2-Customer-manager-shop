<div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
        </header>
    </div>
    <div class="orders view">
        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;DANH SÁCH ĐƠN HÀNG</h3>
            </header>
            <br/>
            <div class="customerEdit">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="navbarText col-sm-2">Filter by Name/Product:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control novalidate"/>
                        </div>
                        <a href="../cart/add_cart" style="color: black;text-underline-style: none">
                            <p class="glyphicon glyphicon-plus"></p> <strong>Thêm đơn hàng</strong>
                        </a>
                    </div>
                </form>
            </div>
            <?php
                if (isset($_COOKIE["success"])) {
                    echo '<div class="alert alert-success text-center font-weight-bold">' . $_COOKIE["success"] . '</div>';
                }
            ?>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <?php foreach ($data["customer"] as $row): ?>
                        <div>
                        <a href="../cart/customer_cart/<?=$row["id"]?>"><h4><strong><?php echo $row['first_name'] . ' ' . $row['last_name'] ?></strong></h4></a>
                        </div>
                        <table class="table table-hover table-striped table-condensed table-bordered ordersTable">
                            <thead>
                            <tr>
                                <th>Mã đơn</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Chi tiết</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cart = $data["cart"]->cart_id($row["id"])->fetchAll();
                            foreach ($cart as $row_orders):
                                ?>
                                <tr>
                                    <td><?php echo $row_orders['id'] ?></td>
                                    <td><?php echo $row_orders['created_at'] ?></td>
                                    <td><?php echo number_format($row_orders['total']) ?></td>
                                    <td><a href="../cart/detail/<?=$row_orders["id"]?>" class="btn btn-info">Xem</a></td>
                                    <td><a href="../cart/delete_cart/<?=$row_orders["id"]?>" class="btn btn-danger">Xóa</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>