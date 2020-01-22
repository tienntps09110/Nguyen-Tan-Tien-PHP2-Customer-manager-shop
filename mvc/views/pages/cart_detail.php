<div class="container">
</div>
<div class="orders view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Chi tiết đơn hàng</h3>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php
                    foreach ($data["cart"] as $row){
                        foreach($data["customer"]->customer_id($row["id_customer"])->fetchAll() as $row3){
                ?>
                    <div>
                        <h4>Đơn hàng của : <a href="update_customer.php?id_customer="><i class="icon-edit editIcon"><?=$row3["first_name"] ." " .$row3["last_name"] ?></i></a></h4>
                        <h5>Địa chỉ: <?=$row3["address"].", " .$row3["city"]?></h5> 
                        <h5>Mã đơn hàng: <?=$row["id"]?></h5> 
                    </div>
                    <?php } ?>
                    <table class="table table-hover table-striped table-condensed table-bordered ordersTable">
                        <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Ngày đặt hàng</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($data["cart_detail"]-> cartDetail_id($row["id"])->fetchAll() as $row1){
                                foreach ($data["product"]->product_id($row1["id_product"])->fetchAll() as $row2){
                        ?>
                                    <tr>
                                        <td><?php echo $row2['name'] ?></td>
                                        <td><?php echo $row['created_at'] ?></td>
                                        <td><?php echo $row1['total'] ?></td>
                                        <td><?php echo number_format($row2['price']) ?> đ</td>
                                        <td><?php echo number_format($row1['total']*$row2["price"]) ?> đ</td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                        <tr class="info">
                            <td colspan="4">
                            </td>
                            <td>
                                <p class="text-danger font-weight-bold"><?php echo number_format($row["total"]) ?> đ</p>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>