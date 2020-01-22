<div class="view">
    <div class="container">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <?php if(isset($_COOKIE['danger'])){ ?>
            <div class="alert alert-danger text-center font-weight-bold"><?php echo $_COOKIE["danger"] ?></div>
            <?php }?>
            <form class="form-signin" name="login" method="post" action="../account/postLogin">

                <h1 class="h3 mb-3 font-weight-bold text-primary text-center" style="padding-top: 50px">Đăng nhập</h1>
                <input type="text" name="username" class="form-control" value="<?php if(isset($_COOKIE["user"])) echo $_COOKIE["user"] ?>" placeholder="Tên đăng nhập" required autofocus>
                <p style="padding-top: 10px"></p>
                <input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE["password"])) echo $_COOKIE["password"] ?>" placeholder="Mật khẩu" required>
                <input type="checkbox" name="selector" value="remember" checked> <b>Nhớ</b>
                <div class="mb-3" style="padding-top: 30px">
                    <input type="submit" name="login" class="btn btn-info" value="Đăng nhập"/>
                    <!-- <input type="button" name="register" class="btn btn-info" value="Đăng ký"/> -->
                </div>
            </form>
        </div>
        <div class="col-md-4 alert-info">Tài khoản: admin, tien, tantien
        <br>
        Mật khẩu: 1 
        </div>
    </div>
</div>