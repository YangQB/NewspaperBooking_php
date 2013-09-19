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
      <title>报刊订阅管理系统-删除用户</title>
    </head>
    
    <body>
      <h1>报刊订阅管理系统-删除用户</h1>
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
	    //连接MYSQL数据库
	    $con = mysql_connect("localhost:3306","root","root");
		//判断连接是否成功
        if (!$con){
            die('Could not connect:'.mysql_error());
        }
        //选择将要用到的数据库
        mysql_select_db("newspaperbook", $con);
		//提取需要删除的用户账号
		$uid= $_POST["choise"];
		$result_1 = mysql_query("SELECT * FROM user WHERE UID='$uid'");
		if(mysql_num_rows($result_1)<1){
			?>
                 <script Language="JavaScript">
                    alert("找不到需要删除的用户！");
                    window.location.href="adminDelUser.php"; 
				 </script>
			<?php	
		}else{
			$result_2 = mysql_query("DELETE FROM user WHERE UID='$uid'");
			if(mysql_affected_rows()<1){
			  ?>
                 <script Language="JavaScript">
                    alert("用户删除失败！");
                    window.location.href="adminDelUser.php"; 
				 </script>
			  <?php	
		    }else{
			  ?>
                 <script Language="JavaScript">
                    alert("用户删除成功！");
                    window.location.href="admin.php"; 
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