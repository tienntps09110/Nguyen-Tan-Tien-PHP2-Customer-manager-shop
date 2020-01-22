<div class="container">
</div>
<div class="orders view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Danh sách đơn hàng</h3>
        </header>
        <div class="container">
            <div class="row">
                <div class="span12">
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
                        foreach ($data as $row) :
                            ?>
                            <tr>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['date_order'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo number_format($row['unit_price']) ?></td>
                                <td><?php echo number_format($row['total']) ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        <tr class="info">
                            <td colspan="4">
                            </td>
                                43
                            <td>
                                <strong><?php echo number_format($sum['sumtotal']) ?></strong>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>