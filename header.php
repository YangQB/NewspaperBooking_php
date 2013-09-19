<div class="top-right">登录状态：
          <?php 
		    if(isset($_SESSION['id']))
                echo $_SESSION['id']."(".$_SESSION['identity'].")";
            else
                echo "未登录";
		  ?>
        </div>
		<ul class="menu">
            <li><a href="index.php">首页Index</a></li>
            <li><a href="user.php">用户User</a>
              <ul>
                <li><a href="userInfo.php">查看/修改信息</a></li>
                <li><a href="userChangePass.php">修改密码</a></li>
                <li><a href="userNewsp.php">查看/订阅报刊</a></li>
                <li><a href="userBooking.php">查看订阅信息</a></li>
              </ul>
            </li>
            <li><a href="admin.php">管理员Admin</a>
              <ul>
                <li><a href="adminDelUser.php">查看/删除用户</a></li>
                <li><a href="adminChangePass.php">修改密码</a></li>
                <li><a href="adminBooking.php">查看订阅信息</a></li>
                <li><a href="adminNewsp.php">查看报刊</a></li>
                <li><a href="adminAddNewsp.php">添加报刊</a></li>
                <li><a href="adminStatistic.php">查看统计信息</a></li>
              </ul>
            </li>
            <li><a href="login.php">登录Login</a></li>
            <li><a href="register.php">注册Register</a></li>
            <li><a href="logout.php">退出Logout</a></li>
          </ul>