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
      <title>报刊订阅管理系统-验证注册</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-验证注册</h1>
      <?php include 'header.php'; ?>
      
      <div>
      <?php
	    //连接MYSQL数据库
	    $con = mysql_connect("localhost:3306","root","root");
		
		//判断连接是否成功
        if (!$con){
            die('Could not connect:'.mysql_error());
        }
		//解决中文乱码
		mysql_query("set names UTF8");
		
        //选择将要用到的数据库
        mysql_select_db("newspaperbook", $con);
		
		//提取注册界面的信息
		$uid = $_POST["uid"];
		$upass = $_POST["upass"];
		$uname = $_POST["uname"];
		$uidnum = $_POST["uidnum"];
		$uphone = $_POST["uphone"];
		$uad = $_POST["uad"];
		$did = $_POST["did"];
		//检查用户名是否存在
		$result_1 = mysql_query("SELECT * FROM user WHERE UID='$uid'");
		if(mysql_num_rows($result_1)>0)
		{
			?>
                  <script Language="JavaScript">
                    alert("用户名已存在，请重新输入其他用户名！");
                    window.location.href="register.php"; 
				  </script>
			<?php
		}else{
		  //数据库插入操作
          mysql_query("INSERT INTO user VALUES('$uid','$upass','$uname','$uidnum','$uphone','$uad','$did','admin_1')");
            
          //操作结果
          if(mysql_affected_rows()>0){
		    ?>
                  <script Language="JavaScript">
                    alert("注册成功！");
                    window.location.href="index.php"; 
				  </script>
			<?php
				
		  }else{
		    ?>
                  <script Language="JavaScript">
                    alert("注册出错，请重新注册！");
                    window.location.href="register.php"; 
				  </script>
			<?php
		  }
		}
        //断开连接
        mysql_close($con);
	  ?>
      </div>
    </body>
  </html>