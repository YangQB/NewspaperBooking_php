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
      <title>报刊订阅管理系统-修改密码</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-修改密码</h1>
      <?php 
	      include 'header.php';
		  if(!isset($_SESSION['identity'])||$_SESSION['identity']!="admin"){
			  ?>
                 <script Language="JavaScript">
                    alert("未登录管理员账号，不能进行相关操作！");
                    window.location.href="index.php"; 
				 </script>
			  <?php	
		  }else{
	  ?>
      
      <div>
      <?php
	  
		//取页面传来的值
		$apass   = $_POST["apass"]  ;
		$apass_1 = $_POST["apass_1"];
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
		//提取现有账号信息
		$result_1 = mysql_query("SELECT * FROM admin WHERE AID='$_SESSION[id]' AND APASS='$apass'");
		//操作结果
		if(mysql_num_rows($result_1)<1){
			?>
                 <script Language="JavaScript">
                    alert("原密码输入错误！");
                    window.location.href="adminChangePass.php"; 
				 </script>
			<?php	
		}else{
			$result_2 = mysql_query("UPDATE admin SET APASS='$apass_1' WHERE AID='$_SESSION[id]'");
			if(mysql_affected_rows()>0){
			  ?>
                   <script Language="JavaScript">
                      alert("修改成功！");
                      window.location.href="admin.php"; 
				   </script>
			  <?php	
		    }else{
			  ?>
                   <script Language="JavaScript">
                      alert("修改失败！");
                      window.location.href="adminChangePass.php"; 
				   </script>
			  <?php	
			}
		}
		
        //断开连接
        mysql_close($con);
	  }
	  ?>
      </div>
    </body>
  </html>