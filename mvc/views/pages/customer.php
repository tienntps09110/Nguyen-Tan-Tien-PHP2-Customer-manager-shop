<div class="slide-animation-container">
     <div class="customers view indent">
       <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Danh sách khách hàng</h3>
        </header>
        <div class="row">
            <div class="col-md-10">
                <div class="navbar">
                    <ul class="nav navbar-nav">
                        <li class="toolbaritem active">
                            <a href="../home/customer">
                                <span class="glyphicon glyphicon-th-large"></span> Card View
                            </a>
                        </li>
                        <li class="toolbaritem">
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
        <div class="container">
            <!--begin partial view-->
            <div class="row cardContainer show-hide-animation">
                <?php
                foreach ($data["customer"] as $row){
                ?>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="card" style="height:unset; min-height:100px;">
					   
						<div class="cardHeader">
                            <a href="../cart/customer_cart/<?php echo $row['id'] ?>" class="white">
                                <?php echo $row['first_name']." ".$row['last_name']?>
                                <i class="icon-edit icon-white editIcon"></i></a>
                        </div>
						<div class="cardBody">
							<div class="clearfix">
								<div class="pull-left cardBodyLeft">
									<img src="Content/images/<?php echo $row['gender']?>.png" class="cardImage" />
								</div>
								<div class="pull-left cardBodyRight" >
									<div class="cardBodyContent"><?php echo $row['address']?>
                                    </div>
									<div>
										<a href="../cart/customer_cart/<?php echo $row['id'] ?>" class="btn-link">
                                            <?php echo $data["cart"]->cart_id($row["id"])->rowCount();?>
											<span>Đơn hàng</span>
										</a>
                                        <?php ?>
									</div>
                                    
								</div>
							</div>
                            <hr>
                            <a href="../home/update_customer/<?php echo $row['id'] ?>" class="text-warning">Update</a>
                            <span> | </span>
                            <a href="../home/delete_customer/<?php echo $row['id'] ?>" class="text-danger">Delete</a>
						</div>
					</div>
				</div>
                <?php
                    }
                ?>
			 </div>
            <!-- end partial -->
        </div>
    </div>
   </div>
  </div>