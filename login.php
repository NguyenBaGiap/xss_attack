<?php
    session_start();
?>
<style type="text/css">
    .login {
        width: 1000px;
        margin: 0px auto;
        padding: 0px;
    }
    .login form {
        display: block;
        width: 600px;
    }
    .login .heading {
        background: blue;
        height: 40px;
    }
    .heading p {
        text-align: center;
        color: #fff;
        line-height: 40px;
        font-size: 26px;
        font-weight: bold;
    }
    .input {
        padding-top: 20px;
    }
    .input input {
        width: 250px;
        height: 30px;
    }
    .options {
        background: #ccc;
        min-height: 110px;
    }
    form .options .input  span {
        font-weight: bold;
        font-size: 21px;
        float: left;
        width: 200px;
        text-indent: 40px;
    }
    .submit {
        background: #ccc;
        display: block;
        text-align: left;
        text-indent: 50px;
        height: 45px;
    }
    .submit input {
        height: 40px;
        background: blue;
        color: #fff;
        text-align: center;
        line-height: 40px;
    }
</style>
<!-- End style -->


<div class="login">
    <form action="" method="POST">
        <div class="heading">
            <p>
                Login Account
            </p>
        </div>
        <div class="options">
            <div class="input">
				<span>
					Tên đăng nhập:
				</span>
                <input type="text" name="username">
            </div>
            <div class="input">
				<span>
					Mật khẩu:
				</span>
                <input type="password" name="password">
            </div>
        </div>
        <div class="submit">
            <input type="submit" name="login" value="Đăng nhập">
        </div>
    </form>
</div>
<?php
// require 'database.php';
if(isset($_SESSION['userId'])){
    header("Location:index.php");
    die();
}
if (isset($_POST['login'])) {
    #Validate form
    $_SESSION['userId'] = $_POST['username'];
    header("Location:index.php");
}

