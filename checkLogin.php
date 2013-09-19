<!DOCTYPE HTML>
  <?php 
    header("Content-type:text/html;charset=utf-8");
	session_start(); 
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style/newsp.css" />
      <link rel="Shortcut Icon" type="image/x-icon" href="pics/newsp.png" />
      <title>报刊订阅管理系统-验证登录</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-验证登录</h1>
      <?php include 'header.php'?>
      
      <div>
      <?php
	    //连接MYSQL数据库
	    $con = mysql_connect("localhost:3306","root","root");
		//判断连接是否成功
        if (!$con){
            die('Could not connect:'.mysql_error());
        }
        //选择将要用到的数据库
        mysql_select_db("newspaperbook", $con);
		//提取登陆界面的信息
		$id = $_POST["id"];
		$pass = $_POST["pass"];
		$identity = $_POST["identity"];
		
		if($identity==="user"){
		
            //数据库操作
            $result = mysql_query("SELECT * FROM user WHERE UID='$id' AND UPASS='$pass'");
            
            //操作结果
            if(mysql_fetch_array($result)){
				$_SESSION['id']=$id;
				$_SESSION['pass']=$pass;
				$_SESSION['identity']=$identity;
				?>
                  <script Language="JavaScript">
                    alert("登录成功！");
                    window.location.href="user.php"; 
				  </script>
				<?php
				
			}
		    else{
				
				?>
                  <script Language="JavaScript">
                    alert("用户账号，用户密码或用户身份输入错误，请重新登录！");
                    window.location.href="login.php"; 
				  </script>
				<?php
		    }
		
		}
		else if($identity=="admin"){
		
            //数据库操作
            $result = mysql_query("SELECT * FROM admin WHERE AID='$id' AND APASS='$pass'");
             //操作结果
            if(mysql_fetch_array($result)){
				$_SESSION['id']=$id;
				$_SESSION['pass']=$pass;
				$_SESSION['identity']=$identity;
				?>
                  <script Language="JavaScript">
                    alert("登录成功！");
                    window.location.href="admin.php"; 
				  </script>
				<?php				
			}
		    else{
				
				?>
                  <script Language="JavaScript">
                    alert("用户账号，用户密码或用户身份输入错误，请重新登录！");
                    window.location.href="index.php"; 
				  </script>
				<?php
		    }
		
		}
		else{
			?>
                <script Language="JavaScript">
                  alert("登录出错，请重新登录！");
                  window.location.href="index.php"; 
			    </script>
		    <?php
	    }
		
        //断开连接
        mysql_close($con);
	  
	  ?>
      </div>
    </body>
  </html>