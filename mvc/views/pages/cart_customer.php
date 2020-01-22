<div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
        </header>
    </div>
    <div class="orders view">
        <div class="container">
            <header>
                <h3><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;ĐƠN HÀNG CUSTOMER</h3>
            </header>
            <br/>
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
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data["cart"] as $row_orders):
                                ?>
                                <tr>
                                    <td><?php echo $row_orders['id'] ?></td>
                                    <td><?php echo $row_orders['created_at'] ?></td>
                                    <td><?php echo number_format($row_orders['total']) ?></td>
                                    <td><a href="../cart/detail/<?=$row_orders["id"]?>" class="btn btn-info">Xem</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>